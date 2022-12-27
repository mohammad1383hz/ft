@extends('layouts.index')
@section('content')
<div  class="products">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Products</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div class="our_products">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4 margin_bottom1">
                        <div class="product_box">
                           <figure><img src="images/product1.png" alt="#"/></figure>
                           <h3>{{$product->name}}</h3>
                        </div>
                     </div>
                    @endforeach



                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
