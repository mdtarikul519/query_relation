<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Protfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProtfolioController extends Controller
{
    public function create()
    {
        return view('admin.potfolio.create');
    }

    public function store(Request $request)
    {
            
            $data = new Protfolio();
            if(request()->hasFile('colam1_top')){
              $data->colam1_top = Storage::put('gallary', request()->file('colam1_top'));
              }
              if(request()->hasFile('colam1_bottom')){

                  $data->colam1_bottom = Storage::put('gallary', request()->file('colam1_bottom'));
              }
              if(request()->hasFile('colam2_top')){

                  $data->colam2_top = Storage::put('gallary', request()->file('colam2_top'));
              }
              if(request()->hasFile('colam2_bottom')){

                   $data->colam2_bottom = Storage::put('gallary', request()->file('colam2_bottom'));
              }
              if(request()->hasFile('colam3_top')){

                   $data->colam3_top = Storage::put('gallary', request()->file('colam3_top'));
              }

              if(request()->hasFile('colam3_bottom')){

                   $data->colam3_bottom = Storage::put('gallary', request()->file('colam3_bottom'));
              }
              if(request()->hasFile('colam4_top')){

                   $data->colam4_top = Storage::put('gallary', request()->file('colam4_top'));
              }

              if(request()->hasFile('colam4_bottom')){
                     $data->colam4_bottom = Storage::put('gallary', request()->file('colam4_bottom'));
              }
            $data->save(); 
      
           return redirect()->route('dashboard.protfolio.view');
    }


    public function view(){
        $all_data = Protfolio::get();
        return view('admin.potfolio.view',compact('all_data'));
    }


    public function edit($id){
           $editdata = Protfolio::find($id);
           return view('admin.potfolio.edit',compact('editdata'));
    }

    public function update(){
         $data = Protfolio::find(request()->id);
         if(request()->hasFile('colam1_top')){
            $data->colam1_top = Storage::put('gallary', request()->file('colam1_top'));
            }
            if(request()->hasFile('colam1_bottom')){

                $data->colam1_bottom = Storage::put('gallary', request()->file('colam1_bottom'));
            }
            if(request()->hasFile('colam2_top')){

                $data->colam2_top = Storage::put('gallary', request()->file('colam2_top'));
            }
            if(request()->hasFile('colam2_bottom')){

                 $data->colam2_bottom = Storage::put('gallary', request()->file('colam2_bottom'));
            }
            if(request()->hasFile('colam3_top')){

                 $data->colam3_top = Storage::put('gallary', request()->file('colam3_top'));
            }

            if(request()->hasFile('colam3_bottom')){

                 $data->colam3_bottom = Storage::put('gallary', request()->file('colam3_bottom'));
            }
            if(request()->hasFile('colam4_top')){

                 $data->colam4_top = Storage::put('gallary', request()->file('colam4_top'));
            }

            if(request()->hasFile('colam4_bottom')){
                   $data->colam4_bottom = Storage::put('gallary', request()->file('colam4_bottom'));
               }
            $data->save();
            return redirect()->route('dashboard.protfolio.view');
       }

       public function destory($id){

         Protfolio:: where('id',$id)->delete();
         return redirect()->back();

       }
     
   }

