@extends('layouts.app')

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <x-breadcrumb title="Promotions" :items="[
            ['url' => '', 'label' => 'Promotions'],
        ]"/>
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0 d-flex">
                <a href="{{ route('promotions.create') }}">
                    <button type="button" class="btn btn-main-primary me-2">Add New</button>
                </a>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB -->

    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Promotion List</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-1 d-flex">
                        <div class="flex-grow-1 col-auto mb-2">
                            <input type="text" class="form-control datatable-input" id="name" placeholder="Name" data-col-index="2">
                        </div>
                        <div class="flex-grow-1 col-auto mb-2">
                            <input type="date" class="form-control datatable-input" id="start_date" placeholder="Start Date" data-col-index="2">
                        </div>
                        <div class="flex-grow-1 col-auto mb-2">
                            <input type="date" class="form-control datatable-input" id="end_date" placeholder="End Date" data-col-index="2">
                        </div>
                        <div class="flex-grow-1 col-auto mb-2">
                            <select class="form-select datatable-input form-control" id="promotion_status">
                                <option value="">All Status</option>
                                @foreach(\App\Models\Promotion::STATUS_SELECT as $key => $label)
                                    <option value="{{$key}}">{{$label}}</option>
                                @endforeach
                            </select>
                        </div>
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

