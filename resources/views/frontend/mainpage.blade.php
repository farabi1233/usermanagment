@extends('frontend/layouts/master')

@section('content')
    @include('frontend/layouts/slider');
	<!-- Mission and Vision -->
	@include('frontend/layouts/misson');
	<!-- News and Events -->
	@include('frontend/layouts/newsevent');
	<!-- Services -->
	@include('frontend/layouts/services');
	<!-- Footer Part -->
	
@endsection