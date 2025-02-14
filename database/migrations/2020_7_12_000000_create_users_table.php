<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('users', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('first_name')->nullable();
//            $table->string('last_name')->nullable();
//            $table->string('email')->unique();
//            $table->string('avatar_type')->default('gravatar');
//            $table->string('avatar_location')->nullable();
//            $table->string('password')->nullable();
//            $table->timestamp('password_changed_at')->nullable();
//            $table->tinyInteger('active')->default(1)->unsigned();
//            $table->string('confirmation_code')->nullable();
//            $table->boolean('confirmed');
//            $table->rememberToken();
//            $table->timestamps();
//            $table->softDeletes();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('access.table_names.users'));
    }
}
