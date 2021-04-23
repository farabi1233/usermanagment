<section class="our_services">
	<div class="container" style="padding-top: 15px">
		<!-- Nav tab -->
		<ul class="nav nav-tabs">
			@php
			$count_service = 0;

			@endphp

			@foreach ($services as $service)
			<li class="nav-item">
				<a href="#{{$service->id}}" class="nav-link @if($count_service == 0) { active } @endif" data-toggle="tab">{{$service->short_title}}</a>
			</li>
			@php
			$count_service++;

			@endphp
			@endforeach

		</ul>
		<!-- Tab Content -->
		<div class="tab-content">
			@php
			$count_service = 0;

			@endphp

			@foreach ($services as $service)
			<div id="{{$service->id}}" class="container tab-pane @if($count_service == 0) { active } @endif">
				<h3>{{$service->short_title}}</h3>
				<p>{{$service->long_title}}</p>
			</div>

			@php
			$count_service++;

			@endphp
			@endforeach
		</div>
	</div>
</section>