<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

  public function fruite_name(){
        return $this->hasMany(Fruites::class,'shop_id');

        }
  
    }
