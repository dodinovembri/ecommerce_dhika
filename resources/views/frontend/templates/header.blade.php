<header>
	<div class="main_header">
		<div class="header_top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<div class="language_currency">
							<ul>
								<li class="language"><a href="#"> Language <i class="icon-right ion-ios-arrow-down"></i></a>
									<ul class="dropdown_language">
										<?php foreach ($languange as $key => $value) { ?>										
											<li><a href="#">{{ $value->languange_name }}</a></li>
										<?php } ?>	
									</ul>
								</li>
								<li class="currency"><a href="#"> Currency <i class="icon-right ion-ios-arrow-down"></i></a>
									<ul class="dropdown_currency">
										<?php foreach ($currency as $key => $value) { ?>										
											<li><a href="#">{{ $value->currency_code }} - {{ $value->currency_name }}</a></li>
										<?php } ?>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="header_social text-right">
							<ul>
								<?php foreach ($social_media as $key => $value) { ?>
									<li><a href="{{ $value->social_media_link }}" target="_blank"><i class="{{ $value->social_media_icon }}"></i></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_middle">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-2 col-md-3 col-sm-3 col-3">
						<div class="logo">
							<?php $shop_information = App\Models\ShopInformationModel::where('status', 1)->first(); ?>
							<a href="index.html"><img src="{{ asset(Storage::url('img/shop')) }}/{{ $shop_information->shop_logo }}" alt=""></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-6 col-sm-7 col-8">
						<div class="header_right_info">
							<div class="search_container mobail_s_none">
								<form action="#">
									<div class="hover_category">
										<select class="select_option" name="select" id="categori2">
											<?php foreach ($product_category as $key => $value) { ?>
												<option value="{{ $value->id }}">{{ $value->product_category_name }}</option>
											<?php } ?>
										</select>                        
									</div>
									<div class="search_box">
										<input placeholder="Search product..." type="text">
										<button type="submit"><span class="lnr lnr-magnifier"></span></button>
									</div>
								</form>
							</div>
							<div class="header_account_area">
								<div class="header_account_list register">
									<ul>
										<li><a href="{{ url('frontend/register/index') }}">Register</a></li>
										<li><span>/</span></li>
										<li><a href="{{ url('frontend/login/index') }}">Login</a></li>
									</ul>
								</div>
								<div class="header_account_list header_wishlist">
									<a href="{{ url('frontend/wishlist/index') }}"><span class="lnr lnr-heart"></span> <span class="item_count">3</span> </a>
								</div>
								<div class="header_account_list  mini_cart_wrapper">
									<a href="javascript:void(0)"><span class="lnr lnr-cart"></span><span class="item_count">2</span></a>
									<!--mini cart-->
									<div class="mini_cart">
										<div class="cart_gallery">
											<div class="cart_close">
												<div class="cart_text">
													<h3>cart</h3>
												</div>
												<div class="mini_cart_close">
													<a href="javascript:void(0)"><i class="icon-x"></i></a>
												</div>
											</div>
											<?php for ($i=0; $i < 3; $i++) { ?>
												<div class="cart_item">
													<div class="cart_img">
														<a href="#"><img src="{{ asset('frontend/img/s-product/product.jpg') }}" alt=""></a>
													</div>
													<div class="cart_info">
														<a href="#">Primis In Faucibus</a>
														<p>1 x <span> $65.00 </span></p>    
													</div>
													<div class="cart_remove">
														<a href="#"><i class="icon-x"></i></a>
													</div>
												</div>												
											<?php } ?>
										</div>
										<div class="mini_cart_table">
											<div class="cart_table_border">
												<div class="cart_total">
													<span>Sub total:</span>
													<span class="price">$125.00</span>
												</div>
												<div class="cart_total mt-10">
													<span>total:</span>
													<span class="price">$125.00</span>
												</div>
											</div>
										</div>
										<div class="mini_cart_footer">
											<div class="cart_button">
												<a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
											</div>
											<div class="cart_button">
												<a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
											</div>

										</div>
									</div>
									<!--mini cart end-->
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="header_bottom sticky-header">
			<div class="container">  
				<div class="row align-items-center">
					<div class="col-12 col-md-6 mobail_s_block">
						<div class="search_container">
							<form action="#">
								<div class="hover_category">
									<select class="select_option" name="select" id="categori2">
										<?php foreach ($product_category as $key => $value) { ?>
											<option value="{{ $value->id }}">{{ $value->product_category_name }}</option>
										<?php } ?>
									</select>                        
								</div>
								<div class="search_box">
									<input placeholder="Search product..." type="text">
									<button type="submit"><span class="lnr lnr-magnifier"></span></button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="categories_menu">
							<div class="categories_title">
								<h2 class="categori_toggle">All Cattegories</h2>
							</div>
							<div class="categories_menu_toggle">
								<ul>
									<?php foreach ($product_category as $key => $value) { ?>
										<li><a href="{{ $value->id }}"> {{ $value->product_category_name }}</a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<!--main menu start-->
						<div class="main_menu menu_position"> 
							<nav>  
								<ul>
									<li><a href="contact.html"> Home</a></li>
									<li><a href="contact.html"> Shop</a></li>
									<li><a href="contact.html"> Blog</a></li>
									<li><a href="contact.html"> Contact Us</a></li>
								</ul>  
							</nav> 
						</div>
						<!--main menu end-->
					</div>
					<div class="col-lg-3">
						<div class="call-support">
							<p><a href="tel:(08)23456789">{{ $shop_information->shop_call_us }}</a> Customer Support</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</header>
<!--header area end-->