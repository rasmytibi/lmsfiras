<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1500442043LessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        if(! Schema::hasTable('lessons')) {
//            Schema::create('lessons', function (Blueprint $table) {
//                $table->increments('id');
//                $table->integer('course_id')->unsigned()->nullable();
//                $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
//                $table->string('title')->nullable();
//                $table->string('lesson_image')->nullable();
//                $table->text('url_vedio')->nullable();
//                $table->text('short_text')->nullable();
//                $table->text('full_text')->nullable();
//                $table->text('downloadable_files')->nullable();
//                $table->integer('position')->nullable()->unsigned();
//                $table->tinyInteger('published')->nullable()->default(0);
//
//                $table->timestamps();
//                $table->softDeletes();
//
//                $table->index(['deleted_at']);
//            });
//        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
