@extends('student.student_layout')
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
             
              


       
@endsection