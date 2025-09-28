@extends('layouts.app')

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <x-breadcrumb title="Member Rewards" :items="[
            ['url' => '', 'label' => 'Member Rewards'],
        ]"/>
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
                            <input type="month" class="form-control datatable-input" id="created_year_month" placeholder="Year Month" data-col-index="0">
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

