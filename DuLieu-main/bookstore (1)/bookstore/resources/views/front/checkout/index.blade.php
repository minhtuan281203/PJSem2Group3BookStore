@extends('front.layout.master')

@section('title', 'Check Out')

@section('body')
{{--<div class="breadcrumb-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="breadcrumb-text">--}}
{{--                    <a href="./index.html"><i class="fa fa-hone"></i>Home</a>--}}
{{--                    <a href="./shop.html">Shop</a>--}}
{{--                    <span>Check Out</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="checkout-section spad" style="margin-top: 30px;">
    <div class="container mt-16">
        <form action="" method="post" class="checkout-form">
            <input type="number" hidden name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
            <input type="text" hidden name="subtotal" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}">
            <input type="text" hidden name="status" value="0">
            @csrf
            <div class="row">
                @if(Cart::count() > 0)
                <div class="col-lg-6">

                    <h4>Biiling Details</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fir">First Name<span>*</span></label>
                            <input type="text" id="fir" name="first_name" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="last">Last Name<span>*</span></label>
                            <input type="text" id="last" name="last_name" required>
                        </div>
                        <div class="col-lg-12">
                            <label for="cun">Country<span>*</span></label>
                            <input type="text" id="cun" name="country" required>
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Street Address<span>*</span></label>
                            <input type="text" id="street" class="street-first"  name="street_address" required>
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Town / City<span>*</span></label>
                            <input type="text" id="town" name="town_city" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email Address<span>*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Phone<span>*</span></label>
                            <input type="number" id="phone" name="phone" required>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Product <span>Total</span></li>

                                @foreach($carts as $cart)
                                <li class="fw-normal">
                                    {{ $cart->name }} x {{ $cart->qty }}
                                    <span>${{ $cart->price * $cart->qty}}</span>
                                </li>
                                @endforeach

                                <li class="fw-normal">Subtotal <span>${{ $subtotal }}</span></li>
                                <li class="total-price">Total <span>${{ $total }}</span></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">
                                        Pay later
                                        <input type="radio" id="pc-check" name="payment_type" value="pay_later" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-paypal">
                                        Online payment
                                        <input type="radio" id="pc-paypal" name="payment_type" value="online_payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="order-btn">
                                <button type="submit" class="place-btn">Place Order</button>  <!-- class="site-btn" -->
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="col-lg-12">
                        <h4>Your cart is empty.</h4>
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>

@endsection
