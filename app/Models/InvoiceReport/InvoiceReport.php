<?php

namespace App\Models\InvoiceReport;

use Illuminate\Database\Eloquent\Model;

class InvoiceReport extends Model
{

    /**
     * @var string $table
     */
    protected $table = 'tbl_invoices_reports';

    /**
     * Which invoice this report belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoice() {
        return $this->belongsTo('App\Models\Invoice');
    }
}
