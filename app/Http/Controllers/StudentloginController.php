<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

use Session;
Session_start(); 

class StudentloginController extends Controller
{


/*here admin log in works as a get method*/
   public function student_login_dashboard(Request $request) {


  
  $email=$request->student_email;
      $password=($request->student_password);
      $result=DB::table('student_tbl')
      ->where('student_email',$email)
      ->where('student_password',$password)
      ->first();








   // return view('student.student_dashboard');

   

   		// echo "</pre>";
   		// print_r($result);

   		if ($result) {

   			Session::put('message','You are sucessfully login to your dashboard');

   			return Redirect::to('/student_dashboard'); 
   		}
   		else {
   			Session::put('message','Your Email or Password is not Correct, Agian Try !!');
   			/* This session is used for when email or password invalid and then show this test at */
   			return Redirect::to('/'); 
   		}


}

 




       public function student_dashboard(){

       	return view('student.student_dashboard');


       }


          /*log out function*/
        public function student_logout(){

       
        session::put('student_name',null);
          session::put('student_id',null);

          return Redirect::to('/'); 


       }





}
