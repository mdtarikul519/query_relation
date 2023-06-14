<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruites extends Model
{
    public function shop_store(){
        return $this->belongsTo(Shop::class,'id');
    }
}
