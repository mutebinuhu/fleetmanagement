<?php

namespace App\Http\Controllers;
use Auth;
use App\Fleet;
use Illuminate\Http\Request;



class FleetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //returns the index page for the fms
    public function index()

    {
    	$Fleet = Auth::User()
    			->fleets()
    			->get();
    	
    	return view('fleets.index', ['Fleet'=>$Fleet]);

    }
    //stores the drivers data 
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

    public function show($url)
  	{
      $fleet = Fleet::whereurl($url)->firstOrFail();
      return view('fleets.show')
                ->withfleet($fleet);
  	}

    
}
