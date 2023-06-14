<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crud;
use App\Models\Hobby;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{
   public function create()
   {

      $roles = Role::get();
      $hobbies = Hobby::get();
      return view('admin.crud.create', compact('roles', 'hobbies'));
   }
   public function store()
   {
      //   dd(request()->all());

      $data = new Crud();

      $data->title = request()->title;
      $data->description = request()->description;
      $data->grnder = request()->grnder;
      $data->role  = request()->role;
      if (request()->hasFile('image')) {
         $data->image = Storage::put('/crud_image', request()->file('image'));
      }

      $data->save();

      //   $data->hobby = json_encode(request()->hobby);
      $data->hobbies()->attach(request()->hobby);
      $data->slug = (rand('100000', '999999') . $data->id) . "" . rand('100', '999');
      $data->save();

      return redirect()->route('dashboard.crud.view');
   }


   public function view()
   {
      $all_id =[1,2,3,5];
      $last_month = Carbon::now()->subMonth(1);
      $all_data = Crud::with([
         'hobbies' => function ($q) {
            return $q->select(['hobbies.id', 'hobbies.name']);
         }
      ])->whereIn('id', $all_id)->get();
      // @dd( $all_data->toArray());

      return view('admin.crud.view', compact('all_data'));
   }

   public function edit($id)
   {
      $editdata = Crud::with('hobbies')->find($id);
      $roles = Role::get();
      $hobbies = Hobby::get();
      return view('admin.crud.edit', compact('editdata', 'roles', 'hobbies'));
   }
   public function update()
   {
      $data = Crud::find(request()->id);

      $data->title = request()->title;
      $data->description = request()->description;
      $data->grnder = request()->grnder;
      $data->role  = request()->role;
      if (request()->hasFile('image')) {

         $data->image = Storage::put('/crud_image', request()->file('image'));
      }
      $data->save();

      //   $data->hobby = json_encode(request()->hobby);
      if (request()->hobby) {
         $data->hobbies()->sync(request()->hobby);
      }

      $data->slug = (rand('100000', '999999') . $data->id) . "" . rand('100', '999');
      $data->save();

      return redirect()->route('dashboard.crud.view');
   }

   public function delete($id)
   {
      Crud::where('id', $id)->delete();
      return redirect()->back();
   }


   public function search()
   {
      $search = $_GET['search'];

      $search_fist = Crud::where('title', 'Like', '%' . $search . '%')->get();

      return view('admin.crud.search', compact('search_fist'));
   }

   public function last_month()
   {
   }
}
