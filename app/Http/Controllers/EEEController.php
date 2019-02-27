<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class EEEController extends Controller
{
    /*eee student function*/
   

         public function eee(){


       

        $eee_student= DB::table('student_tbl')
                  ->where(['student_department'=>2])
                  ->get();
          $manage_student=view('admin.eee')
              ->with('eee_info',$eee_student);
            return view('layout')
            ->with('eee',$manage_student);
            return view('admin.eee');
                  

        //return view('admin.all_student');


       }


}
