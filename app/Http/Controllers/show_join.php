<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class show_join extends Controller
{
  

    //
 function show(){
  return DB::table('choices')->
  join('locations','choices.id','=','locations.location_id')
  ->select('choices.*')
  ->where('location_id','2')
  ->get();

 }


}
