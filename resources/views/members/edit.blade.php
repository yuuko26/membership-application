@extends('layouts.app')

@push('livewire-style')
    @livewireStyles
@endpush

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <x-breadcrumb title="Edit Member - {{$member->name}}" :items="[
            ['url' => route('members.index'), 'label' => 'Members'],
            ['url' => '', 'label' => 'Edit Member'],
        ]"/>
    </div>
    <!-- END BREADCRUMB -->

    <div class="row row-sm">
        <div class="col-lg-12">
            @livewire('members.edit', ['member'=>$member])
        </div>
    </div>

@endsection

@push('livewire-script')
    @livewireScripts
@endpush
