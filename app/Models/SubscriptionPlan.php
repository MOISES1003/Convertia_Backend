<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'price',
        'max_whatsapp_numbers',
        'max_conversations_month',
        'max_services',
        'has_white_label',
        'has_api_access',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'has_white_label' => 'boolean',
        'has_api_access' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Relaciones
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'plan_id');
    }
}