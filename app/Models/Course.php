<?php
namespace App\Models;
use App\User;
use Carbon\Carbon;

use App\Models\Lesson;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class Course extends Model
{
    use SoftDeletes;
    protected $table='courses';
    protected $fillable = ['teacher_id','title','category_id', 'description',  'course_image', 'start_date', 'published'];


    public function getDifDate($date)
    {
        $dateNow = new Carbon(Carbon::now());
        $dateCurrent = new Carbon($date);
        return $dateCurrent->diffForHumans($dateNow);
    }
        public function teachers()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'course_student');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }


    public function scopeOfTeacher($query)
    {
        if (!Auth::user()->isAdmin()) {
            $query->where('teacher_id', Auth::user()->id);
//            return $query->whereHas('teachers', function($q) {
//                $q->where('user_id', Auth::user()->id);
//            });
        }
        return $query;
    }



    public function category (){
        return $this->belongsTo('App\Models\Category' , 'category_id' , 'id');
    }

}
