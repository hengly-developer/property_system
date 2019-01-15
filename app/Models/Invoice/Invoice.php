<?php

namespace App\Models\Invoice;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_invoices';

    /**
     *
     * Which reports are in this invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function report() {
        return $this->hasMany('App\Models\InvoiceReport');
    }
}
