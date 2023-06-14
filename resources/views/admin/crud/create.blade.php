@extends('admin.layouts.dashboard')
@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.crud.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label>name</label>
                                <input type="text" name="title" class="form-control">
                            </div>
    
                            <div class="form-group col-md-6">
                                <label>description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
    
                            <div class="form-group">
                                <label for="">hobby :</label>
                                  @foreach ($hobbies as $data)
                                    <label for="gardening{{ $data->id }}">
                                      <input type="checkbox" value=" {{ $data->id }}" id="gardening{{ $data->id }}" name="hobby[]">
                                       {{ $data->name }}
                                    </label>
                                    @endforeach
                            </div>
    
                            <div class="form-group ">
                                <label for="">Gender</label>
                                <label for="male">
                                    <input type="radio" value="male" id="male" name="grnder">
                                    Male
                                </label>
                                <label for="female">
                                    <input type="radio" value="female" id="female" name="grnder">
                                    Female
                                </label>
                                <label for="others">
                                    <input type="radio" value="others" id="others" name="grnder">
                                    others
                                </label>
                            </div>
    
                            <div class="form-group col-md-8">
                                  <label for="">Role</label>
                                  <select class="form-control" name="role">
                                    @foreach ($roles as $role )
                                    <option value="{{ $role->id }}">{{ $role->title }}</option>
                                        
                                    @endforeach
                                  
                                  </select>
                            </div>
    
                            <div class="form-group">
                                <label for="">image</label>
                                <input type="file" accept="image/*" name="image" class="form-control">
                            </div>
                            <button>submit</button>
    
                        </div>
                        </form>
                      
                </div>
            </div>
        </div>
    </div>
@endsection
