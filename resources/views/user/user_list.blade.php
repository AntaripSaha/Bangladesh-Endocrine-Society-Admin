@extends('layouts.adminlte')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form action="{{route('user.list.search')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <input type="text" placeholder="Search Here" class="form-control" name="data" style="width: 30% ; margin-top: 1%;">
                <button type="submit" class="btn btn-outline-info btn-sm" style="margin-left: 0% ; margin-top: 0%; margin-bottom: 1%;">
                  Search
                </button>
            </form>

        <form action="{{route('essential.information.add')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <!-- /.row -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Members List</h3>
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
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->designation}}</td>
                            <td>
                              <a href="{{route('member.details', ['id'=>$user->id])}}">
                                <button type="button" class="btn btn-outline-success btn-sm">
                                  View
                                </button>
                              </a>
                            </td>
                        </tr>
                        @php
                         $i = $i+1;   
                        @endphp
                        @endforeach

                    </tbody>
                  </table>
                  {{$users->links("pagination::bootstrap-4")}}              
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </form>
          </div>
        </div>
      </div>
@endsection