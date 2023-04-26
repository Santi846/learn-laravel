<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    protected $fillable = [
        'comments', 'person'
    ];
}
