<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Staffs;

class Service extends Model
{

    protected $table = 'service';

    protected $fillable = [
        'name',
        'price',
    ];

}
