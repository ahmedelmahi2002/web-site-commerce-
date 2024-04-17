<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mode_reglement extends Model
{
    protected $fillable = ['mode_reglement'];
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
    use HasFactory;
}
