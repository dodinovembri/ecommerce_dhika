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
                                <h3>Women</h3>
                                <ul>
                                    <li class="widget_sub_categories sub_categories1"><a href="javascript:void(0)">Shoes</a>
                                        <ul class="widget_dropdown_categories dropdown_categories1">
                                            <li><a href="#">Document</a></li>
                                            <li><a href="#">Dropcap</a></li>
                                            <li><a href="#">Dummy Image</a></li>
                                            <li><a href="#">Dummy Text</a></li>
                                            <li><a href="#">Fancy Text</a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories sub_categories2"><a href="javascript:void(0)">Bags</a>
                                        <ul class="widget_dropdown_categories dropdown_categories2">
                                            <li><a href="#">Flickr</a></li>
                                            <li><a href="#">Flip Box</a></li>
                                            <li><a href="#">Cocktail</a></li>
                                            <li><a href="#">Frame</a></li>
                                            <li><a href="#">Flickrq</a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories sub_categories3"><a href="javascript:void(0)">Clothing</a>
                                        <ul class="widget_dropdown_categories dropdown_categories3">
                                            <li><a href="#">Platform Beds</a></li>
                                            <li><a href="#">Storage Beds</a></li>
                                            <li><a href="#">Regular Beds</a></li>
                                            <li><a href="#">Sleigh Beds</a></li>
                                            <li><a href="#">Laundry</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h3>Filter by price</h3>
                                <form action="#"> 
                                    <div id="slider-range"></div>   
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />   

                                </form> 
                            </div>
                            <div class="widget_list widget_color">
                                <h3>Select By Color</h3>
                                <ul>
                                    <li>
                                        <a href="#">Black  <span>(6)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#"> Blue <span>(8)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#">Brown <span>(10)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#"> Green <span>(6)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#">Pink <span>(4)</span></a> 
                                    </li>
                                  
                                </ul>
                            </div>
                            <div class="widget_list widget_color">
                                <h3>Select By SIze</h3>
                                <ul>
                                    <li>
                                        <a href="#">S  <span>(6)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#"> M <span>(8)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#">L <span>(10)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#"> XL <span>(6)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#">XLL <span>(4)</span></a> 
                                    </li>
                                  
                                </ul>
                            </div>
                            <div class="widget_list widget_manu">
                                <h3>Manufacturer</h3>
                                <ul>
                                    <li>
                                        <a href="#">Brake Parts <span>(6)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#">Accessories <span>(10)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#">Engine Parts <span>(4)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#">hermes <span>(10)</span></a> 
                                    </li>
                                    <li>
                                        <a href="#">louis vuitton <span>(8)</span></a> 
                                    </li>
                                
                                </ul>
                            </div>
                            <div class="widget_list tags_widget">
                                <h3>Product tags</h3>
                                <div class="tag_cloud">
                                    <a href="#">Men</a>
                                    <a href="#">Women</a>
                                    <a href="#">Watches</a>
                                    <a href="#">Bags</a>
                                    <a href="#">Dress</a>
                                    <a href="#">Belt</a>
                                    <a href="#">Accessories</a>
                                    <a href="#">Shoes</a>
                                </div>
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
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option  value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
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

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->


@include('frontend.templates.footer')

@endsection