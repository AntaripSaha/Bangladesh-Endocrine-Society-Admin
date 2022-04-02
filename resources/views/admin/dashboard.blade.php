@extends('layouts.admin')
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
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Essentail Categories List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-responsive">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name of User's</th>
                            <th>Status</th>
                            <th>View</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i = 1;
                          @endphp
      
                          @foreach($users as $user)
                          <tr>
                            <td>{{$i}}</td>
                            <td style="width:250px">{{$user->name}}</td>
                            <td style="width:250px">
                            <!-- Example single danger button -->
                            <div class="btn-group">
                                @if($user->status == 0)
                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Unapproved
                                </button>
                                @else
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Approved
                                </button>
                                @endif
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('admin.dashboard.status', ['status'=> 1, 'id' => $user->id ])}}" >Approve</a></li>
                                    <li><a class="dropdown-item" href="{{route('admin.dashboard.status', ['status'=> 0, 'id' => $user->id ])}}">Unapprove</a></li>
                                </ul>
                            </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-info btn-sm">
                                    View
                                </button>
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


