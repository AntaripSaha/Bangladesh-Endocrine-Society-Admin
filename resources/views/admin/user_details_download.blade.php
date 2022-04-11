<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .title{
      margin-left: 10%;
      width: 100%;
      color: rgb(30, 47, 73);
    }
    .sub_title{
      margin-left: 25%;
      width: 100%;
      margin-bottom: 10%;
      color: rgb(133, 40, 40);
    }
    .img{
      padding: 2%;
      margin-left: 0%;
    }
    .personal_info{
      margin-left: 30%;
      font-weight: 100;
      margin-top: -22%;
      line-height: 8px;
      color: rgba(0, 0, 0, 0.959);
    }
    .information{
      line-height: 0px;
    }
    .heading{
      /* margin: 10px; */
      /* border: 25px; */
      padding: 10px;
      background-color: rgb(174, 192, 209);
    }
    .info_title{
      font-weight: 300;
    }


  </style>
</head>
<body>
  <h1 class="title">{{$title}}</h1>
  <h2 class="sub_title">{{$sub_title}}</h2>
  <img class="img" src="C:\xampp\htdocs\bes\public\assets\smartphone.jpg" height="150px" width="150px" alt="">

  @foreach($personal_information as $personal)
  <div class="personal_info">
    <p class="">Name: {{$personal->first_name}} {{$personal->middle_name}} {{$personal->last_name}}</p>
    <p class="">Phone: {{$personal->phone}}</p>
    <p class="">Email: {{$personal->email}}</p>
    <p class="">NID: {{$personal->nid}}</p>
    <p class="">Address: {{$personal->address}}</p>
  </div>
  @endforeach

  @foreach($personal_information as $personal)
  <div style="clear:both; position:relative;">
    <h4 class="heading">Personal Information</h4>
    <div style="margin-left:10%; position:absolute; left:0pt; width:100%;">
      <h3 class="info_title">Birth Date:</h3>
      <p class="information"> {{$personal->bith_date }}</p>
      <h3 class="info_title">Gender:</h3>
      <p class="information"> {{$personal->gender }}</p>
      <h3 class="info_title">Father:</h3>
      <p class="information"> {{$personal->father_name }}</p>
    </div>
    <div style="margin-left:60%;">
      <h3 class="info_title">Mother:</h3>
      <p class="information">{{$personal->mother_name}}</p>
      <h3 class="info_title">Tel:</h3>
      <p class="information">{{$personal->tel}}</p>
      <h3 class="info_title">NID:</h3>
      <p class="information">{{$personal->nid}}</p>
    </div>
  </div>
  @endforeach

  @foreach($personal_information as $personal)
  <div style="clear:both; position:relative;">
    <h4 class="heading">Personal Information</h4>
    <div style="margin-left:10%; position:absolute; left:0pt; width:100%;">
      <h3 class="info_title">Birth Date:</h3>
      <p class="information"> {{$personal->bith_date }}</p>
      <h3 class="info_title">Gender:</h3>
      <p class="information"> {{$personal->gender }}</p>
      <h3 class="info_title">Father:</h3>
      <p class="information"> {{$personal->father_name }}</p>
    </div>
    <div style="margin-left:60%;">
      <h3 class="info_title">Mother:</h3>
      <p class="information">{{$personal->mother_name}}</p>
      <h3 class="info_title">Tel:</h3>
      <p class="information">{{$personal->tel}}</p>
      <h3 class="info_title">NID:</h3>
      <p class="information">{{$personal->nid}}</p>
    </div>
  </div>
  @endforeach

  
</body>
</html>