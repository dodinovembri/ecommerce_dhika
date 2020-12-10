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
                    <div class="col-lg-6 col-md-6">
                        <form action="{{ url('frontend/checkout/store') }}" method="POST">
                            @csrf
                            <h3>Billing Details</h3>
                            <div class="row">

                                <div class="col-lg-12 mb-20">
                                    <label>Name <span>*</span></label>
                                    <input type="text" value="{{ $user->name }}">    
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Email</label>
                                    <input type="text" value="{{ $user->email }}">     
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Payment Method</label>
                                    <select class="form-control" required="" name="payment_method">
                                        <option value="">Choose One</option>
                                        <?php foreach ($payment_method as $key => $value) { ?>
                                            <option value="{{ $value->id }}">{{ $value->payment_method_name }}</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="order-notes">
                                         <label for="order_note">Order Notes</label>
                                        <textarea name="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>    
                                </div>                                                  
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3>Your order</h3> 
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($checkout_detail as $key => $value) { ?>
                                            <tr>
                                                <td> {{ $value->product->product_name }} <strong> × {{ $value->qty }}</strong></td>
                                                <td> Rp. {{ number_format($value->subtotal, 2, ',', '.') }}</td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td><strong>Rp. {{ number_format($total_price, 2, ',', '.') }}</strong></td>
                                            <input type="hidden" name="total_price" value="{{ $total_price }}">
                                        </tr>
                                        <?php if ($total_voucher != 0) { ?>
                                            <tr>
                                                <th>Voucher Applied</th>
                                                <td><strong>Rp. {{ number_format($total_voucher, 2, ',', '.') }}</strong></td>
                                                <input type="hidden" name="total_voucher" value="{{ $total_voucher }}">
                                            </tr>    
                                        <?php } ?>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>Rp. {{ number_format($grand_total, 2, ',', '.') }}</strong></td>
                                            <input type="hidden" name="grand_total" value="{{$grand_total}}">
                                        </tr>
                                    </tfoot>
                                </table>     
                            </div>
                            <div class="payment_method">
                                <div class="order_button">
                                    <button  type="submit">Proceed to Order</button> 
                                </div>    
                            </div> 
                        </div>
                    </form>         
                </div> 
            </div> 
        </div>       
    </div>
    <!--Checkout page section end-->

@include('frontend.templates.footer')

@endsection