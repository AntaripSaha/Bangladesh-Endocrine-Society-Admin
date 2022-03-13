@extends('layouts.adminlte')
@section('content')
      <div class="container-fluid">
        <div class="row">
        <form action="{{route('file.add')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <!-- /.row -->
        <div class="row">
          <div class="col-11">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap table-responsive">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name of Degree</th>
                      <th>Year of Passing</th>

                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                    <tr>
                      <td>gg</td>
                    </tr>
                    @php
                    $i = $i+1;
                    @endphp
                  </tbody>
                <!-- Button trigger modal -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>   

        <a href="#">
          <button class="btn btn-outline-success btn-sm"  style="margin-left: 20px;margin-top: 20px;margin-bottom: 30px;width: 85px;" type="button">
            Save All
          </button>
        </a>
      </form>
        </div>
      </div>
@endsection