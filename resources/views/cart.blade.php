@extends('layouts.index')

@section('content')
    <div class="container px-3 my-5 clearfix">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2>سبد خرید</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                        <tr>
                            <!-- Set columns width -->
                            <th class="text-center py-3 px-4" style="min-width: 400px;">نام محصول</th>
                            <th class="text-right py-3 px-4" style="width: 150px;">قیمت واحد</th>
                            <th class="text-center py-3 px-4" style="width: 120px;">تعداد</th>
                            <th class="text-right py-3 px-4" style="width: 150px;">قیمت نهایی</th>
                            <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cart->products as $product)
                            {{-- @if(isset($cart['product']))
                                @php
                                    $product = $cart['product'];
                                @endphp --}}
                                <tr>
                                <td class="p-4">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <a href="#" class="d-block text-dark">{{ $product->name }}</a>
                                            {{-- @if($product->attributes)
                                                <small>
                                                    @foreach($product->attributes->take(3) as $attr)
                                                        <span class="text-muted">{{ $attr->name }}: </span> {{ $attr->pivot->value->value }}
                                                    @endforeach
                                                </small>
                                            @endif --}}
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right font-weight-semibold align-middle p-4">{{ $product->price }} تومان</td>
                                <td class="align-middle p-4">
                                   {{$product->pivot->number}}

                                </td>
                                <td class="text-right font-weight-semibold align-middle p-4">تومان {{ $product->price *$product->pivot->number }}</td>
                                <td class="text-center align-middle px-0">
                                    <form action="{{ route('cart.delete',['product'=>$product->id]) }}" id="delete-cart-{{ $product->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <a href="" onclick="event.preventDefault();document.getElementById('delete-cart-{{ $product->id }}').submit()" class="shop-tooltip close float-none text-danger">×</a>
                                </td>
                            </tr>
                            {{-- @endif --}}
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- / Shopping cart table -->
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                    <div class="mt-4"></div>
                    <div class="d-flex">
{{--                        <div class="text-right mt-4 mr-5">--}}
{{--                            <label class="text-muted font-weight-normal m-0">Discount</label>--}}
{{--                            <div class="text-large"><strong>$20</strong></div>--}}
{{--                        </div>--}}
                        <div class="text-right mt-4">
                            <label class="text-muted font-weight-normal m-0">قیمت کل</label>

                            {{-- @php
                                $totalPrice = Cart::all()->sum(function($cart) {
                                    return $cart['product']->price * $cart['quantity'];
                                });
                            @endphp
                            <div class="text-large"><strong>{{ $totalPrice }} تومان</strong></div> --}}
                        </div>
                    </div>
                </div>

                <div class="float-left">
                <form action={{route('payment')}} method="POST">
                    @csrf
                <button type="submit">pardakht</button>
                </form>

                </div>

            </div>
        </div>
    </div>
@endsection
