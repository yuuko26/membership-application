<?php

namespace App\Livewire\Members;

use App\Models\Address;
use App\Models\AddressType;
use App\Models\Country;
use App\Models\Member;
use App\Models\State;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    protected $listeners = ['submit' => 'submit'];

    // Initial Data
    public $member;
    public $address_types;
    public $states;
    public $cities = [];
    public $countries;

    // Wire Model
    public $profile_image;
    public $profile_image_uploaded;
    public $name;
    public $phone;
    public $email;
    public $referral_code;
    public $status;
    public $addresses = [];
    public $removed_addresses = [];

    public function mount($member)
    {
        $this->member = $member;
        $this->address_types = AddressType::where('status', AddressType::STATUS_ACTIVE)->get();
        $this->states = State::all();
        $this->countries = Country::all();

        $this->profile_image_uploaded = $member->profile_image ? $member->profile_image->getUrl() : null;
        $this->name = $member->name;
        $this->phone = $member->phone;
        $this->email = $member->email;
        $this->status = $member->status;

        if ($member->addresses->count() > 0)  {
            foreach ($member->addresses as $address) {
                $this->addresses[] = [
                    'id' => $address->id,
                    'address_type_id' => $address->address_type_id,
                    'address_line_1' => $address->address_line_1,
                    'address_line_2' => $address->address_line_2,
                    'state_id' => $address->state_id,
                    'city_id' => $address->city_id,
                    'country_id' => $address->country_id,
                    'postal_code' => $address->postal_code,
                ];
            }
        } else {
            $this->addresses[] = [
                'id' => null,
                'address_type_id' => null,
                'address_line_1' => null,
                'address_line_2' => null,
                'state_id' => null,
                'city_id' => null,
                'country_id' => null,
                'postal_code' => null,
            ];
        }
    }

    public function updatedAddresses($value, $key)
    {
        $arr = explode('.', $key);
        $update_key = $arr[0];
        $update_name = $arr[1];

        if ($update_name == 'state_id') {

            $state = $value ? State::find($value) : NULL;
            $cities = collect();

            if ($state) {
                $cities = $state->cities;
            }
            $this->cities[$update_key] = $cities;
        }
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'referral_code' => 'nullable',
            'profile_image' => 'nullable|max:8192|image|mimes:png,jpeg,bmp,gif,svg,jpe,webp,jpg',
            'addresses' => 'required',
            'addresses.*.address_type_id' => 'required|exists:address_types,id',
            'addresses.*.address_line_1' => 'required',
            'addresses.*.address_line_2' => 'nullable',
            'addresses.*.state_id' => 'required|exists:states,id',
            'addresses.*.city_id' => 'required|exists:cities,id',
            'addresses.*.country_id' => 'required|exists:countries,id',
            'addresses.*.postal_code' => 'required',
            'status' => 'required|in:' . implode(',', array_keys(Member::STATUS_SELECT)),
        ], [], [
            'addresses.*.address_type_id' => 'address type',
            'addresses.*.address_line_1' => 'address line 1',
            'addresses.*.address_line_2' => 'address line 2',
            'addresses.*.state_id' => 'state',
            'addresses.*.city_id' => 'city',
            'addresses.*.country_id' => 'country',
            'addresses.*.postal_code' => 'postal code',
        ]);

        DB::beginTransaction();

        $referral_member = $this->member->referred_by;
        if (!$referral_member && $this->referral_code) {
            $referral_member = Member::where('referral_code', $this->referral_code)->first();
            if (!$referral_member) {
                $this->addError('error_message', 'Invalid Referral Code!');
                return redirect()->back();
            }
        }

        $this->member->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'referral_member_id' => $referral_member?->id ?? null,
            'status' => $this->status,
        ]);

        if (isset($this->profile_image)) {
            $profile_image = $this->profile_image->getRealPath();
            $this->member->addMedia($profile_image)->toMediaCollection('profile_image');
        }

        foreach ($this->addresses as $address)
        {
            if ($address['id'])
            {
                Address::find($address['id'])->update([
                    'address_type_id' => $address['address_type_id'],
                    'address_line_1' => $address['address_line_1'],
                    'address_line_2' => $address['address_line_2'],
                    'state_id' => $address['state_id'],
                    'city_id' => $address['city_id'],
                    'country_id' => $address['country_id'],
                    'postal_code' => $address['postal_code'],
                ]);
            }
            else
            {
                $this->member->addresses()->create([
                    'address_type_id' => $address['address_type_id'],
                    'address_line_1' => $address['address_line_1'],
                    'address_line_2' => $address['address_line_2'],
                    'state_id' => $address['state_id'],
                    'city_id' => $address['city_id'],
                    'country_id' => $address['country_id'],
                    'postal_code' => $address['postal_code'],
                ]);
            }
        }

        DB::commit();
        return redirect()->route('members.index')->with('success', trans('messages.update_succ'));
    }

    public function addAddressItem()
    {
        $this->addresses[] = [
            'id' => null,
            'address_type_id' => null,
            'address_line_1' => null,
            'address_line_2' => null,
            'state_id' => null,
            'city_id' => null,
            'country_id' => null,
            'postal_code' => null,
        ];
    }

    public function removeAddressItem($index)
    {
        if (count($this->addresses) > 1) {
            if ($removed_id = $this->addresses[$index]['id']) {
                $this->removed_addresses[] = $removed_id;
            }

            array_splice($this->addresses, $index, 1);
        }
    }

    public function render()
    {
        return view('livewire.members.edit');
    }
}
