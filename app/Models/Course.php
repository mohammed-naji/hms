<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    // protected $fillable = [
    //     'title',
    //     'image',
    //     'instructor',
    //     'price',
    //     'sale_price',
    //     'hours',
    //     'content',
    // ];

    protected $guarded = [];

    protected $casts = [];
}
