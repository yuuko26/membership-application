<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromotionReward extends Model
{
     use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promotion_rewards';
    protected $guarded = [];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
