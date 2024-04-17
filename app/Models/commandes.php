<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commandes extends Model
{
    public function modeReglement()
    {
        return $this->belongsTo(ModeReglement::class);
    }

    public function etat()
    {
        return $this->belongsTo(Etat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function detailsCommande()
    {
        return $this->hasMany(Detail_Commande::class);
    }
    use HasFactory;
}
