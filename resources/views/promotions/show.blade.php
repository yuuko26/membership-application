@extends('layouts.app')

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <x-breadcrumb title="Promotion Details - {{$promotion->name}}" :items="[
            ['url' => route('promotions.index'), 'label' => 'Promotions'],
            ['url' => '', 'label' => 'Promotion Details'],
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
                                    Created Date
                                </th>
                                <td>
                                    {{ $promotion->created_at->format('d M Y') }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <td>
                                    {{ $promotion->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Start Date
                                </th>
                                <td>
                                    {{ $promotion->start_date ?->format('d M Y') ?? '-' }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    End Date
                                </th>
                                <td>
                                    {{ $promotion->end_date ?->format('d M Y') ?? '-' }}
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
                        Reward Tiers Information
                    </h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tier</th>
                                <th>Referral Number</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($promotion->rewards as $reward)
                                <tr>
                                    <td>{{ $reward->tier }}</td>
                                    <td>{{ $reward->referral_count }}</td>
                                    <td>{{ $reward->amount }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
