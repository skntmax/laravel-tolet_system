<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users_validation; 
use App\Http\Controllers\search_results;
use App\Http\Controllers\sidebar_submit; 
use App\Providers\SweetAlertServiceProvider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('register_user',function(){
       if(session()->has('email')){
		 redirect('dashboard');
	    }
	session()->put('email',null); 
   return view('userlogin');	          
});

Route::get('signup/', function(){
	if(session()->has('email')){
		 redirect('dashboard');
	}
	session()->put('email',null); 
	return view('user_signup');
});

Route::get('logout/',function(){
 if(session()->has('username')){
   session()->put('username',null);
   return redirect('/');
 }
}); 
// ***************main _dashboard for unknown user ******************


 Route::view('/users_dashboard','dashboard.dashboard');
 Route::post('sidebar_submit',[sidebar_submit::class,'show_search_results']);
// ***************main _dashboard for unknown user******************

 Route::get('login_user/',function(){
   if(session()->has('username') )
     	return view('users_dashboard.index');
   else{
   	  session()->put('username',null);
   	  session()->put('password',null);
   	  alert()->info('please signup to continue ' )->persistent('close')->autoclose('3500');
     return redirect('register_user');
   } 	     	
   

 });




// ***************main _dashboard for******************

Route::view('preferences_modal/','modal.preferences_modal');

Route::view('registerUser','user_signup');
Route::post('validate/',[users_validation::class,'getData']);
Route::view('dashboard/','dashboard.dashboard');
Route::post('login_submit',[users_validation::class,'users_login']);

Route::post('submit_search',[search_results::class,'show_search_results']);



Route::view('profile/','user_profile.index');


