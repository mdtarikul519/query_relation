<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
     User::create([
         'name' =>'tarikul islam',
          'email' =>'tarikulmd519@gmail.com',
          'password' =>Hash::make('12345678'),
     ]);
     User::create([
        'name' =>'sharif islam',
         'email' =>'sharifmd519@gmail.com',
         'password' =>Hash::make('12345678'),
    ]);

       User::factory(5)->create();
   }
}
