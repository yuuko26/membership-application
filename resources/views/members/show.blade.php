@extends('layouts.app')

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
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
