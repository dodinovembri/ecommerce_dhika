@extends('layouts.frontend')

@section('content')

<div class="off_canvars_overlay">
    
</div>

@include('frontend.templates.header')

<!--product details start-->
<div class="product_details mt-70 mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="{{ asset(Storage::url('img/product')) }}/{{ $product->product_image }}" data-zoom-image="{{ asset(Storage::url('img/product')) }}/{{ $product->product_image }}" alt="big-1">
                        </a>
                    </div>
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset(Storage::url('img/product')) }}/{{ $product->product_image }}" data-zoom-image="{{ asset(Storage::url('img/product')) }}/{{ $product->product_image }}">
                                    <img src="{{ asset(Storage::url('img/product')) }}/{{ $product->product_image }}" alt="zo-th-1"/>
                                </a>

                            </li>
                            <li >
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset(Storage::url('img/product')) }}/{{ $product->product_image }}" data-zoom-image="{{ asset(Storage::url('img/product')) }}/{{ $product->product_image }}">
                                    <img src="{{ asset(Storage::url('img/product')) }}/{{ $product->product_sub_image }}" alt="zo-th-1"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                   <form action="#">
                       
                        <h1><a href="#">{{ $product->product_name }}</a></h1>
                        <div class="price_box">
                            <span class="current_price">Rp. {{ number_format($product->price, 0, ',', '.') }}</span>                            
                        </div>
                        <div class="product_variant">
                            <a href="{{ url('frontend/cart/create', $product->id) }}"><button class="button" type="button">add to cart</button></a>
                        </div><br>
                        <div class="product_meta">
                            <span>Category: <a href="#">{{ $product->product_category->product_category_name }}</a></span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>    
</div>
<!--product details end-->
    
<!--product info start-->
<div class="product_d_info mb-65">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">   
                    <div class="product_info_button">    
                        <ul class="nav" role="tablist">
                            <li >
                                <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" >
                            <div class="product_info_content">
                                <p>{{ $product->description }}</p>
                            </div>    
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>    
</div>  
<!--product info end-->
    
<!--product area start-->
<div class="product_area  mb-64">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_header">
                    <div class="section_title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
        </div> 
        <div class="product_container">  
            <div class="row">
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                <?php foreach ($product_related as $key => $value) { ?>
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{ url('frontend/product/show', $value->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product_image }}" alt="" style="height: 150px"></a>
                                                    <a class="secondary_img" href="{{ url('frontend/product/show', $value->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product_sub_image }}" alt="" style="height: 150px"></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">{{ $value->badge_text }}</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="{{ url('frontend/cart/create', $value->product_id) }}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                            <li class="wishlist"><a href="{{ url('frontend/wishlist/create', $value->id) }}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="{{ url('frontend/product/show', $value->id) }}">{{ $value->product_name }}</a></h4>
                                                    <p><a href="#">{{ $value->product_category->product_category_name }}</a></p>
                                                    <div class="price_box"> 
                                                        <span class="current_price">Rp. {{ number_format($value->price, 0, ',', '.') }}</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                <?php } ?>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>        
        </div>   
    </div> 
</div>
<!--product area end-->

@include('frontend.templates.footer')

@endsection