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

        Session::put('student_email',$result->student_email);
        Session::put('student_id',$result->student_id);
        Session::put('message','You are sucessfully login to your student dashboard');

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


          /* student log out function*/
        public function student_logout(){

       
        Session::put('student_name',null);
          Session::put('student_id',null);

          return Redirect::to('/'); 


       }
              /* student log out function*/

         public function studentsettings(){


        
        return view('student.student_settings');


       }
          /* student view profile  function*/

      //    public function student_view_profile(){



      // //  $student_id = Session::get('student_id')
      // // $std_profile=DB::table('student_tbl')
      // //              ->select('*')
      // //              ->where('student_id',$student_id)
      // //              ->first();

      // //           echo "</pre>";
      // //           print_r($std_profile);

      // //               echo "</pre>";

      //     // $manage_view_student=view('student.std_profile')
      //     //     ->with('student_description_profile',$std_profile); 
      //     //      // student_description_profile is uded for  student profile view main representator in view page
      //     //   return view('student_layout')
      //     //   ->with('view_student',$manage_view_student);  
       
         
      //   // return view('student.std_profile');

      //     echo "string";


      //  }


       public function student_view_profile(){

        // return view('student.student_profile');



      $student_id=Session::get('student_id');
      $student_profile_view=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();

                // echo "</pre>";
                // print_r($student_profile_view);
                //     echo "</pre>";

          $manage_student=view('student.student_profile')
              ->with('student_description_profile',$student_profile_view); 
               // student_description_profile is uded for  student profile view main representator in view page
            return view('student.student_layout')
            ->with('student_profile',$manage_student);  

     
    }





}
