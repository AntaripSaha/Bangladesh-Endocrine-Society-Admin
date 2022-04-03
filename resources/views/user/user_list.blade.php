@extends('layouts.adminlte')
@section('content')
      <div class="container-fluid">
        <div class="row">
        <form action="{{route('essential.information.add')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <!-- /.row -->
          <div class="row">
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>View</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                         $i = 1;   
                        @endphp
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->designation}}</td>
                        </tr>
                        @php
                         $i = $i+1;   
                        @endphp
                        @endforeach

                    </tbody>
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
@endsection