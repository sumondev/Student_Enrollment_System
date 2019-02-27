<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BBAController extends Controller
{
    /*BBA student function*/
     public function bba(){

     		$bba_student= DB::table('student_tbl')
                  ->where(['student_department'=>4])
                  ->get();
          $manage_student=view('admin.bba')
              ->with('bba_info',$bba_student);
            return view('layout')
            ->with('bba',$manage_student);
            return view('admin.bba');






       }

}
