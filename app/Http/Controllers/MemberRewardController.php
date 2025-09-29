<?php

namespace App\Http\Controllers;

use App\DataTables\MemberRewardDataTable;
use App\Exports\MemberRewardExport;
use App\Jobs\ReferralCalculation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MemberRewardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MemberRewardDataTable $dataTable)
    {
        return $dataTable->render('member-rewards.index');
    }

    public function export(Request $request)
    {
        $current_date = Carbon::now()->format('dmy');
        return Excel::download(new MemberRewardExport($request->export_date_start, $request->export_date_end), 'MemberRewardList_'.$current_date.'.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
