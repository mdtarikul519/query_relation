@extends('admin.layouts.dashboard')
@section('content')

              <div class="container justify-content-center">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body"> 
                                
                                <form action="{{ route('dashboard.crud.search') }}" type="get">
                                    <div class="form-group col-md-4 my-2">
                                        <input type="search" name="search" id="" class="form-control">
                                        <button class="my-2" type="submit">submit</button>
                                    </div>
                                    
                                </form>
                                

                                <table class="table table-striped">
                                
                                        <thead>
                                            <tr>
                                               <th>id</th>
                                               <th>title</th>
                                               <th>Description</th>
                                               <th>hobby</th>
                                               <th>gender</th>
                                               <th>role</th>
                                               <th>image</th>
                                               <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($search_fist as $data)
                                           <tr>
                                               <td>{{ $data->id }}</td>
                                              <td>{{ $data->title }}</td>
                                              <td>{{ $data->description }}</td>
                                              <td>
                                                   @if($data->hobbies->count())
                                                      <ol>
                                                         @foreach ( $data->hobbies as $hobby)
                                                         <li>{{ $hobby->name }}</li>
                                                             
                                                         @endforeach
                                                    </ol>
                                                   @endif
                                              </td>
                                              <td>{{ $data->grnder }}</td>

                                              <td>
                                                @if($data->role_details)    
                                                {{ $data->role_details->title}}
                                                @endif
                                            </td>
                                              <td>
                                             {{-- @dd($data->crud_images ) --}}
                                               
                                               <img src="/{{ $data->image }}" height="100" width="100" alt="">
                                               @foreach ($data->crud_images as $images)
                                                   <img src="/{{$images->title  }}" height="20" width="20" alt="">
                                               @endforeach
                                               
                                           </td>
                                              <td>
                                                  <a href="" class="btn-btn-sm btn-info">Detale</a>
                                                  <a href="{{ route('dashboard.crud.edit',$data->id) }}" class="btn-btn-sm btn-success">edit</a>
                                                  <a href="{{ route('dashboard.crud.delete',$data->id) }}" class="btn-btn-sm btn-danger">Delete</a>
                                              </td>
                                           </tr>
                                               
                                           @endforeach
                                        </tbody>
                           
                               </div>
                           </div>
                        </div>
                    </div>
                  </div>
              </div>
@endsection