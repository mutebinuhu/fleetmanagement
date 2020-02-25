@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3 user-img">
                            <div class="card">
                                <div class="card-header text-center">{{Auth::user()->name}}</div>
                                <div class="card-body">
                                    <div class="user-profile">
                                        <div class="text-center">
                                            <img src="http://www.gravatar.com/avatar/fc4ad839ad17d146f6239100c1baaeaf?s=80&d=mm&r=g" class="user-image text-center">
                                        </div>
                                        <div class="text-center my-5">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                Add Fleet
                                            </button>
                                            @foreach($errors->all() as $error)
                                            <p class="alert alert-danger my-1">{{$error}}</p>
                                            @endforeach
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Vehicle verification form prior to repair</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="POST">
                                                                @csrf
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="Registration">Registration No</label>
                                                                        <input type="text" class="form-control" id="" name="reg_no">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="Make">Make</label>
                                                                        <input type="text" class="form-control" id="" name="make">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="Type">Type</label>
                                                                        <input type="text" class="form-control" id="" name="type">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="Engine No">Engine No</label>
                                                                        <input type="text" class="form-control" id="" name="eng_no">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="chasis No">chasis No</label>
                                                                        <input type="text" class="form-control" id="" name="chasis_no">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">Date Of Manufacture</label>
                                                                        <input type="date" class="form-control" id="" name="date">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="">Mileage</label>
                                                                        <input type="text" class="form-control" id="" name="mileage">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="description">General Description:</label>
                                                                    <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                                                                </div>

                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 user-fleet">
                            <div class="card">
                                <div class="card-header text-center">My Fleets</div>
                                <div class="card-body">

                                    <table class="table table-hover">
                                        <thead class="bg-info">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Reg No</th>
                                                <th scope="col">Type </th>
                                                <th scope="col">Make</th>
                                                <th scope="col">Download</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($Fleet as $data)
                                            <tr>
                                                <th scope="row">{{$data->id}}</th>
                                               <td><a href="{{action('FleetController@show', $data->url)}}">{{$data->reg_no}}</a></td>
                                                <td>{{$data->type}}</td>
                                                <td>{{$data->make}}</td>
                                                <td><a href="{{action('FleetController@PrintOut', $data->url)}}" class="btn btn-primary">Download</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection