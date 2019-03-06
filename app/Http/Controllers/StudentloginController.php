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
        $student_id=Session::get('student_id');


     


      $student_description_edit=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();

                // echo "</pre>";
                // print_r($student_description_edit);

                //     echo "</pre>";

          $manage_edit_student=view('student.student_settings')
              ->with('student_description_edit',$student_description_edit); 
               // student_description_edit is uded for  student profile view main representator in view page
            return view('student.student_layout')
            ->with('student_settings',$manage_edit_student);  


          }




          /*update studenrt profile from setting page*/


    public function update_student_profile(Request $request){

      $student_id=Session::get('student_id');



     
        $data=array();
        
              $data['student_phone']=$request->student_phone ;
               $data['student_address']=$request->student_address;
                 $data['student_password']=$request->student_password;
              


  
       DB::table('student_tbl')->where('student_id',$student_id)->update($data);
  
      // Session::put('message','update Contact Successfully!!'); /*give message when name and id sucessfully update to database*/
        Session::put('message','Student profile updates sucessfully');

               return Redirect::to('/studentsettings'); 


      
}



         

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
