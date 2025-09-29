@extends('layouts.app')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <x-breadcrumb title="Member Details - {{$member->name}}" :items="[
            ['url' => route('members.index'), 'label' => 'Members'],
            ['url' => '', 'label' => 'Member Details'],
        ]"/>
    </div>
    <!-- END BREADCRUMB -->

    <div class="row row-sm">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>
                                    Profile Image
                                </th>
                                <td>
                                    @if($member->profile_image)
                                        <div id="profileGallery">
                                            <a href="{{ $member->profile_image->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $member->profile_image->getUrl('thumb') }}" alt="avatar">
                                            </a>
                                        </div>
                                    @else
                                        {{'-'}}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Apply Date
                                </th>
                                <td>
                                    {{ $member->created_at->format('d M Y') }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <td>
                                    {{ $member->name ?? '-'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Phone
                                </th>
                                <td>
                                    {{ $member->phone ?? '-'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Email
                                </th>
                                <td>
                                    {{ $member->email ?? '-'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Referred By
                                </th>
                                <td>
                                    {{ $member->referred_by?->name ?? '-'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Status
                                </th>
                                <td>
                                    {{ $member->status_name ?? '-'}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title py-2">
                        Address Information
                    </h5>
                    @foreach($member->addresses as $address)
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>
                                        Type
                                    </th>
                                    <td>
                                        {{ $address->address_type?->name ?? '-'}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Address Line 1
                                    </th>
                                    <td>
                                        {{ $address->address_line_1 ?? '-'}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Address Line 2
                                    </th>
                                    <td>
                                        {{ $address->address_line_2 ?? '-'}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        State
                                    </th>
                                    <td>
                                        {{ $address->state?->name ?? '-'}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        City
                                    </th>
                                    <td>
                                        {{ $address->city?->name ?? '-'}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Country
                                    </th>
                                    <td>
                                        {{ $address->country?->name ?? '-'}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Proof
                                    </th>
                                    <td>
                                        @if($address->proof)
                                            @if ($address->proof->mime_type == 'application/pdf')
                                                <a href="{{ $address->proof->getUrl() }}" target="_blank"><i class="fas fa-file"></i> proof_attachment</a>
                                            @else
                                                <a href="{{ str_replace('http:','',$address->proof->getUrl()) }}" target="_blank"><i class="fas fa-file"></i> proof_attachment</a>
                                            @endif
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title py-2">
                        Referral Tree
                    </h5>

                    @if($downlines->isNotEmpty())
                        <div class="accordion scroll-container scroll-y" id="accordionFlushExample">
                            @foreach($downlines as $key => $level_group)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading1">
                                        <button class="accordion-button @if(!$loop->first) collapsed @endif fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$key}}" aria-expanded="true" aria-controls="flush-collapse{{$key}}">
                                            <span class="fw-bold font-size-14">Level {{ $loop->iteration }}</span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{$key}}" class="accordion-collapse collapse @if($loop->first) show @endif" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body" id="accordionFlushItem">
                                            @foreach($level_group as $refer_tree)
                                                <div>
                                                    {{ $refer_tree->member?->name }}
                                                    @if($refer_tree->upline_id != $member->id)
                                                        (by {{ $refer_tree->upline?->name }})
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>Nothing Available here...</p>
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title py-2">
                        Referral Information
                    </h5>
                    <table class="table table-bordered" id="referTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Referral Code</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($member->refer_members as $refer_member)
                                <tr>
                                    <td>
                                        {{ $refer_member->name ?? '-'}}
                                    </td>
                                    <td>
                                        {{ $refer_member->phone ?? '-'}}
                                    </td>
                                    <td>
                                        {{ $refer_member->email ?? '-'}}
                                    </td>
                                    <td>
                                        {{ $refer_member->referral_code ?? '-'}}
                                    </td>
                                    <td>
                                        {{ $refer_member->status_name ?? '-'}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#referTable').DataTable({
                buttons: [],
                "iDisplayLength": 10
            });
        });
    </script>
@endpush
