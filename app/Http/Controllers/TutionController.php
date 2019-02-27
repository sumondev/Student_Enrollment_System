<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutionController extends Controller
{
    /*tution function*/

    public function tution(){

       	return view('admin.tution_fee');


       }
}
