@extends('student.student_layout')
@section('content')


<div class="col-6 col-lg-6 grid-margin ">
	  {{-- div  class="row justify-content-md-center"> --}}


             <p class="alert-danger" style="font-size:20px;color:#FFFFFF; background:#1C943B;">

                    <?php
                 
                $message=Session::get('message');
                if ($message) {

                  echo $message;
                  Session::put('message',null);
                }

                ?>


              </p>

	
                  <div style="background-color:#804AB3  ; margin-left: 0px; margin-right: 0px;   lass="card "> 

			


                      <div  class="card-body ">
                          <h2 class="card bg- text-dark"> <center>  Student profile Edit form  </center></h2>

                           <form  class="forms-sample" method="post" action="{{URL::to('/update_student_profile')}}" >

                          
                       {{-- here enctype="multipart/formdata" is used form image or mutimedia data --}}
                                  {{csrf_field()}} {{-- token generation --}}




                          	

  {{-- This part is used for retrive data value to show form and genrates new data from update value .................................................--}}



                           

                               <div class="form-group">
                                  <label for="exampleInputPassword1" class="h4">Phone</label>
                                  <input type="phone" class="form-control" id="exampleInputPassword1"name="student_phone" value="{{($student_description_edit->student_phone)}}">
                              </div>

                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1"class="h4" >Address</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="student_address" value="{{($student_description_edit->student_address)}}">
                              </div>
                            
                            
                              <div class="form-group">
                                  <label for="exampleInputPassword1"class="h4">Password </label>
                                  <input type="password" class="form-control" id="exampleInputPassword1"name="student_password" value="{{($student_description_edit->student_password)}}" >
                                    
                               
                                 <small>you don't share your password with any other</small>
                              </div>
                             
                            
                              <button type="submit" class="btn btn-success btn-block">update</button>
                          </form>
                      </div>
                  </div>
              </div>


</div>

@endsection