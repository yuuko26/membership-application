<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
     use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promotions';
    protected $guarded = [];

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public const STATUS_SELECT = [
        self::STATUS_INACTIVE => 'Inactive',
        self::STATUS_ACTIVE => 'Active',
    ];

    public function getStatusNameAttribute()
    {
        if (!is_null($this->status)) {
            return Promotion::STATUS_SELECT[$this->status];
        }
    }

    public function rewards()
    {
        return $this->hasMany(PromotionReward::class);
    }

    public function member_rewards()
    {
        return $this->hasMany(MemberPromotionReward::class);
    }

    public function scopeLocalSearch($query)
    {
        $query->when(request()->has('name') && filled(request('name')), function ($q) {
            $q->where('name', 'LIKE', '%' . request('name') . '%');
        });
        $query->when(request()->has('start_date') && filled(request('start_date')), function ($q) {
            $q->where('start_date', request('start_date'));
        });
        $query->when(request()->has('end_date') && filled(request('end_date')), function ($q) {
            $q->where('end_date', request('end_date'));
        });
        $query->when(request()->has('created_year_month') && filled(request('created_year_month')), function ($q) {
            $year_month_arr = explode('-',request()->created_year_month);
            $year = $year_month_arr[0];
            $month = $year_month_arr[1];
            $q->whereYear('created_at',$year)->whereMonth('created_at',$month);
        });
        $query->when(request()->has('promotion_status') && filled(request('promotion_status')), function ($q) {
            $q->where('status', request('promotion_status'));
        });
    }
}
