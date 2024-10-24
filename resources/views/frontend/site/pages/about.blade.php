@extends('frontend.layouts.master')

@section('style')
    <!-- About css style -->
    <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet">
@endsection

@section('title','About')


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
                <div class="main_title">
                    <h2>{{$about_data->getTranslatedAttribute('title') }}</h2>
                    <p class="my-5">{!! $about_data->getTranslatedAttribute('short_description') !!}</p>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h2>{{ $about_data->getTranslatedAttribute('about_1') }}</h2>
                            <p class="lead">{!! $about_data->getTranslatedAttribute('about_1_desc') !!}</p>
                            <p> We offer a wide range of services, including assistance in selection and design, to ensure that you get the perfect product for your needs .</p>
                            <img src="{{ Voyager::image($about_data->image_1)  }}" alt="" class="arrow_1">
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                            <img src="{{ Voyager::image($about_data->image_2)  }}" alt="" class="img-fluid" width="350" height="268">
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                            <img src="{{ Voyager::image($about_data->image_3)  }}" alt="" class="img-fluid" width="350" height="268">
                    </div>
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h2>{{ $about_data->getTranslatedAttribute('about_2') }}</h2>
                            <p class="lead">{!! $about_data->getTranslatedAttribute('about_2_desc') !!}</p>
                            <img src="{{ Voyager::image($about_data->image_1)  }}" alt="" class="arrow_2">
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                        <img src="{{ Voyager::image($about_data->image_5)  }}" alt="" class="img-fluid" width="350" height="268">
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                        <img src="{{ Voyager::image($about_data->image_6)  }}" alt="" class="img-fluid" width="350" height="268">
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h2>{{ $about_data->getTranslatedAttribute('about_3') }}</h2>
                            <p class="lead">{!! $about_data->getTranslatedAttribute('about_3_desc') !!}</p>
                        </div>

                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                            <img src="https://capitalbaths.com/wp-content/uploads/2023/04/126844477_223123575835623_4006226608013983320_n-400x570.jpg" alt="" class="img-fluid" width="350" height="316">
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->



           <div class="container my-5">

           </div>
           <!-- /container -->
        </main>
		<!-- end main -->

@endsection
