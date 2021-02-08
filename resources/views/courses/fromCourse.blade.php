@extends('layouts.app')

@section('content')
<form method='post' action= "{{ url('store_image/insert_image') }}" enctype="multipart/form-data">

@csrf


<!-- agregar imagen -->
<div class="input-group mb-3">
  <input type="text" name="user_name" class="form-control" id="inputGroupFile02" />
  <input type="file" name="user_image" class="form-control" id="inputGroupFile02" />
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
  <input type="submit" name="store_image"class="btn btn-primary" value="Save" />
</form>

@endsection