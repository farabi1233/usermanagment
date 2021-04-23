@extends('frontend/layouts/master')

@section('content')
<section class="banner_part">
		<img src="{{asset('forntend/image/banner.jpg')}}" style="width: 100%">
	</section>

   
<section class="mission_vision">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">Vission</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src="{{(!empty($visson->image))? url('upload/visson_images/'.$visson->image):url('upload/no_image.jpg') }}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
					<p style="text-align: justify;"> {{$visson->title}}</p>
				</div>
				
			</div>
		</div>
	</section>
	
@endsection