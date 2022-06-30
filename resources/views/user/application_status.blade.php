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
                        <h3 class="card-title">Application Status</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-responsive">
                          <thead>
                            <tr>
                              <th>S/L</th>
                              <th>Name</th>
                              <th>Member No.</th>
                              {{-- <th>Category</th> --}}
                              {{-- <th>Trx ID</th> --}}
                              {{-- <th>Payment Date</th> --}}
                              {{-- <th>File</th> --}}
                              <th>Action</th>
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
                              @if($personal_information->membership_id != null)
                              <td style="width:250px">{{ $personal_information->membership_id }}</td >
                              @else
                              <td style="width:250px; color:red">Not Given Yet</td >
                              @endif
                              
                            
                              <td style="width:250px">
                              <a href="{{route('user.edit', ['id'=>$user->id])}}" class="btn btn-outline-info btn-sm" >Edit</a>                           
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