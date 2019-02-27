@extends('layout')
@section('content')


<div  class="container">
{{-- 
<div class="col-8 col-lg-8 grid-margin "> --}}
	  <div  class="row justify-content-md-center">

	
                  <div style="background-color: #8EB9FF ; margin-left: 0px; margin-right: 0px;   lass="card "> 
                      <div  class="card-body ">
                          <h2 class="card bg- text-dark"> <center> <b>  Student regestration form </b> </center></h2>

                          {{-- form subnit  --}}
                          <form  class="forms-sample" method="post" action="{{url('/save_Student')}}" enctype="multipart/form-data" >
                          	
                       {{-- here enctype="multipart/formdata" is used form image or mutimedia data --}}
                                  {{csrf_field()}} {{-- token generation --}}

                          	
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="student_name" placeholder="name" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Roll</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="student_roll" placeholder="Roll number" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Father Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="student_fathername" placeholder="student_fathername"required="">
                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Mother Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="student_mothername" placeholder="mother_name"required="">
                              </div>



                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input bg-light text-black" id="exampleInputEmail1" aria-describedby="emailHelp"name="student_email" placeholder="Enter your Email Number "required="">
                                  <small id="emailHelp" class="form-text ">We'll never share your email with anyone else.</small>
                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Phone</label>
                                  <input type="phone" class="form-control" id="exampleInputPassword1"name="student_phone" placeholder="Phone number"required="">
                              </div>

                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="student_address"placeholder="address"required="">
                              </div>
                            
                            
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password </label>
                                  <input type="password" class="form-control" id="exampleInputPassword1"name="student_password" placeholder="input your password"required="">
                                 <small>you don't share your password with any other</small>
                              </div>
                              <div class="form-group">
                                  <label>Upload photo</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm bg-dark "><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" id="exampleInputFile2" name="student_image" aria-describedby="fileHelp"required="">
                                      <small id="fileHelp" class="form-text text-muted bg-light text-white">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                       
                                    </div>
                                  </div>
                              </div>



                             <div class="form-group">
                                  <label for="exampleInputPassword1">Addmisson year</label>
                                  <input type="date" class="form-control" id="exampleInputPassword1"name="student_addmissionyear" placeholder="addmission year"required="">
                              </div>


                                <div class="form-group">
                                  <label for="exampleInputPassword1">Department</label>
                                  {{-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="department"> --}}
                                  <select class="form-control" name="student_department"required="">
                                  	<option value="1"> CSE </option>
                                  	<option value="2"> EEE </option>
                                  	<option value="3"> ECE </option>
                                  	<option value="4"> BBA </option>
                                  	<option value="5"> MBA </option>
                                  
                                  </select>
                              </div>
                            
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

</div>

@endsection