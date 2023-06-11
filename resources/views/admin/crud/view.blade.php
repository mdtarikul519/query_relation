@extends('admin.layouts.dashboard')
@section('content')

              <div class="container justify-content-center">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body">       
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
                                           @foreach ($all_data as $data)
                                           <tr>
                                              <td>{{ $data->title }}</td>
                                              <td>{{ $data->description }}</td>
                                              <td>{{ $data->hobby }}</td>
                                              <td>{{ $data->grnder }}</td>
                                              <td>{{ $data->role }}</td>
                                              <td>
                                               <img src="/{{ $data->image }}" height="100" width="100" alt="">
                                               
                                           </td>
                                              <td>
                                                  <a href="" class="btn-btn-sm btn-info">Detale</a>
                                                  <a href="" class="btn-btn-sm btn-success">edit</a>
                                                  <a href="" class="btn-btn-sm btn-danger">Delete</a>
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