<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddressType extends Model
{
     use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'address_types';
    protected $guarded = [];

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
}
