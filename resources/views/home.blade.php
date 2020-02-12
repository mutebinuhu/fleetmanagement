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
                                                            <form>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Registration No</label>
                                                                        <input type="email" class="form-control" id="inputEmail4">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">Make</label>
                                                                        <input type="text" class="form-control" id="inputPassword4">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">Type</label>
                                                                        <input type="text" class="form-control" id="inputPassword4">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">Engine No</label>
                                                                        <input type="text" class="form-control" id="inputPassword4">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">chasis No</label>
                                                                        <input type="text" class="form-control" id="inputPassword4">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">Date Of Manufacture</label>
                                                                        <input type="date" class="form-control" id="inputPassword4">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">Mileage</label>
                                                                        <input type="text" class="form-control" id="inputPassword4">
                                                                    </div>
                                                                </div>
                                                                    <div class="form-group">
                                                                        <label for="comment">General Description:</label>
                                                                            <textarea class="form-control" rows="5" id="comment"></textarea>
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
                                <div class="card-header text-center">My Fleets Status</div>
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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