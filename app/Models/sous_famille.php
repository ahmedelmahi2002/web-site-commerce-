<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sous_famille extends Model
{
    protected $fillable = ['libelle', 'image', 'famille_id'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    use HasFactory;
}
