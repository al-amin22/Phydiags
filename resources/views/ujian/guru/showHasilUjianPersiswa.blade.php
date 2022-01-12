@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')

<main class="main">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert" style="background: black;">
                <h5 class="alert-heading mb-0"><strong style="color: white;">{{$peserta_ujian->ujian->kelas->nama_kelas}} </strong></h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style=" background: #11101c;
  text-align: center;
  color: white;
  font-size: 30px;"> Hasil Test {{$peserta_ujian->siswa->nama_lengkap}}</div>
                <div class="card-body">
                    <div class="table-inside">
                        <table class="table table-striped table-bordered table-md">
                            <thead class="text-center bg-dark" style="color:white;">
                           
                                <tr>
                                    <th scope="col" width="80px">No.</th>
                                   
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            <?php $i = 0; ?>
                                @foreach ($perulangan as $item)
                             
                                <tr>
                                    <td scope="row" class="text-center">Test Ke- <?php   $i++;  echo $i; ?></td>
                                    <td><a href="{{route('showHasilUjianPerTest',$item->id)}}"><button type="button" class="btn btn-info btn-sm" style="box-shadow: 3px 2px 5px grey;" ><i class="fa fa-eye"></i> Detail Hasil </button> </a></td>
                                   
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="{{route('showUjian',$peserta_ujian->ujian->id)}}"><button class="btn btn-warning" style="box-shadow: 3px 2px 5px grey;"><i class="fa fa-reply mr-1" ></i> Kembali</button></a>

        </div>
        
    </div>
</div>
</main>
@endsection
