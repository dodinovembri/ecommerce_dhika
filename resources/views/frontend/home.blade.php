@extends('layouts.frontend')

@section('content')



<!--header area start-->

<!--offcanvas menu area start-->
<div class="off_canvars_overlay">
	
</div>
@include('frontend.templates.head')

@include('frontend.templates.header')

<!--slider area start-->
<section class="slider_section">
	<div class="slider_area owl-carousel">
		<?php for ($i=0; $i < 2; $i++) { ?>
			<div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('frontend/img/slider/slider1.jpg') }}">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="slider_content">
								<h1>Vegetables Big Sale</h1>
								<h2>Fresh Farm Products</h2>
								<p>
									10% certifled-organic mix of fruit and veggies. Perfect for weekly cooking and snacking!
								</p> 
								<a href="shop.html">Read more </a>
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
			<?php for ($i=0; $i < 4; $i++) { ?>
				<div class="col-lg-3 col-md-6">
					<div class="single_shipping">
						<div class="shipping_icone">
							<img src="{{ asset('frontend/img/about/shipping1.jpg') }}" alt="">
						</div>
						<div class="shipping_content">
							<h3>Free Shipping</h3>
							<p>Free shipping on all US order or order above $200</p>
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
					<div class="product_tab_btn">
						<ul class="nav" role="tablist">
							<li>
								<a class="active" data-toggle="tab" href="#plant1" role="tab" aria-controls="plant1" aria-selected="true"> 
									Vegetables
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#plant2" role="tab" aria-controls="plant2" aria-selected="false">
									Fruits
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#plant3" role="tab" aria-controls="plant3" aria-selected="false">
									Salads
								</a>
							</li>
						</ul>
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
								<div class="product_items">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product1.jpg') }}" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product2.jpg') }}" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
													<span class="label_new">New</span>
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
												<h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$26.00</span>
													<span class="old_price">$362.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product3.jpg') }}" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product4.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
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
												<h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$46.00</span>
													<span class="old_price">$382.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
								</div>
								<?php for ($i=0; $i < 4; $i++) { ?>
									<div class="product_items">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product5.jpg') }}" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product6.jpg') }}" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
														
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
													<h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
													<p><a href="#">Fruits</a></p>
													<div class="price_box"> 
														<span class="current_price">$56.00</span>
														<span class="old_price">$322.00</span>
													</div>
												</figcaption>
											</figure>
										</article>
										<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product7.jpg') }}" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product8.jpg') }}" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
														<span class="label_new">New</span>
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
													<h4 class="product_name"><a href="product-details.html">Fusce Aliquam</a></h4>
													<p><a href="#">Fruits</a></p>
													<div class="price_box"> 
														<span class="current_price">$66.00</span>
														<span class="old_price">$312.00</span>
													</div>
												</figcaption>
											</figure>
										</article>
									</div>
								<?php } ?>
							</div>  
						</div>
						<div class="tab-pane fade" id="plant2" role="tabpanel">
							<div class="product_carousel product_column5 owl-carousel">
								<?php for ($i=0; $i < 6; $i++) { ?>
									<div class="product_items">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product13.jpg') }}" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product1.jpg') }}" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
														<span class="label_new">New</span>
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
													<h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
													<p><a href="#">Fruits</a></p>
													<div class="price_box"> 
														<span class="current_price">$48.00</span>
														<span class="old_price">$257.00</span>
													</div>
												</figcaption>
											</figure>
										</article>
										<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product12.jpg') }}" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product2.jpg') }}" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
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
													<h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
													<p><a href="#">Fruits</a></p>
													<div class="price_box"> 
														<span class="current_price">$35.00</span>
														<span class="old_price">$245.00</span>
													</div>
												</figcaption>
											</figure>
										</article>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="tab-pane fade" id="plant3" role="tabpanel">
							<div class="product_carousel product_column5 owl-carousel">
								<div class="product_items">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product11.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product3.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
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
												<h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$26.00</span>
													<span class="old_price">$362.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product9.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product4.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
													<span class="label_new">New</span>
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
												<h4 class="product_name"><a href="product-details.html">Quisque In Arcu</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$55.00</span>
													<span class="old_price">$235.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
								</div>
								<div class="product_items">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product13.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product1.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
													<span class="label_new">New</span>
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
												<h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$48.00</span>
													<span class="old_price">$257.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product12.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product2.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
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
												<h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$35.00</span>
													<span class="old_price">$245.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
								</div>
								<div class="product_items">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product1.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product2.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
													<span class="label_new">New</span>
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
												<h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$26.00</span>
													<span class="old_price">$362.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product3.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product4.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
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
												<h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$46.00</span>
													<span class="old_price">$382.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
								</div>
								<div class="product_items">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product5.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product6.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
													
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
												<h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$56.00</span>
													<span class="old_price">$322.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product7.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product8.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
													<span class="label_new">New</span>
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
												<h4 class="product_name"><a href="product-details.html">Fusce Aliquam</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$66.00</span>
													<span class="old_price">$312.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
								</div>
								<div class="product_items">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product9.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product10.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
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
												<h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$38.00</span>
													<span class="old_price">$262.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product11.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product12.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
													<span class="label_new">New</span>
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
												<h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$36.00</span>
													<span class="old_price">$145.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
								</div>
								<div class="product_items">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product8.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product5.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
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
												<h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$26.00</span>
													<span class="old_price">$362.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product7.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/') }}img/product/product6.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
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
												<h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
												<p><a href="#">Fruits</a></p>
												<div class="price_box"> 
													<span class="current_price">$26.00</span>
													<span class="old_price">$362.00</span>
												</div>
											</figcaption>
										</figure>
									</article>
								</div>
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
			<div class="col-lg-6 col-md-6">
				<div class="single_banner">
					<div class="banner_thumb">
						<a href="shop.html"><img src="{{ asset('frontend/') }}img/bg/banner1.jpg" alt=""></a> 
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single_banner">
					<div class="banner_thumb">
						<a href="shop.html"><img src="{{ asset('frontend/') }}img/bg/banner2.jpg" alt=""></a> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--banner area end-->

