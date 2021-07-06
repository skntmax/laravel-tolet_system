<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class search_results extends Controller
{
    function show_search_results(Request $rq){
   
   $rq->validate([
     'location'=>'required',
     'category'=>'required',
     'type'=>'required',
     'gender'=>'required'

   ]); 
    
   $rq->session()->put('location',$rq->input('location'));
   $rq->session()->put('category',$rq->input('category'));
   $rq->session()->put('type',$rq->input('type'));
   $rq->session()->put('sex',$rq->input('gender'));
   
   

    $result= DB::table('choices')
   ->join('locations','choices.id','=','locations.location_id')
  ->select('place','category','type','sex')
  ->where('place','like','%'.session('location').'%' )
  ->orwhere(function($query){
  	 $query->where('category','=',session('category'))
  	 	   ->where('type','=',session('type'))
  	 	   ->where('sex','=',session('sex'));
            } 
    	 )		
  ->get();
   $count=count($result);

   
  // foreach ($result as $key => $value) {
  //    echo $value->place."<br>".$value->category."<br>".$value->type."<br>".$value->sex;
  //  }
	    
  if($result!=null){
   
     return view('dashboard.dashboard',['result'=>$result , 'count'=>$count]);
  } 
  else{

  echo "no results";
  }



    }

}
