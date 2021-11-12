@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')
<main class="main">

    <div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header">
                <strong style="font-size: 18px;">Buat pesan Baru</strong>
            </div>
            <form action="{{route('storeKelas')}}"  method="post" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
                <div class="container">
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label"><table><tr><td width="100%"><strong>Nama kesalahan</strong> </td><td> : </td></tr> </table></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_kesalahan" id="nama_kesalahan" value="" style="border-radius:10px; box-shadow: 3px 0px 5px grey;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"><table><tr><td width="100%"><strong>pesan untuk siswa</strong> </td><td> : </td></tr> </table></label>
                        <div class="col-sm-9">
                        <textarea class="form-control" rows="3" name="pesan_siswa" style="border-radius:10px; box-shadow: 3px 0px 5px grey;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer justify-content-center " style="border-radius: 0px 0px 20px 20px ">
                <button type="submit" onclick="alert()" class="btn btn-info" style="width:100px; box-shadow: 3px 2px 5px grey;">Simpan</button> 
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</main>
@endsection

@section('js')
<script>
function alert() {
    namakelas = $('#nama_kelas').val();
    swal({
        title: "Kelas baru berhasil di buat !",
        text: namakelas,
        icon: "success",
    });
}
</script>
@endsection