<!--product area start-->
<div class="product_area product_deals mb-65">
	<div class="container-fluid">
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
						<?php for ($i=0; $i < 6; $i++) { ?>
							<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product14.jpg') }}" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product15.jpg') }}" alt=""></a>
										<div class="label_product">
											<span class="label_sale">Sale</span>
											<span class="label_new">New</span>
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
										<h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
										<p><a href="#">Fruits</a></p>
										<div class="price_box"> 
											<span class="current_price">$48.00</span>
											<span class="old_price">$257.00</span>
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

<!--banner fullwidth area satrt-->
<div class="banner_fullwidth">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="banner_full_content">
					<p>Black Fridays !</p>
					<h2>Sale 50% OFf <span>all vegetable products</span></h2>
					<a href="shop.html">discover now</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--banner fullwidth area end-->

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
				<div class="col-lg-4 col-md-5">
					<div class="banner_thumb">
						<a href="shop.html"><img src="{{ asset('frontend/img/bg/banner4.jpg') }}" alt=""></a> 
					</div>
				</div>
				<div class="col-lg-8 col-md-7">
					<div class="small_product_area product_column2 owl-carousel">
						<?php for ($i=0; $i < 3; $i++) { ?>
							<div class="product_items">
								<article class="single_product">
									<figure>
										<div class="product_thumb">
											<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product1.jpg') }}" alt=""></a>
											<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product2.jpg') }}" alt=""></a>
										</div>
										<figcaption class="product_content">
											<h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
											<p><a href="#">Fruits</a></p>
											<div class="action_links">
												<ul>
													<li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
													<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
													<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
													<li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
												</ul>
											</div>
											<div class="price_box"> 
												<span class="current_price">$26.00</span>
												<span class="old_price">$362.00</span>
											</div>
										</figcaption>
									</figure>
								</article>
								<article class="single_product">
									<figure>
										<div class="product_thumb">
											<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product3.jpg') }}" alt=""></a>
											<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product4.jpg') }}" alt=""></a>
										</div>
										<figcaption class="product_content">
											<h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
											<p><a href="#">Fruits</a></p>
											<div class="action_links">
												<ul>
													<li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
													<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
													<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
													<li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
												</ul>
											</div>
											<div class="price_box"> 
												<span class="current_price">$46.00</span>
												<span class="old_price">$382.00</span>
											</div>
										</figcaption>
									</figure>
								</article>
								<article class="single_product">
									<figure>
										<div class="product_thumb">
											<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product5.jpg') }}" alt=""></a>
											<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product6.jpg') }}" alt=""></a>
										</div>
										<figcaption class="product_content">
											<h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
											<p><a href="#">Fruits</a></p>
											<div class="action_links">
												<ul>
													<li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
													<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
													<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
													<li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
												</ul>
											</div>
											<div class="price_box"> 
												<span class="current_price">$56.00</span>
												<span class="old_price">$362.00</span>
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

<!--product area start-->
<div class="product_area mb-65">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					<p>Recently added our store </p>
					<h2>Mostview Products</h2>
				</div>
			</div>
		</div> 
		<div class="product_container">  
			<div class="row">
				<div class="col-12">
					<div class="product_carousel product_column5 owl-carousel">
						<?php for ($i=0; $i < 6; $i++) { ?>
							<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product20.jpg') }}" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product21.jpg') }}" alt=""></a>
										<div class="label_product">
											<span class="label_sale">Sale</span>
											<span class="label_new">New</span>
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
										<h4 class="product_name"><a href="product-details.html">Quisque In Arcu</a></h4>
										<p><a href="#">Fruits</a></p>
										<div class="price_box"> 
											<span class="current_price">$55.00</span>
											<span class="old_price">$235.00</span>
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
				<?php for ($i=0; $i < 4; $i++) { ?>
					<div class="col-lg-3">
						<article class="single_blog">
							<figure>
								<div class="blog_thumb">
									<a href="blog-details.html"><img src="{{ asset('frontend/img/blog/blog1.jpg') }}" alt=""></a>
								</div>
								<figcaption class="blog_content">
									<div class="articles_date">
										<p>18/01/2019 | <a href="#">eCommerce</a> </p>
									</div>
									<h4 class="post_title"><a href="blog-details.html">Lorem ipsum dolor sit amet,  elit. Impedit, aliquam animi, saepe ex.</a></h4>
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
					<?php for ($i=0; $i < 4; $i++) { ?>
						<div class="product_items">
							<?php for ($i=0; $i < 3; $i++) { ?>
								<article class="single_product">
									<figure>
										<div class="product_thumb">
											<a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product1.jpg') }}" alt=""></a>
											<a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/img/product/product2.jpg') }}" alt=""></a>
										</div>
										<figcaption class="product_content">
											<h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
											<p><a href="#">Fruits</a></p>
											<div class="action_links">
												<ul>
													<li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
													<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
													<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
													<li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
												</ul>
											</div>
											<div class="price_box"> 
												<span class="current_price">$26.00</span>
												<span class="old_price">$362.00</span>
											</div>
										</figcaption>
									</figure>
								</article>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--custom product area end-->

<!--brand area start-->
<!--brand area start-->
<div class="brand_area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="brand_container owl-carousel ">
					<?php for ($i=0; $i < 5; $i++) { ?>
						<div class="single_brand">
							<a href="#"><img src="{{ asset('frontend/img/brand/brand1.jpg') }}" alt=""></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--brand area end-->
<!--brand area end-->

<!--footer area start-->
<footer class="footer_widgets">
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-7">
					<div class="widgets_container contact_us">
						<div class="footer_logo">
							<a href="index.html"><img src="{{ asset('frontend/') }}img/logo/logo.png" alt=""></a>
						</div>
						<p class="footer_desc">We are a team of designers and developers that create high quality eCommerce, WordPress, Shopify .</p>
						<p><span>Address:</span> 4710-4890 Breckinridge USA</p>
						<p><span>Email:</span> <a href="#">demo@hasthemes.com</a></p>
						<p><span>Call us:</span> <a href="tel:(08)23456789">(08) 23 456 789</a> </p>
					</div>          
				</div>
				<div class="col-lg-2 col-md-3 col-sm-5">
					<div class="widgets_container widget_menu">
						<h3>Information</h3>
						<div class="footer_menu">
							
							<ul>
								<li><a href="about.html">About Us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#"> Privacy Policy</a></li>
								<li><a href="#"> Terms & Conditions</a></li>
								<li><a href="contact.html"> Contact Us</a></li>
								<li><a href="#"> Site Map</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4">
					<div class="widgets_container widget_menu">
						<h3>Extras</h3>
						<div class="footer_menu">
							<ul>
								<li><a href="#">Brands</a></li>
								<li><a href="#">  Gift Certificates</a></li>
								<li><a href="#">Affiliate</a></li>
								<li><a href="#">Specials</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#"> Order History</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="widgets_container widget_newsletter">
						<h3>Sign up newsletter</h3>
						<p class="footer_desc">Get updates by subscribe our weekly newsletter</p>
						<div class="subscribe_form">
							<form id="mc-form" class="mc-form footer-newsletter" >
								<input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email" />
								<button id="mc-submit">Subscribe</button>
							</form>
							<!-- mailchimp-alerts Start -->
							<div class="mailchimp-alerts text-centre">
								<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
								<div class="mailchimp-success"></div><!-- mailchimp-success end -->
								<div class="mailchimp-error"></div><!-- mailchimp-error end -->
							</div><!-- mailchimp-alerts end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="footer_bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-7">
					<div class="copyright_area">
						<p>Copyright  © 2020  <a href="#">Safira</a>  . All Rights Reserved.Design by  <a href="#">Safira</a></p>
					</div>
				</div>    
				<div class="col-lg-6 col-md-5">    
					<div class="footer_payment">
						<ul>
							<li><a href="#"><img src="{{ asset('frontend/') }}img/icon/paypal1.jpg" alt=""></a></li>
							<li><a href="#"><img src="{{ asset('frontend/') }}img/icon/paypal2.jpg" alt=""></a></li>
							<li><a href="#"><img src="{{ asset('frontend/') }}img/icon/paypal3.jpg" alt=""></a></li>
							<li><a href="#"><img src="{{ asset('frontend/') }}img/icon/paypal4.jpg" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>   
</footer>
<!--footer area end-->

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