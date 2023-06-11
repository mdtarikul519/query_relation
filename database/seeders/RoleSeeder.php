<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Role::truncate();
       Role::create([
           'title'=>'admin'
       ]);
       Role::create([
        'title'=>'user'
    ]);
    Role::create([
        'title'=>'superadmin'
    ]);
    }
}
