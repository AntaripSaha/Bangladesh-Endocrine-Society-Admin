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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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

        <form action="{{route('essential.information.add')}}" method="POST" enctype="multipart/form-data">
          @csrf

        <!-- /.row -->
        <div class="row">
          <div class="col-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap table-responsive">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name of Degree</th>
                      <th>Year of Passing</th>
                      <th>Institute</th>
                      <th>University</th>
                      <th>BMDC Reg. No.</th>
                      <th>BMDC Reg. Yr.</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp

                    @foreach($essential_infos as $info)
                    <tr>
                      <td>{{$i}}</td>
                      <td>{{$info->degree}}</td>
                      <td>{{$info->passing_year}}</td>
                      <td>{{$info->institutation}}</td>
                      <td>{{$info->university}}</td>
                      <td>{{$info->bmdc_reg_no}}</td>
                      <td>{{$info->bmdc_reg_year}}</td>
                    </tr>
                    @php
                    $i = $i+1;
                    @endphp
                    @endforeach
                   
                  </tbody>
                  
                <!-- Button trigger modal -->
                </table>
                <button type="button" class="btn btn-outline-info btn-sm"  style="margin-left: 20px; margin-bottom: 20px; margin-top: 15px;" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-plus"></i>
                  Add New Field
                </button>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

         <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Field</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Name of Degree</th>
                        <th>Year of Passing</th>
                        <th>Institute</th>
                        <th>University</th>
                        <th>BMDC Reg. No.</th>
                        <th>BMDC Reg. Yr.</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input class="form-control" name="degree" type="text"></td>
                        <td><input class="form-control" name="passing_year" type="text"></td>
                        <td><input class="form-control" name="institutation" type="text"></td>
                        <td><input class="form-control" name="university" type="text"></td>
                        <td><input class="form-control" name="bmdc_reg_no" type="text"></td>
                        <td><input class="form-control" name="bmdc_reg_year" type="text"></td>
                      </tr>
                    </tbody>
                  </table>

                </div>
                
              </div>
              <div class="modal-footer">
                <button class="btn btn-outline-success btn-sm" type="submit">ADD</button>
                <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Close</button>
              </div>
           </div>
          </div>
        </div>
        <!-- /.row -->
        <button class="btn btn-outline-success btn-sm"  style="margin-left: 20px;margin-top: 20px;margin-bottom: 30px;width: 85px;" type="submit">
          Save All
        </button>
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

<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>


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
