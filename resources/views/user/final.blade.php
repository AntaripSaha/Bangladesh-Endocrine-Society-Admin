@extends('layouts.adminlte')
@section('content')
<style>
    .a{
        margin-left: 380px;
        margin-top: 200px;
        margin-bottom: 300px;
    }
    @media screen and (min-width: 380px){
        .a{
            margin-left: 95px;
            margin-top: 175px;
            margin-bottom: 40px;
        }
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="a">
            <h2>
                <p>
                    Thank You.
                </p>
            </h2>
            <h5>All Your Information Saved Successfully</h5>
        </div>
    </div>
  </div>
@endsection
