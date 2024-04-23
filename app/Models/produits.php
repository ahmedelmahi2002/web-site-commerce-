<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sous_famille;
use App\Models\marques;
use App\Models\unites;

class produits extends Model
{
    protected $fillable = ['codebarre', 'designation', 'prix_ht', 'tva', 'description', 'image', 'sous_famille_id', 'marque_id', 'unite_id'];

    use HasFactory;
    public function sousFamille()
    {
        return $this->belongsTo(sous_famille::class);
    }

    public function marque()
    {
        return $this->belongsTo(Marques::class);
    }

    public function unite()
    {
        return $this->belongsTo(Unites::class);
    }
    public function detailsCommande()
    {
        return $this->hasMany(Detail_Commande::class);
    }
}
