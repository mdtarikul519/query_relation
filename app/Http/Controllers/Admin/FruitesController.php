<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fruites;
use App\Models\Shop;
use Illuminate\Http\Request;

class FruitesController extends Controller
{
  public function view(){
    //   $data = Fruites::with('shop_store')->get();
      $alldata = Shop::with('fruite_name')->get();
      dd($alldata->toArray());
  }
}
