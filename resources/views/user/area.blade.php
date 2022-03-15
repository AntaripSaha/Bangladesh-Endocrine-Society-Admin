@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="row">
    <form action="{{route('essential.information.add')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <!-- /.row -->
      <div class="row">
        <div class="col-11">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Essential Supporting Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-responsive">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name of Degree</th>
                    <th>Year of Passing</th>
                    <th>Institute</th>
                    <th>University</th>
                    <th>BMDC Reg. No.</th>
                    <th>BMDC Reg. Yr.</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp
                  <tr>
                    <td>{{$i}}</td>
                    <td>
                      <input name="_method" type="hidden" value="DELETE">
                      <a type="button" class="btn btn-outline-danger btn-sm" onclick="return myFunction();" href="">
                        Delete
                      </a>
                    </td>
                  </tr>
                  @php
                  $i = $i+1;
                  @endphp
                </tbody>
              <!-- Button trigger modal -->
              </table>
              <button type="button" class="btn btn-outline-info btn-sm"  style="margin-left: 20px; margin-bottom: 20px; margin-top: 15px;" data-target="#exampleModal">
                <i class="fas fa-plus"></i>
                Add New Field
              </button>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>   
      <!-- /.row -->
      <a href="{{route('file.attach')}}">
        <button class="btn btn-outline-success btn-sm"  style="margin-left: 20px;margin-top: 20px;margin-bottom: 30px;width: 85px;" type="button">
          Save All
        </button>
      </a>
    </form>
    </div>
  </div> 
@endsection