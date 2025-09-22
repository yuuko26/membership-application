<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Member extends Model implements HasMedia
{
     use SoftDeletes, InteractsWithMedia;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'members';
    protected $guarded = [];

    const STATUS_PENDING = 0;
    const STATUS_APPROVED = 1;
    const STATUS_REJECTED = 2;
    const STATUS_TERMINATED = 3;

    protected $appends = [
        'profile_image',
    ];

    public const STATUS_SELECT = [
        '0' => 'Pending',
        '1' => 'Approved',
        '2' => 'Rejected',
        '3' => 'Terminated',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit(Fit::Contain, 50, 50);
        $this->addMediaConversion('preview')->fit(Fit::Contain, 120, 120);
    }

    public function getProfileImageAttribute()
    {
        $file = $this->getMedia('profile_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }
        return $file;
    }

    public function getStatusNameAttribute()
    {
        if (!is_null($this->status)) {
            return Member::STATUS_SELECT[$this->status];
        }
    }

    public function referred_by()
    {
        return $this->belongsTo(Member::class, 'referral_member_id');
    }

    public function refer_members()
    {
        return $this->hasMany(Member::class, 'referral_member_id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function scopeLocalSearch($query)
    {
        $query->when(request()->has('name') && filled(request('name')), function ($q) {
            $q->where('name', 'LIKE', '%' . request('name') . '%');
        });
        $query->when(request()->has('phone') && filled(request('phone')), function ($q) {
            $q->where('phone', 'LIKE', '%' . request('phone') . '%');
        });
        $query->when(request()->has('email') && filled(request('email')), function ($q) {
            $q->where('email', 'LIKE', '%' . request('email') . '%');
        });
        $query->when(request()->has('referral_code') && filled(request('referral_code')), function ($q) {
            $q->where('referral_code', 'LIKE', '%' . request('referral_code') . '%');
        });
        $query->when(request()->has('created_year_month') && filled(request('created_year_month')), function ($q) {
            $year_month_arr = explode('-',request()->created_year_month);
            $year = $year_month_arr[0];
            $month = $year_month_arr[1];
            $q->whereYear('created_at',$year)->whereMonth('created_at',$month);
        });
        $query->when(request()->has('member_status') && filled(request('member_status')), function ($q) {
            $q->where('status', request('member_status'));
        });
    }
}
