@extends('layouts.adminlte')
@section('content')

<div class="container-fluid">
  <div class="row">
    <form action="{{route('user.information')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <!-- For Personale Information Start-->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Personal Information</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <div class="row">
                <div class="col-2">
                  <label class="required">Name in Full:  </label>
                </div>
                <div class="col-3">
                  <input type="text" class="form-control" placeholder="First" name="first_name" required>
                </div>
                <div class="col-3">
                  <input type="text" class="form-control" placeholder="Middle" name="middle_name">
                </div>
                <div class="col-4">
                  <input type="text" class="form-control" placeholder="Last" name="last_name">
                </div>
              </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-2">
                <label class="required" >Date of Birth: </label>
              </div>
              <div class="col-4">
                <input type="date" class="form-control" name="birth_date" required>
              </div>
              <div class="col-2">
                <label class="required">Gender: </label>
              </div>
              <div class="form-group col-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio"  name="gender" value="male">
                  <label class="form-check-label">Male </label>
                </div>
                <div class="form-check col-2">
                  <input class="form-check-input" type="radio"  name="gender" value="female">
                  <label class="form-check-label">Female </label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-2">
                <label>Father's Name:</label>
              </div>
              <div class="col-4">
                <input type="text" class="form-control" placeholder="Full Name" name="father_name">
              </div>
              <div class="col-2">
                <label>Mother's Name:</label>
              </div>
              <div class="col-4">
                <input type="text" class="form-control" placeholder="Full Name" name="mother_name" >
              </div>
            </div>
          </div>
          <div class="form-group">
                <div class="row">
                  <div class="col-2">
                    <label class="required">Phone: </label>
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder="phone" name="phone" required> 
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder="phone" name="tel"> 
                  </div>
                </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-2">
                <label class="required">Email Address:</label>
              </div>
              <div class="col-10">
                <input type="email" class="form-control" id="" name="email" placeholder="Enter email" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-2">
                <label >National ID No:</label>
              </div>
              <div class="col-10">
                <input type="text" class="form-control" id="" name="nid" placeholder="Enter NID" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-2">
                <label class="required">Present/Mailling Address: </label>
              </div>
              <div class="col-sm-10">
                <!-- textarea -->
                <div class="form-group">
                  <textarea class="form-control" name="address" rows="3" placeholder="Enter ..."></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-2">
                <label class="required">Image: </label>
              </div>
              <div class="col-8">
                <input type="file" name="image" required>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-info" style="margin-left: 126px; width:140px !important;">
            Submit
          </button>
          <a href="{{route('essential.information')}}">
            <button class="btn btn-outline-success" style="margin-left: 126px; width:140px !important;" type="button">
              Next Page
            </button>
          </a>
        </div>
        {{-- card body --}}
      </div>
    <!-- For Personale Information End-->
    </form>
  </div>
</div>
@endsection
