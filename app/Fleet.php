<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    //
        protected $fillable =  [
    		'user_id',
    		'reg_no',
    		'make', 
    		'type', 
    		'eng_no',
    		'chasis_no' ,
    		'date' ,
    		'mileage', 
    		'description',
    		'url' 


    ];
}
