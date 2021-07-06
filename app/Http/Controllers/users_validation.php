<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use SweetAlert;
use App\Providers\SweetAlertServiceProvider;
class users_validation extends Controller
{
    

  // *************************user registration **************************
     
   function getData(Request $rq) {
         $rq->validate([
  		 'username'=>'required',
  		  'email'=>'required',
  		  'password'=> 'required',
  		  'password2'=>'required' 
           ]);

         $rq->session()->put('username',$rq->input('username'));
         $rq->session()->put('email',$rq->input('email'));
         $rq->session()->put('password',$rq->input('password'));
         $rq->session()->put('password',$rq->input('password2'));

          
          $user=new user();
          $user->username=session('username'); 
          $user->email=session('email'); 
          $user->password=session('password');
          $email_data=DB::table('users')
          ->select('username','email','password')
          ->where('email',session('email') )
          ->get();
           echo $email_data; 
           // $user_array=(array)$email_data; 
           if($email_data!=null){
           foreach ($email_data as $value) {
           	# code...
           if($value->username==session('username')){
           	  alert()->error("username already in use,try with different one "); 
                 	return redirect('signup/');
                 	break; 
               }
             else if($value->email==session('email')){
             	  	alert()->error("email already in use , try with different one "); 
                 	return redirect('signup/');
                 	break; 
                 }
             else if($value->username==session('username') && $value->email==session('email'))  
                     {
                    alert()->error("username and email already in use , try with different one ");
                 	return redirect('signup/');
                 	break;  	  
                     }    
                  }
               }
            
             alert()->success('account created')->persistent('close')->autoclose('3500');
		     $user->save();  
		     return redirect('users_dashboard/');
           }

  // *************************user registration **************************

       function users_login(request $rq){
       	 $rq->validate([
           'email'=>'required|max:20',
           'password'=>'required|max:20|min:2'
       	 ]);
       	 $rq->session()->put('email',$rq->input('email'));
       	 $rq->session()->put('password',$rq->input('password'));
       	 $email_pass=DB::table('users')
       	 ->select('username','email','password')
          ->where('email',session('email'))
          ->get();
          if($email_pass!=null){
          foreach ($email_pass as $credentials) {
          if($credentials->email==session('email') && $credentials->password==session('password') ){
             alert()->success('Welcome')->autoclose('3500');
                 session()->put('username',$credentials->username); 
           	 	 return redirect('./../login_user/');
           	 	  }
           	 else if($credentials->email!=session('email') ){
             alert()->error('email is incorrect ' )->persistent('close')->autoclose('3500');
              	return redirect('register_user');
           	  }
           	  else if($credentials->password!=session('password') ){
             alert()->error('password is incorrect ' )->persistent('close')->autoclose('3500');
              	return redirect('register_user');
           	  }  	   
           }
         } 

         alert()->info('please signup to continue ' )->persistent('close')->autoclose('3500');
              	return redirect('register_user');     
       }    

}
