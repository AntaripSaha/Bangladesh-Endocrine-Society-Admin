@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="row">
        <form action="{{route('payment.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <!-- Files Start-->
              <div class="row">
                <div class="col-12">
                  <div class="card card-success">
                    <div class="card-header"    >
                      <h3 class="card-title">Payment Section</h3>
                    </div>
                    <p style="margin-left: 20px;margin-top: 10px;">
                      Choose Your Desire Plan.
                    </p>
                    <table class="table table-hover text-nowrap table-responsive">
                      <thead>
                        <tr>
                          <th>S/L</th>
                          <th>Select</th>
                          <th>Category</th>
                          <th>Fee</th>
                          <th>Validity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary1" name="checkbox" value="Package One" checked>
                                <label for="radioPrimary1">
                                </label>
                            </div>
                          </td>
                          <td>General Member</td>
                          <td>1000</td>
                          <td>For 2 Years</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary1" value="Package Two" name="checkbox" >
                                <label for="radioPrimary1">
                                </label>
                            </div>
                          </td>
                          <td>Life Member</td>
                          <td>10,000</td>
                          <td>For Life Long</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary1" value="Package Three" name="checkbox" >
                                <label for="radioPrimary1">
                                </label>
                            </div>
                          </td>
                          <td>Associate Member</td>
                          <td>600</td>
                          <td>For 2 Years</td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- Files End-->
              <!-- Files Start-->
              <div class="row">
                <div class="col-12">
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Payments Information of Membership Fee</h3>
                    </div>
                    <p style="margin-left: 20px;margin-top: 10px;">
                      Must attach a copy of money receipt (PDF or JPEG).
                    </p>
                    <table class="table table-hover text-nowrap table-responsive">
                      <thead>
                        <tr>
                          <th>Date of Payment</th>
                          <th>Transaction ID</th>
                          <th>File</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <input type="date" name="date" class="form-control">
                          </td>
                          <td>
                            <input type="text" name="trx_id" class="form-control" required>
                          </td>
                          <td>
                            <input type="file" name="file">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- Files End-->
            <button type="submit" class="btn btn-outline-success btn-sm" onclick="return savefunction();" style="width: 90px;margin-bottom: 50px; margin-left: 21px;">
              Save All
            </button>
        </form>
    </div>
</div>
@endsection