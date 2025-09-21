<?php

namespace App\Http\Controllers;

use App\DataTables\MemberDataTable;
use App\Exports\MemberExport;
use App\Models\Address;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MemberDataTable $dataTable)
    {
        return $dataTable->render('members.index');
    }

    public function export(Request $request)
    {
        $current_date = Carbon::now()->format('dmy');
        return Excel::download(new MemberExport($request->export_status), 'MemberList_'.$current_date.'.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'referral_code' => 'nullable',
            'profile_image' => 'nullable|max:8192|image|mimes:png,jpeg,bmp,gif,svg,jpe,webp,jpg',
            'addresses' => 'required',
            'addresses.*.address_type_id' => 'required|exists:address_types,id',
            'addresses.*.state_id' => 'required|exists:states,id',
            'addresses.*.city_id' => 'required|exists:cities,id',
            'addresses.*.country_id' => 'required|exists:countries,id',
            'addresses.*.postal_code' => 'required',
        ]);

        DB::beginTransaction();

        $member->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'referral_member_id' => $request->referral_member_id ?: NULL,
        ]);

        if (isset($request->profile_image)) {
            $profile_image = $request->profile_image->getRealPath();
            $member->addMedia($profile_image)->toMediaCollection('profile_image');
        }

        foreach ($request->addresses as $address)
        {
            if ($address['id'])
            {
                Address::find($address['id'])->update([
                    'address_type_id' => $address['address_type_id'],
                    'state_id' => $address['state_id'],
                    'city_id' => $address['city_id'],
                    'country_id' => $address['country_id'],
                    'postal_code' => $address['postal_code'],
                ]);
            }
            else
            {
                $member->addresses()->create([
                    'address_type_id' => $address['address_type_id'],
                    'state_id' => $address['state_id'],
                    'city_id' => $address['city_id'],
                    'country_id' => $address['country_id'],
                    'postal_code' => $address['postal_code'],
                ]);
            }
        }

        DB::commit();
        return redirect()->route('members.index')->with('success', trans('messages.update_succ'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
        $member->addresses()->delete();

        return redirect()->route('members.index')->with('success', trans('messages.delete_succ'));
    }
}
