<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1500441827CoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        if(! Schema::hasTable('courses')) {
//            Schema::create('courses', function (Blueprint $table) {
//                $table->increments('id');
//                $table->integer('category_id')->nullable();
//
//                $table->string('title');
//
//                $table->text('description')->nullable();
//                $table->string('course_image')->nullable();
//                $table->date('start_date')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
