<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    protected $fillable = ['codebarre', 'designation', 'prix_ht', 'tva', 'description', 'image', 'sous_famille_id', 'marque_id', 'unite_id'];

    use HasFactory;
    public function sousFamille()
    {
        return $this->belongsTo(SousFamille::class);
    }

    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    public function unite()
    {
        return $this->belongsTo(Unite::class);
    }
    public function detailsCommande()
    {
        return $this->hasMany(Detail_Commande::class);
    }
}
