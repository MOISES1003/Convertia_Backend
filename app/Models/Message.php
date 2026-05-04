<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'conversation_id',
        'role',
        'content',
        'whatsapp_id',
    ];

    // Relaciones
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}
