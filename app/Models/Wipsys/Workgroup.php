<?php

namespace App\Models\Wipsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Workgroup extends Model
{
    use HasFactory;

    public $table = 'sft_work_groups';

    protected $connection ='wipsys';

    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $fillable = [
        'name',
        'process_code',
        'method_code',
        'method_default',
        'step_code',
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
