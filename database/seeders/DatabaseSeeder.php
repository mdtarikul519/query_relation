<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Image;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $this->call(AboutSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(PhoneSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);  
        $this->call(HobbySeeder::class);  
        $this->call(ImageSeeder::class);
        $this->call(BusSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(FruitesSeeder::class);
        $this->call(ShopSeeder::class);
    }
}
