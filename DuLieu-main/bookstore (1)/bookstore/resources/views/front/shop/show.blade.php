@extends('front.layout.master')

@section('title', 'Product Detail')

@section('body')
<div class="hero page-inner overlay" style="background-image: url('front/img/hero_bg_3.jpg');">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">

            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="img-property-slide-wrap">
                    <div class="img-property-slide">
                        <img src="front/img/products/{{ $products->productImages[0]->path }}" alt="Image" class="img-fluid">
{{--                        @foreach($products->productImages as $productImage)--}}
{{--                        <img src="front/img/{{ $productImage->path }}" alt="Image" class="img-fluid">--}}
{{--                        <img src="front/img/product-2.jpg" alt="Image" class="img-fluid">--}}
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="heading text-primary">{{ $products->name }}</h2>
                <p class="meta">{{ $products->author->name }}</p>
                <p class="text-black-50"> {!! $products->description !!}</p>

                <div class="quantity qty-2">

                        <div class="pro-qty">
                            <span class="dec qtybtn"> - </span>
                            <input type="text" value="1" >  {{--  value="{{ $cart->qty }}" data-rowid="{{ $cart->rowId }}" --}}
                            <span class="inc qtybtn"> + </span>
                        </div>
                        <a href="./cart/add/{{ $products->id }}" class=" pd-cart">ADD TO CART</a>

                </div>

                <div class="d-block agent-box p-5">
                    <div class="img mb-4">
                        <img src="front/images/_default-user.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3 class="mb-0">{{ $products->author->name }}</h3>
                        <div class="meta mb-3">Real Estate</div>
                        <p>{{ $products->author->description }}</p>

                        <ul class="list-unstyled social dark-hover d-flex">
                            <li class="me-1"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
                            <li class="me-1"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
                            <li class="me-1"><a href="https://www.facebook.com/LienquanMobile"><span class="icon-facebook"></span></a></li>
                            <li class="me-1"><a href="https://www.linkedin.com/pulse/topics/home/?trk=homepage-basic_guest_nav_menu_discover"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
</div>


@endsection
