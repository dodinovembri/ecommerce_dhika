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
							<a href="index.html"><img src="{{ asset(Storage::url('img/shop_information')) }}/{{ $shop_information->shop_logo }}" alt=""></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-6 col-sm-7 col-8">
						<div class="header_right_info">
							<div class="search_container mobail_s_none">
								<form action="{{ url('frontend/shop/search') }}" method="POST">
									@csrf
									<div class="hover_category">
										<select class="select_option" name="product_category_id" id="categori2">
											<?php foreach ($product_category as $key => $value) { ?>
												<option value="{{ $value->id }}">{{ $value->product_category_name }}</option>
											<?php } ?>
										</select>                        
									</div>
									<div class="search_box">
										<input placeholder="Search product..." type="text" name="search">
										<button type="submit"><span class="lnr lnr-magnifier"></span></button>
									</div>
								</form>
							</div>
							<div class="header_account_area">
								<div class="header_account_list register">
									<ul>
										<li><a href="{{ url('frontend/register/index') }}">Register</a></li>
										<li><span>/</span></li>
										<?php if (isset(auth()->user()->id)) { ?>
											<li><form action="{{ route('logout') }}" method="POST">@csrf<button class="form-control" type="submit">Logout</button></form></li>
										<?php }else{ ?>
											<li><a href="{{ route('login') }}">Login</a></li>
										<?php } ?>
									</ul>
								</div>
								<?php       
								$user_id = isset(auth()->user()->id) ? auth()->user()->id : '';  
								$count_wishlist = App\Models\WishlistModel::where('status', 1)->where('user_id', $user_id)->count();
								$count_cart = App\Models\CartDetailModel::where('status', 1)->where('user_id', $user_id)->count(); ?>
								<div class="header_account_list header_wishlist">
									<a href="{{ url('frontend/wishlist/index') }}"><span class="lnr lnr-heart"></span> <span class="item_count">{{ $count_wishlist }}</span> </a>
								</div>
								<div class="header_account_list  mini_cart_wrapper">
									<a href="javascript:void(0)"><span class="lnr lnr-cart"></span><span class="item_count">{{ $count_cart }}</span></a>
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
											<?php 
											$user_id = isset(auth()->user()->id) ? auth()->user()->id : '';
											if (!empty($user_id)) { 
												$cart_data = App\Models\CartModel::where('user_id', $user_id)->first();
												if (!empty($cart_data)) {
													$cart_detail_data = App\Models\CartDetailModel::with('product')->where('cart_id', $cart_data->id)->get();
													foreach ($cart_detail_data as $key => $value) { ?>
														<div class="cart_item">
															<div class="cart_img">
																<a href="#"><img src="{{ asset(Storage::url('img/product')) }}/{{ $value->product->product_image }}" alt=""></a>
															</div>
															<div class="cart_info">
																<a href="#">{{ $value->product->product_name }}</a>
																<p>1 x <span> {{ number_format($value->product->price, 2, ',', '.') }} </span></p>    
															</div>
															<div class="cart_remove">
																<a href="{{ url('frontend/cart/destroy', $value->id) }}"><i class="icon-x"></i></a>
															</div>
														</div>	
													<?php } ?>															
												<?php }																					
											} 
											?>
										</div>
										<?php 
										$user_id = isset(auth()->user()->id) ? auth()->user()->id : '';
										if (!empty($user_id)) { 
											$cart_data = App\Models\CartModel::where('user_id', $user_id)->first();
											if (!empty($cart_data)) {
												$cart_detail_data = App\Models\CartDetailModel::with('product')->where('cart_id', $cart_data->id)->get(); 
												$sub_total = $cart_data->total_price;
												$total = $cart_data->total_price; 
												?>
												<div class="mini_cart_table">
													<div class="cart_table_border">
														<div class="cart_total">
															<span>Sub total:</span>
															<span class="price">Rp. {{ number_format($sub_total, 2, ',', '.') }}</span>
														</div>
														<div class="cart_total mt-10">
															<span>total:</span>
															<span class="price">Rp. {{ number_format($total, 2, ',', '.') }}</span>
														</div>
													</div>
												</div>
											<?php	}else{
												echo "</br>";
												echo "<p>Your cart is empty, shop now to make an order!</p>";
											}
										}									
										?>
										<div class="mini_cart_footer">
											<div class="cart_button">
												<a href="{{ url('frontend/cart/index') }}"><i class="fa fa-shopping-cart"></i> View cart</a>
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
										<li><a href="{{ url('frontend/shop/searchbycategory', $value->id) }}"> {{ $value->product_category_name }}</a></li>
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
									<li><a href="{{ url('/') }}"> Home</a></li>
									<li><a href="{{ url('frontend/my_order/index') }}"> My Order</a></li>
									<li><a href="{{ url('frontend/about_us/index') }}"> About Us</a></li>
								</ul>  
							</nav> 
						</div>
						<!--main menu end-->
					</div>
					<div class="col-lg-3">
						<div class="call-support">
							<p><a href="tel:{{ $shop_information->shop_call_us }}">{{ $shop_information->shop_call_us }}</a> Customer Support</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</header>
<!--header area end-->