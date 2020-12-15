<!--footer area start-->
<footer class="footer_widgets">
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-7">
					<div class="widgets_container contact_us">
						<div class="footer_logo">
							<a href="index.html"><img src="{{ asset(Storage::url('img/shop')) }}/{{ $shop_information->shop_logo }}" alt=""></a>
						</div>
						<p class="footer_desc">{{ $shop_information->shop_description }}</p>
						<p><span>Address:</span> {{ $shop_information->shop_address }}</p>
						<p><span>Email:</span> <a href="mailto:{{$shop_information->shop_email}}">{{ $shop_information->shop_email }}</a></p>
						<p><span>Call us:</span> <a href="tel:(08)23456789">{{ $shop_information->shop_call_us }}</a> </p>
					</div>          
				</div>
				<div class="col-lg-2 col-md-3 col-sm-5">
					<div class="widgets_container widget_menu">
						<h3>Information</h3>
						<div class="footer_menu">

							<ul>
								<li><a href="{{ url('frontend/about_us/index') }}">About Us</a></li>
								{{-- <li><a href="#">Delivery Information</a></li>
								<li><a href="#"> Privacy Policy</a></li>
								<li><a href="#"> Terms & Conditions</a></li>
								<li><a href="contact.html"> Contact Us</a></li>
								<li><a href="#"> Site Map</a></li> --}}
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4">
					<div class="widgets_container widget_menu">
						<h3>Extras</h3>
						<div class="footer_menu">
							<ul>
								{{--<li><a href="#">Brands</a></li>
								<li><a href="#">Gift Certificates</a></li>
								<li><a href="#">Affiliate</a></li>
								<li><a href="#">Specials</a></li>
								<li><a href="#">Returns</a></li>--}}
								<li><a href="{{ url('frontend/my_order/index') }}"> Order History</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="widgets_container widget_newsletter">
						<h3>Sign up newsletter</h3>
						<p class="footer_desc">Get updates by subscribe our weekly newsletter</p>
						<div class="subscribe_form">
							<form method="POST" action="{{url('frontend/subscriber/store')}}">
								@csrf
								<input id="mc-email" type="email" name="newsletter" autocomplete="off" placeholder="Enter you email" / required="">
								<button id="mc-submit" type="submit">Subscribe</button>
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
						<p>Copyright © 2020. All Rights Reserved.</p>
					</div>
				</div>    
				<div class="col-lg-6 col-md-5">    
					<div class="footer_payment">
						<ul>
							<?php 
								$payment_method = App\Models\PaymentMethodModel::where('status', 1)->get();
								foreach ($payment_method as $key => $value) { ?>
								<li><a href="#"><img src="{{ asset(Storage::url('img/payment_method')) }}/{{ $value->payment_method_image }}" alt=""></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>   
</footer>
<!--footer area end-->