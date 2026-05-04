<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'business_id',
        'contact_id',
        'service_id',
        'price_plan_id',
        'status',
        'special_deal',
        'confirmed_by_owner',
        'owner_notes',
    ];

    protected $casts = [
        'confirmed_by_owner' => 'boolean',
    ];

    // Relaciones
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function pricePlan()
    {
        return $this->belongsTo(PricePlan::class);
    }

    public function alert()
    {
        return $this->hasOne(Alert::class);
    }
}