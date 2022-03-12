@extends('layouts.adminlte')
@section('content')

      <div class="container-fluid">
        <div class="row">
        <form action="{{route('essential.category.store')}}" method="POST" enctype="multipart/form-data">
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
                        <th>Name of Degree</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $i = 1;
                      @endphp
  
                      @foreach($degrees as $degree)
                      <tr>
                        <td>{{$i}}</td>
                        <td style="width:450px">{{$degree->degree}}</td>
                        <td>
                          <input name="_method" type="hidden" value="DELETE">
                          <a type="button" class="btn btn-outline-danger btn-sm" onclick="return myFunction();" href="{{route('essential.category.delete', ['id'=>$degree->id])}}">
                            Delete
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
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Essentail Supporting Categories</h3>
                </div>
                    <div>
                        <input class="form-control" name="degree" type="text">
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-sm">
                        Submit
                    </button>
              </div>
            </div>
          </div>






        </form>
        </div>
      </div>
@endsection      


