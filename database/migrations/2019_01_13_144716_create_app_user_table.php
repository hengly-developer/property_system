<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_app_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo', 255)->nullable();
            $table->tinyInteger('is_admin')->default(0);
            $table->tinyInteger('is_supper_admin')->default(0);
            $table->unsignedInteger('group_id')->default(0);
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('group_id')->references('id')->on('tbl_groups')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_app_users');
    }
}
