@extends('front.layout.master')

@section('title', 'Home')

@section('body')

	<div class="hero">


		<div class="hero-slide">
			<div class="img overlay" style="background-image: url('front/img/hero_bg_3.jpg')"></div>
			<div class="img overlay" style="background-image: url('front/img/hero_bg_2.jpg')"></div>
			<div class="img overlay" style="background-image: url('front/img/hero_bg_1.jpg')"></div>
		</div>

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<h1 class="heading" data-aos="fade-up">Where there are useful and interesting books</h1>
					<form action="./shop" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
						<input type="text" class="form-control px-4" name="search" value="{{ request('search') }}" placeholder="Search for your favorite books">
						<button type="submit" class="btn btn-primary">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6">
					<h2 class="font-weight-bold text-primary heading">Popular Properties</h2>
				</div>
				<div class="col-lg-6 text-lg-end">
					<p><a href="./product" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a></p>
				</div>
			</div>
			<div class="row">

				<div class="col-12">
					<div class="property-slider-wrap">

						<div class="property-slider">
                            @foreach($commicProducts as $commicProduct)
							<div class="property-item">
								<div class="box">
                                    <a href="product/{{ $commicProduct->id }}" class="img">
                                        <img src="front/img/products/{{ $commicProduct->productImages[0]->path }}" alt="Image" class="img-fluid-2">
                                    </a>
                                </div>

								<div class="property-content">
                                    <div class="property-price">
                                        <div class="price mb-2"><span>${{$commicProduct->price}}</span></div>
                                        <div class="price price-2 mb-2">${{$commicProduct->discount}}</div>
                                    </div>

									<div>
                                        <span class="city d-block mb-3">{{ $commicProduct->name }}</span>
										<span class="d-block mb-2 text-black-50"> {{$commicProduct->author->name}}</span>

                                        <div class="btn-pro">
                                            <a href="product/{{ $commicProduct->id }}" class="btn btn-primary py-2 px-3">See Details</a>
                                            <a href="cart/add/{{ $commicProduct->id }}" class="btn btn-primary py-2 px-3">Add To Cart</a>
                                        </div>
									</div>
								</div>
							</div> <!-- .item -->
                            @endforeach

						</div>

						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

{{-- info author   --}}
	<section class="features-1">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="300">
					<div class="box-feature">
						<span class="flaticon-house"></span>
						<h3 class="mb-3">Our Store</h3>
						<p>We will bring you the best experience. </p>
						<p><a href="#" class="learn-more">Learn More</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="500">
					<div class="box-feature">
						<span class="flaticon-building"></span>
						<h3 class="mb-3"> Branch</h3>
						<p>The store has many branches nationwide.</p>
						<p><a href="#" class="learn-more">Learn More</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="400">
					<div class="box-feature">
						<span class="flaticon-house-3"></span>
						<h3 class="mb-3">Customer Care</h3>
						<p>Our service is always ready to serve you.</p>
						<p><a href="#" class="learn-more">Learn More</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="600">
					<div class="box-feature">
						<span class="flaticon-house-1"></span>
						<h3 class="mb-3">Transport</h3>
						<p>delivered to you as soon as possible.</p>
						<p><a href="#" class="learn-more">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>



	<div class="section sec-testimonials">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-md-6">
					<h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">Customer Says</h2>
				</div>
				<div class="col-md-6 text-md-end">
					<div id="testimonial-nav">
						<span class="prev" data-controls="prev">Prev</span>

						<span class="next" data-controls="next">Next</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">

				</div>
			</div>

			<div class="testimonial-slider-wrap">
				<div class="testimonial-slider">
					<div class="item">
						<div class="testimonial">
							<img src="front/images/person_5-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">Kim Lan</h3>
                            <p class="text-black-50">1920-2007</p>
                            <blockquote>
								<p>&ldquo;He was born in Phu Luu village, Tan Hong commune, Tu Son district (now in Dong Ngan ward, Tu Son town), Bac Ninh province, (in 2008 in the Hanoi region). Due to difficult family circumstances, he only finished primary school and then had to work. Kim Lan started writing short stories in 1941. .&rdquo;</p>
							</blockquote>
						</div>
					</div>
					<div class="item">
						<div class="testimonial">
							<img src="front/images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">To Hoai</h3>
                            <p class="text-black-50">1920-2014</p>
                            <blockquote>
								<p>&ldquo;To Hoai  was born Nguyen Sen.
                                    To Hoai was born in his father's hometown in Cat Dong village, Kim Bai town, Thanh Oai district, old Ha Dong province in a family of craftsmen.
                                 </p>
							</blockquote>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="front/images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">To Huu</h3>
                            <p class="text-black-50">1920-2002</p>
                            <blockquote>
                                <p>&ldquo;To Huu, real name Nguyen Kim Thanh (October 4, 1920 – December 9, 2002) was originally from Phu Lai village, now in Quang Tho commune, Quang Dien district, Thua Thien Hue province, is a typical poet. of Vietnam's revolutionary poetry, at the same time he was also a politician, an old revolutionary cadre.&rdquo;</p>
							</blockquote>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="front/images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">Xuan Dieu</h3>
                            <p class="text-black-50">1916-1985</p>
                            <blockquote>
								<p>&ldquo;Ngo Xuan Dieu, native of Trao Nha village, Can Loc district, Ha Tinh province but was born in his mother's hometown Go Boi, Tung Gian village, Phuoc Hoa, Tuy Phuoc, Binh Dinh province. Father is Mr. Ngo Xuan Tho (in the pedigree recorded in the family record). Ngo Xuan Thu) and her mother is Nguyen Thi Hiep. Later, he took the village's name as Trao Nha as a pseudonym. Xuan Dieu lived in Tuy Phuoc until he was 11 years old when he went to the South to study in Quy Nhon.&rdquo;</p>
							</blockquote>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="section section-4 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-5">
					<h2 class="font-weight-bold heading text-primary mb-4">Let's find Bookstore that's perfect for you</h2>
					<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit.</p>
				</div>
			</div>
			<div class="row justify-content-between mb-5">
				<div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
					<div class="img-about dots">
						<img src="front/img/hero_bg_3.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-home2"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">2M Properties</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-person"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Top Rated Agents</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-security"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Legit Properties</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row section-counter mt-5">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">6292</span></span>
						<span class="caption text-black-50"># of Buy Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">6181</span></span>
						<span class="caption text-black-50"># of Sell Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">9316</span></span>
						<span class="caption text-black-50"># of All Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">8191</span></span>
						<span class="caption text-black-50"># of Subscriber</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="row justify-content-center footer-cta" data-aos="fade-up">
			<div class="col-lg-7 mx-auto text-center">
				<h2 class="mb-4 ">Become a part of our growing members</h2>
				<p><a href="./about" target="_blank" class="btn btn-primary text-white py-3 px-4">About Us</a></p>
			</div> <!-- /.col-lg-7 -->
		</div> <!-- /.row -->
	</div>

	<div class="section section-5 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-6 mb-5">
					<h2 class="font-weight-bold heading text-primary mb-4">Our Agents</h2>
					<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit totam? Quod maiores.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="front/images/person_1-min.jpg" alt="Image"
						class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">James Doe</a></h2>
							<span class="meta d-block mb-3">Real Estate Agent</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="front/images/person_2-min.jpg" alt="Image"
						class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">Jean Smith</a></h2>
							<span class="meta d-block mb-3">Real Estate Agent</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="front/images/person_3-min.jpg" alt="Image"
						class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
							<span class="meta d-block mb-3">Real Estate Agent</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
