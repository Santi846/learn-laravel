<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pruebas extends Model
{
    use HasFactory;

    //prevent overwrite the last row in table, putting new in an array
    protected $fillable = [
        'title', 'expert', 'body', 'image_path', 'is_published', 'min_to_read'
    ];

    // protected $table = 'pruebas';

    // protected $primaryKey = 'title';

    // protected $timestamp = false;

    //set datetime as only seconds
    // protected $dateTime = 'U';

    // protected $connection = 'sqlite';

    // protected $atributes = [
    //     'is_published' => true
    // ];
}
