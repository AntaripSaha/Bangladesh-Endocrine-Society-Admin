@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Area of Clinical Interests</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-responsive">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Areas Sub Categories</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp
                  <tr>
                    @foreach($areas as $area)
                    <td>{{$i}}</td>
                    <td>{{$area->name}}</td>
                  </tr>
                    @php
                    $i = $i+1;
                    @endphp
                    @endforeach
                </tbody>
              <!-- Button trigger modal -->
              </table>
              <a href="{{route('area')}}">
                <button type="button" class="btn btn-outline-info btn-sm" style="width: 150px;margin-left: 20px;margin-bottom: 20px;margin-top: 20px;">
                    Go Back
                </button>
              </a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>   
      <!-- /.row -->
      </a>
    </div>
  </div> 
@endsection