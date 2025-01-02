<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pizza extends Model
{
    use HasFactory;

    protected $table = 'pizza';
    protected $primaryKey = 'id';
    protected $fillable = ['naam', 'prijs', 'omschrijving', 'afbeelding'];

    public function formaten(): BelongsToMany
    {
        return $this->belongsToMany(Formaat::class);
    }
}
