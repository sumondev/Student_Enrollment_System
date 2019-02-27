<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MBAController extends Controller
{
    /*mba student function */
     public function mba(){



     	$mba_student= DB::table('student_tbl')
                  ->where(['student_department'=>5])
                  ->get();
          $manage_student=view('admin.mba')
              ->with('mba_info',$mba_student);
            return view('layout')
            ->with('mba',$manage_student);
           
       	     return view('admin.mba');


       }

}
