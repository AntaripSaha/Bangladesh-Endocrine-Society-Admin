@extends('layouts.adminlte')
@section('content')
<main>
  <style>
    .right_section{
      margin-left: 50%;
      width: 100%;
      margin-top: -29%;
    }
    .p_lable{
      margin-right: 2%;

    }
  </style>
    <div>
        <div class="container-fluid">
            <!--/.row -->
            <div class="row"> 
              <div class="col-12">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Personal Information</h3>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="row">
                          <div class="col-2">
                            <label class="required">Name in Full:  </label>
                          </div>
                          <div class="col-3">
                            <input type="text" class="form-control" placeholder="First" name="first_name"  value="{{$personal_information->first_name}}" required>
                          </div>
                          <div class="col-3">
                            <input type="text" class="form-control" placeholder="Middle" name="middle_name"  value="{{$personal_information->middle_name}}">
                          </div>
                          <div class="col-4">
                            <input type="text" class="form-control" placeholder="Last" name="last_name"  value="{{$personal_information->last_name}}">
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                          <label class="required" >Date of Birth: </label>
                        </div>
                        <div class="col-4">
                          <input type="date" class="form-control" name="birth_date" required  value="{{$personal_information->bith_date}}">
                        </div>
                        <div class="col-2">
                          <label class="required">Gender: </label>
                        </div>
                        <div class="form-group col-2">
                          <div class="form-check">
                            <input class="form-check-input" type="radio"  name="gender" value="male">
                            <label class="form-check-label">Male </label>
                          </div>
                          <div class="form-check col-2">
                            <input class="form-check-input" type="radio"  name="gender" value="female">
                            <label class="form-check-label">Female </label>
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
                          <input type="text" class="form-control" placeholder="Full Name" name="father_name"  value="{{$personal_information->father_name}}">
                        </div>
                        <div class="col-2">
                          <label>Mother's Name:</label>
                        </div>
                        <div class="col-4">
                          <input type="text" class="form-control" placeholder="Full Name" name="mother_name"  value="{{$personal_information->mother_name}}" >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                          <div class="row">
                            <div class="col-2">
                              <label class="required">Phone: </label>
                            </div>
                            <div class="col-5">
                              <input type="text" class="form-control" placeholder="phone" name="phone" required  value="{{$personal_information->phone}}"> 
                            </div>
                            <div class="col-5">
                              <input type="text" class="form-control" placeholder="phone" name="tel"  value="{{$personal_information->tel}}"> 
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                          <label class="required">Email Address:</label>
                        </div>
                        <div class="col-10">
                          <input type="email" class="form-control" id="" name="email" placeholder="Enter email" value="{{$personal_information->email}}" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                          <label >National ID No:</label>
                        </div>
                        <div class="col-10">
                          <input type="text" class="form-control" id="" name="nid" placeholder="Enter NID"  value="{{$personal_information->nid}}" >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                          <label class="required">Present/Mailling Address: </label>
                        </div>
                        <div class="col-sm-10">
                          <!-- textarea -->
                          <div class="form-group">
                            <textarea class="form-control" name="address" rows="3" placeholder="Enter ...">{{$personal_information->address}}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-2">
                          <label class="required">Image: </label>
                        </div>
                        <div class="col-8">
                          <input type="file" name="image" required>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  {{-- card body --}}
                </div>
                
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
                            <td>
                              <input type="text" name="degree[]" value="{{$information->degree}}">
                            </td>
                            <td>
                              <input type="text" name="passing_year[]" value="{{$information->passing_year}}">
                            </td>
                            <td>
                              <input type="text" name="institutation[]" value="{{$information->institutation}}">
                            </td>
                            <td>
                              <textarea name="university[]" id="" cols="30" rows="2">{{$information->university}}</textarea>
                            </td>
                            <td>
                              <input type="text" name="bmdc_reg_no[]" value="{{$information->bmdc_reg_no}}">
                            </td>
                            <td>
                              <input type="text" name="bmdc_reg_yr[]" value="{{$information->bmdc_reg_year}}">
                            </td>
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
                            <td style="width: 10%">{{$i}}</td>
                            <td style="width: 20%">
                              <input type="text" name="institute[]" value="{{$information->institute}}">
                            </td>
                            <td style="width: 20%">
                              <input type="date" name="from[]" value="{{$information->from}}">
                            </td>
                            <td style="width: 30%">
                              <input type="date" name="to[]" value="{{$information->to}}">
                            </td>
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
                            <td style="width: 10%">{{$i}}</td>
                            <td style="width: 20%">
                              <input type="text" name="ca_designation" value="{{$information->designation}}">
                            </td>
                            <td style="width: 20%">
                              <input type="text" name="ca_hospital" value="{{$information->hospital}}">
                            </td>
                            <td style="width: 30%">
                              <input type="text" name="ca_from" value="{{$information->from}}">
                            </td>
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
                            <td style="width: 20%">{{$i}}</td>
                            <td style="width: 40%">
                              <input type="text" name="co_name" value="{{$information->name}}">
                            </td>
                            <td style="width: 40%">
                              <input type="text" name="co_position" value="{{$information->position}}">
                            </td>
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

                {{-- <div class="col-12">
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
                </div> --}}

                <div>
                  <button type="button" class="btn btn-success" style="margin-bottom: 200%; margin-left:200%; width: 200%">
                    Save All
                  </button>
                </div>
            </div>
          </div>
    </div>
</main>
@endsection      