<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products_rentals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_rental_id');
            $table->integer('product_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('description', 255)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            // $table->foreign('room_rental_id')->references('id')->on('tbl_rooms_rentals')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('product_id')->references('id')->on('tbl_products')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_products_rentals');
    }
}
