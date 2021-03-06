@extends('layouts.app') @section('content')
<div class="container">
    <div class="card">
        <div class="card-header">My Header</div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">hey</div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">{{$singleuser->name}}</div>
                        <div class="card-body">
                             @foreach($errors->all() as $error)
                                <p class="alert alert-danger my-1">{{$error}}</p>
                            @endforeach
                            <form action="" method="POST">
                                @method('patch')
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="Registration">Name</label>
                                        <input type="text" class="form-control" id="" name="reg_no" value="{{$singleuser ->name}}" readonly="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Make">Email</label>
                                        <input type="text" class="form-control" id="" name="make" value="{{$singleuser->email}}" readonly="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control" name="type">
                                            <option selected>{{$singleuser->type}}</option>
                                            <option>inspector</option>
                                            <option>driver</option>
                                            <option>default</option>
                                            <option>admin</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Engine No">Date Of Reg</label>
                                        <input type="text" class="form-control" id="" name="eng_no" value="{{$singleuser->created_at}}" readonly="">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary ">Submit</button>
                                        <a href="{{url('/admin')}}" type="submit" class="btn btn-danger ">Back</a>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection