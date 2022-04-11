@extends('layouts.admin')
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
                            <td style="width: 10%">{{$i}}</td>
                            <td style="width: 15%">{{$information->first_name}} {{$information->middle_name}} {{$information->last_name}}</td>
                            <td style="width: 15%">{{$information->email}}</td>
                            <td style="width: 15%">{{$information->phone}}</td>
                            @if($information->tel)
                            <td style="width: 15%">{{$information->tel}}</td>
                            @else
                            <td style="width: 15%">----</td>
                            @endif
                            <td style="width: 15%">{{$information->nid}}</td>
                            <td style="width: 15%">{{$information->address}}</td>
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
                            <td style="width: 10%">{{$i}}</td>
                            <td style="width: 15%">{{$information->degree}}</td>
                            <td style="width: 15%">{{$information->passing_year}}</td>
                            <td style="width: 15%">{{$information->institutation}}</td>
                            <td style="width: 15%">{{$information->university}}</td>
                            <td style="width: 15%">{{$information->bmdc_reg_no}}</td>
                            <td style="width: 15%">{{$information->bmdc_reg_year}}</td>
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
                      <h3 class="card-title">Attached Files</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>NID</th>
                            <th>BMDC Reg Certificate</th>
                            <th>Degree</th>
                            <th>Active Participation</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="width: 10%">1</td>
                            <td style="width: 22.5%">
                              @if($file_uploads[0]->nid)
                              <a href="{{asset($file_uploads[0]->nid)}}" class="btn btn-outline-secondary btn-sm" >Download</a>
                              @else
                              @endif
                            </td>
                            <td style="width: 22.5%">
                              @if($file_uploads[0]->bmdc_reg_certificate)
                              <a href="{{asset($file_uploads[0]->bmdc_reg_certificate)}}" class="btn btn-outline-secondary btn-sm" >Download</a>
                              @else
                              @endif
                            </td>
                            <td style="width: 22.5%">
                              @if($file_uploads[0]->certificate_all_degree)
                              <a href="{{asset($file_uploads[0]->certificate_all_degree)}}" class="btn btn-outline-secondary btn-sm" >Download</a>
                              @else
                              @endif
                            </td>
                            <td style="width: 22.5%">
                              @if($file_uploads[0]->active_perticipation)
                              <a href="{{asset($file_uploads[0]->active_perticipation)}}" class="btn btn-outline-secondary btn-sm" >Download</a>
                              @else
                              @endif
                            </td>
                          </tr>
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
                            <td style="width: 35%">{{$information->designation}}</td>
                            <td style="width: 20%">{{$information->hospital}}</td>
                            <td style="width: 20%">{{$information->from}}</td>
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
                            <td style="width: 35%">{{$information->institute}}</td>
                            <td style="width: 20%">{{$information->from}}</td>
                            <td style="width: 20%">{{$information->to}}</td>
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
                            <td style="width: 60%">{{$information->name}}</td>
                            <td style="width: 20%">{{$information->position}}</td>
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
                            <td style="width: 10%">{{$i}}</td>
                            <td style="width: 50%">{{$information[0]->name}}</td>
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
                <a href="{{route('member.download',['id'=>$pdf_id])}}">
                  <button class="btn btn-info btn-sm" style="margin-left: 100%; padding: 10%;width: 155px;margin-bottom: 40%;">
                   PDF Download
                  </button>
                </a>
            </div>
          </div>
    </div>
</main>
@endsection      


