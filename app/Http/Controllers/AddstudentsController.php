<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use Illuminate\Support\Facades\Redirect;

use Session;
Session_start(); 


class AddstudentsController extends Controller
{
    //addstudent function
    
       public function addstudent(){

       	return view('admin.add_student');


       }


        public function savestudent(Request $request){


        $data=array();
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

                     $image=$request->file('student_image');
 
            if ($image) {
             @ $image_name= str_random(20);
             @ $ext=strtolower($image->getClientOriginalExtension());
             @ $image_full_name=$image_name.'.'.$ext;
             @ $uplaod_path='image/';
             @$image_url=$uplaod_path.$image_full_name;
             @ $sucess=$image->move($uplaod_path,$image_full_name);
              
              if ($sucess) {

                $data['student_image']=$image_url;


               DB::table('student_tbl')->insert($data);
               Session::put('message','Student addeed sucessfully');

               return Redirect::to('/all_student'); 

                # code...
              }

             
              # code...
            }


            @ $data['student_image']=$image_url;


               DB::table('student_tbl')->insert($data);
               Session::put('message','Student addeed sucessfully');

               return Redirect::to('/all_student'); 




               // DB::table('student_tbl')->insert($data);
               // Session::put('message','Student addeed sucessfully');

               // return Redirect::to('/add_Student'); 

       


         }



}
