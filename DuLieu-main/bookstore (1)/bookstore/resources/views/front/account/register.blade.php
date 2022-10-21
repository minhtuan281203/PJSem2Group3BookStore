@extends('front.layout.master')

@section('title', 'Register')

@section('body')
    <!--important link source from "https://bootsnipp.com/snippets/A36DP"-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <section class="get-in-touch">
        @if(session('notification'))
            <div class="alert alert-warning " role="alert">
                {{session('notification')}}
            </div>
        @endif
        <form class="contact-form row" action="" method="post">
            @csrf
            <div class="form-field col-lg-6">
                <input id="name" class="input-text js-input" type="text" name="name" required>
                <label class="label" for="name">Name</label>
            </div>
            <div class="form-field col-lg-6">
                <input id="email" class="input-text js-input" type="email" name="email" required>
                <label class="label" for="email">Email</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="pass" class="input-text js-input" type="password" name="password" required>
                <label class="label" for="pass">Password</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="con-pass" class="input-text js-input" type="password" name="password_confirmation" required>
                <label class="label" for="con-pass">Confirm Pass</label>
            </div>
            <div class="form-field col-lg-12">
                <input class="submit-btn register-btn" type="submit" value="Register">
            </div>

        </form>
    </section>
@endsection
