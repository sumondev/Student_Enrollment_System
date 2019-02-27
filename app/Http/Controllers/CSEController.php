<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class CSEController extends Controller
{
    /*cse student function*/
     // public function cse(){

     //   	return view('admin.cse');

     //   }


        public function cse(){

       	$cse_student= DB::table('student_tbl')
       						->where(['student_department'=>1])
       						->get();
       		$manage_student=view('admin.cse')
       				->with('cse_info',$cse_student);
       	    return view('layout')
       	    ->with('cse',$manage_student);
       	    return view('admin.cse');
       						

       	//return view('admin.all_student');


       }

}
