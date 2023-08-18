@extends('layouts.main')
@push('title')
    <title>{{$title}} Customer</title>
@endpush
@section('main-section')
    <h1>{{$title}} Customer</h1>
    <form method="post" action={{$url}}>
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name" value={{$customers->name}}>
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value={{$customers->email}}>
            </div>
            <div class="form-group">
                <label for="mob">Mobile No</label>
                <input type="text" class="form-control" id="mob" aria-describedby="emailHelp" placeholder="Enter Mobile Number" name="mobile" value={{$customers->mobile}}>

              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="enter address" >{{$customers->address}}</textarea>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M" {{$customers->gender==='M'?'checked':''}}>
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F" {{$customers->gender==='F'?'checked':''}}>
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="O" {{$customers->gender==='O'?'checked':''}}>
                <label class="form-check-label" for="inlineRadio3">Other</label>
              </div>

              <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" value={{$customers->dob}} >
              </div>
              <div class="form-group mt-2">
              <select class="form-select" name="isActive">
                <option value="select" selected disabled>isActive</option>
                <option value="0" {{$customers->isActive=="0"?"selected":''}}>No</option>
                <option value="1" {{$customers->isActive=="1"?"selected":''}}>Yes</option>
              </select>
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value={{$customers->password}} readonly>
            </div>
         <button type="submit" class="btn btn-primary mt-3">{{$title}} Customer</button>
    </form>

@endsection