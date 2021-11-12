@extends('layouts.layout_siswa')

@section('title')
    <title>PhyDiags | Education</title>
@endsection
@section('content')

<style type="text/css">.list{
   font-size: 16px;
   color: black;
   text-align: justify;
   align: justify;
   text-indent: 60px;
   face:"Times New Roman";
   line-height: 2em;
   margin-top: 10px;
margin-bottom: 20px;
margin-left: 80px;
margin-right: 60px;"
}

.satu {
   font-size: 16px;
   color: black;
   }
   
   .dua {
   font-size: 16px;
   color: black;
   text-align: justify;
   align: justify;
   text-indent: 60px;
   face: "Times New Roman";
   line-height: 2em;
   margin-top: 10px;
margin-bottom: 20px;
margin-left: 30px;
margin-right: 60px;
   }
   .tiga {
   font-size: 16px;
   color: black;
   text-align: center;
   face: "Times New Roman";
   line-height: 2em;
   margin-top: 10px;
margin-bottom: 20px;
margin-left: 80px;
margin-right: 60px;
face: "Times New Roman";

   }
   .empat {
   font-size: 16px;
   color: black;
   text-align: left;

   }</style>
                    <div class="alert alert-danger" role="alert">
                    <center><h1>Anda Mengalami Miskonsepsi Tingkat Lima</h1></center>
                    </div>

                    @foreach($Reduksimlima as $item)
                    <div style="font-size: 4vw; color:#2c3e50; font-size :16px; margin-left: 80px; margin-right: 60px;">
                        <dl class="row"> <dt class="col-sm-3" > Deskripsi Miskonsepsi</dt> <dd class="col-sm-9"> {{$item->des_msclima}}
                        
                        </dd class="dua"> <dt class="col-sm-3">Deskripsi Konsepsi</dt> <dd class="col-sm-9"> <p>{{$item->des_konlima}}</p> 
                        
                        </dd class="dua"> <dt class="col-sm-3"  >Model pembelajaran untuk mengatasi miskonsepsi</dt> <dd class="col-sm-9">{{$item->model_reduksilima}}
                        </dd>
                    </div> 
                    <div style="font-size: 4vw; color:#2c3e50; font-size :16px; margin-left: 80px; margin-right: 60px;">
                        <p>Simak Penjelasan Berikut :</p>
                    </div>

                    <div class="container-fluid">
                      <div class="row align-items-start">
                        <div class="col">
                        </div>
                        <div class="col-12">
                            <center><h2 alig="center">Usaha Dan Energi </h2></center>
                            <center><h3 alig="center">Reduksi Miskonsepsi Lima</h3></center>
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
                                 {!!$item->text_reduksilima!!}
                               </p>

                              <p class="list">
                              <a href="{{route('hasilUjian',$peserta_ujian->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i>Ulang Test</button></a>
                              </p>
                              </div>
                              </div>
                            </div>                 
                   @endforeach                
                   
  @endsection