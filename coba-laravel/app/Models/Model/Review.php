<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Model\Product;
class Review extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
