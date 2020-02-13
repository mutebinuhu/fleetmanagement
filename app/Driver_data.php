<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver_data extends Model
{
    //
    protected $filable =  [
    	
    		'reg_no',
    		'make', 
    		'type', 
    		'eng_no',
    		'chasis_no' 
    		'date' ,
    		'mileage', 
    		'description' 

    ];
}
