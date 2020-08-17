<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Hash;


class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;
    protected $fillable = ['name', 'email', 'password','active','mobile','description','image'
        ,'facebook', 'remember_token'];


    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }


    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
    public function teacherProfile(){
        return $this->hasOne(\App\Models\TeacherProfile::class);
    }

    public function isAdmin()
    {
        return $this->role()->where('role_id', 1)->first();
    }

    public function isTeacher()
    {
        return $this->role()->where('role_id', 2)->first();
    }

    public function isStudent()
    {
        return $this->role()->where('role_id', 3)->first();
    }

    public function lessons()
    {
        return $this->belongsToMany('App\Models\Lesson', 'lesson_student');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'teacher_id');
    }

}
