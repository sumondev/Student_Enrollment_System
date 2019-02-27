<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllstudentsController extends Controller
{
    /*all student function*/

    
    
       public function allstudent(){

       	$allstudent_info= DB::table('student_tbl')
       						->get();
       		$manage_student=view('admin.all_student')
       				->with('all_student_info',$allstudent_info);  /*all_student_info is uded for all student main representator in all_student page*/
       	    return view('layout')
       	    ->with('all_student',$manage_student);



       						

       	//return view('admin.all_student');


       }




              /*delet  function*/

        
    public function delete_student($student_id){


    

      DB::table('student_tbl')->where('student_id',$student_id)->delete();

      Session::put('message','Delete student Successfully!!');
      return Redirect::to('/all_student');
    }


    

    /*view student information here*/


    public function student_view($student_id){


      $student_description_view=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();

                // echo "</pre>";
                // print_r($student_description_view);

                //     echo "</pre>";

          $manage_view_student=view('admin.view_student')
              ->with('student_description_profile',$student_description_view); 
               // student_description_profile is uded for  student profile view main representator in view page
            return view('layout')
            ->with('view_student',$manage_view_student);  

     
    }


      /*Student edit part/ update function start here*/

     
    public function student_edit($student_id){


      $student_description_edit=DB::table('student_tbl')
                   ->select('*')
                   ->where('student_id',$student_id)
                   ->first();

                // echo "</pre>";
                // print_r($student_description_edit);

                //     echo "</pre>";

          $manage_edit_student=view('admin.student_edit')
              ->with('student_description_edit',$student_description_edit); 
               // student_description_profile is uded for  student profile view main representator in view page
            return view('layout')
            ->with('student_edit',$manage_edit_student);  

     
    }

   public function student_update(Request $request,$student_id){


      // echo "string";


     
       @ $data=array();
         $data['student_name']=$request->student_name ;
          $data['student_roll']=$request->student_roll;
           $data['student_fathername']=$request->student_fathername ;
            $data['student_mothername']=$request->student_mothername ;
             $data['student_email']=$request->student_email ;
              $data['student_phone']=$request->student_phone ;
               $data['student_address']=$request->student_address;
                 $data['student_password']=$request->student_password;
                  $data['student_department']=$request->student_department;
                   $data['student_addmissionyear']=$request->student_addmissionyear;


  
       DB::table('student_tbl')->where('student_id',$student_id)->update($data);
  
      // Session::put('message','update Contact Successfully!!'); /*give message when name and id sucessfully update to database*/
        Session::put('message','Student updates sucessfully');

               return Redirect::to('/all_student'); 


      
}


}
