<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'name',
        'whatsapp_number',
        'whatsapp_token',
        'timezone',
        'logo_url',
        'business_hours',
        'is_active',
    ];

    protected $casts = [
        'business_hours' => 'array',
        'is_active' => 'boolean',
    ];

    // Relaciones
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }

    public function knowledge()
    {
        return $this->hasMany(BusinessKnowledge::class);
    }

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}