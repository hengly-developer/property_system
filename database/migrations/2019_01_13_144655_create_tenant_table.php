<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tenants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 70)->unique();
            $table->string('phone', 25);
            $table->string('code', 15)->unique();
            $table->string('address', 255)->nullable();
            $table->string('national_id_card', 30)->unique();
            $table->string('photo', 255)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tenants');
    }
}
