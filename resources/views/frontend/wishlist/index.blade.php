@extends('layouts.frontend')

@section('content')

<div class="off_canvars_overlay">
	
</div>

@include('frontend.templates.header')


<!--wishlist area start -->
<div class="wishlist_area mt-70">
    <div class="container">   
        <form action="#"> 
            <div class="row">
                <div class="col-12">
                    <div class="table_desc wishlist">
                        <div class="cart_page">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Stock Status</th>
                                        <th class="product_total">Add To Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product_wishlist as $key => $value) { ?>
                                        <tr>
                                           <td class="product_remove"><a href="{{ url('frontend/wishlist/destroy', $value->id) }}">X</a></td>
                                            <td class="product_thumb"><a href="#"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_image }}" alt=""></a></td>
                                            <td class="product_name"><a href="#">{{ $value->product->product_name }}</a></td>
                                            <td class="product-price">Rp. {{ number_format($value->product->price, 2, ',', '.') }}</td>
                                            <td class="product_quantity">
                                            <?php if ($value->product_stock->stock > 5) {
                                                echo "In Stock";
                                            }else{
                                                echo "Stock less than 5";
                                            } ?></td>
                                            <td class="product_total"><a href="{{ url('frontend/cart/create', $value->product_id) }}">Add To Cart</a></td>
                                        </tr>
                                    <?php } ?>                                    

                                </tbody>
                            </table>   
                        </div>  

                    </div>
                 </div>
             </div>

        </form> 

    </div>
</div>
<!--wishlist area end -->


@include('frontend.templates.footer')

@endsection