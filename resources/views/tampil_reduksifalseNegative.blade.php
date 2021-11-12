@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@section('content')

                  <p style="padding-left: 30px;">
                    <a href="{{route('createfalseNegative')}}"><button type="button" class="btn btn-primary">Tambah Reduksi</button></a>
                  </p>
     
     			@foreach($tampilReduksifalseNegative as $item)

                <div class="app-main__inner">


                   <p style="padding-left: 30px;"><a href="{{route('editfalseNegative',  $item->id)}}"><button type="button" class="btn btn-primary">Edit Reduksi</button></a>
                   </p>


                   <p style="padding-left: 30px;">
                    jika sudah buat Reduksi sebelumnya, silahkan langsung di klik edit
                  </p>

        <div class="alert alert-danger" role="alert">
                    <center><h1>Anda Mengalami False Negative </h1></center>
                    </div>

                    <div style="font-size: 4vw;
			color:#2c3e50; font-size :16px; margin-left: 80px; margin-right: 60px;">
                        
                        
                        </dd class="dua"> <dt class="col-sm-3"  >Model pembelajaran untuk mengatasi False Negative</dt> <dd class="col-sm-9">{{$item->model_reduksifalseNegative}}
                        </dd>
                    </div> 
                    <div style="font-size: 4vw;
			color:#2c3e50; font-size :16px; margin-left: 80px; margin-right: 60px;">
                        <p>Simak Penjelasan Berikut :</p>
                    </div>

                    <div class="container-fluid">
                      <div class="row align-items-start">
                        <div class="col">
                        </div>
                        <div class="col-12">
                            <center><h2 alig="center">Usaha Dan Energi </h2></center>
                            <center><h3 alig="center">Reduksi False Negative</h3></center>
                            <hr size="100px" width="100%" alig="center" color="black">
                        </div>
                        <div class="">
                        </div>
                      </div>
                    </div>
                
                    <div class="container-fluid col-sm-12">
                      <div class="row align-items-start">
                          <div class="col">
                          	<p class="dua">
                          		{!!$item->text_reduksifalseNegative!!}
                          	</p>
                          </div>
                        </div>
                      </div>

                  
                     @endforeach

@endsection