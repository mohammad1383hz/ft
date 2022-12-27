@extends('layouts.index')
@section('content')
<div  class="products">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our Products</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div class="our_products">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$product->name}}</h5>
                          <p class="card-text">{{$product->description}}</p>
                          <h6>{{$product->price}}</h6>
                          <form action={{route('cart.add',['product'=>$product->id])}} method="POST">
                            @csrf
                            <button type="submit">add to cart</button></form>

                          {{-- <a href={{route('cart.add')}} class="btn btn-primary">add to cart</a> --}}
                        </div>
                      </div>
                    @endforeach


                   <div class="col-md-12">
                      <a class="read_more" href="#">See More</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection

