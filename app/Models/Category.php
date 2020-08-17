<?php

namespace App\Models;
use App\Models\Course;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable = [
        'name',
        'description',
        'status',
        'image',
    ];
    public function courses(){
        return $this->hasMany(Course::class);
    }


}
