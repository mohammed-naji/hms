<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes, HasFactory;
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

    protected $with = ['category'];

    protected $casts = [];

    function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    function getFinalPriceAttribute()
    {
        return $this->sale_price ? $this->sale_price : $this->price;
    }
}
