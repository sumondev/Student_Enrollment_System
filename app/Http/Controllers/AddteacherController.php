<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Redirect;

use Session;
Session_start(); 

class AddteacherController extends Controller
{
    
     public function addteacher(){

       	return view('admin.add_teacher');


       }



        public function saveteacher(Request $request){


        $data=array();
         $data['teacher_name']=$request->teacher_name ;
          $data['teacher_phone']=$request->teacher_phone;
           $data['teacher_address']=$request->teacher_address ;
            $data['teacher_email']=$request->teacher_email ;
              $data['teacher_password']=$request->teacher_password ;
               $data['teacher_department']=$request->teacher_department;
               

                          $image=$request->file('teacher_image');
 
            if ($image) {
             @ $image_name= str_random(20);
             @ $ext=strtolower($image->getClientOriginalExtension());
             @ $image_full_name=$image_name.'.'.$ext;
             @ $uplaod_path='image/';
             @$image_url=$uplaod_path.$image_full_name;
             @ $sucess=$image->move($uplaod_path,$image_full_name);
              
              if ($sucess) {

                $data['teacher_image']=$image_url;


               DB::table('teacher_tbl')->insert($data);
               Session::put('message','Teacher addeed sucessfully');

               return Redirect::to('/add_teacher'); 

                # code...
              }

             
              # code...
            }


            @ $data['teacher_image']=$image_url;


               DB::table('teacher_tbl')->insert($data);
               Session::put('message','Teacher addeed sucessfully');

               return Redirect::to('/add_teacher'); 




               // DB::table('teacher_tbl')->insert($data);
               // Session::put('message','Student addeed sucessfully');

               // return Redirect::to('/all_teacher'); 

       


         }


}
