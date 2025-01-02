<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredienten extends Model
{
    protected $fillable = ['naam', 'prijs', 'voorraad'];
}
