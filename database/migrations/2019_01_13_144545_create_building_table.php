<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id');
            $table->string('name', 100)->unique();
            $table->string('description', 255)->nullable();
            $table->float('number_of_floor')->nullable();
            $table->double('building_size')->nullable();
            $table->double('land_size')->nullable();
            $table->tinyInteger('is_active')->default(1);
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
        Schema::dropIfExists('tbl_buildings');
    }
}
