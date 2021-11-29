<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //relationship
    public function brand() {
    return $this->belongsTo(Brand::class);  // one to many
    }
    public function category() {
        return $this->belongsTo(Category::class);  // one to many
    }
}
