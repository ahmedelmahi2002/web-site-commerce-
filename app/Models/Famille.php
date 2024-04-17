<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    protected $fillable = ['libelle', 'image'];
    public function sousFamille()
    {
        return $this->belongsTo(SousFamille::class);
    }
    use HasFactory;
}
