<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Formaat extends Model
{
    protected $fillable = ['formaat'];
    protected $table = 'formaat';

    public function pizzas(): BelongsToMany
    {
        return $this->BelongsToMany(Pizza::class, 'pizza_formaat');
    }


}


