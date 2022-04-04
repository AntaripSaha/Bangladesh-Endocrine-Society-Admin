@extends('layouts.adminlte')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <form action="{{route('file.associate.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <!-- /.row -->
              <div class="row">
                <div class="col-12">
                  <div class="card card-primary">
                    <div class="card-header"  style="width: 600px;>
                      <h3 class="card-title">For Associates Members</h3>
                    </div>
                    <p class="card-body">
                    Active participation in the field of endocrinology or research
                      activity with <br> endocrine disorders. 
                    
                    </p>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>Institute/Hospital</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          @foreach($associate_members as $member)
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{ Str::limit($member->institute, 28) }}</td>
                            <td>{{$member->from}}</td>
                            <td>{{$member->to}}</td>
                            <td>
                              <a href="{{route('file.associate.delete', ['id'=>$member->id])}}">
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="return myFunction();">
                                  Delete
                                </button>
                              </a>
                            </td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
                          @endforeach
                        </tbody>
                      <!-- Button trigger modal -->
                      </table>
                      <button type="button" class="btn btn-outline-info btn-sm"  style="margin-left: 20px; margin-bottom: 20px; margin-top: 15px;" data-toggle="modal" data-target="#exampleModal1">
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
              <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <th class="required">Institute/Hospital</th>
                              <th class="required">From</th>
                              <th>To</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input class="form-control" name="institute" type="text" required></td>
                              <td><input class="form-control" name="from" type="date" required></td>
                              <td><input class="form-control" name="to" type="date" ></td>
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
          </form>
          <form action="{{route('file.current.organization.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
              {{-- Current Membership in other Organization Start --}}
              <div class="row">
                <div class="col-12">
                  <div class="card card-secondary">
                    <div class="card-header"  style="width: 600px;>
                      <h3 class="card-title">Current Membership in other Organization</h3>
                    </div>
                    <p class="card-body">
                      Local or Foreign
                    </p>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>Current Organization</th>
                            <th>Position</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          @foreach($current_organizations as $current_organization)
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{Str::limit( $current_organization->name, 40)}}</td>
                            <td>{{$current_organization->position}}</td>
                            <td>
                              <a href="{{route('file.current.organization.delete', ['id'=>$current_organization->id])}}">
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="return myFunction();">
                                  Delete
                                </button>
                              </a>
                            </td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
                          @endforeach
                        </tbody>
                      <!-- Button trigger modal -->
                      </table>
                      <button type="button" class="btn btn-outline-info btn-sm"  style="margin-left: 20px; margin-bottom: 20px; margin-top: 15px;" data-toggle="modal" data-target="#exampleModal2">
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
              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <th class="required">Name of Organization</th>
                              <th class="required">Position</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input class="form-control" name="organization" type="text" required></td>
                              <td><input class="form-control" name="position" type="text" required></td>
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
              {{-- Current Membership in other Organization End --}}


          </form>
          <form action="{{route('file.current.appointment.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
              {{-- Current Membership in other Organization Start --}}
              <div class="row">
                <div class="col-12">
                  <div class="card card-info">
                    <div class="card-header" style="width: 600px;">
                      <h3 class="card-title">Current Appoinment</h3>
                    </div>
                    <p class="card-body">
                      Current Appoinment/Position
                    </p>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive ">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>S/L</th>
                            <th>Workplace</th>
                            <th>Designation</th>
                            <th>From</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          @foreach($current_appoinments as $current_appoinment)
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{Str::limit($current_appoinment->hospital,20)}}</td>
                            <td>{{Str::limit($current_appoinment->designation,15)}}</td>
                            <td>{{$current_appoinment->from}}</td>
                            <td>
                              <a href="{{route('file.current.appointment.delete', ['id'=>$current_appoinment->id])}}">
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="return myFunction();">
                                  Delete
                                </button>
                              </a>
                            </td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
                          @endforeach
                        </tbody>
                      <!-- Button trigger modal -->
                      </table>
                      <button type="button" class="btn btn-outline-info btn-sm"  style="margin-left: 20px; margin-bottom: 20px; margin-top: 15px;" data-toggle="modal" data-target="#exampleModal3">
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
              <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Current Appoinment/Position </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                          <thead>
                            <tr>
                              <th class="required">Designation</th>
                              <th class="required">Institute/Hospital/Workplace</th>
                              <th class="required">From</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input class="form-control" name="designation" type="text" required></td>
                              <td><input class="form-control" name="hospital" type="text" required></td>
                              <td><input class="form-control" name="from" type="date" required></td>
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
              {{-- Current Membership in other Organization End --}}
          </form>
          <form action="{{route('file.document.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <!-- Files Start-->
              <div class="row">
                <div class="col-12">
                  <div class="card card-success">
                    <div class="card-header"  style="width: 600px;>
                      <h3 class="card-title">Documents Section</h3>
                    </div>
                    <p style="margin-left: 20px;margin-top: 10px;">
                      Must be in PDF or JPEG Format.
                    </p>
                    <table class="table table-hover text-nowrap table-responsive">
                      <thead>
                        <tr>
                          <th>S/L</th>
                          <th>Name</th>
                          <th>Files</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td class="required">National ID Card.</td>
                          <td>
                            <input type="file" name="nid" required>
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>BMDC Registration Certificate.</td>
                          <td>
                            <input type="file" name="bmdc">
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="required">Certificates of all Degree/Diploma<br>Fellowship/Postgraduation.</td>
                          <td>
                            <input type="file" name="degree" required>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Proof for active participation in the<br>field of endocrinology or research
                            <br>activity with endocrine disorders <br>(for associates members) </td>
                          <td>
                            <input type="file" name="active_perticipation">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- Files End-->
            <button type="submit" class="btn btn-outline-info btn-sm" onclick="return savefunction();" style="width: 90px;margin-bottom: 50px; margin-left: 21px;">
              Save All
            </button>
            <a href="{{route('payment')}}">
              <button class="btn btn-outline-success btn-sm" style="margin-left: 19px;width: 110px;margin-bottom: 50px; !important;" type="button">
                Next Page
              </button>
            </a>
          </form>
        </div>
      </div>
@endsection