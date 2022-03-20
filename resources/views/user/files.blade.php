@extends('layouts.adminlte')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <form action="{{route('file.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <!-- /.row -->
              <div class="row">
                <div class="col-12">
                  <div class="card card-primary">
                    <div class="card-header"  style="width: 600px;>
                      <h3 class="card-title">For Associates Members</h3>
                    </div>
                    <p class="card-body">
                    Active participation in the field of endocrinology or <br> research
                      activity with endocrine disorders. 
                    
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
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          <tr>
                            <td>{{$i}}</td>
                            <td>Dhaka Medical College & Hospital</td>
                            <td>20th March 2016</td>
                            <td>20th March 2022</td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
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
                              <th>Institute/Hospital</th>
                              <th>From</th>
                              <th>To</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input class="form-control" name="institute" type="text"></td>
                              <td><input class="form-control" name="from" type="date"></td>
                              <td><input class="form-control" name="to" type="date"></td>
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
          <form action="#">
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
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          <tr>
                            <td>{{$i}}</td>
                            <td>Dhaka Medical College & Hospital</td>
                            <td>Lecturer</td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
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
                              <th>Name of Organization</th>
                              <th>Position</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input class="form-control" name="organization" type="text"></td>
                              <td><input class="form-control" name="position" type="text"></td>
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
          <form action="#">
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
                            <th>Institute/Hospital/Workplace</th>
                            <th>From</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
                          <tr>
                            <td>{{$i}}</td>
                            <td>Dhaka Medical College & Hospital</td>
                            <td>20th March 2016</td>
                          </tr>
                          @php
                          $i = $i+1;
                          @endphp
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
                              <th>Designation</th>
                              <th>Institute/Hospital/Workplace</th>
                              <th>From</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input class="form-control" name="organization" type="text"></td>
                              <td><input class="form-control" name="institute" type="text"></td>
                              <td><input class="form-control" name="from" type="date"></td>
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
          <form action="#">
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
                          <td>National ID Card.</td>
                          <td>
                            <input type="file" required>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>BMDC Registration Certificate.</td>
                          <td>
                            <input type="file">
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Certificates of all Degree/Diploma<br>Fellowship/Postgraduation.</td>
                          <td>
                            <input type="file" required>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Proof for active participation in the<br>field of endocrinology or research
                            <br>activity with endocrine disorders <br>(for associates members) </td>
                          <td>
                            <input type="file">
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
            <button type="submit" class="btn btn-outline-success btn-sm" style="width: 90px;margin-bottom: 50px; margin-left: 21px;">
              Save All
            </button>
          </form>
        </div>
      </div>
@endsection