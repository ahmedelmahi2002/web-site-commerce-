<?php

namespace App\Models;
use App\Models\Famille;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sous_famille extends Model
{
    protected $fillable = ['libelle', 'image', 'famille_id'];
    public function Famille()
    {
        return $this->belongsTo(Famille::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
   
    use HasFactory;
}
