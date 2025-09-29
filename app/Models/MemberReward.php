<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberReward extends Model
{
     use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'member_rewards';
    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function sourceable()
    {
        return $this->morphTo();
    }

    public function scopeLocalSearch($query)
    {
        $query->when(request()->has('created_year_month') && filled(request('created_year_month')), function ($q) {
            $year_month_arr = explode('-',request()->created_year_month);
            $year = $year_month_arr[0];
            $month = $year_month_arr[1];
            $q->whereYear('created_at',$year)->whereMonth('created_at',$month);
        });
        $query->when(request()->has('date_start') && filled(request('date_start')), function ($q) {
            $q->whereDate('member_rewards.created_at', '>=', request('date_start'));
        });
        $query->when(request()->has('date_end') && filled(request('date_end')), function ($q) {
            $q->whereDate('member_rewards.created_at', '<=', request('date_end'));
        });
        $query->when(request()->has('member_name') && filled(request('member_name')), function ($q) {
            $q->whereHas('member', function($qq) {
                $qq->where('name', 'LIKE', '%' . request('member_name') . '%');
            });
        });
    }
}
