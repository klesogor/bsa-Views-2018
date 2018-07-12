<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currency';

    protected $fillable = [
        'title',
        'logo_url',
        'short_name',
        'price'
    ];
}
