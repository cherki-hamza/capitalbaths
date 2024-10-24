@extends('frontend.layouts.master')

@section('style')
    <!-- About css style -->
    <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet">
@endsection

@section('title', 'Services')


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
                    <h2>{{ __('site.services') }}</h2>
                    <p class="my-5"> </p>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h2>{{ $service->getTranslatedAttribute('title_1') }}</h2>
                            <p class="lead">
                                {!! $service->getTranslatedAttribute('description_1') !!}
                            </p>
                            <p>

                           @if (LaravelLocalization::getCurrentLocale() == 'ar')

                           <ul style="--awb-size:18px;--awb-line-height:30.6px;--awb-icon-width:30.6px;--awb-icon-height:30.6px;--awb-icon-margin:12.6px;--awb-content-margin:43.2px;"
                                class="fusion-checklist fusion-checklist-1 fusion-checklist-default fusion-checklist-divider type-icons">

                                <li class="fusion-li-item my-3" style="">
                                    <span class="icon-wrapper circle-no"><i
                                    class="fusion-li-icon fa-shower fas" aria-hidden="true"></i></span>
                                    <div class="fusion-li-item-content"><span style="color: black;">مفيدة ومختلفة</span></div>
                                    </li>
                                    <li class="fusion-li-item" style=""><span class="icon-wrapper circle-no"><i
                                    class="fusion-li-icon fa-rainbow fas" aria-hidden="true"></i></span>
                                    <div class="fusion-li-item-content">
                                    <p><span style="color: black;">حلول مخصصة</span></p>
                                    </div>
                                    </li>
                                    <li class="fusion-li-item" style=""><span class="icon-wrapper circle-no"><i class="fa fa-bath" aria-hidden="true"></i></span>
                                    <div class="fusion-li-item-content">
                                    <p><span style="color: black;">مساحات فعّالة من حيث التكلفة</span></p>
                                    </div>
                                    </li>

                            </ul>

                           @else
                              <ul style="--awb-size:18px;--awb-line-height:30.6px;--awb-icon-width:30.6px;--awb-icon-height:30.6px;--awb-icon-margin:12.6px;--awb-content-margin:43.2px;"
                                class="fusion-checklist fusion-checklist-1 fusion-checklist-default fusion-checklist-divider type-icons">

                                <li class="fusion-li-item my-3" style="">
                                    <span class="icon-wrapper circle-no"><i
                                            class="fusion-li-icon fa-shower fas" aria-hidden="true"></i></span>
                                    <div class="fusion-li-item-content"><span style="color: black;">Useful and
                                            different</span></div>
                                </li>
                                <li class="fusion-li-item" style=""><span class="icon-wrapper circle-no"><i
                                            class="fusion-li-icon fa-rainbow fas" aria-hidden="true"></i></span>
                                    <div class="fusion-li-item-content">
                                        <p><span style="color: black;">Customized Solutions</span></p>
                                    </div>
                                </li>
                                <li class="fusion-li-item" style=""><span class="icon-wrapper circle-no"><i class="fa fa-bath" aria-hidden="true"></i></span>
                                    <div class="fusion-li-item-content">
                                        <p><span style="color: black;">Cost-effective Spaces</span></p>
                                    </div>
                                </li>

                            </ul>
                           @endif


                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                        <img src="https://capitalbaths.com/wp-content/uploads/2023/11/bathroom-solution-banner01-400x495.webp"
                            alt="" class="img-fluid" width="350" height="268">
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                        <img src="https://capitalbaths.com/wp-content/uploads/2023/11/bathroom-solution-banner02-400x611.webp"
                            alt="" class="img-fluid" width="350" height="268">
                    </div>
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h2>{{ $service->getTranslatedAttribute('title_2') }}</h2>
                            <p class="lead">
                                {!! $service->getTranslatedAttribute('description_2') !!}
                            </p>
                            <img style="height: 400px"
                                src="https://capitalbaths.com/wp-content/uploads/2023/11/bathroom-solution-banner03-400x478.webp"
                                alt="" class="arrow_2">
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                        <img src="https://capitalbaths.com/wp-content/uploads/2023/11/bathroom-solution-banner01-400x495.webp"
                            alt="" class="img-fluid" width="350" height="268">
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">

                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h2>{{ $service->getTranslatedAttribute('title_3') }}</h2>
                            <p class="lead">{!! $service->getTranslatedAttribute('description_3') !!}</p>
                        </div>

                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                        <img src="https://capitalbaths.com/wp-content/uploads/2023/04/126844477_223123575835623_4006226608013983320_n-400x570.jpg"
                            alt="" class="img-fluid" width="350" height="316">
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
