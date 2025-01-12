<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredienten extends Model
{
    protected $fillable = ['naam', 'prijs', 'voorraad'];

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class, 'ingredienten_pizza', 'ingredienten_id', 'pizza_id');
    }
}
