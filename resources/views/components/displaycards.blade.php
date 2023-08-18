{{-- <div class="card col-4" >
    <img class="card-img-top" src="images/a.jpg" alt="Title">
    <div class="card-body">
        <h4 class="card-title">{{$title}}</h4>
        <h4>{{$price}}</h4>
        <p {{$attributes}} >Text
           
        </p>
        <h4 {{$attributes->merge(['class'=>'bg-warning','id'=>'attr'])}}>{{$demo}}</h4>
    </div>
</div> --}}


<div class="card col-4" >
    <img class="card-img-top" src={{$image}} alt="Title" style="height:150px">
    <div class="card-body">
        <h4 class="card-title">{{$name}}</h4>
        <h4>{{$price}}</h4>
    </div>
</div>