<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unites extends Model
{
    protected $fillable = ['unite'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    use HasFactory;
}
