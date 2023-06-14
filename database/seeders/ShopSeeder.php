<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Shop::truncate();
       Shop::create([
               'name'=>'sapno',
       ]);
       Shop::create([
        'name'=>'mudi',
      ]);
      Shop::create([
        'name'=>'agura',
      ]);
      Shop::create([
        'name'=>'caldal',
      ]);
      Shop::create([
        'name'=>'princeBaner',
      ]);
      Shop::create([
        'name'=>'mirpur shop',
      ]);
       
       

       
    }
}
