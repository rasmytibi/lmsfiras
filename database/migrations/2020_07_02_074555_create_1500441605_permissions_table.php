<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1500441605PermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        if(! Schema::hasTable('permissions')) {
//            Schema::create('permissions', function (Blueprint $table) {
//                $table->increments('id');
//                $table->string('title');
//                $table->boolean('status')->default(1);
//
//                $table->timestamps();
//
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
        Schema::dropIfExists('permissions');
    }
}
