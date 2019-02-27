<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class TeacherController extends Controller
{
    

 /*Add teacher function */






    /*ALLteacher function */
     public function allteacher(){


     	$allteacher_info= DB::table('teacher_tbl')
       						->get();
       		$manage_teacher=view('admin.all_teacher')
       				->with('all_teacher_info',$allteacher_info);  /*all_student_info is uded for all student main representator in all_student page*/
       	    return view('layout')
       	    ->with('all_teacher',$manage_teacher);




       	// return view('admin.all_teacher');


       }

/*teacehr delete function are here*/

       public function delete_teacher($teacher_id){


    

      DB::table('teacher_tbl')->where('teacher_id',$teacher_id)->delete();

      Session::put('message','Delete student Successfully!!');
      return Redirect::to('/all_teacher');
    }


   /*view Teacher information here*/


    public function view_teacher($teacher_id){


      $teacher_description_view=DB::table('teacher_tbl')
                   ->select('*')
                   ->where('teacher_id',$teacher_id)
                   ->first();

                // echo "</pre>";
                // print_r($student_description_view);

                //     echo "</pre>";

          $manage_view_teacher=view('admin.view_teacher')
              ->with('teacher_description_profile',$teacher_description_view); 
               // student_description_profile is uded for  student profile view main representator in view_teacher page
            return view('layout')
            ->with('view_teacher',$manage_view_teacher);  

     
    }




         /*Teacher edit part/ update function start here*/

     
    public function edit_teacher($teacher_id){


      $teacher_description_edit=DB::table('teacher_tbl')
                   ->select('*')
                   ->where('teacher_id',$teacher_id)
                   ->first();

                // echo "</pre>";
                // print_r($student_description_edit);

                //     echo "</pre>";

          $manage_edit_teacher=view('admin.teacher_edit')
              ->with('teacher_description_edit',$teacher_description_edit); 
               // student_description_profile is uded for  student profile view main representator in view page
            return view('layout')
            ->with('teacher_edit',$manage_edit_teacher);  

     
    }

   public function update_teacher(Request $request,$teacher_id){


      // echo "string";


       @$data=array();
         $data['teacher_name']=$request->teacher_name ;
          $data['teacher_phone']=$request->teacher_phone;
           $data['teacher_address']=$request->teacher_address ;
            $data['teacher_email']=$request->teacher_email ;
             
               $data['teacher_department']=$request->teacher_department;

/**/

            //               $image=$request->file('teacher_image');
 
            // if ($image) {
            //  @ $image_name= str_random(20);
            //  @ $ext=strtolower($image->getClientOriginalExtension());
            //  @ $image_full_name=$image_name.'.'.$ext;
            //  @ $uplaod_path='image/';
            //  @$image_url=$uplaod_path.$image_full_name;
            //  @ $sucess=$image->move($uplaod_path,$image_full_name);
              
            //   if ($sucess) {

            //     $data['teacher_image']=$image_url;
                /**/



  
       DB::table('teacher_tbl')->where('teacher_id',$teacher_id)->update($data);
  
      // Session::put('message','update Contact Successfully!!'); /*give message when name and id sucessfully update to database*/
        Session::put('message','Student updates sucessfully');

               return Redirect::to('/all_teacher'); 


      
}








}
