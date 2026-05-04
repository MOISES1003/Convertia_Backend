<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'business_id',
        'phone',
        'name',
        'status',
        'last_message_at',
    ];

    protected $casts = [
        'last_message_at' => 'datetime',
    ];

    // Relaciones
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }
}