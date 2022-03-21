@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="row">
    <form action="{{route('area.store')}}" method="POST">
      @csrf
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
                    <th>Name Areas</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp
                  <tr>
                    @foreach($areas as $area)
                    <td>
                      <input type="checkbox" name="area[]" value="{{$area->id}}">
                    </td>
                    <td>{{$i}}</td>
                    <td>{{$area->name}}</td>
                    <td>
                      <a type="button" class="btn btn-outline-info btn-sm" href="{{route('area.details', ['id'=>$area->id])}}">
                        View
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
      <!-- /.row -->
        <button class="btn btn-outline-success btn-sm" onclick="return savefunction();"  style="margin-left: 20px;margin-top: 20px;margin-bottom: 30px;width: 85px;" type="submit">
          Save All
        </button>
      </a>
    </form>
    </div>
  </div> 
@endsection