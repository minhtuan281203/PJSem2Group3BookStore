@extends('front.layout.master')

@section('title', 'Cart')

@section('body')

    <div class="hero">


        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('front/img/hero_bg_3.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">Where there are useful and interesting books</h1>
                    <form action="./product" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                        <input type="text" class="form-control px-4" name="search" value="{{ request('search') }}" placeholder="Search for your favorite books">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="shopping-cart spad">
    <div class="container">
        <div class="row">
            @if(Cart::count() > 0)
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th class="p-name">Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th><i onclick="confirm('Are you sure?')=== true ? window.location='./cart/destroy' : ''" class="ti-close"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carts as $cart)
                        <tr>
                            <td class="cart-pic first-row"><img style="height: 150px" src="front/img/products/{{ $cart->options->images[0]->path }}"> </td>
                            <td class="card-title first-row">
                                <h5>{{ $cart->name }}</h5>
                            </td>
                            <td class="p-price first-row">${{ number_format($cart->price, 2) }}</td>
                            <td class="qua-col first-row">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <span class="dec qtybtn"> - </span>
                                            <input type="text" value="{{ $cart->qty }}" data-rowid="{{ $cart->rowId }}">
                                        <span class="inc qtybtn"> + </span>
                                    </div>
                                </div>
                            </td>
                            <td class="total-price first-row">${{ number_format($cart->price * $cart->qty, 2) }}</td>
                            <td class="close-td first-row">
                                <i onclick="window.location='./cart/delete/{{ $cart->rowId }}'" class="ti-close"></i>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-lg-4">

{{--                        <div class="discount-coupon">--}}
{{--                            <h6>Discount Codes</h6>--}}
{{--                            <form action="#" class="coupon-form">--}}
{{--                                <input type="text" placeholder="Enter your codes">--}}
{{--                                <button type="submit" class="site-btn coupon-btn">Apply</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal<span>${{ $total }}</span></li>
                                <li class="cart-total">Total<span>${{ $subtotal }}</span></li>
                            </ul>
                            <a href="./checkout" class="proceed-btn">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="col-lg-12">
                    <h4>Your cart is empty.</h4>
                    <div style="margin-bottom: 40px;"></div>
                    <div class="cart-buttons">
                        <a href="./shop" style="background-color: #005555; color: #fff" class="primary-btn up-cart">Continue Shopping</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
