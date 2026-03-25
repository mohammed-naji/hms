<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
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
