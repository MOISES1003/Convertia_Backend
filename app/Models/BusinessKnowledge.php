<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessKnowledge extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'business_id',
        'title',
        'content',
    ];

    // Relaciones
    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}