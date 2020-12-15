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
<?php 
	session([
	    'search' => 0,
	    'searchbyfilter' => 0,
	    'sort' => ''
	]);
?>
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
													<a class="primary_img" href="{{ url('frontend/product/show', $value->product->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_image }}" alt="" style="height: 150px"></a>
													<a class="secondary_img" href="{{ url('frontend/product/show', $value->product->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_sub_image }}" alt="" style="height: 150px"></a>
													<div class="label_product">
														<span class="label_sale">{{ $value->badge_text }}</span>
													</div>
													<div class="action_links">
														<ul>
															<li class="add_to_cart"><a href="{{ url('frontend/cart/create', $value->product_id) }}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
															<li class="wishlist"><a href="{{ url('frontend/wishlist/create', $value->product->id) }}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<h4 class="product_name"><a href="{{ url('frontend/product/show', $value->product->id) }}">{{ $value->product->product_name }}</a></h4>
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
										<a class="primary_img" href="{{ url('frontend/product/show', $value->product->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_image }}" alt="" style="height: 150px"></a>
										<a class="secondary_img" href="{{ url('frontend/product/show', $value->product->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_sub_image }}" alt="" style="height: 150px"></a>
										<div class="label_product">
											<span class="label_sale">{{ $value->badge_text }}</span>
											<span class="label_new">{{ $value->badge_sub_text }}</span>
										</div>
										<div class="product_timing">
											<div data-countdown="{{ $value->valid_until }}"></div>
										</div>
										<div class="action_links">
											<ul>
												<li class="add_to_cart"><a href="{{ url('frontend/cart/create', $value->product_id) }}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
												<li class="wishlist"><a href="{{ url('frontend/wishlist/create', $value->product->id) }}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
											</ul>
										</div>
									</div>
									<figcaption class="product_content">
										<h4 class="product_name"><a href="{{ url('frontend/product/show', $value->product->id) }}">{{ $value->product->product_name }}</a></h4>
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
											<a class="primary_img" href="{{ url('frontend/product/show', $value->product->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_image }}" alt="" style="height: 100px"></a>
											<a class="secondary_img" href="{{ url('frontend/product/show', $value->product->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_sub_image }}" alt="" style="height: 100px"></a>
										</div>
										<figcaption class="product_content">
											<h4 class="product_name"><a href="{{ url('frontend/product/show', $value->product->id) }}">{{ $value->product->product_name }}</a></h4>
											<p><a href="#">{{ $value->product_category->product_category_name }}</a></p>
											<div class="action_links">
												<ul>
													<li class="add_to_cart"><a href="{{ url('frontend/cart/create', $value->product_id) }}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
													<li class="wishlist"><a href="{{ url('frontend/wishlist/create', $value->product->id) }}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
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
					<p>Our recent articles</p>
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
									<h4 class="post_title"><a href="{{ url('frontend/blog/show', $value->id) }}">{{ $value->blog_short_description }}</a></h4>
									<footer class="blog_footer">
										<a href="{{ url('frontend/blog/show', $value->id) }}">Show more</a>
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
										<a class="primary_img" href="{{ url('frontend/product/show', $value->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product_image }}" alt="" style="height: 100px"></a>
										<a class="secondary_img" href="{{ url('frontend/product/show', $value->id) }}"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product_sub_image }}" alt="" style="height: 100px"></a>
									</div>
									<figcaption class="product_content">
										<h4 class="product_name"><a href="{{ url('frontend/product/show', $value->id) }}">{{ $value->product_name }}</a></h4>
										<p><a href="#">{{ $value->product_category->product_category_name }}</a></p>
										<div class="action_links">
											<ul>
												<li class="add_to_cart"><a href="{{ url('frontend/cart/create', $value->id) }}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
												<li class="wishlist"><a href="{{ url('frontend/wishlist/create', $value->id) }}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
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

@endsection