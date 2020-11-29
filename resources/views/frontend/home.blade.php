@extends('layouts.frontend')

@section('content')

<div class="off_canvars_overlay">
	
</div>

@include('frontend.templates.header')

<!--slider area start-->
<section class="slider_section">
	<div class="slider_area owl-carousel">
		<?php foreach ($product_home as $key => $value) { ?>
			<div class="single_slider d-flex align-items-center" data-bgimg="{{ asset(Storage::url('img/product_home')) }}/{{ $value->product_home_image }}">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="slider_content">
								<h1>{{ $value->product_home_title }}</h1>
								<h2>{{ $value->product_home_sub_title }}</h2>
								<p>{{ $value->product_home_description }}</p> 								
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</section>
<!--slider area end-->

<!--shipping area start-->
<div class="shipping_area">
	<div class="container">
		<div class="row">
			<?php foreach ($advantage as $key => $value) { ?>
				<div class="col-lg-3 col-md-6">
					<div class="single_shipping">
						<div class="shipping_icone">
							<img src="{{ asset('frontend/img/about') }}/{{ $value->advantage_icon }}" alt="">
						</div>
						<div class="shipping_content">
							<h3>{{ $value->advantage_title }}</h3>
							<p>{{ $value->advantage_description }}</p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>   
	</div>
</div>
<!--shipping area end-->

<!--product area start-->
<div class="product_area  mb-64">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="product_header">
					<div class="section_title">
						<p>Recently added our store</p>
						<h2>Trending Products</h2>
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
								<?php foreach ($product_trend as $key => $value) { ?>
									<div class="product_items">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_image }}" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_sub_image }}" alt=""></a>
													<div class="label_product">
														<span class="label_sale">{{ $value->badge_text }}</span>
													</div>
													<div class="action_links">
														<ul>
															<li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
															<li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<h4 class="product_name"><a href="product-details.html">{{ $value->product->product_name }}</a></h4>
													<p><a href="#">{{ $value->product_category->product_category_name }}</a></p>
													<div class="price_box"> 
														<span class="current_price">Rp. {{  number_format($value->new_price, 0, ',', '.') }}</span>
														<span class="old_price">Rp. {{ number_format($value->product->price, 0, ',', '.') }}</span>
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

<!--banner area start-->
<div class="banner_area">
	<div class="container">
		<div class="row">			
			<?php foreach ($product_banner as $key => $value) { ?>
				<div class="col-lg-6 col-md-6">
					<div class="single_banner">
						<div class="banner_thumb">
							<a href="shop.html"><img src="{{ asset(Storage::url('img/product_banner')) }}/{{ $value->product_banner_image }}" alt=""></a> 
						</div>
					</div>
				</div>			
			<?php if ($key == 1){ break; } } ?>
		</div>
	</div>
</div>
<!--banner area end-->

<!--product area start-->
<div class="product_area product_deals mb-65">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					<p>Recently added our store </p>
					<h2>Deals Of The Weeks</h2>
				</div>
			</div>
		</div> 
		<div class="product_container">  
			<div class="row">
				<div class="col-12">
					<div class="product_carousel product_column5 owl-carousel">
						<?php foreach ($product_deal as $key => $value) { ?>
							<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_image }}" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_sub_image }}" alt=""></a>
										<div class="label_product">
											<span class="label_sale">{{ $value->badge_text }}</span>
											<span class="label_new">{{ $value->badge_sub_text }}</span>
										</div>
										<div class="product_timing">
											<div data-countdown="2021/12/15"></div>
										</div>
										<div class="action_links">
											<ul>
												<li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
												<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
												<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
												<li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
											</ul>
										</div>
									</div>
									<figcaption class="product_content">
										<h4 class="product_name"><a href="product-details.html">{{ $value->product->product_name }}</a></h4>
										<p><a href="#">{{ $value->product_category->product_category_name }}</a></p>
										<div class="price_box"> 
											<span class="current_price">Rp. {{  number_format($value->new_price, 0, ',', '.') }}</span>
											<span class="old_price">Rp. {{ number_format($value->product->price, 0, ',', '.') }}</span>
										</div>
									</figcaption>
								</figure>
							</article>
						<?php } ?>
					</div>
				</div>
			</div>        
		</div>  
	</div> 
</div>
<!--product area end-->

