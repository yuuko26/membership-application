@extends('layouts.app')

@push('livewire-style')
    @livewireStyles
@endpush

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <x-breadcrumb title="Apply New" :items="[
            ['url' => route('members.index'), 'label' => 'Members'],
            ['url' => '', 'label' => 'Apply New'],
        ]"/>
    </div>
    <!-- END BREADCRUMB -->

    <div class="row row-sm">
        <div class="col-lg-12">
            @livewire('members.create')
        </div>
    </div>

@endsection

@push('livewire-script')
    @livewireScripts
@endpush

