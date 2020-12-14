@extends('layouts.frontend')

@section('content')

<div class="off_canvars_overlay">
	
</div>

@include('frontend.templates.header')

    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h3>Products</h3>
                                <ul>
                                    <?php $i=1; foreach ($category_sidebar as $key => $category) { ?>
                                        <li class="widget_sub_categories sub_categories{{$i}}"><a href="javascript:void(0)">{{ $category->product_category_name }}</a>
                                            <ul class="widget_dropdown_categories dropdown_categories{{$i}}">
                                                <?php foreach ($category->product as $key => $product) { ?>
                                                    <li><a href="{{ url('frontend/shop/searchbyproduct', $product->id) }}">{{ $product->product_name }}</a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    <?php $i++; } ?>
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h3>Filter by price</h3>
                                <form action="{{ url('frontend/shop/searchbyfilter') }}" method="POST">
                                    @csrf 
                                    <?php 
                                        $sort = session()->get('sort');
                                    ?>
                                    Low to High<input type="radio" name="price_filter" value="low_to_high" <?php if (isset($sort) AND $sort == "low_to_high") {
                                            echo "checked";
                                        } ?> required><br>
                                    High to Low<input type="radio" name="price_filter" value="high_to_low" <?php if (isset($sort) AND $sort == "high_to_low") {
                                            echo "checked";
                                        } ?> required><br><br>
                                    <button type="submit">Filter</button>
                                </form> 
                            </div>
                            <div class="widget_list banner_widget">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/bg/banner17.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        {{--<div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>--}}
                    </div>
                     <!--shop toolbar end-->
                     <div class="row shop_wrapper">
                        <?php foreach ($search_result as $key => $value) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product_image }}" alt="" style="height: 150px"></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product_sub_image }}" alt="" style="height: 150px"></a>
                                            <div class="label_product">
                                                <span class="label_sale">{{ $value->badge_text }}</span>
                                                <span class="label_new">{{ $value->badge_sub_text }}</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="{{ url('frontend/cart/create', $value->id) }}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                     <li class="wishlist"><a href="{{ url('frontend/wishlist/create', $value->id) }}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li> 
                                                </ul>
                                            </div>
                                        </div>
                                    <div class="product_content grid_content">
                                            <h4 class="product_name"><a href="product-details.html">{{ $value->product_name }}</a></h4>
                                            <p><a href="#">{{ $value->product_category_name }}</a></p>
                                            <div class="price_box"> 
                                                <span class="current_price">Rp. {{ number_format($value->price, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="product-details.html">{{ $value->product_name }}</a></h4>
                                        <p><a href="#">{{ $value->product_category_name }}</a></p>
                                        <div class="price_box"> 
                                            <span class="current_price">Rp. {{ number_format($value->price, 0, ',', '.') }}</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>{{ $value->description }}</p>
                                        </div>
                                        <div class="action_links list_action_right">
                                            <ul>
                                                <li class="add_to_cart"><a href="{{ url('frontend/cart/create', $value->id) }}" title="Add to cart">Add to Cart</a></li>
                                                 <li class="wishlist"><a href="{{ url('frontend/wishlist/create', $value->id) }}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        <?php } ?>
                    </div>

                    {{--<div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>--}}
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->


@include('frontend.templates.footer')

@endsection