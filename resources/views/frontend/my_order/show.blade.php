@extends('layouts.frontend')

@section('content')

<div class="off_canvars_overlay">
	
</div>

@include('frontend.templates.header')

    <!--Checkout page section-->
    <div class="Checkout_section mt-70">
       <div class="container">
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h3>Order List</h3> 
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($order_detail as $key => $value) { ?>
                                        <tr>
                                            <td> {{ $value->order_id }}</td>
                                            <td> {{ $value->product->product_name }}</td>
                                            <td> {{ $value->qty }}</td>
                                            <td> Rp. {{ number_format($value->price, 2, ',', '.') }}</td>
                                            <td> Rp. {{ number_format($value->subtotal, 2, ',', '.') }}</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>     
                        </div>
                        <div class="payment_method">
                            <div class="order_button">
                                <a href="{{ url('/') }}"><button type="button">Back to Home</button> </a>
                            </div>    
                        </div> 
                    </div>
                </div> 
            </div> 
        </div>       
    </div>
    <!--Checkout page section end-->

@include('frontend.templates.footer')

@endsection