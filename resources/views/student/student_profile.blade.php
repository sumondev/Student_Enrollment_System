@extends('student.student_layout')
@section('content')


  <div class="container-fluid">
          <div class="row user-profile">
            <div class="col-lg-8 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_description_profile->student_image)}}" height="100" width="150" style="border-radius: 50%;" >
                {{--   <img src="http://via.placeholder.com/47x47" alt=""> --}}
                  <p class="name">{{$student_description_profile->student_name}}</p>

              
                  <p class="designation">
                  @if ($student_description_profile->student_department==1)
                                <span class="label label-sucess"> {{'CSE'}}</span>
                               @elseif ($student_description_profile->student_department==2)
                                <span class="label label-primary"> {{'EEE'}}</span>
                                 @elseif ($student_description_profile->student_department==3)
                                <span class="label label-warning"> {{'ECE'}}</span>
                                 @elseif ($student_description_profile->student_department==4)
                                <span class="label label-info"> {{'BBA'}}</span>
                                   @elseif ($student_description_profile->student_department==5)
                                <span class="label label-sucess"> {{'MBA'}}</span>
                                   @else 
                                <span class="label label-danger"> {{'Not defiend'}}</span>
                           
                                 @endif
                     </p>            

                 {{--  <p class="designation">{{$student_description_profile->student_department}}</p> --}}
                  <a class="email" href="#">{{$student_description_profile->student_email}}</a>
                  <a class="number" href="#">{{$student_description_profile->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  {{-- <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul> --}}
                  {{-- <div class="wrapper about-user"> --}}
                  	<div class="container-fluid">
                    <h2 class="card-title mt-4 mb-3">About</h2>

                    <div class="p-3 mb-2 bg-dark text-white" align="center"><h1>*********** your all information  provides here*************</h1></div>



                   
                  </div>
                  {{-- <div class="info-links">
                    <a class="website" href="https://www.bootstrapdash.com/">
                      <i class="icon-globe icon"></i>
                      <span>https://www.bootstrapdash.com/</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon"></i>
                      <span>https://www.facebook.com/johndoe</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon"></i>
                      <span>https://www.linkedin.com/johndoe</span>
                    </a> --}}
                  </div>


{{-- table start --}}

				<div class="container-fluid">
					
					   <tbody>
									
                  <table id="" class="table table-striped" style="width:100%;">
                 {{--    <thead> --}}
                      <tr>
                         
                          <th>Student Name</th>
                          		
                          	    <td>{{$student_description_profile->student_name}}</td>
                       </tr>

                       <tr>
                       	

                           <th>Student Roll </th>
                               <td>{{$student_description_profile->student_roll}}</td> 
                       </tr>

                 <tr>

                 	<th>Father Name</th>
                 	<td>{{$student_description_profile->student_fathername}}</td>
                 	


                 </tr>

                 <th>Mother Namae </th>
                  <td>{{$student_description_profile->student_mothername}}</td>
                 <tr>
                 	<th>Addmissoin Year</th>
                 	<td> {{$student_description_profile->student_addmissionyear}}</td>

                 </tr>


                 <tr>
                 	


                 </tr>

                 <tr>
                 	

                 </tr>


                       <tr>
                       	   <th>Phone</th>
                       	   <td>{{$student_description_profile->student_phone}}</td>

                       </tr>

                      <tr>
                      	<th>Address</th>
                      	 <td>{{$student_description_profile->student_address}}</td>
                      </tr>

                      <tr>

                      	 <th>Departmnet</th>
                       <td> 
                            @if ($student_description_profile->student_department==1)
                                <span class="label label-sucess"> {{'CSE'}}</span>
                               @elseif ($student_description_profile->student_department==2)
                                <span class="label label-primary"> {{'EEE'}}</span>
                                 @elseif ($student_description_profile->student_department==3)
                                <span class="label label-warning"> {{'ECE'}}</span>
                                 @elseif ($student_description_profile->student_department==4)
                                <span class="label label-info"> {{'BBA'}}</span>
                                   @elseif ($student_description_profile->student_department==5)
                                <span class="label label-sucess"> {{'MBA'}}</span>
                                   @else 
                                <span class="label label-danger"> {{'Not defiend'}}</span>
                           
                                 @endif

                             </td>

                      </tr>
                    


               {{--      </thead> --}}
                 
                 
                     
                    </tbody>
      
                  </table>

            </div>


{{-- table end --}}


                </div>
              </div>
            </div>
           
          </div>
        </div>
    


@endsection