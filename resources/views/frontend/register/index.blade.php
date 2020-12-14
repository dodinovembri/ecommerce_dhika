@extends('layouts.frontend')

@section('content')

<div class="off_canvars_overlay">
	
</div>

@include('frontend.templates.header')

    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-2 col-md-2">
 
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-8 col-md-8">
                    <div class="account_form register">
                        @if(session()->has('error'))
                        <div class="alert alert-warning alert-dismissible mg-b-0 fade show" role="alert">
                            {{ session()->get('error') }}
                        </div><br>
                        @endif                        
                        <h2>Register</h2>
                        <form action="{{ url('frontend/register/store') }}" method="POST">
                            @csrf
                            <p>   
                                <label>Full Name  <span>*</span></label>
                                <input type="text" name="name">
                             </p>                            <p>   
                                <label>Email address  <span>*</span></label>
                                <input type="email" name="email">
                             </p>
                             <p>   
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password">
                             </p>
                             <p>   
                                <label>Confirm Passwords <span>*</span></label>
                                <input type="password" name="password_confirm">
                             </p>                             
                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->
               <!--login area start-->
                <div class="col-lg-2 col-md-2">
 
                </div>
                <!--login area start-->                
            </div>
        </div>    
    </div>
    <!-- customer login end -->

@include('frontend.templates.footer')

@endsection