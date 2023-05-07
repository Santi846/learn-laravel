<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Pruebas;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comments extends Model
{
    use HasFactory;

    public function pruebas(): BelongsTo
    {
        return $this->belongsTo(Pruebas::class);
    }

    protected $fillable = [
        'comments', 'person'
    ];
}
