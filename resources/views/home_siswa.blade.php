@extends('layouts.layout_siswa')

<?php  
use App\Siswa;
    $siswa = Siswa::where('user_id', Auth::user()->id )->first();
   
?>
@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')

<main class="main">
    
    <div class="container-fluid"> 
        <div class="alert alert-success" role="alert" style=" background: #456bd8;
  text-align: center;
  color: white;
  font-size: 12px;" >
            <center><h4 class="alert-heading" ><b>Selamat Datang, {{auth()->user()->name}} !</b></h4>
            <p>Selamat datang di aplikasi PhyDiags (Physics Diagnostic).  <br>
            PhyDiags merupakan aplikasi yang digunakan untuk mengembangkan tes diagnostik dalam bentuk four-tier yang berguna dalam mengidentifikasi profil konsepsi mahasiswa pada materi Usaha dan Energi. Mengidentifikasi profil konsepsi mahasiswa tentang Usaha dan energi penting dilakukan untuk mendukung Mahasiswa dalam proses pembelajaran di dalam kelas, agar nantinya Dosen dapat memberikan treatment dalam proses pembelajaran kepada Mahasiswa yang berbeda dengan hasil yang telah di peroleh dari website ini.
            </p>
            <hr>
            
            <p class="mb-0">Anda telah mendaftar sebagai <b>Mahasiswa</b> </p>
        </div></center>
        @if(auth()->user()->profil != null)
        <div class="row">
            <div class="col-md-12 ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Silahkan Lengkapi Profil Anda!</strong> Klik pada bagian profil
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
        </div>
        @else
        @endif
       

</main>

@endsection
