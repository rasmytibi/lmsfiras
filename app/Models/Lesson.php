<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;




class Lesson extends Model
{
    use SoftDeletes;

    protected $table = 'lessons';
    protected $fillable = ['title','files', 'lesson_image', 'downloadable_files', 'url_vedio','short_text', 'full_text',  'published', 'course_id'];




    public function setCourseIdAttribute($input)
    {
        $this->attributes['course_id'] = $input ? $input : null;
    }


    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id')->withTrashed();
    }

    public function test() {
        return $this->hasOne('App\Models\Test');
    }

    public function students()
    {
        return $this->belongsToMany('App\User', 'lesson_student')->withTimestamps();
    }

}
