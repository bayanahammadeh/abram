@include('layouts.css-packages')

<body>
	<div class="wrapper-main">
		<nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
			<div class="container">
				<a class="navbar-brand" href="{{url('/')}}">
					<img src="{{asset('storage/'.$value[2])}}" alt="logo" />
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fas fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto" id="navbar-ul"></ul>
				</div>
			</div>
		</nav>

		<header class="slider-main">
			<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active" style="background-image: url('assets/images/slider-01.jpg')">
						<div class="carousel-caption d-none d-md-block">
							<h3>Welcome to {{$value[0]}}</h3>
							<p>{{$value[1]}}</p>
						</div>
					</div>
				</div>
			</div>
		</header>


		<!-- Page Content -->
		<div class="container">
			<!-- About Section -->
			<div class="about-main">
				<div class="row">
					<div class="col-lg-6">
						<h2>Welcome to {{$value[0]}}</h2>
						<p>{{$value[1]}}</p>
					</div>
					<div class="col-lg-6">
						<img class="img-fluid rounded" src="{{asset('assets/images/about-img.jpg')}}" alt="" />
					</div>
				</div>
				<!-- /.row -->
			</div>
		</div>

		<div class="services-bar">
			<div class="container">
				<h1 class="py-4">Our Best Services </h1>
				<!-- Services Section -->
				<div class="row" id="row-services"></div>
				<!-- /.row -->
			</div>
		</div>

		<div class="container">
			<!-- Project Section -->
			<div class="portfolio-main">
				<h2>Our Projects</h2>
				<div id="projects" class="projects-main row" style="position: relative; height: 460px;"></div>
				<!-- /.row -->
			</div>
		</div>

		<div class="blog-slide">
			<div class="container">
				<h2>Our Blog</h2>
				<div class="row">
					<div class="col-lg-12">
						<div id="blog-slider" class="owl-carousel">
							<div class="post-slide">
								<div class="post-header">
									<h4 class="title">
										<a href="#">Latest blog Post</a>
									</h4>
									<ul class="post-bar">
										<li><img src="{{asset('assets/images/testi_01.png')}}" alt=""><a href="#">Williamson</a></li>
										<li><i class="fa fa-calendar"></i>02 June 2018</li>
									</ul>
								</div>
								<div class="pic">
									<img src="{{asset('assets/images/img-1.jpg')}}" alt="">
									<ul class="post-category">
										<li><a href="#">Business</a></li>
										<li><a href="#">Financ</a></li>
									</ul>
								</div>
								<p class="post-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
								</p>
							</div>

							<div class="post-slide">
								<div class="post-header">
									<h4 class="title">
										<a href="#">Latest blog Post</a>
									</h4>
									<ul class="post-bar">
										<li><img src="{{asset('assets/images/testi_02.png')}}" alt=""><a href="#">Kristiana</a></li>
										<li><i class="fa fa-calendar"></i>05 June 2018</li>
									</ul>
								</div>
								<div class="pic">
									<img src="{{asset('assets/images/img-2.jpg')}}" alt="">
									<ul class="post-category">
										<li><a href="#">Business</a></li>
										<li><a href="#">Financ</a></li>
									</ul>
								</div>
								<p class="post-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
								</p>
							</div>

							<div class="post-slide">
								<div class="post-header">
									<h4 class="title">
										<a href="#">Latest blog Post</a>
									</h4>
									<ul class="post-bar">
										<li><img src="{{asset('assets/images/testi_01.png')}}" alt=""><a href="#">Kristiana</a></li>
										<li><i class="fa fa-calendar"></i>05 June 2018</li>
									</ul>
								</div>
								<div class="pic">
									<img src="{{asset('assets/images/img-3.jpg')}}" alt="">
									<ul class="post-category">
										<li><a href="#">Business</a></li>
										<li><a href="#">Financ</a></li>
									</ul>
								</div>
								<p class="post-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
								</p>
							</div>

							<div class="post-slide">
								<div class="post-header">
									<h4 class="title">
										<a href="#">Latest blog Post</a>
									</h4>
									<ul class="post-bar">
										<li><img src="{{asset('assets/images/testi_02.png')}}" alt=""><a href="#">Kristiana</a></li>
										<li><i class="fa fa-calendar"></i>05 June 2018</li>
									</ul>
								</div>
								<div class="pic">
									<img src="{{asset('assets/images/img-4.jpg')}}" alt="">
									<ul class="post-category">
										<li><a href="#">Business</a></li>
										<li><a href="#">Financ</a></li>
									</ul>
								</div>
								<p class="post-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Contact Us -->
		<div class="touch-line">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
					</div>
					<div class="col-md-4">
						<a class="btn btn-lg btn-secondary btn-block" href="#"> Contact Us </a>
					</div>
				</div>
			</div>
		</div>

		<!-- /.container -->
		<!--footer starts from here-->
		<footer class="footer">
			<div class="container bottom_border">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col">
						<h5 class="headin5_amrc col_white_amrc pt2">About Us</h5>
						<!--headin5_amrc-->
						<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>
						<ul class="footer-social">
							<li><a class="facebook hb-xs-margin" href="#"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>
							<li><a class="twitter hb-xs-margin" href="#"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>
							<li><a class="instagram hb-xs-margin" href="#"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>
							<li><a class="googleplus hb-xs-margin" href="#"><span class="hb hb-xs spin hb-google-plus"><i class="fab fa-google-plus-g"></i></span></a></li>
							<li><a class="dribbble hb-xs-margin" href="#"><span class="hb hb-xs spin hb-dribbble"><i class="fab fa-dribbble"></i></span></a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
						<!--headin5_amrc-->
						<ul class="footer_ul_amrc">
							<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Default Version</a></li>
							<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Boxed Version</a></li>
							<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Our Team </a></li>
							<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>About Us</a></li>
							<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Our Services</a></li>
							<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Get In Touch</a></li>
						</ul>
						<!--footer_ul_amrc ends here-->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col">
						<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
						<!--headin5_amrc ends here-->
						<ul class="footer_ul2_amrc">
							<li>
								<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
								<p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
							</li>
							<li>
								<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
								<p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
							</li>
							<li>
								<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
								<p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
							</li>
						</ul>
						<!--footer_ul2_amrc ends here-->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 ">
						<div class="news-box">
							<h5 class="headin5_amrc col_white_amrc pt2">Newsletter</h5>
							<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
							<form action="#">
								<div class="input-group">
									<input class="form-control" placeholder="Search for..." type="text">
									<span class="input-group-btn">
										<button class="btn btn-secondary" type="button">Go!</button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<p class="copyright text-center">All Rights Reserved. &copy; 2018 <a href="#">Zonebiz</a> Design By :
					<a href="https://html.design/">html design</a>
				</p>
			</div>
		</footer>
	</div>

	@include('layouts.js-packages')


	<script>
		function service() {
			let name;
			let path;

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				type: 'GET',
				dataType: 'json',
				url: '/services',

				success: function(response) {
					let count = response.data;
					for (var i = 0; i < count.length; i++) {
						document.getElementById("row-services").innerHTML += '<div class="col-lg-4 mb-4">' +
							'<div class="card h-100">' +
							'<div class="card-img">' +
							'<img class="img-fluid" src="storage/' + response.data[i]['image'] + '" />' +
							'</div>' +
							'<div class="card-body">' +
							'<h4 class="card-header">' + response.data[i]['name'] + '</h4>' +
							'<p class="card-text">' + response.data[i]['description'] + '</p>' +
							'</div>' +
							'</div>' +
							'</div>';

					}
				},
				error: function(data) {}
			});
		}

		function project() {
			let name;
			let path;

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				type: 'GET',
				dataType: 'json',
				url: '/projects',

				
				success: function(response) {
					
					let count = response.data;
					for (var i = 0; i < count.length; i++) {
						document.getElementById("projects").innerHTML += '<div class="col-lg-4 col-sm-6  pro-item portfolio-item financial">' +
							'<div class="card h-100">' +
							'<div class="card-img">' +
							'<a href="storage/' + response.data[i]['image'] + '" data-fancybox="images">' +
							'<img class="card-img-top" src="storage/' + response.data[i]['image'] + '" alt="" />' +
							'<div class="overlay"><i class="fas fa-arrows-alt"></i></div>' +
							'</a>' +
							'</div>' +
							'<div class="card-body">' +
							'<h4 class="card-title">' +
							'<a href="#">Financial Sustainability</a>' +
							'</h4>' +
							'</div>' +
							'</div>' +
							'</div>';
					}
				},
				error: function(data) {}
			});
		}

		function navbar_menu() {
			let li, a;
			let ul = document.getElementById("navbar-ul");

			$.ajax({
				type: 'GET',
				dataTyp: 'json',
				url: '/navbar',
				success: function(response) {
					let count = response.data;
					for (var i = 0; i < count.length; i++) {
						li = document.createElement("li");
						a = document.createElement("a")
						a.textContent = response.data[i];
						if (response.data[i] == 'Home') {
							a.setAttribute("href", "/");
							a.classList.add("active");
						} else {
							a.setAttribute("href", response.data[i]);
						}
						a.classList.add("nav-link");
						li.classList.add("nav-item");
						ul.appendChild(li);
						li.appendChild(a);
					}
				},
				error: function(data) {}
			});
		}

		$(document).ready(function(e) {
		
			service();
			project();
		});
	</script>