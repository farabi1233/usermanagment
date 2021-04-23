@extends('frontend/layouts/master')

@section('content')
<!-- Banner Section -->
<section class="banner_part">
    <img src="{{asset('forntend/image/banner.jpg')}}" style="width: 100%">
</section>

<!-- About us Section -->
<section class="about_us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 11%;">News and Event</h3>

                <div class="row">
                    <img src="{{(!empty($newsEvent->image))? url('upload/news_event_images/'.$newsEvent->image):url('upload/no_image.jpg') }} " width="100%" height="400px" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">


                </div>
            </div>

            <div class="col-md-12">

                <p style="text-align: justify;"><strong>Details:</strong> {{$newsEvent->long_title}}</p>
            </div>



        </div>
    </div>
</section><!-- Footer Part -->

@endsection