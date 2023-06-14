<?php

namespace Database\Seeders;

use App\Models\Fruites;
use Illuminate\Database\Seeder;

class FruitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fruites::truncate();
        Fruites::create([
            'name' => 'apple',
            'price' => 100,
        ]);
        Fruites::create([
            'name' => 'malta',
            'price' => 150,
        ]);
        Fruites::create([
            'name' => 'angur',
            'price' => 200,
        ]);
        Fruites::create([
            'name' => 'goyaba',
            'price' => 120,
        ]);
        Fruites::create([
            'name' => 'mango',
            'price' => 80,
        ]);
        Fruites::create([
            'name' => 'licu',
            'price' => 200,
        ]);
    }
}
