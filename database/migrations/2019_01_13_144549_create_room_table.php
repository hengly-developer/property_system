<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('building_id');
            $table->integer('room_number');
            $table->string('room_title', 50)->nullable();
            $table->integer('floor_number');
            $table->tinyInteger('is_rented')->default(0);
            $table->double('room_size')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            // $table->foreign('building_id')->references('id')->on('tbl_buildings')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_rooms');
    }
}
