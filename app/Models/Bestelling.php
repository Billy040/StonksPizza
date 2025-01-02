<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestelling extends Model
{
    protected $fillable = ['klant_id', 'status_id', 'totaalbedrag'];
}