<!--product banner area satrt-->
<div class="product_banner_area mb-65">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					<p>Recently added our store </p>
					<h2>Best Sellers</h2>
				</div>
			</div>
		</div> 
		<div class="product_banner_container">
			<div class="row">
				<div class="col-lg-12">
					<div class="small_product_area product_column3 owl-carousel">
						<?php foreach ($product_best as $key => $value) { ?>
							<div class="product_items">
								<article class="single_product">
									<figure>
										<div class="product_thumb">
											<a class="primary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_image }}" alt=""></a>
											<a class="secondary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_sub_image }}" alt=""></a>
										</div>
										<figcaption class="product_content">
											<h4 class="product_name"><a href="product-details.html">{{ $value->product->product_name }}</a></h4>
											<p><a href="#">{{ $value->product_category->product_category_name }}</a></p>
											<div class="action_links">
												<ul>
													<li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
													<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
													<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
													<li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
												</ul>
											</div>
											<div class="price_box"> 
												<span class="current_price">Rp. {{  number_format($value->new_price, 0, ',', '.') }}</span>
												<span class="old_price">Rp. {{ number_format($value->product->price, 0, ',', '.') }}</span>
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
<!--product banner area end-->

<!--blog area start-->
<section class="blog_section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					<p>Our recent articles about Organic</p>
					<h2>Our Blog Posts</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="blog_carousel blog_column3 owl-carousel">
				<?php foreach ($blog as $key => $value) { ?>
					<div class="col-lg-3">
						<article class="single_blog">
							<figure>
								<div class="blog_thumb">
									<a href="blog-details.html"><img src="{{ asset(Storage::url('img/blog')) }}/{{ $value->blog_image }}" alt=""></a>
								</div>
								<figcaption class="blog_content">
									<div class="articles_date">
										<p>{{ $value->blog_date }} | <a href="#">{{ $value->blog_type }}</a> </p>
									</div>
									<h4 class="post_title"><a href="blog-details.html">{{ $value->blog_short_description }}</a></h4>
									<footer class="blog_footer">
										<a href="blog-details.html">Show more</a>
									</footer>
								</figcaption>
							</figure>
						</article>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!--blog area end-->

<!--custom product area start-->
<div class="custom_product_area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					<p>Recently added our store </p>
					<h2>Featured Products</h2>
				</div>
			</div>
		</div> 
		<div class="row">
			<div class="col-12">
				<div class="small_product_area product_carousel product_column3 owl-carousel">
					<?php foreach ($product_featured as $key => $value) { ?>
						<div class="product_items">							
							<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product_image }}" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product_sub_image }}" alt=""></a>
									</div>
									<figcaption class="product_content">
										<h4 class="product_name"><a href="product-details.html">{{ $value->product_name }}</a></h4>
										<p><a href="#">{{ $value->product_category->product_category_name }}</a></p>
										<div class="action_links">
											<ul>
												<li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
												<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
												<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
												<li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
											</ul>
										</div>
										<div class="price_box"> 
											<span class="current_price">Rp. {{  number_format($value->price, 0, ',', '.') }}</span>
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
<!--custom product area end-->

<!--brand area start-->
<div class="brand_area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="brand_container owl-carousel ">
					<?php foreach ($partner as $key => $value) { ?>
						<div class="single_brand">
							<a href="{{ $value->partner_link }}" target="_blank"><img src="{{ asset(Storage::url('img/partner')) }}/{{ $value->partner_image }}" alt=""></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--brand area end-->

@include('frontend.templates.footer')

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true"><i class="icon-x"></i></span>
			</button>
			<div class="modal_body">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-12">
							<div class="modal_tab">  
								<div class="tab-content product-details-large">
									<div class="tab-pane fade show active" id="tab1" role="tabpanel" >
										<div class="modal_tab_img">
											<a href="#"><img src="{{ asset('frontend/img/product/productbig1.jpg') }}" alt=""></a>    
										</div>
									</div>
									<div class="tab-pane fade" id="tab2" role="tabpanel">
										<div class="modal_tab_img">
											<a href="#"><img src="{{ asset('frontend/img/product/productbig2.jpg') }}" alt=""></a>    
										</div>
									</div>
									<div class="tab-pane fade" id="tab3" role="tabpanel">
										<div class="modal_tab_img">
											<a href="#"><img src="{{ asset('frontend/img/product/productbig3.jpg') }}" alt=""></a>    
										</div>
									</div>
									<div class="tab-pane fade" id="tab4" role="tabpanel">
										<div class="modal_tab_img">
											<a href="#"><img src="{{ asset('frontend/') }}img/product/productbig4.jpg" alt=""></a>    
										</div>
									</div>
								</div>
								<div class="modal_tab_button">    
									<ul class="nav product_navactive owl-carousel" role="tablist">
										<li >
											<a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('frontend/') }}img/product/product1.jpg" alt=""></a>
										</li>
										<li>
											<a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ asset('frontend/') }}img/product/product6.jpg" alt=""></a>
										</li>
										<li>
											<a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ asset('frontend/') }}img/product/product2.jpg" alt=""></a>
										</li>
										<li>
											<a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{ asset('frontend/') }}img/product/product7.jpg" alt=""></a>
										</li>

									</ul>
								</div>    
							</div>  
						</div> 
						<div class="col-lg-7 col-md-7 col-sm-12">
							<div class="modal_right">
								<div class="modal_title mb-10">
									<h2>Donec Ac Tempus</h2> 
								</div>
								<div class="modal_price mb-10">
									<span class="new_price">$64.99</span>    
									<span class="old_price" >$78.99</span>    
								</div>
								<div class="modal_description mb-15">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
								</div> 
								<div class="variants_selects">
									<div class="variants_size">
										<h2>size</h2>
										<select class="select_option">
											<option selected value="1">s</option>
											<option value="1">m</option>
											<option value="1">l</option>
											<option value="1">xl</option>
											<option value="1">xxl</option>
										</select>
									</div>
									<div class="variants_color">
										<h2>color</h2>
										<select class="select_option">
											<option selected value="1">purple</option>
											<option value="1">violet</option>
											<option value="1">black</option>
											<option value="1">pink</option>
											<option value="1">orange</option>
										</select>
									</div>
									<div class="modal_add_to_cart">
										<form action="#">
											<input min="1" max="100" step="2" value="1" type="number">
											<button type="submit">add to cart</button>
										</form>
									</div>   
								</div>
								<div class="modal_social">
									<h2>Share this product</h2>
									<ul>
										<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
										<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>    
								</div>      
							</div>    
						</div>    
					</div>     
				</div>
			</div>    
		</div>
	</div>
</div>
<!-- modal area end-->



@endsection