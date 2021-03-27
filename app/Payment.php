<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'payment_name'
    ];
}