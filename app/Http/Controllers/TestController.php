<?php

namespace App\Http\Controllers;

use App\Breed;
use App\Species;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{

	public function findBreed(Request $request){

		
	    //if our chosen id and products table prod_cat_id col match the get first 100 data 

        //$request->id here is the id of our chosen option id
        $data=Breed::select('breed_name','id')->where('species_id',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
	}

    public function findVet(Request $request){

		
	    //if our chosen id and products table prod_cat_id col match the get first 100 data 

        //$request->id here is the id of our chosen option id
        $data=Profile::select('breed_name','id')->where('species_id',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
	}

    
    
}
