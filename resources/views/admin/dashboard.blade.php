@extends('layout')
@section('content')

         <!-- partial -->
        
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;" >All Students</h2>
                  @php
                    $all_student=DB::table('student_tbl')
                                  ->count('student_id');
                  @endphp

                  <p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;">{{$all_student}} </p>
                    
                  </style>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;">All Teacher</h2>
                   @php
                    $all_teacher=DB::table('teacher_tbl')
                                  ->count('teacher_id');
                  @endphp

            <p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;">{{$all_teacher}} </p>        
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;">Tution Fee</h2>
                <p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;">Monthly payament :2500</p>    
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
              <div class="col-sm-6 col-md-3 grid-margin">
                <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;">Revenue</h2>
                  <p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> 15% </p>  
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
                </div>
              </div>

               <!-- here all kinds of department student php function given below -->
             
                @php
               /* cse student*/
                  $cse_student= DB::table('student_tbl')
                  ->where(['student_department'=>1])
                  ->count('student_department');
                 
                  /*EEE student*/
                   $eee_student= DB::table('student_tbl')
                  ->where(['student_department'=>2])
                  ->count('student_department');

                   /*ECE student*/
                   $ece_student= DB::table('student_tbl')
                  ->where(['student_department'=>3])
                  ->count('student_department');

                   /*BBA student*/
                   $bba_student= DB::table('student_tbl')
                  ->where(['student_department'=>4])
                  ->count('student_department');

                   /*EEE student*/
                   $mba_student= DB::table('student_tbl')
                  ->where(['student_department'=>5])
                  ->count('student_department');
                 

   
                    
                  @endphp


            <div class="col-md-6 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"style="background-color: #4BB549 ; margin-left: 0px; margin-right: 0px;"> <h1 class="center" style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;" ><center><!-- Depertment of student count --> </center>  </h2>  
                        <h1 class="h3 text-dark" align="center"> Student department count </h1></div>  
                    </div>
                   
                   <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"style="background-color:#282583 ; margin-left: 0px; margin-right: 0px;"> <p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> CSE STUDENT </p>  
                        <h1 class="h1">{{$cse_student}}</h1></div>  
                    </div>



                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"style="background-color: #9C25D9 ; margin-left: 0px; margin-right: 0px;"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> EEE STUDENT </p>  <h1 class="h1">{{$eee_student}}</h1></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"style="background-color: #00D7FF ; margin-left: 0px; margin-right: 0px;"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> ECE STDUENT </p>  <h1 class="h1">{{$ece_student}}</h1></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"style="background-color: #DBF00E ; margin-left: 0px; margin-right: 0px;"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> BBA STUDENT </p>  <h1 class="h1">{{$bba_student}}</h1></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"style="background-color: #A33F25 ; margin-left: 0px; margin-right: 0px;"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> MBA STUDENT </p>  <h1 class="h1">{{$mba_student}}</h1></div>
                    </div>

                     {{--  <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> CSE STUDENT </p>  <h1 class="h1">{{$mba_student}}</h1></div>
                    </div> --}}
                    {{-- <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> CSE STUDENT </p>  <p class="mb-0">Post to Linkedin</p></div>
                    </div> --}}


                  </div>
                </div>
              </div>
            </div>

            <!-- teacher field -->
            <!-- teacher count retriving function are given below -->
              @php
               /* cse teacher*/
                  $cse_teacher= DB::table('teacher_tbl')
                  ->where(['teacher_department'=>1])
                  ->count('teacher_department');
                 
                  /*EEE teacher*/
                   $eee_teacher= DB::table('teacher_tbl')
                  ->where(['teacher_department'=>2])
                  ->count('teacher_department');

                   /*ECE teacher*/
                   $ece_teacher= DB::table('teacher_tbl')
                  ->where(['teacher_department'=>3])
                  ->count('teacher_department');

                   /*BBA teacher*/
                   $bba_teacher= DB::table('teacher_tbl')
                  ->where(['teacher_department'=>4])
                  ->count('teacher_department');

                   /*EEE teacher*/
                   $mba_teacher= DB::table('teacher_tbl')
                  ->where(['teacher_department'=>5])
                  ->count('teacher_department');
                 

   
                    
                  @endphp



            <div class="col-md-6 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"style="background-color: #4BB549 ; margin-left: 0px; margin-right: 0px;"> <h1 class="center" style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;" ><center><!-- Depertment of student count --> </center>  </h2>  
                        <h1 class="h3 text-dark" align="center"> Teacher department count </h1></div>  
                    </div>
                  <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"style="background-color:#6A40BE  ; margin-left: 0px; margin-right: 0px;"> <p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> CSE TEACHER </p>  
                        <h1 class="h1">{{$cse_teacher}}</h1></div>  
                    </div>


                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"style="background-color: #3F487B ; margin-left: 0px; margin-right: 0px;"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> EEE TEACHER </p>  <h1 class="h1">{{$eee_teacher}}</h1></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"style="background-color: #FF6A00 ; margin-left: 0px; margin-right: 0px;"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> ECE TEACHER </p>  <h1 class="h1">{{$ece_teacher}}</h1></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"style="background-color: #D727BB ; margin-left: 0px; margin-right: 0px;"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> BBA TEACHER </p>  <h1 class="h1">{{$bba_teacher}}</h1></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"style="background-color: #00B6FF ; margin-left: 0px; margin-right: 0px;"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> MBA TEACHER </p>  <h1 class="h1">{{$mba_teacher}}</h1></div>
                    </div>

                     {{--  <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> CSE STUDENT </p>  <h1 class="h1">{{$mba_student}}</h1></div>
                    </div> --}}
                    {{-- <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"><p style="font-family:cursive;font-size: 20px;font-weight:bold;text-align:center;"> CSE STUDENT </p>  <p class="mb-0">Post to Linkedin</p></div>
                    </div> --}}


                  </div>
                </div>
              </div>
            </div>
         

       
@endsection