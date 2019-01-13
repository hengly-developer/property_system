<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_number', 20)->unique();
            $table->unsignedInteger('tenant_id');
            $table->double('grand_total');
            $table->tinyInteger('is_voided')->default(0);
            $table->timestamp('void_date');
            $table->string('void_reason', 255)->nullable();
            $table->tinyInteger('void_by');
            $table->unsignedInteger('created_by');
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
        Schema::dropIfExists('tbl_invoices');
    }
}
