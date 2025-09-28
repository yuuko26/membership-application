@extends('layouts.app')

@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <x-breadcrumb title="Edit Promotion - {{$promotion->name}}" :items="[
            ['url' => route('promotions.index'), 'label' => 'Promotions'],
            ['url' => '', 'label' => 'Edit Promotion'],
        ]"/>
    </div>
    <!-- END BREADCRUMB -->

    <div class="row row-sm">
        <div class="col-lg-12">
            <form action="{{ route('promotions.update', $promotion) }}" method="post" id="editForm">
                @method('PUT')
                @csrf
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row mb-3">
                            <div class="form-group col-md-6">
                                <label for="inputName" class="form-label">Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" id="inputName" name="name" value="{{old('name', $promotion->name)}}" placeholder="Name">
                                @error('name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputStartDate" class="form-label">Start Date<span class="text-danger"> *</span></label>
                                <input type="date" class="form-control" id="inputStartDate" name="start_date" value="{{old('start_date', $promotion->start_date->format('Y-m-d'))}}" placeholder="Start Date">
                                @error('start_date') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEndDate" class="form-label">End Date<span class="text-danger"> *</span></label>
                                <input type="date" class="form-control" id="inputEndDate" name="end_date" value="{{old('end_date', $promotion->end_date->format('Y-m-d'))}}" placeholder="End Date">
                                @error('end_date') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputStatus" class="form-label">Status<span class="text-danger"> *</span></label>
                                <select name="status" class="form-select select-status" id="inputStatus">
                                    @foreach(\App\Models\Promotion::STATUS_SELECT as $key => $label)
                                        <option value="{{$key}}" @if($key == old('status', $promotion->status) ) selected @endif>{{$label}}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <h5 class="card-title py-2">
                            Reward Tiers Information
                        </h5>

                        <div id="tiersContainer">
                            @foreach($promotion->rewards as $reward)
                                <div class="tier-row d-flex mb-2 row">
                                    <div class="col-12">
                                        <h5>Tier <span class="tier-label">{{$reward->tier}}</span></h5>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="number" name="tiers[{{$reward->tier-1}}][referral_count]" class="form-control me-2" placeholder="Enter Referral Number" value="{{$reward->referral_count}}">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="number" min="0" step="0.01" name="tiers[{{$reward->tier-1}}][amount]" class="form-control me-2" placeholder="Enter Amount" value="{{$reward->amount}}">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="button" id="addTier" class="btn btn-primary mt-2"><i class="fas fa-plus"></i></button>

                        <div class="col-12 text-end pt-3">
                            <button class="btn btn-primary submitBtn" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $('#editForm').submit(function(){
                $(".submitBtn").attr("disabled", true);
            });

            let index = {{$promotion->rewards->count()}};

            // Add new tier row
            $('#addTier').click(function () {
                let row = `
                    <div class="tier-row d-flex mb-2 row">
                        <div class="col-12">
                            <h5>Tier <span class="tier-label">${index+1}</span></h5>
                        </div>
                        <div class="form-group col-md-5">
                            <input type="number" name="tiers[${index}][referral_count]" class="form-control me-2" placeholder="Enter Referral Number">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="number" min="0" step="0.01" name="tiers[${index}][amount]" class="form-control me-2" placeholder="Enter Amount">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger remove-tier"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                `;
                $('#tiersContainer').append(row);
                index++;
            });

            // Remove tier row
            $(document).on('click', '.remove-tier', function () {
                $(this).closest('.tier-row').remove();
                recalcIndexes();
            });

            function recalcIndexes() {
                $('.tier-row').each(function(index) {
                    // Update the label
                    $(this).find('.tier-label').text((index + 1));

                    // Update all input names inside this row
                    $(this).find('input').each(function() {
                        let name = $(this).attr('name');
                        // Replace tiers[any_number] with tiers[index]
                        name = name.replace(/tiers\[\d+\]/, 'tiers[' + index + ']');
                        $(this).attr('name', name);
                    });
                });
                index = $('#tiersContainer .tier-row').length; // reset next index
            }
        });
    </script>
@endpush
