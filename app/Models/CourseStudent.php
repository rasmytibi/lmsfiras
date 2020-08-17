<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseStudent extends Model
{
    protected $table='course_student';
    protected $fillable = ['course_id', 'user_id'];


}
