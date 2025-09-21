<div>
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                @error('error_message')
                    <div class="alert alert-danger mg-b-0 mb-3" role="alert">
                        <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{$message}}
                    </div>
                @enderror
                <div class="form-group col-md-12">
                    <label for="formFile" class="form-label">Profile Image <small class="text-danger"> *.png,.jpeg,.bmp,.gif,.svg,.jpe,.webp,.jpg only</small></label>
                    <div class="file-upload" style="border-radius:65px;">
                        <input type="file" style="z-index: 2;" wire:model="profile_image" id="inputProfileImage" accept="image/png,image/jpeg,image/bmp,image/gif,image/svg,image/jpe,image/webp,image/jpg">
                        <div class="camera-bg"></div>
                        @isset ($profile_image)
                            <img src="{{ $profile_image->temporaryUrl() }}" class="w-100">
                            <div class="camera-bg"></div>
                        @endisset
                        @empty($profile_image)
                            <i class="fa fa-plus" style="border-radius:5px;"></i>
                        @endempty
                    </div>
                    @error('profile_image') <div class="invalid-feedback d-block">{{ $message }}</div >@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName" class="form-label">Name<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="inputName" wire:model="name" value="{{old('name', '')}}" placeholder="Name">
                    @error('name') <div class="invalid-feedback d-block">{{ $message }}</div >@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone" class="form-label">Phone<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="inputPhone" wire:model="phone" value="{{old('phone', '')}}" placeholder="Phone">
                    @error('phone') <div class="invalid-feedback d-block">{{ $message }}</div >@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail" class="form-label">Email<span class="text-danger"> *</span></label>
                    <input type="email" class="form-control" id="inputEmail" wire:model="email" value="{{old('email', '')}}" placeholder="Email">
                    @error('email') <div class="invalid-feedback d-block">{{ $message }}</div >@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputReferralCode" class="form-label">Referral Code</label>
                    <input type="text" class="form-control" id="inputReferralCode" wire:model="referral_code" value="{{old('referral_code', '')}}" placeholder="Referral Code">
                    @error('referral_code') <div class="invalid-feedback d-block">{{ $message }}</div >@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputStatus" class="form-label">Status<span class="text-danger"> *</span></label>
                    <select wire:model="status" class="form-select select-status" id="inputStatus">
                        @foreach(\App\Models\Member::STATUS_SELECT as $key => $label)
                            <option value="{{$key}}">{{$label}}</option>
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
                Address Information
            </h5>

            <div class="address-container">
                @foreach($addresses as $add_key => $address)
                    @if ($loop->iteration > 1)
                        <hr style="opacity: .15;">
                    @endif

                    <div class="bg-gray-100 p-3">
                        <div class="row mb-3">
                            <div class="col-12 col-md-4 mt-2">
                                <label for="inputAddressType" class="form-label">Address Type<span class="text-danger"> *</span></label>
                                <select wire:model="addresses.{{$add_key}}.address_type_id" class="form-select select-country" id="inputAddressType" data-key="{{ $add_key }}">
                                    <option value="">Select an option</option>
                                    @foreach($address_types as $address_type)
                                        <option value="{{$address_type->id}}">{{ $address_type->name }}</option>
                                    @endforeach
                                </select>
                                @error('addresses.'.$add_key.'.address_type_id')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <label>Address Line 1<span class="text-danger"> *</span></label>
                                <div class="d-flex">
                                    <input type="text" class="form-control datatable-input form-control" data-key="{{ $add_key }}" placeholder="Address Line 1" data-col-index="0" wire:model="addresses.{{$add_key}}.address_line_1">
                                </div>
                                @error('addresses.'.$add_key.'.address_line_1')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <label>Address Line 2</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control datatable-input form-control" data-key="{{ $add_key }}" placeholder="Address Line 2" data-col-index="0" wire:model="addresses.{{$add_key}}.address_line_2">
                                </div>
                                @error('addresses.'.$add_key.'.address_line_2')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <label for="inputState" class="form-label">State<span class="text-danger"> *</span></label>
                                <select wire:model="addresses.{{$add_key}}.state_id" class="form-select select-state" id="inputState" data-key="{{ $add_key }}">
                                    <option value="">Select an option</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                                @error('addresses.'.$add_key.'.state_id')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <label for="inputCity" class="form-label">City<span class="text-danger"> *</span></label>
                                <select wire:model="addresses.{{$add_key}}.city_id" class="form-select select-city" id="inputCity" data-key="{{ $add_key }}">
                                    @isset($cities[$add_key])
                                        @foreach($cities[$add_key] as $city)
                                            @if($loop->first)
                                                <option value="">Select an option</option>
                                            @endif
                                            <option value="{{$city->id}}">{{ $city->name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                                @error('addresses.'.$add_key.'.city_id')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <label for="inputCountry" class="form-label">Country<span class="text-danger"> *</span></label>
                                <select wire:model="addresses.{{$add_key}}.country_id" class="form-select select-country" id="inputCountry" data-key="{{ $add_key }}">
                                    <option value="">Select an option</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @error('addresses.'.$add_key.'.country_id')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <label>Postal Code<span class="text-danger"> *</span></label>
                                <div class="d-flex">
                                    <input type="text" class="form-control datatable-input form-control" data-key="{{ $add_key }}" placeholder="Postal Code" data-col-index="0" wire:model="addresses.{{$add_key}}.postal_code">
                                </div>
                                @error('addresses.'.$add_key.'.postal_code')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            @if(count($addresses) > 1)
                                <div class="col-12 col-md-4 mt-3 text-end">
                                    <label></label>
                                    <br>
                                    <button type="button" class="btn btn-danger btn-lg waves-effect waves-light my-auto" wire:click="removeAddressItem({{$add_key}})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="add-item">
                <button type="button" class="btn btn-outline-primary w-100" wire:click="addAddressItem"><i class="fas fa-plus"></i></button>
            </div>

            <div class="col-12 text-end pt-3">
                <button class="btn btn-primary submitBtn" type="button" wire:click="submit" wire:loading.remove>Submit</button>

                <button class="btn btn-primary submitBtn" type="button" wire:loading disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading..
                </button>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).on('change', '.select-status', function (e) {
            @this.set('status', e.target.value);
        });
        $(document).on('change', '.select-state', function (e) {
            var key = $(this).data('key');
            @this.set('addresses.'+key+'.state_id', e.target.value);
        });
        $(document).on('change', '.select-city', function (e) {
            var key = $(this).data('key');
            @this.set('addresses.'+key+'.city_id', e.target.value);
        });
        $(document).on('change', '.select-country', function (e) {
            var key = $(this).data('key');
            @this.set('addresses.'+key+'.country_id', e.target.value);
        });

        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('message.processed', (message, component) => {
                $(".select2").select2({
                    // placeholder: 'Select an option'
                });
                $(".select2-no-search").select2({
                    minimumResultsForSearch:1/0,
                    // placeholder: 'Select an option'
                });
            })
        });
    </script>
@endpush
