<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Address extends Model implements HasMedia
{
     use SoftDeletes, InteractsWithMedia;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';
    protected $guarded = [];

    protected $appends = [
        'proof',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit(Fit::Contain, 50, 50);
        $this->addMediaConversion('preview')->fit(Fit::Contain, 120, 120);
    }

    public function getProofAttribute()
    {
        $file = $this->getMedia('proof')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function address_type()
    {
        return $this->belongsTo(AddressType::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
