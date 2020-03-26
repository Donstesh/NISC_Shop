@extends('layouts.front.temp')

@section('cont')
<!-- Header -->

<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="{{ URL::asset('front/index.html') }}"><img src="images/Nisc_logo.png" alt="img"></div>
							<nav class="main_nav">
								<ul>
									<li class="hassubs active">
										<a href="{{ URL::asset('front/index.html') }}">HOME</a>
										
									</li>
									<li class="hassubs">
										<a href="{{ URL::asset('front/What's new.html') }}">WHAT'S NEW</a>
										<ul>
											<li><a href="new products.html">New products</a></li>
											<li><a href="nisc brand.html">Nisc brand</a></li>
											<li><a href="services.niscgroup.com">Services</a></li>
											<li><a href="#">Softwares</a></li>
											
										</ul>
									</li>
									<li><a href="#">OUR COMPANY</a></li>
									<li><a href="#">INVESTORS</a></li>
								
									<li><a href="{{ URL::asset('front/contact.html') }}">CONTACT US</a></li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<div class="shopping_cart">
									<a href="{{ URL::asset('front/cart.html') }}">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											<g>
												<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
											</g>
										</svg>
										<div>Cart <span>(0)</span></div>
									</a>
								</div>
								<div class="search">
									<div class="search_icon">
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;"
										 xml:space="preserve">
										<g>
											<path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												"/>
										</g>
									</svg>
									</div>
								</div>
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Search" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="header_social">
			<ul>
				<li><a href="https://www.youtube.com/channel/UCVlbV159E7QMbAomN9IgLXw/featured?view_as=subscriber"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/niscgroup/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com/NISCGROUP/?modal=composer"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/niscgroup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/niscgroup"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300"> 
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="{{ URL::asset('front/index.html">HOME<i class="fa fa-angle-down"></i></a>
						
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="#">WHAT'S NEW<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="new products.html">New products<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="nisc brand.html">Nisc brand<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="services.html">Services<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="softwares.html">Softwares<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="{{ URL::asset('front/index.html">OUR COMPANY<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="#">INVESTORS<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="{{ URL::asset('front/contact.html">CONTACTS US<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="https://www.youtube.com/channel/UCVlbV159E7QMbAomN9IgLXw/featured?view_as=subscriber"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/niscgroup/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com/NISCGROUP/?modal=composer"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/niscgroup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/niscgroup"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url({{ URL::asset('front/images/home_slider_1.jpg') }}"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title"><u>NISC GROUP LIMITED COMPANY.</u></div>
										<div class="home_slider_subtitle">Enjoy the difference.</div>
										<div class="button button_light home_button"><a href="#">SHOP NOW</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url({{ URL::asset('front/images/home_slider_2.jpg') }}"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title"><u>How will you make the mark?</u></div>
										<div class="home_slider_subtitle">Enjoy the difference.</div>
										<div class="button button_light home_button"><a href="#">EXPLORE NOW</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url({{ URL::asset('front/images/home_slider_3.jpg') }}"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
								<div class="home_slider_title"><u>"Legacy is greater than currency" </u></div>
										<div class="home_slider_subtitle">Enjoy the difference.</div>
										<div class="button button_light home_button"><a href="#">EXPLORE NOW</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url({{ URL::asset('front/images/home_slider_4.jpg') }}"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title"><u>NISC is our name and our product &service is our game.</u></div>
										<div class="home_slider_subtitle">Enjoy the difference.</div>
										<div class="button button_light home_button"><a href="#">EXPLORE NOW</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url({{ URL::asset('front/images/home_slider_1.jpg') }}"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title"><u>The future begins today.</u></div>
										<div class="home_slider_subtitle">Enjoy the difference.</div>
										<div class="button button_light home_button"><a href="#">EXPLORE NOW</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url({{ URL::asset('front/images/home_slider_1.jpg') }}"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title"><u>You own us and your power has Taken us further.</u></div>
										<div class="home_slider_subtitle"> The future begins today</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active"></li>
									<li class="home_slider_custom_dot">1.</li>
									<li class="home_slider_custom_dot">2.</li>
									<li class="home_slider_custom_dot">3.</li>
									<li class="home_slider_custom_dot">4.</li>
									<li class="home_slider_custom_dot">5.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>

	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url({{ URL::asset('front/images/avds_small.jp') }})"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="{{ URL::asset('front/images/discount.png" alt="">
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Discount</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">OUR BRAND</div>
						<div class="avds_text">We create innovative products</div>
						<div class="avds_link"><a href="{{ URL::asset('front/categories.html') }}">See More</a></div>
					</div>
				</div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url({{ URL::asset('front/images/avds_large.jpg') }}"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Nisc Professional (IT) Services</div>
						<div class="avds_text">NISC is coming soon.</div>
						<div class="avds_link avds_link_large"><a href="services.niscgroup.com">Know More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					 <h1>SHOP OFFICE & PERSONAL COMPUTERS</h1>
					 <p>&nbsp;</p>
					<div class="product_grid">

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="{{ URL::asset('front/images/product_1.jpg') }}" alt=""></div>
							<div class="product_extra product_new"><a href="office & home desktops.html">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href="office & home desktops.html">Office & home Desktops</a></div>
								<div class="product_price">From Ksh 7,500</div>
								<div class="product_price"><a href="office & home desktops.html">View more</a></div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="{{ URL::asset('front/images/product_2.jpg') }}" alt=""></div>
							<div class="product_extra product_sale"><a href="{{ URL::asset('front/office & home monitors.html">Sale</a></div>
							<div class="product_content">
								<div class="product_title"><a href="{{ URL::asset('front/office & home monitors.html') }}">Office & home Monitors</a></div>
								<div class="product_price">From Ksh 3,500</div>
								<div class="product_price"><a href="office & home monitors.html">View more</a></div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="{{ URL::asset('front/images/product_3.jpg') }}" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="{{ URL::asset('front/office & home laptops.html') }}">Office & home Laptops</a></div>
								<div class="product_price">From Ksh 20,000</div>
								<div class="product_price"><a href="office & home laptops.html">View more</a></div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="{{ URL::asset('front/images/product_4.jpg') }}" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="{{ URL::asset('front/categories.html') }}">Office & home keyboards</a></div>
								<div class="product_price">From Ksh 350</div>
								<div class="product_price"><a href="product.html">View more</a></div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="{{ URL::asset('front/images/product_5.jpg') }}" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="{{ URL::asset('front/categories.html') }}">Office & home headphones</a></div>
								<div class="product_price">From Ksh 450</div>
								<div class="product_price"><a href="product.html">View more</a></div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="{{ URL::asset('front/images/game 12.jpg') }}" alt=""></div>
							<div class="product_extra product_sale"><a href="{{ URL::asset('front/categories.html') }}">Hot</a></div>
							<div class="product_content">
								<div class="product_title"><a href="{{ URL::asset('front/categories.html') }}">High end processors </a></div>
								<div class="product_price">From Ksh 8,000</div>
								<div class="product_price"><a href="">View more</a></div>
							</div>
						</div>

					</div>
						
				</div>
			</div>
		</div>
	</div>


	<!-- Icon Boxes -->

	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Nisc newsletter</div>
						<div class="newsletter_text"><p>Keep me updated about devices, news, services, and offers from Nisc.</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url({{ URL::asset('front/images/footer.jpg') }}1"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">NISC ® </a></div>
						
						<div class="copyright ml-auto mr-auto"> &copy;    Copyright     2019    <u>Nisc Group LLC .</u> <script>document.  </script>   All rights reserved |  <i class="" aria-hidden="true"></i> <a href="https://niscgroup.com" target="_blank">|<u></u></a><a href="https://niscgroup.com" target="_blank"> Legal Terms   /<u></u></a><a href="https://niscgroup.com" target="_blank">  Privacy Policy   /<u></u></a><a href="https://niscgroup.com" target="_blank">  Cookie Policy  /<u></u></a></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="https://www.youtube.com/channel/UCVlbV159E7QMbAomN9IgLXw/featured?view_as=subscriber"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/niscgroup/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="https://www.facebook.com/NISCGROUP/?modal=composer"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/niscgroup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/niscgroup"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
    @endsection