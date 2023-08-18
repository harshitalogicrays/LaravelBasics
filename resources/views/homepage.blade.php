@extends('layouts.main')
@push('title')
    <title>Home page</title>
@endpush
@section('main-section')
{{-- <h2 class='text-primary'>{!!$name!!}</h2>
<h3>{{$email}}</h3>
{{time()}}<br>
{{date('d-M-Y')}}<br> --}}

{{-- @if ($name=='happy')
    <h1>{{$name}}</h1>
@else
    <h1>{{'not ok'}}</h1>
@endif --}}

{{-- @unless ($name=="happy")
    <H1>Welcome guest</H1>
@endunless --}}

{{-- @env('local')
    
@endenv --}}

{{-- @isset($name)
    <h1>{{$name}}</h1>
@endisset --}}


{{-- @switch('a')
    @case('a')
        <h2>vowel</h2>
        @break
 
    @case(2)
        <h2>number</h2>
        @break
 
    @default
        <h2>default</h2>
@endswitch --}}

{{-- @for ($i=1;$i<=10;$i++)
    {{$i}} hello <BR>
@endfor --}}

{{-- @php
   $i=1; 
@endphp
@while ($i<=10)
    {{$i}} hello <BR>
        @php
             $i++;
        @endphp
   
@endwhile --}}


{{-- {{$color[0]}} --}}
{{-- @foreach ($color as $c )
    <h3>{{$c}}</h3>
@endforeach --}}

{{-- @foreach ($login as $k=>$v )
        <h3>{{$k}} and {{$v}}</h3>
        {{$loop->count}}
@endforeach --}}

{{-- @forelse ($color as $c )
        <h3>{{$c}}</h3>
@empty
        <h3>No element in array</h3>
@endforelse --}}

{{-- @lang('lang.welcome')<Br>
@lang('lang.address') --}}

<a name="" id="" class="float-end m-2" href="{{url('/hi')}}" role="button">Hindi</a>
<a name="" id="" class="float-end m-2" href="{{url('/gj')}}" role="button">Gujrati</a>
<a name="" id="" class="float-end m-2" href="{{url('/')}}" role="button">English</a>
{{__('lang.welcome')}}<BR>
{{__('lang.address')}}

@endsection