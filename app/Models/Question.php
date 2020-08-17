<?php
namespace App\Models;
use App\Models\Test;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Question extends Model
{
    use SoftDeletes;

    protected $fillable = ['question', 'question_image', 'score'];


    public function setScoreAttribute($input)
    {
        $this->attributes['score'] = $input ? $input : null;
    }

    public function options()
    {
        return $this->hasMany('App\Models\QuestionsOption');
    }

    public function tests()
    {
        return $this->belongsToMany('Test::class', 'question_test');
    }


}
