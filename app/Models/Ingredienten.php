<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredienten extends Model
{
    protected $table = 'ingredienten';
    protected $fillable = ['naam', 'prijs', 'voorraad'];

    public function pizzas(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Pizza::class, 'ingredienten_pizza', 'ingredienten_id', 'pizza_id');
    }
}
