<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class TeacherProfile extends Model
{

    protected $fillable = [
        'user_id', 'facebook', 'description'
    ];


    public function teacher(){
        return $this->belongsTo(User::class);
    }
}
