<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::truncate();
        Driver::create([
            'name' => 'tarek',
            'title' => 'she is a good boy',
        ]);
        Driver::create([
            'name' => 'sharif',
            'title' => 'she is a good boy',
        ]);
        Driver::create([
            'name' => 'rana',
            'title' => 'she is a good boy',
        ]);
    }
}
