<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etats extends Model
{
    protected $fillable = ['etats'];
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
    use HasFactory;
}
