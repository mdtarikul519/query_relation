<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Hobby::truncate();
       Hobby::create([
            'name'=>'gardding',

       ]);
            Hobby::factory(5)->create();
        }
}
