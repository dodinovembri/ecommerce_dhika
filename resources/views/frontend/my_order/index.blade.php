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
                        <h3>My Orders</h3> 
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Payment Method</th>
                                        <th>Total Price</th>
                                        <th>Total Voucher</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($order as $key => $value) { ?>
                                        <tr>
                                            <td><a href="{{ url('frontend/my_order/show', $value->id) }}"> {{ $value->id }}</a></td>
                                            <td> {{ $value->payment_method->payment_method_name }}</td>
                                            <td> Rp. {{ number_format($value->total_price, 2, ',', '.') }}</td>
                                            <td> Rp. {{ number_format($value->total_voucher, 2, ',', '.') }}</td>
                                            <td> 
                                                <?php if ($value->status == 2) {
                                                    echo "Order Created";
                                                }elseif ($value->status == 3) {
                                                    echo "Order Completed";
                                                } ?>
                                            </td>
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