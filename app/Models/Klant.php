<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    protected $fillable = ['naam', 'adres', 'telefoonnummer', 'email', 'wachtwoord'];
}
