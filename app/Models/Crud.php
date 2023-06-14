<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;

    public function hobbies(){

        return $this->belongsToMany(Hobby::class);
    }

    public function role_details() {
        return $this->hasOne(Role::class,'id','role');
    }
     

    public function crud_images(){
         return $this->hasMany(Image::class,'crud_id','id');
    }
}
