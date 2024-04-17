<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marques extends Model
{
    protected $fillable = ['marque'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    use HasFactory;
}
