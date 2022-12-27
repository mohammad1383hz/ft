@extends('layouts.index');
@section('content')
{{-- image --}}

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        @foreach ($product->images as $image)
        <div class="item active">
            <img src={{ asset($image->src) }}  alt="test" style="width:100%;">
          </div>
        @endforeach
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>





  <h5>{{$product->name}}</h5>
  <h5>{{$product->description}}</h5>
  <h5>{{$product->price}}</h5>
  <form action="{{route('cart.add',['product'=>$product->id])}}" method="POST">
    @csrf
    <label for="number">تعداد</label><br>
    <input type="text" id="number" name="number"><br>
    <button>افزودن به سبد خرید</button>
  </form>






@endsection
