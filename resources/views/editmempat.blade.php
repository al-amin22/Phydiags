@extends('layouts.layout_guru')

@section('title')
    <title>PhyDiags | Education</title>
@endsection

@section('content')




<form action="{{route('updatemempat', $editreduksimempat->id)}}"  method="post">
  @csrf
  @method('PATCH')
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Miskonsepsi</label>
    <input type='hidden' name='id' value='{{$editreduksimempat->id}}'>
    <input type="textarea" class="form-control" id="exampleFormControlInput1"
    value="{{$editreduksimempat->des_mscempat}}" name="des_mscempat">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Deskripsi Konsepsi</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
    value="{{$editreduksimempat->des_konempat}}" name="des_konempat">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Model Pembelajaran</label>
    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
    value="{{$editreduksimempat->model_reduksiempat}}" name="model_reduksiempat">
  </div>
 
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Reduksi</label>
   <textarea class="form-control ckeditor" name="text_reduksiempat" rows="auto" cols="auto" id="reduksi" rows="10" required></textarea>
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

