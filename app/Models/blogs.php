<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class blogs extends Model
{
    use SoftDeletes;
    protected $table='blogs';
    protected $fillable = ['title', 'description','details' , 'blog_image', 'published', 'slider_show'];


}
