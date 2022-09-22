<?php

namespace App\Models\Wipsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Log extends Model
{
    use HasFactory;

    public $table = 'sft_logs';

    protected $connection ='wipsys';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'session',
        'key_strokes',
        'revision',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
