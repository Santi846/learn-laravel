<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Comments;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\HasOne;

class Pruebas extends Model
{
    use HasFactory;

   

    // Get the user associated with the Pruebas

    // public function user(): HasOne
    // {
    //     $users = Pruebas::find(1)->user;

    //     return $this->hasOne(User::class, 'foreign_key', 'local_key');
    // }

     //prevent overwrite the last row in table, putting new in an array
     protected $fillable = [
        'title', 'expert', 'body', 'image_path', 'is_published', 'min_to_read'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comments::class);
    }




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
