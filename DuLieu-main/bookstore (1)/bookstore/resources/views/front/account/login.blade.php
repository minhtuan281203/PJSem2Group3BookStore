@extends('front.layout.master')

@section('title', 'Login')

@section('body')
    <style>
        .login-btn
        {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
            color: black;
            border-radius: 10px;
            width: 120px;
            height: 35px;
            background-color:#005555;
        }
        .login-btn:hover
        {
            background-color: #033131;
        }
    </style>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                         class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    @if(session('notification'))
                        <div class="alert alert-warning" role="alert">
                            {{session('notification')}}

                        </div>
                    @endif
                    <form action="" method="post" style="margin-top: 100px;">
                        @csrf

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" class="form-control form-control-lg" name="email"
                                   placeholder="Enter a valid email address" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="pass">Password</label>

                            <input type="password" id="pass" name="password" class="form-control form-control-lg"
                                   placeholder="Enter password" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="gi-more">
                                <label for="save-pass">
                                    <input class="remember" class="form-check-input me-2" type="checkbox" value="" id="save-pass" />
                                    Save password

                                </label>
                                <a href="#" class="forget-pass" style="margin-left: 30px;">Forget your password ??</a>
                            </div>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit"  class="site-btn login-btn"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <div class="switch-login">

                                <p class="small fw-bold mt-2 pt-1 mb-0">Creat an account
                                    <a href="./account/register" class="or-login" style="font-size: 15px"> Register</a>
                                </p>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
