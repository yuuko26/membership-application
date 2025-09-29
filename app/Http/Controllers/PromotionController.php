<?php

namespace App\Http\Controllers;

use App\DataTables\PromotionDataTable;
use App\Models\Member;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PromotionDataTable $dataTable)
    {
        return $dataTable->render('promotions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date|after:'.now()->format('Y-m-d'),
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:'.implode(',',array_keys(Promotion::STATUS_SELECT)),
            'tiers.*' => 'required',
            'tiers.*.referral_count' => 'required|numeric',
            'tiers.*.amount' => 'required|numeric',
        ], [], [
            'tiers.*' => 'tiers',
            'tiers.*.referral_count' => 'referral count',
            'tiers.*.amount' => 'amount',
        ]);

        DB::beginTransaction();

        $promotion = Promotion::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ]);

        $tiers = $request->input('tiers', []);
        if (!empty($tiers)) {
            $referral_count = array_column($tiers, 'referral_count');
            array_multisort($referral_count, SORT_ASC, $tiers);
        }

        foreach (array_values($tiers) as $key => $tier)
        {
            $promotion->rewards()->create([
                'tier' => $key+1,
                'referral_count' => $tier['referral_count'],
                'amount' => $tier['amount'],
            ]);
        }

        DB::commit();
        return redirect()->route('promotions.index')->with('success', trans('messages.create_succ'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        return view('promotions.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promotion $promotion)
    {
        return view('promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promotion $promotion)
    {
        // check if has member promotion rewards
        if ($promotion->member_rewards()->count() > 0) {
            return redirect()->back()->with('error', trans('messages.has_been_used', ['attribute' => 'Promotion']));
        }

        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date|after:'.now()->format('Y-m-d'),
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:'.implode(',',array_keys(Promotion::STATUS_SELECT)),
            'tiers.*' => 'required',
            'tiers.*.referral_count' => 'required|numeric',
            'tiers.*.amount' => 'required|numeric',
        ], [], [
            'tiers.*' => 'tiers',
            'tiers.*.referral_count' => 'referral count',
            'tiers.*.amount' => 'amount',
        ]);

        DB::beginTransaction();

        $promotion->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ]);

        $promotion->rewards()->delete();

        $tiers = $request->input('tiers', []);
        if (!empty($tiers)) {
            $referral_count = array_column($tiers, 'referral_count');
            array_multisort($referral_count, SORT_ASC, $tiers);
        }

        foreach (array_values($tiers) as $key => $tier)
        {
            $promotion->rewards()->create([
                'tier' => $key+1,
                'referral_count' => $tier['referral_count'],
                'amount' => $tier['amount'],
            ]);
        }

        DB::commit();
        return redirect()->route('promotions.index')->with('success', trans('messages.update_succ'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        // check if has member promotion rewards
        if ($promotion->member_rewards()->count() > 0) {
            return redirect()->back()->with('error', trans('messages.has_been_used', ['attribute' => 'Promotion']));
        }
        $promotion->delete();
        $promotion->rewards()->delete();

        return redirect()->route('promotions.index')->with('success', trans('messages.delete_succ'));
    }
}
