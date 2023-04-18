<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    public function person(): BelongsTo
    {   
        // return $this->belongsTo(Phone::class, 'id', 'id');

        return $this->belongsTo(Person::class, 'people_id', 'id');
        
    }
}
