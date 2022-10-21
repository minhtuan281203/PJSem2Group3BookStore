@extends('front.layout.master')

@section('title', 'History')

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
            @if(true)
                @foreach($orderHistory as $history)
                    <div class="col-lg-12">
                        <div class="cart-table">
                    <table>
                        <thead>
                        <tr>
                            <th colspan="6">{{\App\Utilities\Constant::$order_status[$history->status]}}</th>
                        </tr>
                        <tr>
                            <th>#{{$history->id}}</th>
                            <th>Image</th>
                            <th class="p-name">Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($history->orderDetails as $order)
                        <tr>
                            <td class="first-row">{{$loop->index+1}}</td>
                            <td class="cart-pic first-row"><img style="height: 150px" src="front/img/products/{{ $order->product->productImages[0]->path }}"> </td>
                            <td class="card-title first-row">
                                <h5 style="text-align: left">{{ $order->product->name }}</h5>
                            </td>
                            <td class="p-price first-row">${{ number_format($order->product->discount ?? $order->product->price, 2) }}</td>
                            <td class="qua-col first-row">
                                <div class="quantity">
                                    <div class="pro-qty" style="border: none;margin-top: 32px">
                                            <input style="background: transparent" type="text" value="{{ $order->qty }}"  disabled>
                                    </div>
                                </div>
                            </td>
                            <td class="total-price first-row">${{ number_format($order->product->discount ?? $order->product->price * $order->qty, 2) }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="5"></td>
                            <td colspan="1"><span class="cart-total" style="font-size: 20px;font-weight: 700;color: #000; border-top: 2px solid #000;padding-top: 12px;width: 100%;display: flex;justify-content: center">${{$history->subtotal}}</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                    </div>
                @endforeach
            @else
                <div class="col-lg-12">
                    <h4>Your cart is empty.</h4>
                    <div style="margin-bottom: 40px;"></div>
                    <div class="cart-buttons">
                        <a href="./product" style="background-color: #005555; color: #fff" class="primary-btn up-cart">Continue Shopping</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
