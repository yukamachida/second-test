<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //use HasFactory;
    protected $fillable = [ 'name', 'price', 'description']; //imageは後で追加

    public function seasons()
    {

        return $this->belongsToMany(season::class);

    }
}
