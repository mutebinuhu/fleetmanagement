<?php

namespace App\Http\Controllers;

use App\Fleet;
use Illuminate\Http\Request;
use Auth;


class FleetController extends Controller
{
    //
    public function index()
    {
    	return view('fleets.index');
    }
    public function store(Request $request)
    {
    	$url = uniqid();
    	$user_id = Auth::id();
    	$request->validate([

    		'reg_no' => 'required',
    		'make' => 'required',
    		'type' => 'required',
    		'eng_no' => 'required',
    		'chasis_no' => 'required',
    		'date' => 'required',
    		'mileage' => 'required',
    		'description' => 'required',

    	]);

    	$data  = array(
    		'reg_no' => $request->reg_no,
    		'make' => $request->make,
    		'type' => $request->type,
    		'eng_no' => $request->eng_no,
    		'chasis_no' => $request->chasis_no,
    		'date' =>$request->date,
    		'mileage'=>$request->mileage,
    		'description'=>$request->description,
    		'user_id'=>$user_id,
    		'url'=>$url

    	 );
     	Fleet::create($data);
    	
      return redirect('/fleet')->with('status', 'Fleet added');
    	
    }
}
