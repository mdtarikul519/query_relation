<?php

namespace Database\Seeders;

use App\Models\Bus;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bus::truncate();
        Bus::create([
            'name' => 'sakura',
            'number' => '1122',
        ]);
        Bus::create([
            'name' => 'Hanif',
            'number' => '1144',
        ]);
        Bus::create([
            'name' => 'sikor',
            'number' => '1155',
        ]);
        Bus::create([
            'name' => 'elish',
            'number' => '1166',
        ]);
        Bus::create([
            'name' => 'behungo',
            'number' => '1177',
        ]);
    }
}
