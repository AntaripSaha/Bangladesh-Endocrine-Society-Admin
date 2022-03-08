<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BES | Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">User Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Request
              </p>
            </a>
          </li>

     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="app"> 
        @include('layouts.flash_messages')
        @yield('content')
      </div>

      <div class="container-fluid">
        <div class="row">

        <form action="{{route('user.information')}}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <!-- For Personale Information Start-->
          <div class="card card-info">

            <div class="card-header">
              <h3 class="card-title">Personal Information</h3>
            </div>

            <div class="card-body">

              <div class="form-group">
                <div class="row">
                    <div class="col-2">
                      <label>Name in Full:</label>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="First" name="first_name" required>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Middle" name="middle_name">
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Last" name="last_name">
                    </div>
                  </div>
              </div>

              
              <div class="form-group">
                <div class="row">

                  <div class="col-2">
                    <label>Date of Birth:</label>
                  </div>
                  <div class="col-3">
                    <input type="date" class="form-control" name="birth_date" required>
                  </div>
                  <div class="col-2">
                    <label>Gender:</label>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  name="gender" value="male">
                      <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  name="gender" value="female">
                      <label class="form-check-label">Female</label>
                    </div>

                  </div>

                </div>
              </div>


              <div class="form-group">
                <div class="row">
                  <div class="col-2">
                    <label>Father's Name:</label>
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="Full Name" name="father_name" required>
                  </div>
                  <div class="col-2">
                    <label>Mother's Name:</label>
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="Full Name" name="mother_name" required>
                  </div>
                </div>
              </div>


              <div class="form-group">
                    <div class="row">
                      <div class="col-2">
                        <label>Phone:</label>
                      </div>
                      <div class="col-5">
                        <input type="text" class="form-control" placeholder="phone" name="phone" required> 
                      </div>
                      <div class="col-5">
                        <input type="text" class="form-control" placeholder="phone" name="tel"> 
                      </div>
                    </div>
              </div>


              <div class="form-group">
                <div class="row">
                  <div class="col-2">
                    <label for="">Email address</label>
                  </div>
                  <div class="col-8">
                    <input type="email" class="form-control" id="" name="email" placeholder="Enter email" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-2">
                    <label for="">National ID No.</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control" id="" name="nid" placeholder="Enter NID" required>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <div class="row">
                  <div class="col-2">
                    <label for="">Present/Mailling Address: </label>
                  </div>
                  <div class="col-sm-8">
                    <!-- textarea -->
                    <div class="form-group">
                      <textarea class="form-control" name="address" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                  </div>
                </div>
              </div>


              <button type="submit" class="btn btn-outline-info" style="margin-left: 126px; width:140px !important;">
                Submit
              </button>




            </div>
            {{-- card body --}}
          </div>
        <!-- For Personale Information End-->

      </form>

        </div>
      </div>
    </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('backend/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend/js/pages/dashboard3.js')}}"></script>
</body>
</html>
