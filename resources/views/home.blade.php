@extends('layouts.app') 
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-center">Click to go Now</div>
                    <div class="row">
                        <div class="col-md-6">
                           <a href="{{url('/admin')}}"><img src="https://www.iconsdb.com/icons/preview/black/administrator-xxl.png" class="ml-5">
                            <div class="text-center my-5">
                               <button class="btn btn-primary">Admin</button>
                           </div>
                          
                        </div>
                        <div class="col-md-6">
                           <a href="{{url('/fleet')}}"><img src="https://www.iconsdb.com/icons/preview/black/administrator-xxl.png" class="ml-5"></a>
                           <div class="text-center my-5">
                               <button class="btn btn-primary">User</button>
                           </div>
                             </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection