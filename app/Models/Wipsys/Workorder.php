<?php

namespace App\Models\Wipsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Workorder extends Model
{
    use HasFactory;

    public $table = 'sft_work_orders';

    protected $primaryKey = 'number';

    protected $connection ='wipsys';

    public static $searchable = [
        'number',
    ];

    protected $dates = [
        'date_received',
        'date_required',
        'date_shipped',
        'invoice_date',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'number',
        'customer_code',
        'part_id',
        'part_number',
        'process_code',
        'price',
        'price_code',
        'date_received',
        'date_required',
        'customer_purchase_order',
        'customer_packing_list',
        'quantity',
        'unit_code',
        'quantity_shipped',
        'our_last_packing_list',
        'destination_code',
        'carrier_code',
        'freight_code',
        'date_shipped',
        'invoice_number',
        'invoice_date',
        'invoice_amount',
        'priority',
        'rework',
        'hot',
        'started',
        'completed',
        'shipped',
        'cod',
        'invoiced',
        'note',
        'image_count',
        'archive',
        'revision',
        'printed',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function part()
    {
        return $this->belongsTo(Part::class, 'part_id');
    }

    public function getDateReceivedAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateReceivedAttribute($value)
    {
        $this->attributes['date_received'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateRequiredAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateRequiredAttribute($value)
    {
        $this->attributes['date_required'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateShippedAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateShippedAttribute($value)
    {
        $this->attributes['date_shipped'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getInvoiceDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setInvoiceDateAttribute($value)
    {
        $this->attributes['invoice_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    /**
     * Get the laborcards for a workorder.
     */
    public function laborcards()
    {
        return $this->hasMany(LaborCard::class, 'work_order_number', 'number');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'code', 'customer_code');
    }    

}
