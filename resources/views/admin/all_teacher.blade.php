@extends('layout')
@section('content')



 <div class="card">
          	 <h1 class="page-title" style="background-color: #8A16E8 ; margin-left: 0px; margin-right: 0px;"  align="center"> <b>All Teacher List</b></h1>
            <div class="card-body">


                      </div>
            <!-- deleted message show start -->

         
            <p class="alert-sucess" style="font-size:20px;color: blue; background:#00ff00;" >

               <?php
                 
                $message=Session::get('message');
                if ($message) {

                  echo $message;
                  Session::put('message',null);
                }

                ?>


              </p>
        
                <!-- deleted message show end -->





              <h2 class="card-title"> Data table </h2>

              <div class="row">

                <div class="col-12">
           

                  <table id="order-listing" class="table table-striped" style="width:100%;" >
              	
                    <thead>

                      <tr class="" >

                          <th style="background-color: #2ED037 ; margin-left: 0px; margin-right: 0px;">Teacher Name </th>
                          <th style="background-color: #2AFFFF ; margin-left: 0px; margin-right: 0px;">Phone Number</th>
                          <th style="background-color: #FF6A00 ; margin-left: 0px; margin-right: 0px;">Adderess</th>
                          <th style="background-color: #D727BB ; margin-left: 0px; margin-right: 0px;">Image</th>
                          <th style="background-color: #FFFF77 ; margin-left: 0px; margin-right: 0px;">Teacher Email</th>
                          <th style="background-color: #00B6FF ; margin-left: 0px; margin-right: 0px;">Departmnet</th>
                          <th style="background-color: #F3350B ; margin-left: 0px; margin-right: 0px;">Actions</th>

{{-- style is used form table heading colour --}}

                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_teacher_info as $v_teacher)   {{-- $V_teacher meanns view teacher --}}
                      <tr>
                          
                          <td>{{$v_teacher->teacher_name}}</td> 
                          <td>{{$v_teacher->teacher_phone}}</td>
                          <td>{{$v_teacher->teacher_address}}</td>
                          <td><img src="{{URL::to($v_teacher->teacher_image)}}" height="80" width="100" style="border-radius: 50%;" >
                            
                         </td>

 
                          <td>{{$v_teacher->teacher_email}}</td>
                        
                          <td> 
                            @if ($v_teacher->teacher_department==1)
                                <span class="label label-sucess"> {{'CSE'}}</span>
                               @elseif ($v_teacher->teacher_department==2)
                                <span class="label label-primary"> {{'EEE'}}</span>
                                 @elseif ($v_teacher->teacher_department==3)
                                <span class="label label-warning"> {{'ECE'}}</span>
                                 @elseif ($v_teacher->teacher_department==4)
                                <span class="label label-info"> {{'BBA'}}</span>
                                   @elseif ($v_teacher->teacher_department==5)
                                <span class="label label-sucess"> {{'MBA'}}</span>
                                   @else 
                                <span class="label label-danger"> {{'Not defiend'}}</span>
                                @endif


                          </td>
                         
                          <td>
                            {{-- <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button> --}}


                            {{--  --}}
                            <a href="{{URL::to('/view_teacher/'.$v_teacher->teacher_id)}}" class="btn btn-info" > View  </a>

                            <a href="{{URL::to('/edit_teacher/'.$v_teacher->teacher_id)}}"  class="btn btn-Sucess  btn-lg bg-dark" >Edit  </a>


                        {{--     <span class="glyphicon glyphicon-pencil"></span>
                            <button type="button" class="btn btn-success"><i class="mdi mdi-cloud-download"></i>Upload</button> --}}
                            
                            <a href="{{URL::to('/delete_teacher/'.$v_teacher->teacher_id)}}" {{-- class="btn btn-danger" --}} id="delete"><button type="button" class="btn btn-danger"><i class="mdi mdi-delete"></i>Delete</button>  </a>


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






@endsection