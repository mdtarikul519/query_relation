<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    { 
           $data = Banner::first();
        return view('website.index', compact('data'));
    }

    public function about()
    { 
           $data = About::first();
        return view('website.index', compact('data'));
    }
    public function test()
    {
        $tests = new Test();
        $data_array = [1,3,5,7];
        // $last_month = Carbon::now()->subDays(1)->month;
        // $query = $tests->whereMonth('created_at', $last_month)->get();
            $search_param = request()->seach;
        
            // dd($search_param);
            // $last_month = Carbon::now()->subMonth(1)->month;
            // $query = $tests->whereMonth('date', $last_month)->whereBetween('number', [30,40])->where('status', 1)->with(['user'])->get();
            // $query = $tests->whereIn('id', $data_array)->where('status', 1)->with(['user', 'subject'])->get();
            $query = $tests->where('subject', 'LIKE', '%' . $search_param . '%')->with(['user', 'subject'])->get();
        

        $count = $query->count();

        ddd($query, $count);
    }


    public function blog_test()
    {
        $tests = new Blog();
        $data_array = [1,3,5,7];

        $search_param = request()->search;
        // $last_month = Carbon::now()->subMonth(3)->month;
        $query = $tests->where('title', 'LIKE' ,'%' . $search_param . '%')
        ->whereIn('id', $data_array)->where('status', 1)->with(['user'])->get();
        

        $count = $query->count();
        // 
        
        // $query = $tests->whereMonth('created_at', $last_month)->get();
            // $search_param = request()->seach;
        
            // dd($search_param);
            // $last_month = Carbon::now()->subMonth(1)->month;
            // $query = $tests->whereMonth('date', $last_month)->whereBetween('number', [30,40])->where('status', 1)->with(['user'])->get();
            // $query = $tests->whereIn('id', $data_array)->where('status', 1)->with(['user', 'subject'])->get();
            // $query = $tests->where('subject', 'LIKE', '%' . $search_param . '%')->with(['user', 'subject'])->get();
        

        ddd($query);
    }

    public function delete_blog_test($id)
    {
        $test = Blog::where('id', $id)->first();

        $test->status = 0;
        $test->update();

        return "data deleted";
    }

    public function restore_blog_test($id)
    {
        $test = Blog::where('id', $id)->first();

        $test->status = 1;
        $test->update();

        return "data restored";
    }


    public function delete_test($id)
    {
        $test = Test::where('id', $id)->first();

        $test->status = 0;
        $test->update();

        return "data deleted";
    }

    public function recycle_bin()
    {
        $tests = Blog::where('status', 0)->get();

        ddd($tests);
    }

    public function restore($id)
    {
        $test = Test::where('id', $id)->first();

        $test->status = 1;
        $test->update();

        return "data restored";
    }
}
    
