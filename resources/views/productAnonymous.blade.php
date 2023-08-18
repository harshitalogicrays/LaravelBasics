@extends('layouts.main')
@section('main-section')
<table class="table table-striped">
    <tr>
        <th>Product ID</th><th>Product Name</th><th>Product Price</th>
    </tr>
    @php
        $demo=1;
    @endphp
    @foreach ($products as $p )
    <x-tablerow id="101" name={{$p}} price="300000" :demo="$demo"/>
    @endforeach
   
</table>
@endsection
