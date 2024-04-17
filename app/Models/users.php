<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
    use HasFactory;
}
