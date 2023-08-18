@extends('layouts.main')

@section('main-section')
<h1>File Upload</h1>
<hr>

<form action="{{route('image.store')}}"  method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="formFile" class="form-label">Select File :</label>
        <input class="form-control" type="file" name="file" id="formFile">
      </div>
      <button type="submit" class="btn btn-primary">File Upload</button><BR>
      @error('file')
       <span class="text-danger"> {{$message}}</span>
      @enderror
</form>
@endsection