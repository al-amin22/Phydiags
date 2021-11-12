@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')
<form action="{{route('tambahReduksimsatu')}}" method="post" >
  @csrf
  <div class="form-group">
    <label for="">Deskripsi Miskonsepsi</label>
    <input type="text" class="form-control"  placeholder="Deskripsi Miskonsepsi" name="des_msc">
  </div>
  <div class="form-group">
    <label for="">Deskripsi Konsepsi</label>
    <input type="text" class="form-control"  placeholder="Deskripsi Konsepsi" name="des_kon">
  </div>
  <div class="form-group">
    <label for="">Model Pembelajaran</label>
    <input type="text" class="form-control"  placeholder="Model Pembelajaran Yang Digunakan" name="model_reduksi">
  </div>
  
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Reduksi</label>
   <textarea class="form-control ckeditor" name="text_reduksi" rows="auto" cols="auto" id="reduksi" rows="10" required></textarea>
  </div>
   <div>
    <button type="sumbit" class="btn btn-primary">Simpan</button>
   </div>
</form>

@endsection
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
ClassicEditor
            .create( document.querySelector( '#reduksi' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>