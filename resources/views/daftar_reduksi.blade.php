@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')

<table class="table table-dark" style="background: #c8d5fb;">
  <thead style=" background: #456bd8
  text-align: center;
  color: white;
  font-size: 12px;
  padding-left: 50px;">
    <tr>
      <th scope="col">M1</th>
      <th scope="col">M2</th>
      <th scope="col">M3</th>
      <th scope="col">M4</th>
      <th scope="col">M5</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksi')}}" style="color:white;">tampilkan M1</a></button></center></td>
      
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksidua')}}" style="color:white;">tampilkan M2</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M3</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksiempat')}}" style="color:white;">tampilkan M4</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksilima')}}" style="color:white;">tampilkan M5</a></button></center></td>
     

      
    </tr>
  
  </tbody>
</table>

<div>
  <p>
    <table class="table table-dark" style="background: #c8d5fb;" >
  <thead style="  background: #456bd8
  text-align: center;
  color: white;
  font-size: 12px;">
    <tr>
      <th scope="col">M6</th>
      <th scope="col">M7</th>
      <th scope="col">M8</th>
      <th scope="col">M9</th>
      <th scope="col">M10</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksienam')}}" style="color:white;">tampilkan M6</a></button></center></td>
      
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksidua')}}" style="color:white;">tampilkan M7</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M8</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M9</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M10</a></button></center></td>
     

      
    </tr>
  
  </tbody>
</table>
  </p>
</div>

<div>
  <p>
    <table class="table table-dark" style="background: #c8d5fb;">
  <thead style="  background: #456bd8
  text-align: center;
  color: white;
  font-size: 12px;">
    <tr>
      <th scope="col">M11</th>
      <th scope="col">M12</th>
      <th scope="col">M13</th>
      <th scope="col">M14</th>
      <th scope="col">M15</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksi')}}" style="color:white;">tampilkan M11</a></button></center></td>
      
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksidua')}}" style="color:white;">tampilkan M12</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M13</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M14</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M15</a></button></center></td>
     

      
    </tr>
  
  </tbody>
</table>
  </p>
</div>

<div>
  <p>
    <table class="table table-dark" style="background: #c8d5fb;" >
  <thead style=" background: #456bd8
  text-align: center;
  color: white;
  font-size: 12px;">
    <tr>
      <th scope="col">M16</th>
      <th scope="col">M17</th>
      <th scope="col">M18</th>
      <th scope="col">M19</th>
      <th scope="col">M20</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksi')}}" style="color:white;">tampilkan M16</a></button></center></td>
      
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksidua')}}" style="color:white;">tampilkan M17</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M18</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M19</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksitiga')}}" style="color:white;">tampilkan M20</a></button></center></td>
     

      
    </tr>
  
  </tbody>
</table>
  </p>
</div>

<div>
  <p>
    <table class="table table-dark" style="background: #c8d5fb;" >
  <thead style=" background: #456bd8
  text-align: center;
  color: white;
  font-size: 12px;">
    <tr>
      <th scope="col">False Positive</th>
      <th scope="col">False Negative</th>
      <th scope="col">Lack Of Knowladge</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksifalsePositive')}}" style="color:white;">tampilkan False Positive</a></button></center></td>
      
      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksifalseNegative')}}" style="color:white;">tampilkan False Negative</a></button></center></td>

      <td><center><button type="button" class="btn btn-info"><a href="{{route('tampilReduksilk')}}" style="color:white;">tampilkan Lack Of Knowladge</a></button></center></td>

      

      
    </tr>
  
  </tbody>
</table>
  </p>
</div>




@endsection