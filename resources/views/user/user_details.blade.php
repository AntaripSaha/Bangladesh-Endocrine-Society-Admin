@extends('layouts.adminlte')
@section('content')
<main>
    <div>
        <div class="container-fluid">
            <!--/.row -->
            <div class="row">                
                <div class="col-12">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Personal Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Tel</th>
                            <th>NID</th>
                            <th>Address</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          @foreach($personal_information as $information)
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{$information->first_name}} {{$information->middle_name}} {{$information->last_name}}</td>
                            <td>{{$information->email}}</td>
                            <td>{{$information->phone}}</td>
                            <td>{{$information->tel}}</td>
                            <td>{{$information->nid}}</td>
                            <td>{{$information->address}}</td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
                          @endforeach
                        </tbody>
                      <!-- Button trigger modal -->
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <div class="col-12">
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Essential Supporting Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>Degree</th>
                            <th>Passing Year</th>
                            <th>Institutation</th>
                            <th>University</th>
                            <th>BMDC Reg No.</th>
                            <th>BMDC Reg Year</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          @foreach($essential_informations as $information)
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{$information->degree}}</td>
                            <td>{{$information->passing_year}}</td>
                            <td>{{$information->institutation}}</td>
                            <td>{{$information->university}}</td>
                            <td>{{$information->bmdc_reg_no}}</td>
                            <td>{{$information->bmdc_reg_year}}</td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
                          @endforeach
                        </tbody>
                      <!-- Button trigger modal -->
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <div class="col-12">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Associate Members</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>Institutation</th>
                            <th>From</th>
                            <th>To</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          @foreach($associate_members as $information)
                          <tr>
                            <td style="width: 25%">{{$i}}</td>
                            <td style="width: 20%">{{$information->institute}}</td>
                            <td style="width: 15%">{{$information->from}}</td>
                            <td style="width: 30%">{{$information->to}}</td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
                          @endforeach
                        </tbody>
                      <!-- Button trigger modal -->
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <div class="col-12">
                  <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title">Current Membership in Other Organization</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>Organization</th>
                            <th>Position</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          @foreach($current_organizations as $information)
                          <tr>
                            <td style="width: 25%">{{$i}}</td>
                            <td style="width: 20%">{{$information->name}}</td>
                            <td style="width: 15%">{{$information->position}}</td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
                          @endforeach
                        </tbody>
                      <!-- Button trigger modal -->
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <div class="col-12">
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h3 class="card-title">Current Appoinment</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>Designation</th>
                            <th>Hospital</th>
                            <th>From</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          @foreach($current_appoinments as $information)
                          <tr>
                            <td style="width: 25%">{{$i}}</td>
                            <td style="width: 20%">{{$information->designation}}</td>
                            <td style="width: 15%">{{$information->hospital}}</td>
                            <td style="width: 15%">{{$information->from}}</td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
                          @endforeach
                        </tbody>
                      <!-- Button trigger modal -->
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <div class="col-12">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Area of Clynical Interests</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>Area Name</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          @foreach($area_name as $key=>$information)
                          <tr>
                            <td style="width: 25%">{{$i}}</td>
                            <td style="width: 20%">{{$information[0]->name}}</td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
                          @endforeach
                        </tbody>
                      <!-- Button trigger modal -->
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
            </div>
          </div>
    </div>
</main>
@endsection      


