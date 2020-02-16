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
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9 user-fleet">
                     <div class="card">
                        <div class="card-header text-center">My Fleet</div>
                        <div class="card-body">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">Reg no</label>
                                 <input type="email" class="form-control" id="inputEmail4" value="{{$fleet->reg_no}}" style="border:none; border-bottom: 1px solid #79bac1; box-sizing:border-box;border-radius: 0;">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Type</label>
                                 <input type="text" class="form-control" id="inputPassword4" value="{{$fleet->type}}" style="border:none; border-bottom: 1px solid #79bac1;box-sizing:border-box;border-radius: 0;">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Make</label>
                                 <input type="text" class="form-control" id="inputPassword4" value="{{$fleet->make}}" style="border:none; border-bottom: 1px solid #79bac1;box-sizing:border-box;border-radius: 0;">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Engine No</label>
                                 <input type="text" class="form-control" id="inputPassword4" value="{{$fleet->eng_no}}" style="border:none; border-bottom: 1px solid #79bac1;box-sizing:border-box;border-radius: 0;">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Date</label>
                                 <input type="text" class="form-control" id="inputPassword4" value="{{$fleet->date}}" style="border:none; border-bottom: 1px solid #79bac1;box-sizing:border-box;border-radius: 0;">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Mileage</label>
                                 <input type="text" class="form-control" id="inputPassword4" value="{{$fleet->mileage}}" style="border:none; border-bottom: 1px solid #79bac1;box-sizing:border-box;border-radius: 0;">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="description">General Description:</label>
                              <textarea class="form-control" rows="5" id="description" name="description">{{$fleet->description}}</textarea>
                           </div>
                           <a href="{{ url('/fleet') }}"  class="btn btn-primary">Back</a>
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