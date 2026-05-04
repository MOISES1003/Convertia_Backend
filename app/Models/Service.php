<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'business_id',
        'name',
        'description',
        'type',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    // Relaciones
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function pricePlans()
    {
        return $this->hasMany(PricePlan::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}