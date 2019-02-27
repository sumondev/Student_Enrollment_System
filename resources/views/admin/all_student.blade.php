@extends('layout')
@section('content')


{{-- <div class="content-wrapper"> --}}
         
          <div class="card">
          	 <h1 class="page-title" style="background-color: #8EB9FF ; margin-left: 0px; margin-right: 0px;"  align="center">All Contact List</h1>
            <div class="card-body">


                      </div>
            <!-- deleted message show start -->

         
            <p class="alert-sucess" style="font-size:20px;color: blue; background:#00ff00;">

                    <?php
                 
                $message=Session::get('message');
                if ($message) {

                  echo $message;
                  Session::put('message',null);
                }

                ?>


              </p>
        
                <!-- deleted message show end -->





              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">


                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student_Roll </th>
                          <th>student_Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Departmnet</th>
                          <th>Actions</th>



                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_student_info as $v_student)   {{-- $V_student meanns view student --}}
                      <tr>
                          
                          <td>{{$v_student->student_roll}}</td> 
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td><img src="{{URL::to($v_student->student_image)}}" height="80" width="100" style="border-radius: 50%;" >
                            
                         </td>
 
                          <td>{{$v_student->student_address}}</td>
                        
                          <td> 
                            @if ($v_student->student_department==1)
                                <span class="label label-sucess"> {{'CSE'}}</span>
                               @elseif ($v_student->student_department==2)
                                <span class="label label-primary"> {{'EEE'}}</span>
                                 @elseif ($v_student->student_department==3)
                                <span class="label label-warning"> {{'ECE'}}</span>
                                 @elseif ($v_student->student_department==4)
                                <span class="label label-info"> {{'BBA'}}</span>
                                   @elseif ($v_student->student_department==5)
                                <span class="label label-sucess"> {{'MBA'}}</span>
                                   @else 
                                <span class="label label-danger"> {{'Not defiend'}}</span
                                @endif


                          </td>
                         
                          <td>
                         {{--    <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button> --}}


                            {{--  --}}
                            <a href="{{URL::to('/view_student/'.$v_student->student_id)}}" class="btn btn-info" > View  </a>

                            <a href="{{URL::to('/edit_student/'.$v_student->student_id)}}" class="btn btn-info" > Edit  </a>
                            
                            <a href="{{URL::to('/delete_student/'.$v_student->student_id)}}" class="btn btn-danger" id="delete"> Delete </a>


                            {{--  --}}




                          </td>
                      </tr>
                    
                     
                    </tbody>
                  @endforeach  
                  </table>
                </div>
              </div>
            </div>
          </div>
       {{--  </div>
 --}}

@endsection