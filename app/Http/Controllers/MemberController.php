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
        //
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
