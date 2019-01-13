<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblInvoiceReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_invoices_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_number', 20)->unique();
            $table->double('grand_total');
            $table->string('tenant_name', 50);
            $table->string('tenant_email', 70);
            $table->string('tenant_address', 255);
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
        Schema::dropIfExists('tbl_invoices_reports');
    }
}
