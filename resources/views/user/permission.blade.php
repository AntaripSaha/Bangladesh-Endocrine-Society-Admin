@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="row">
      @csrf
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Information You Want To Share With Other Members</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-responsive">
                <thead>
                  <tr>
                    <th>S/L</th>
                    <th>Name of Areas</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td>1</td>
                        <td>Essential Supporting Information</td>
                        <td>
                            @if($essential_info->permission == 0)
                            <a href="{{route('user.permission.essential.store',1)}}">
                                <button class="btn btn-outline-info btn-sm" type="button">
                                    Share
                                </button>
                            </a>
                            @else
                            <a href="{{route('user.permission.essential.store',0)}}">
                                <button class="btn btn-outline-success btn-sm" type="button">
                                    Hide
                                </button>
                            </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Associate Members Information</td>
                        <td>
                            @if($active->permission == 0)
                            <a href="{{route('user.permission.active.store',1)}}">
                                <button class="btn btn-outline-info btn-sm" type="button">
                                    Share
                                </button>
                            </a>
                            @else
                            <a href="{{route('user.permission.active.store',0)}}">
                                <button class="btn btn-outline-success btn-sm" type="button">
                                    Hide
                                </button>
                            </a>
                            @endif
                        </td>
                    </tr>
                    
                    
                
                  
                 
                </tbody>
              <!-- Button trigger modal -->
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>   
    </div>
  </div> 
@endsection