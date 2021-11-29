<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  // we can insert fack data using hasfatory
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;  // extra services

    // reverse relationship
    public function products() {
        return $this->hasMany(Product::class);
    }
}
