<section class="footer_part">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h4 style="color: white">Contact Us</h4>
					<p style="color: white">Address: {{$contract->address}}; Mobile: {{$contract->mobile}}, Email: {{$contract->email}}</p>
				</div>
				<div class="col-md-4">
					<h4 style="color: white">Follow Us</h4>
					<div class="social">
						<ul>
							<li><a href="{{$contract->facebook}}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="{{$contract->twitter}}"><i class="fa fa-twitter-square"></i></a></li>
							
							<li><a href="{{$contract->google}}"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="color: white;padding: 50px 0px 10px 0px;">
						Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> @ Popularsoft
					</p>
				</div>
			</div>
		</div>
	</section>