<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crud;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{
    public function create(){

        $roles = Role::get();
        return view('admin.crud.create', compact('roles'));
   }
   public function store(){
    //    dd(request()->all());

     $data = new Crud();
         
     $data->title = request()->title;
     $data->description = request()->description;
     $data->gender = request()->gender;
     $data->role  = request()->role;
     $data->image = Storage::put('/crud_image', request()->file('image'));
     $data->save();

     $data->bobby = json_encode(request()->hobby);
     $data->slug = (rand('100000','999999').$data->id). "" .rand('100','999');
     $data->save();
     return redirect()->route('dashboard.crud.view');
   }


   public function view(){
      $all_data = Crud::get();
      return view('admin.crud.view', compact('all_data'));
   }
}
