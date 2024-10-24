@extends('frontend.layouts.master')

@section('title','Showrooms')

@section('style')

<link href="{{  asset('assets/css/about.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

<link href="{{  asset('assets/css/showrooms_style.css') }}" rel="stylesheet">

<style>
    /* desktop and responsive menu */
.showrooms_desktop {
  margin-left: 102px !important;
  float: unset;
  position: absolute;
  margin-left: -92px;
  margin-top: 19px;
  text-decoration: none;
  color: black;
}
@media (max-width: 700px) {

  .capithalbaths_responsive {
    display: none;
  }

  #showrooms_mobile {
    left: -91px;
    font-size: 18px;
    top: -9px;
  }

  .mobile_category {
    display: none !important;
  }
}
</style>

@endsection

@section('content')
	<!-- start header top -->
	 @include('frontend.inc.top_header')
	<!-- end header top -->

	<!-- start first div of page -->
	<div id="page">


		<!-- start header -->
		 @include('frontend.inc.menu')
		<!-- end header -->

		<!-- start main -->
        <main class="">
            <div class="container margin_60_35 add_bottom_30">

                <div class="container">
                    <!-- Header Section -->
                    <div class="gallery-header">
                        <div class="row justify-content-center align-items-center">
                            <!-- Image -->
                            <div class="col-md-6 d-flex justify-content-center">
                                <img id="img_responsive" style="width: 250px;" src="https://sanipexgroup.com/wp/wp-content/uploads/2024/05/MapLocation_0.png" alt="find us" class="mb-3">
                            </div>

                            <!-- Heading and Button -->
                            <div class="col-md-6 text-center">
                                <h1>{{ __('site.Our_Showrooms') }}</h1>
                                <a style="color: white !important" target="_blank" href="https://maps.app.goo.gl/93FBAAREjBux43yv9" class="button-find-us">{{ __('site.Find Us') }}</a>
                            </div>
                        </div>
                    </div>



                    <!-- start showrroms 1 -->
                    @foreach ($showrooms as $showroom)
                    <div class="row align-items-center mt-5">
                        <!-- Image -->
                        <div class="col-md-6 gallery-image">
                            <img src="https://capitalbaths.com/wp-content/uploads/2023/11/justtime-bg.webp" alt="SANIPEX GALLERY">
                        </div>

                        <!-- Description -->
                        <div class="col-md-6 gallery-description">
                            <h2 style="margin-top: 10px;"> {{ $showroom->getTranslatedAttribute('showroom_title') }} </h2>
                              {!! $showroom->getTranslatedAttribute('showroom_description') !!}

                            <!-- Find Us Links -->
                            <div class="find-us">
                                <p>{{ __('site.find_us') }}</p>
                                <a href="#">{{ $showroom->getTranslatedAttribute('showroom_address') }}</a>
                            </div>
                        </div>
                    </div>

                    {{-- start the map 1 --}}
                    <div class="cantainer my-3">
                       {!! $showroom->getTranslatedAttribute('showroom_map') !!}
                    </div>

                    {{-- start instagram feeds 1 --}}
                    <div class="container my-3">
                        <div class="container mt-5">


                            <div class="row g-4">

                                @php
                            // Decode the JSON string into an associative array
                            $videos = json_decode($showroom->showroom_instagram_videos, true); // true forces associative array
                        @endphp

                            @foreach ($videos as $video)
                                <div class="col-md-3">
                                    <div class="video-card">
                                        <video autoplay muted loop playsinline>
                                            <source src="{{ asset('storage/' . $video['download_link']) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            @endforeach

                        @php
                        // Decode the JSON string into an associative array
                        $videos = json_decode($showroom->showroom_instagram_videos, true); // true forces associative array
                    @endphp



                            </div>
                          </div>
                    </div>
                    <!-- end showrroms 1 -->

                    <hr style="border: #555 solid 1px;">

                    @endforeach


                    <!-- start the project pagination -->
                  <div class="pagination__wrapper my-4">
                    <ul class="pagination">
                        {{ $showrooms->links('pagination::bootstrap-4') }}
                    </ul>
                  </div>
                  <!-- end the projects paginations -->



                </div>

            </div>
            <!-- /container -->



           <div class="container my-5">

           </div>
           <!-- /container -->
        </main>
		<!-- end main -->

@endsection

@section('script')


<script src="{{ asset('assets/js/common_scripts.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/carousel_with_thumbs.js') }}"></script>


@endsection
