@extends('layouts.main')
@section('main-section')
<div class="row mt-5">
{{-- @foreach ($products as  $p)
<div class="card col-4" >
    <img class="card-img-top" src="holder.js/100x180/" alt="Title">
    <div class="card-body">
        <h4 class="card-title">{{$p}}</h4>
        <p class="card-text">Text</p>
    </div>
</div>
@endforeach --}}
{{-- @php
    $demo=1;
@endphp --}}

{{-- <x-displaycards title="product1" price=20000 :demo="$demo" class="text-danger" />
<x-displaycards title="product2" price=30000/>
<x-displaycards title="product3" price=40000/>
<x-displaycards title="product4" price=50000/> --}}



@foreach ($productdata as $product)
@php
    $name=$product['name'];
    $price=$product['price'];
    $image=$product['img'];
@endphp
       <x-displaycards :name="$name" :price="$price" :image="$image" />       
@endforeach

</div>
@endsection