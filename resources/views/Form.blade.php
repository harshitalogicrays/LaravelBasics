@extends('layouts.main')

@section('main-section')
    <h1>Register</h1>
    <hr>
    <form method='post' action="{{url('/')}}/form" novalidate>
        @csrf     
            {{-- @if($errors->all())
                {{$errors}}
            @endif   --}}
        <div class="mb-3">
            <label for="" class="form-label">username</label>
            <input type="text" class="form-control" name="uname" placeholder="enter name" value="{{old('uname')}}">
            <small id="emailHelpId" class="form-text text-danger">
                @error('uname')
                    {{$message}}
                @enderror
            </small> 
       </div>
    <div class="mb-3">
         <label for="" class="form-label">Email</label>
         <input type="email" class="form-control" name="email" placeholder="abc@mail.com" value="{{old('email')}}" >
         <small id="emailHelpId" class="form-text text-danger">
            @error('email')
            {{$message}}
        @enderror</small> 
    </div>
    <div class="mb-3">
        <label for="" class="form-label">password</label>
        <input type="password" class="form-control" name="pwd" placeholder="enter password">
        <small id="emailHelpId" class="form-text text-danger">
            @error('pwd')
            {{$message}}
        @enderror</small> 
   </div>
   <div class="mb-3">
    <label for="" class="form-label">confirm password</label>
    <input type="password" class="form-control" name="cpwd" placeholder="confirm password">
    <small id="emailHelpId" class="form-text text-danger">
        @error('cpwd')
        {{$message}}
    @enderror
    </small> 
</div>
<button type="submit" class="btn btn-primary">Register</button>
</form>

@isset($data)
    @foreach ($data as $d )
       <h2> {{$d}}</h2>
    @endforeach
@endisset
@endsection