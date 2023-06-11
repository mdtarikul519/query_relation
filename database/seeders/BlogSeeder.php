<?php

namespace Database\Seeders;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::truncate();
        for ($i=0; $i < 7; $i++) { 
            $test = new Blog();
            $test->user_id = $i+1;
            $test->title = "new title" . $i;
            $test->description = "new description" . $i;
            $test->date = Carbon::now()->subMonth(1)->subDays($i)->toDateString();
            $test->save();
        }
    }
}
