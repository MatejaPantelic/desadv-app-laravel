<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Desadv extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'material',
        'quantity',
        'delivery_id',
        'document_id',
        'tracking_number',
        'hwb',
        'contract_number',
        'ponr_line',
        'sonr',
        'invoice_nr',
        'despatch_date',
        'arrival_date',
        'inco_term',
        'da_packages',
        'pack_list_nr',
        'transport_mode',
        'carrier',
        'van_id',
        'interchange_control_reference',
        'message_data',
        'lig1',
        'ctr1',
        'fv1',
        'lig2',
        'ctr2',
        'fv2',
        'lig3',
        'ctr3',
        'fv3',
        'supplier_material',
        'weight',
        'key',
        'line',
        'calculated_arrival_date',
        'filename',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}