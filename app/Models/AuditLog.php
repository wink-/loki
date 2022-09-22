<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

/**
 * App\Models\AuditLog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog query()
 * @mixin \Eloquent
 */
class AuditLog extends Model
{
    public $table = 'audit_logs';

    protected $fillable = [
        'description',
        'subject_id',
        'subject_type',
        'user_id',
        'properties',
        'host',
    ];

    protected $casts = [
        'properties' => 'collection',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
