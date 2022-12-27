@extends('layouts.index')
@section('content')
<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
       <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
       <!-- header inner -->
       <div class="header">
          <div class="container-fluid">
             <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                   <div class="full">
                      <div class="center-desk">
                         <div class="logo">
                            <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                   <nav class="navigation navbar navbar-expand-md navbar-dark ">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarsExample04">
                         <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                               <a class="nav-link" href="index.html">Home</a>
                            </li>


                            <li class="nav-item">
                               <a class="nav-link" href={{ route('product.index') }}>Products</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 category
                                </a>

                                @foreach ($categories as $category)
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href={{route('category.show', ['category' => $category->id]   )}}>{{$category->name}}</a>
                                  </div>
                                @endforeach

                              </li>
                            <li class="nav-item d_none">
                               <a class="nav-link" href='#'><i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>
                            @guest
                            <li class="nav-item d_none">
                                <a class="nav-link" href="/login">Login</a>
                             </li>
                             <li class="nav-item d_none">
                                <a class="nav-link" href="/register">register</a>
                             </li>
                            @endguest



                         </ul>
                      </div>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
       <div id="banner1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
             <li data-target="#banner1" data-slide-to="0" class="active"></li>
             <li data-target="#banner1" data-slide-to="1"></li>
             <li data-target="#banner1" data-slide-to="2"></li>
             <li data-target="#banner1" data-slide-to="3"></li>
             <li data-target="#banner1" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="container">
                   <div class="carousel-caption">
                      <div class="row">
                         <div class="col-md-6">
                            <div class="text-bg">
                               <span>Computer And Laptop</span>
                               <h1>Accessories</h1>
                               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                               <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="text_img">
                               <figure><img src="images/pct.png" alt="#"/></figure>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="carousel-caption">
                      <div class="row">
                         <div class="col-md-6">
                            <div class="text-bg">
                               <span>Computer And Laptop</span>
                               <h1>Accessories</h1>
                               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                               <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="text_img">
                               <figure><img src="images/pct.png" alt="#"/></figure>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="carousel-caption">
                      <div class="row">
                         <div class="col-md-6">
                            <div class="text-bg">
                               <span>Computer And Laptop</span>
                               <h1>Accessories</h1>
                               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                               <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="text_img">
                               <figure><img src="images/pct.png" alt="#"/></figure>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="carousel-caption">
                      <div class="row">
                         <div class="col-md-6">
                            <div class="text-bg">
                               <span>Computer And Laptop</span>
                               <h1>Accessories</h1>
                               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                               <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="text_img">
                               <figure><img src="images/pct.png" alt="#"/></figure>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="carousel-caption">
                      <div class="row">
                         <div class="col-md-6">
                            <div class="text-bg">
                               <span>Computer And Laptop</span>
                               <h1>Accessories</h1>
                               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or </p>
                               <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="text_img">
                               <figure><img src="images/pct.png" alt="#"/></figure>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </a>
          <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </a>
       </div>
    </section>
    <!-- end banner -->
    <!-- three_box -->
    <div class="three_box">
       <div class="container">
          <div class="row">
             <div class="col-md-4">
                <div class="box_text">
                   <i><img src="images/thr.png" alt="#"/></i>
                   <h3>Computer</h3>
                   <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                </div>
             </div>
             <div class="col-md-4">
                <div class="box_text">
                   <i><img src="images/thr1.png" alt="#"/></i>
                   <h3>Laptop</h3>
                   <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                </div>
             </div>
             <div class="col-md-4">
                <div class="box_text">
                   <i><img src="images/thr2.png" alt="#"/></i>
                   <h3>Tablet</h3>
                   <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- three_box -->
    <!-- products -->
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
                      <div class="col-md-4 margin_bottom1">
                         <div class="product_box">
                            <figure><img src="images/product1.png" alt="#"/></figure>
                            <h3>Computer</h3>
                         </div>
                      </div>
                      <div class="col-md-4 margin_bottom1">
                         <div class="product_box">
                            <figure><img src="images/product2.png" alt="#"/></figure>
                            <h3>Laptop</h3>
                         </div>
                      </div>
                      <div class="col-md-4 margin_bottom1">
                         <div class="product_box">
                            <figure><img src="images/product3.png" alt="#"/></figure>
                            <h3>Tablet</h3>
                         </div>
                      </div>
                      <div class="col-md-4 margin_bottom1">
                         <div class="product_box">
                            <figure><img src="images/product4.png" alt="#"/></figure>
                            <h3>Speakers</h3>
                         </div>
                      </div>
                      <div class="col-md-4 margin_bottom1">
                         <div class="product_box">
                            <figure><img src="images/product5.png" alt="#"/></figure>
                            <h3>internet</h3>
                         </div>
                      </div>
                      <div class="col-md-4 margin_bottom1">
                         <div class="product_box">
                            <figure><img src="images/product6.png" alt="#"/></figure>
                            <h3>Hardisk</h3>
                         </div>
                      </div>
                      <div class="col-md-4">
                         <div class="product_box">
                            <figure><img src="images/product7.png" alt="#"/></figure>
                            <h3>Rams</h3>
                         </div>
                      </div>
                      <div class="col-md-4">
                         <div class="product_box">
                            <figure><img src="images/product8.png" alt="#"/></figure>
                            <h3>Bettery</h3>
                         </div>
                      </div>
                      <div class="col-md-4">
                         <div class="product_box">
                            <figure><img src="images/product9.png" alt="#"/></figure>
                            <h3>Drive</h3>
                         </div>
                      </div>
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
