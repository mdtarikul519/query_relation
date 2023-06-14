<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\Driver;
use Illuminate\Http\Request;

class BusController extends Controller
{
//    public function store(){
    
//         $data = new Bus();
//         // dd($data->toArray());
//         $data->name = 'sakura';
//         $data->number = '123';
//         $data->driver_name ='santo';
//         $data->save();
//    }
   public function view(){
          $alldata = Bus::with('driver_data')->get();
          $data = Driver::with('bus_data')->get();
       dd($alldata->toArray());

   }


}
