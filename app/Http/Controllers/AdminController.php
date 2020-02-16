<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$users = User::all();
    	return view('Admin.index')
    				->withusers($users);
    }

    public function show($id)
    {
    	$singleuser = User::whereid($id)->firstOrFail();
    	return view('admin.show')
    			->withsingleuser($singleuser);
    }

    public function update($id,  Request $request)
    {
        $updateType = User::whereid($id)->firstOrFail();

        $request->validate([
           'type'=>'required' 
        ]);

        $updateType->type = $request->get('type');
        $updateType->save();
    return redirect('/admin')->with('status', 'user updated to '. $updateType->type);


    }
}
