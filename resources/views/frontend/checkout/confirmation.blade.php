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
                        <h3>Order Confirmation</h3> 
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($order_detail as $key => $value) { ?>
                                        <tr>
                                            <td> {{ $value->product->product_name }} <strong> × {{ $value->qty }}</strong></td>
                                            <td> Rp. {{ number_format($value->subtotal, 2, ',', '.') }}</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr class="order_total">
                                        <th>Payment Method</th>
                                        <td><strong>{{ $order->payment_method->payment_method_name }}</strong></td>
                                    </tr>                                      
                                    <?php if ($order->total_voucher != 0) { ?>
                                        <tr>
                                            <th>Voucher Applied</th>
                                            <td><strong>Rp. {{ number_format($order->total_voucher, 2, ',', '.') }}</strong></td>
                                        </tr>    
                                    <?php } ?>                                  
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>Rp. {{ number_format($order->total_price, 2, ',', '.') }}</strong></td>
                                    </tr>
                                </tfoot>
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