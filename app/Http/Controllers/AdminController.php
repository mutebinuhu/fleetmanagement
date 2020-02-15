<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    //
    public function index()
    {
    	$users = User::all();
    	return view('Admin.index')
    				->withusers($users);
    }

    public function show($url)
    {
    	$singleuser = User::whereid($url)->firstOrFail();
    	return view('admin.show')
    			->withsingleuser($singleuser);
    }
}
