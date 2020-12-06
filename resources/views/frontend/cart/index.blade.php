@extends('layouts.frontend')

@section('content')

<div class="off_canvars_overlay">
	
</div>

@include('frontend.templates.header')

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-70">
        <div class="container">  
            <form action="{{ url('frontend/cart/update') }}" method="post"> 
              @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page">
                                <table>
                            <thead>
                                <tr>
                                    <th class="product_remove">Delete</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_quantity">Availability</th>
                                    <th class="product_total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<form method="POST" action="{{ url('frontend/cart/update') }}">
                            	<?php foreach ($cart_detail as $key => $value) { ?>
									                <tr>
	                                   <td class="product_remove"><a href="{{ url('frontend/cart/destroy_from_cart', $value->id) }}"><i class="fa fa-trash-o"></i></a></td>
	                                    <td class="product_thumb"><a href="#"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_image }}" alt=""></a></td>
	                                    <td class="product_name"><a href="#">{{ $value->product->product_name }}</a><input type="hidden" name="product_id[]" value="{{ $value->product_id }}"></td>
	                                    <td class="product-price">Rp. {{ number_format($value->product->price, 2, ',', '.') }}</td>
	                                    <td class="product_quantity"><label>Quantity</label> <input min="1" max="{{ $value->product_stock->stock }}" name="qty[]" value="{{ $value->qty }}" type="number"></td>
	                                    <td class="product_name"><label>{{ $value->product_stock->stock }}</label> </td>
	                                    <td class="product_total">{{ $value->subtotal }}</td>
	                                </tr>
                            	<?php } ?>
                            </tbody>
                        </table>   
                            </div>  
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div 	>
                            </form>      
                        </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">   
                                    <p>Enter your coupon code if you have one.</p>                                
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount">Rp. {{ number_format($cart->total_price, 2, ',', '.') }}</p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Shipping</p>
                                       <p class="cart_amount"><span>Flat Rate:</span>Rp. {{ number_format($cart->total_price, 2, ',', '.') }}</p>
                                   </div>
                                   <a href="#">Calculate shipping</a>

                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount">Rp. {{ number_format($cart->total_price, 2, ',', '.') }}</p>
                                   </div>
                                   <div class="checkout_btn">
                                       <a href="#">Proceed to Checkout</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form> 
        </div>     
    </div>
     <!--shopping cart area end -->

@include('frontend.templates.footer')

@endsection