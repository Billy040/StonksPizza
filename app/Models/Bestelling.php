<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestelling extends Model
{
    public $timestamps = false;
    protected $table = 'bestelling';
    protected $fillable = ['user_id', 'status_id', 'totaalBedrag', 'adres', 'postcode', 'telefoonnummer'];

    public function pizzas(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Pizza::class, 'bestelling_pizza')->withPivot('formaat_id', 'aantal', 'prijs');
    }

    public function status(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'klant_id');
    }
}
