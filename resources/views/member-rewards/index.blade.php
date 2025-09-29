@extends('layouts.app')

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <x-breadcrumb title="Member Rewards" :items="[
            ['url' => '', 'label' => 'Member Rewards'],
        ]"/>

        <a href="" class="ms-1" data-bs-toggle="modal" data-bs-target=".export-type">
            <button type="button" class="btn btn-primary waves-effect waves-light">
                <i class="far fa-file-excel"></i>
                Excel
            </button>
        </a>
        <div class="modal fade export-type" role="dialog" aria-hidden="true" id="exportModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h5 class="modal-title" id="exampleModalLabel">Choose Export Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="get" action="{{ route('member-rewards.export') }}" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <div class="modal-body p-3">
                            <div class="row mb-2">
                                <div class="col-12 col-lg-12">
                                    <div class="form-group row d-flex align-items-center">
                                        <div class="col-lg-12">
                                            <label>Created Month :</label>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center">
                                        <div class="col-lg-12">
                                            <div class="input-daterange input-group" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container="#datepicker6">
                                                <input type="date" class="form-control datatable-input" name="export_date_start" placeholder="Start Date" value="{{ Carbon\Carbon::now()->startOfMonth()->format('Y-m-d') }}">
                                                <input type="date" class="form-control datatable-input" name="export_date_end" placeholder="End Date" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="is_trial" value="0">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary submitBtn">Export</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB -->

    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Member Reward List</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-1 d-flex">
                        <div class="flex-grow-1 col-auto mb-2">
                            <div class="input-daterange input-group" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container="#datepicker6">
                                <input type="date" class="form-control datatable-input" id="date_start" name="start" placeholder="Start Date" value="{{ Carbon\Carbon::now()->startOfMonth()->format('Y-m-d') }}">
                                <input type="date" class="form-control datatable-input" id="date_end" name="end" placeholder="End Date" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="flex-grow-1 col-auto mb-2">
                            <input type="date" class="form-control datatable-input" id="date_end" placeholder="Year Month" data-col-index="0">
                        </div>
                        <div class="flex-grow-1 col-auto mb-2">
                            <input type="text" class="form-control datatable-input" id="member_name" placeholder="Member Name" data-col-index="2">
                        </div>
{{--                        <div class="flex-grow-1 col-auto mb-2">--}}
{{--                            <input type="date" class="form-control datatable-input" id="start_date" placeholder="Start Date" data-col-index="2">--}}
{{--                        </div>--}}
{{--                        <div class="flex-grow-1 col-auto mb-2">--}}
{{--                            <input type="date" class="form-control datatable-input" id="end_date" placeholder="End Date" data-col-index="2">--}}
{{--                        </div>--}}
{{--                        <div class="flex-grow-1 col-auto mb-2">--}}
{{--                            <select class="form-select datatable-input form-control" id="promotion_status">--}}
{{--                                <option value="">All Status</option>--}}
{{--                                @foreach(\App\Models\Promotion::STATUS_SELECT as $key => $label)--}}
{{--                                    <option value="{{$key}}">{{$label}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <div class="flex-grow-1 col-auto mb-2 justify-content-end d-flex">
                            <button type="button" id="subBtn" class="btn btn-primary btn-primary--icon" style="margin-right:5px">
                                <i class="fas fa-search"></i>
                            </button>
                            <button type="button" id="clearBtn" class="btn btn-secondary btn-secondary--icon">
                                <i class="fas fa-redo"></i>
                            </button>
                        </div>
                    </div>

                    {{$dataTable->table(['class'=>'table table-checkable dataTable dtr-inline w-100'], false)}}
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    {{$dataTable->scripts()}}
@endpush

