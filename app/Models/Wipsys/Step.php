<?php

namespace App\Models\Wipsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Step extends Model
{
    use HasFactory;

    public $table = 'sft_steps';

    protected $connection ='wipsys';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'code',
        'description',
        'equipment_hours',
        'archive',
        'revision',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
