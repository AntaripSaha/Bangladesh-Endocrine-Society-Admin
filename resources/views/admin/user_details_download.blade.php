<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .title{
      margin-left: 14%;
      width: 100%;
      color: rgb(30, 47, 73);
    }
    .sub_title{
      margin-left: 30%;
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
      margin-top: -20%;
      margin-bottom: 5%;
      line-height: 8px;
      color: rgba(0, 0, 0, 0.959);
    }
    .information{
      line-height: 0px;
    }
    .personal_heading{
      padding: 10px;
      background-color: rgb(174, 192, 209);
    }
    .essential_heading{
      background-color: rgb(158, 106, 136);
      padding: 10px;
    }
    .current_heading{
      padding: 10px;
      background-color: rgb(109, 106, 158);
    }
    .payment_heading{
      padding: 10px;
      background-color: rgb(61, 165, 113);
    }
    .associates_heading{
      background-color: rgb(129, 184, 174);
      padding: 10px;
    }
    .organization_heading{
      padding: 10px;
      background-color: rgb(134, 106, 158);
    }
    .area_heading{
      padding: 10px;
      background-color: rgb(129, 184, 132);
    }
    .info_title{
      margin-top: auto;
      font-weight: 300;
    }
  </style>
</head>
<body>
  <h1 class="title">{{$title}}</h1>
  <h2 class="sub_title">{{$sub_title}}</h2>
  <img class="img" src="{{$personal_information[0]->image}}" height="150px" width="150px" alt="">
  <!-- Personal Information Start -->
  <div>
    @foreach($personal_information as $personal)
    <div class="personal_info">
      <p class="">Name: {{$personal->first_name}} {{$personal->middle_name}} {{$personal->last_name}}</p>
      <p class="">Phone: {{$personal->phone}}</p>
      <p class="">Email: {{$personal->email}}</p>
      <p class="">Address: {{$personal->address}}</p>
    </div>
    @endforeach

    @foreach($personal_information as $personal)
    <div style="clear:both; position:relative;">
      <h4 class="personal_heading">Personal Information</h4>
      <div style="margin-left:10%; position:absolute; left:0pt; width:100%;">
        <h3 class="info_title">Birth Date:</h3>
        <p class="information"> {{$personal->bith_date }}</p>
        <h3 class="info_title">Gender:</h3>
        <p class="information"> {{$personal->gender }}</p>
        <h3 class="info_title">Spouse:</h3>
        <p class="information"> {{$personal->father_name }}</p>
      </div>
      <div style="margin-left:60%; margin-bottom:5%">
        {{-- <h3 class="info_title">Mother:</h3>
        <p class="information">{{$personal->mother_name}}</p> --}}
        <h3 class="info_title">Tel:</h3>
        <p class="information">{{$personal->tel}}</p>
        <h3 class="info_title">NID:</h3>
        <p class="information">{{$personal->nid}}</p>
      </div>
    </div>
    @endforeach

  </div>
  <!-- Personal Information End -->
  <!-- Essential Information Start -->
  <div>
    <h4 class="essential_heading">Essential Information</h4>
    <table border='0px' style="text-align:center; width: 100%;" >
      <thead>
        <th>S/L</th>
        <th>Degree</th>
        <th>Passing Year</th>
        <th>Institutation</th>
        <th>University</th>
        <th>BMDC Reg No</th>
        <th>BMDC Reg Year</th>
      </thead>
      <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($essential_informations as $essential)
        <tr>
          <td>{{$i }}</td>
          <td>{{$essential->degree }}</td>
          <td>{{$essential->passing_year }}</td>
          <td>{{$essential->institutation }}</td>
          <td>{{$essential->university}}</td>
          <td>{{$essential->bmdc_reg_no}}</td>
          <td>{{$essential->bmdc_reg_year}}</td>
        </tr>
        @php
          $i = $i+1;
        @endphp
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- Essential Information End -->
  <!-- Current Appoinment Start -->
  <div style="page-break-inside: avoid">
    <h4 class="payment_heading">Payment Information</h4>
    <table border='0px' style="text-align:center; width: 100%;">
      <thead>
        <th style="padding: 3px; ">S/L</th>
        <th style="padding: 3px;">Membership Category</th>
        <th style="padding: 3px;">Date</th>
        <th style="padding: 3px;">Phone</th>
        <th style="padding: 3px;">Transaction ID</th>
      </thead>
      <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($payment_information as $payment)
        <tr>
          <td style="padding: 10px;">{{$i }}</td>
          <td style="padding: 10px;">{{$payment->membership_category }}</td>
          <td style="padding: 10px;">{{$payment->date }}</td>
          <td style="padding: 10px;">{{$payment->phone }}</td>
          <td style="padding: 10px;">{{$payment->trx_id }}</td>
        </tr>
        @php
          $i = $i+1;
        @endphp
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- Current Appoinment End -->
  <!-- Current Appoinment Start -->
  <div style="page-break-inside: avoid">
    <h4 class="current_heading">Current Appoinments</h4>
    <table border='0px' style="text-align:center; width: 100%;">
      <thead>
        <th style="padding: 3px; ">S/L</th>
        <th style="padding: 3px;">Designation</th>
        <th style="padding: 3px;">Hospital</th>
        <th style="padding: 3px;">From</th>
      </thead>
      <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($current_appoinments as $appoinment)
        <tr>
          <td style="padding: 10px;">{{$i }}</td>
          <td style="padding: 10px;">{{$appoinment->designation }}</td>
          <td style="padding: 10px;">{{$appoinment->hospital }}</td>
          <td style="padding: 10px;">{{$appoinment->from }}</td>
        </tr>
        @php
          $i = $i+1;
        @endphp
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- Current Appoinment End -->
  <!-- Associates Members Start -->
  <div style="page-break-inside: avoid">
    <h4 class="associates_heading">Associates Members</h4>
    <table border='0px' style="text-align:center; width: 100%;">
      <thead>
        <th>S/L</th>
        <th>Institute</th>
        <th>From</th>
        <th>To</th>
      </thead>
      <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($associate_members as $members)
        <tr>
          <td>{{$i }}</td>
          <td>{{$members->institute }}</td>
          <td>{{$members->from }}</td>
          <td>{{$members->to }}</td>
        </tr>
        @php
          $i = $i+1;
        @endphp
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- Associates Members End -->
  <!-- Current Organization Start -->
  <div style="page-break-inside: avoid">
    <h4 class="organization_heading">Current Organization</h4>
    <table border='0px' style="text-align:center; width: 100%;">
      <thead>
        <th>S/L</th>
        <th>Name</th>
        <th>Position</th>
      </thead>
      <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($current_organizations as $organizations)
        <tr>
          <td>{{$i }}</td>
          <td>{{$organizations->name }}</td>
          <td>{{$organizations->position }}</td>
        </tr>
        @php
          $i = $i+1;
        @endphp
      @endforeach
      </tbody>
    </table>
  </div>
  <!-- Current Organization End -->
  <!-- Area of Interests Start -->
  <div style="page-break-inside: avoid">
    <h4 class="area_heading">Area of Interests</h4>
    <table border='0px' style=" text-align:center; width: 100%;">
      <thead>
        <th>S/L</th>
        <th>Name</th>
      </thead>
      <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($area_name as $area_name)
        <tr>
          <td>{{$i}}</td>
          <td>{{$area_name[0]->name }}</td>
        </tr>
        @php
          $i = $i+1;
        @endphp
      @endforeach
      </tbody>
    </table>
  </div>
  <!-- Area of Interests End -->
</body>
</html>