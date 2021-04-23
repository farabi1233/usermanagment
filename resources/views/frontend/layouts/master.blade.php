<!DOCTYPE html>
<html>
<head>
	<title>Design a full template by bootsrap</title>
	<link rel="stylesheet" href="{{ asset('forntend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('forntend/css/customize.css') }}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- Header Section -->
	<section class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a href="/" class="navbar-brand"><img src=" {{(!empty($logo->image))? url('upload/logo_images/'.$logo->image):url('upload/no_image.jpg') }} " style="height: 50px;"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
					<div class="navbar-nav popular">
						<a href="/" class="nav-item nav-link active">Home</a>
						<div class="nav-item dropdown">
							<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
							<div class="dropdown-menu" style="background: #BADDFB;">
								<a href="{{ route('our.misson') }}" class="dropdown-item">About Us</a>
								<a href="{{ route('our.visson') }}" class="dropdown-item">Mission</a>
								<a href="" class="dropdown-item">Vision</a>
							</div>
						</div>
						<a href="{{ route('news.event') }}" class="nav-item nav-link">News and Event</a>
						<a href="contact.html" class="nav-item nav-link">Contact Us</a>
						<a href="" class="nav-item nav-link">Login</a>
					</div>
					<div class="navbar-nav">
						<form class="form-inline">
							<div class="input-group">
								<input type="text" name="search" placeholder="Search">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</section>

	@yield('content')
	<!-- Slider Section -->
	

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="gotoup">
					<img src="{{ asset('forntend/image/scrl.jpg') }}" style="width: 40px; height: 40px;">
				</div>
			</div>
		</div>
	</div>

	@include('frontend/layouts/footer');

	<!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(this).scrollTop()>300){
					$('.gotoup').fadeIn();
				}else{
					$('.gotoup').fadeOut();
				}
			});
			$('.gotoup').click(function(){
				$('html,body').animate({scrollTop:0},1000);
			});
		});
	</script>
	<script src="{{ asset('forntend/js/popper.min.js') }}"></script>
	<script src="{{ asset('forntend/js/bootstrap.min.js') }}"></script>
</body>
</html>