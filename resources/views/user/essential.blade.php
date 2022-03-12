@extends('layouts.adminlte')
@section('content')

      <div class="container-fluid">
        <div class="row">

        <form action="{{route('essential.information.add')}}" method="POST" enctype="multipart/form-data">
          @csrf

        <!-- /.row -->
        <div class="row">
          <div class="col-10">
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

                    @foreach($essential_infos as $info)
                    <tr>
                      <td>{{$i}}</td>
                      <td>{{$info->degree}}</td>
                      <td>{{$info->passing_year}}</td>
                      <td>{{Str::limit($info->institutation,15) }}</td>
                      <td>{{Str::limit($info->university,15)}}</td>
                      <td>{{$info->bmdc_reg_no}}</td>
                      <td>{{$info->bmdc_reg_year}}</td>
                      <td>
                        <input name="_method" type="hidden" value="DELETE">
                        <a type="button" class="btn btn-outline-danger btn-sm" onclick="return myFunction();" href="{{route('essential.information.delete', ['id'=>$info->id])}}">
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
                <button type="button" class="btn btn-outline-info btn-sm"  style="margin-left: 20px; margin-bottom: 20px; margin-top: 15px;" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-plus"></i>
                  Add New Field
                </button>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

     

         <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Field</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Name of Degree</th>
                        <th>Year of Passing</th>
                        <th>Institute</th>
                        <th>University</th>
                        <th>BMDC Reg. No.</th>
                        <th>BMDC Reg. Yr.</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input class="form-control" name="degree" type="text"></td>
                        <td><input class="form-control" name="passing_year" type="text"></td>
                        <td><input class="form-control" name="institutation" type="text"></td>
                        <td><input class="form-control" name="university" type="text"></td>
                        <td><input class="form-control" name="bmdc_reg_no" type="text"></td>
                        <td><input class="form-control" name="bmdc_reg_year" type="text"></td>
                      </tr>
                    </tbody>
                  </table>

                </div>
                
              </div>
              <div class="modal-footer">
                <button class="btn btn-outline-success btn-sm" type="submit">ADD</button>
                <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Close</button>
              </div>
           </div>
          </div>
        </div>
        <!-- /.row -->
        <button class="btn btn-outline-success btn-sm"  style="margin-left: 20px;margin-top: 20px;margin-bottom: 30px;width: 85px;" type="submit">
          Save All
        </button>
      </form>
      
        </div>
      </div>

@endsection      


