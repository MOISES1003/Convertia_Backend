<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'service_id',
        'day_of_week',
        'start_time',
        'end_time',
        'notes',
    ];

    // Relaciones
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}