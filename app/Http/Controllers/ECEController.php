<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ECEController extends Controller
{
    /* ece function */
     public function ece(){


       

        $ece_student= DB::table('student_tbl')
                  ->where(['student_department'=>3])
                  ->get();
          $manage_student=view('admin.ece')
              ->with('ece_info',$ece_student);
            return view('layout')
            ->with('ece',$manage_student);
            return view('admin.ece');



        }
                  



}
