@extends('layouts.adminlte')
@section('content')
<main>
    <div>
      <div class="container-fluid">
          <div class="row">
            <form action="#" method="POST" enctype="multipart/form-data">
              @csrf
              <!-- /.row -->
              <div class="row">
                  <div class="col-12">
                    <div class="card card-secondary">
                      <div class="card-header">
                        <h3 class="card-title">Users List</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-responsive">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name of User's</th>
                              <th>Category</th>
                              <th>Trx ID</th>
                              <th>Payment Date</th>
                              <th>File</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach($users as $key=>$user)
                            <tr>
                              <td>{{$i}}</td>
                              <td style="width:250px">{{$user->name}}</td>
                              <td style="width:250px">{{$payments[$key]->membership_category}}</td>
                              <td style="width:250px">{{$payments[$key]->trx_id}}</td>
                              <td style="width:250px">{{$payments[$key]->date}}</td>
                              <td style="width:250px">
                              {{-- <img src="{{asset($user->file)}}" height="130px" width="180px"> --}}
                              @if($payments[$key]->file)
                              <a href="{{asset($payments[$key]->file)}}" class="btn btn-outline-secondary btn-sm" >Download</a>
                              @else
                              @endif
                           
                              </td>
                              <td style="width:250px">
                              <!-- Example single danger button -->
                              <div class="btn-group">
                                  @if($user->status == 0)
                                  <button type="button" class="btn btn-info btn-sm " aria-expanded="false">
                                      Unapproved
                                  </button>
                                  @else
                                  <button type="button" class="btn btn-success btn-sm " aria-expanded="false">
                                      Approved
                                  </button>
                                  @endif
                                
                              </div>
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
              </div>
            </form>
          </div>
      </div>
    </div>
</main>
@endsection