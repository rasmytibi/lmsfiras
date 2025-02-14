<?php

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Test;

class CourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Course::class, 5)->create()->each(function ($course) {
            $course->teachers()->sync([1]);
            $course->lessons()->saveMany(factory(Lesson::class, 10)->create()->each(function ($lesson) {
                $lesson->test()->save(factory(Test::class)->create());
            }));
        });
    }
}
