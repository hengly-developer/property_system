<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_services_rentals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('room_rental_id');
            $table->unsignedInteger('service_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('description', 255)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            // $table->foreign('room_rental_id')->references('id')->on('tbl_rooms_rentals')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('service_id')->references('id')->on('tbl_services')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_services_rentals');
    }
}
