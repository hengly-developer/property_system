<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_rooms_rentals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id');
            $table->integer('tenant_id');
            $table->integer('contract_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('description', 255)->nullable();
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
        Schema::dropIfExists('tbl_rooms_rentals');
    }
}
