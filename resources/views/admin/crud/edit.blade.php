@extends('admin.layouts.dashboard')
@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('dashboard.crud.update',$editdata->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                            <label for="">title</label>
                            <input type="text" value="{{ $editdata->title }}" name="title" class="form-control">

                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" value="{{ $editdata->description }}" name="description"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">hobby :</label>
                            @foreach ($hobbies as $data)
                                <label for="gardening{{ $data->id }}">
                                    <input type="checkbox"
                                        {{ $editdata->hobbies->firstWhere('id', '=', $data->id) ? 'checked' : '' }}
                                        value=" {{ $data->id }}" id="gardening{{ $data->id }}" name="hobby[]">
                                    {{ $data->name }}

                                </label>
                            @endforeach
                        </div>

                        <div class="form-group ">
                            <label for="">Gender</label>
                            <label for="male">
                                <input type="radio" {{ $editdata->grnder == 'male' ? 'checked' : '' }} value="male"
                                    id="male" name="grnder">
                                Male
                            </label>
                            <label for="female">
                                <input type="radio" {{ $editdata->female == 'male' ? 'checked' : '' }} value="female"
                                    id="female" name="grnder">
                                Female
                            </label>
                            <label for="others">
                                <input type="radio" {{ $editdata->grnder == 'others' ? 'checked' : '' }} value="others"
                                    id="others" name="grnder">
                                others
                            </label>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="">Role</label>
                            <select class="form-control" name="role">
                                @foreach ($roles as $role)
                                    <option {{ $editdata->role == $role->id ? 'selected' : '' }} value="{{ $role->id }}">
                                        {{ $role->title }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">image</label>
                            <input type="file" accept="image/*" name="image" class="form-control">
                            <img src="/{{ $editdata->image }}" height="100" width="100" alt="">
                        </div>
                        <button>update</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
