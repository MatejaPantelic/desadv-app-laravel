<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class Desadv extends Model
{
    use HasFactory, Notifiable, SoftDeletes, Searchable;

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

    /**
     * Scope function to return desadv table attributes with supplier name from supplier table.
     *
     * @param mixed $query Default param for passing query.
     * @return collection
     */
    public function scopeGetDesadvWithSupplier($query)
    {
        return $query->select('id', 'material', 'po_number', 'line_number', 'quantity', 'van_id', 'arrival_date', 'calculated_arrival_date', 'filename')
            ->addSelect([
                'supplier' => Supplier::select('name')
                    ->whereColumn('id', '=', 'desadvs.van_id')
            ]);
    }

    /**
     * Scope function to return the passed columns from the desadv table and the supplier name for the record of the specified id
     *
     * @param mixed $query Default param for passing query.
     * @param int $id ID of desadv record.
     * @param array $columns Array of columns for selection from database.
     * @return collection
     */
    public function scopeGetDesadvWithSupplierById($query, int $id, array $columns)
    {
        return $query->select($columns)
            ->addSelect([
                'supplier' => Supplier::select('name')
                    ->whereColumn('id', '=', 'desadvs.van_id')
            ])->where('id', '=', $id);
    }

    /**
     * Get the name of the index associated with the model.
     */
    public function searchableAs(): string
    {
        return 'desadvs_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = [
            'material' => $this->material,
            'po_number' => $this->po_number,
            'line_number' => $this->line_number,
            'quantity' => $this->quantity,
            'arrival_date' => $this->arrival_date,
            'filename' => $this->filename,
            'van_id' => $this->van_id,
        ];

        return $array;
    }
}
