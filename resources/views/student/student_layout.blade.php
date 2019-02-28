<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student enrolbvmlment</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/admin/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/admin/node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('/admin/bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/admin/images/favicon.html')}}" />
</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        {{-- <a class="navbar-brand brand-logo" href="{{URL::TO('/admin_dashboard')}}"><img src="admin/images/dash.png" alt="Logo"></a> --}}
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
            {{--   <i class="mdi mdi-message-outline"></i> --}}
            <i class="mdi mdi-details"></i>

           {{--    <i class="mdi mdi-filter-list"></i> --}}
              {{--  <div class="sender-img">
                  <img src="admin/images/menu.png" alt="">
             
                </div> --}}

              {{-- <span class="mdi mdi-filter-list"></span> --}}
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{URL::TO('/view_profile')}}">
                <div class="sender-img">
                  <img src="/admin/images/profile.png" alt="">
               
                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>
             
                </div>
              </a>
              
              <a class="dropdown-item" href="{{URL::TO('/settings')}}">
                <div class="sender-img">
                  <img src="/admin/images/settings.png" alt="">
             
                </div>
                <div class="sender">
                  <p class="Sende-name">Settings</p>
                  
                </div>
              </a>

               <a class="dropdown-item" href="{{URL::TO('/Log_out')}}">
                <div class="sender-img">
                  <img src="/admin/images/logout.png" alt="">
            
                </div>
                <div class="sender">
                  <p class="Sende-name">Log Out</p>
                  
                </div>
              </a>
              
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="admin/images/pro1.png" alt="">
            </div>
            <div class="details">
              <p class="user-name">Sumon</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::TO('/all_student')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Student</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::TO('/add_student')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add Student</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Student Information </span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::TO('/tution_fee')}}">Tution Fee</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/rtl-layout.html">Result</a>
                  </li>
                  
                </ul>
              </div>
            </li>
      
            
          
            <!--Apps start-->
            
            <!--Apps end-->
           
          </ul>
        </nav>


        <!-- partial -->

        <div class="content-wrapper">



                    {{-- This part is used for view message admin successfully log in --}}
                  <h3 class="alert-danger" style="font-size:20px;color:#FFFFFF; background:#39A010;">

                    <?php
                 
                $message=Session::get('message');
                if ($message) {

                  echo $message;
                  Session::put('message',null);
                }

                ?>


              </h3>


   <!-- partial -->
    {{--    
          <div class="content-wrapper"> --}}

          <div class="row">

           @yield('content')

          </div>
        </div>
     

 {{--     </div> --}}
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Salt Admin</a> &copy; 2017
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  
  <script src="{{asset('/admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('/admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('/admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('/admin/node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('/admin/node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('/admin/node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('/admin/node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('/admin/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('/admin/node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('/admin/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('/admin/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('/admin/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('/admin/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('/admin/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/admin/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('/admin/js/data-table.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/admin/js/misc.js')}}"></script>
  <script src="{{asset('/admin/js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('/admin/js/dashboard_1.js')}}"></script>
  <!-- End custom js for this page-->
/

    <!-- javascript modal is used for delete conformation -->



</body>




<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
