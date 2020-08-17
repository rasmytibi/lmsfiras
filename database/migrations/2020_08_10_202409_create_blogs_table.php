<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('blogs', function (Blueprint $table) {
//            $table->id();
//            $table->string('title')->nullable();
//            $table->string('blog_image')->nullable();
//            $table->text('description')->nullable();
//            $table->text('details')->nullable();
//            $table->tinyInteger('published')->nullable()->default(0);
//            $table->tinyInteger('slider_show')->nullable()->default(0);
//
//            $table->timestamps();
//            $table->softDeletes();
//
//            $table->index(['deleted_at']);
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
