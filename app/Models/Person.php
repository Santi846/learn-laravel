<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    
    public function person(): HasOne
    {
        // return $this->hasOne(Phone::class);
        return $this->hasOne(Phone::class);
    }

    public function personComments(): HasMany
    {
        return $this->hasMany(Comments::class);
    }

    protected $fillable = [
        'name', 'phone', 'comments'
    ];
}
