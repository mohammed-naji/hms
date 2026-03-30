<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // function setSlugAttribute() {
    //     if(true) {
    //         php-course-4
    //     }
    // }

    // Full Stack Web Developer => full-stack-web-developer
    // Full Stack Web Developer => full-stack-web-developer-2
    // Full Stack Web Developer => full-stack-web-developer-3
}
