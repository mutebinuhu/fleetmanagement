@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 user-img">
                            <div class="card">
                                <div class="card-header text-center">{{Auth::user()->name}}</div>
                                <div class="card-body">
                                    <div class="user-profile">
                                        <div class="text-center">
                                            <img src="http://www.gravatar.com/avatar/fc4ad839ad17d146f6239100c1baaeaf?s=80&d=mm&r=g" class="user-image text-center">
                                        </div>
        
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-9 user-fleet">
                            <div class="card">
                                <div class="card-header text-center">Users</div>
                                <div class="card-body">
                                		<table class="table table-hover">
  											<thead>
    											<tr>
      												<th scope="col">#</th>
      												<th scope="col">Name</th>
      												<th scope="col">Email</th>
      												<th scope="col">Type</th>

    											</tr>
  											</thead>
  											<tbody>
                                			@foreach($users as $user)

    											<tr>
      												<th scope="row">{{$user->id}}</th>
      												<td><a href="{{action('AdminController@show', $user->id)}}">{{$user->name}}</a></td>
      												<td>{{$user->email}}</td>
      												<td>{{$user->type}}</td>	
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