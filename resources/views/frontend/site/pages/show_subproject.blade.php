@extends('frontend.layouts.master')

@section('title', 'Show Project')

@section('style')
    <link href="{{ asset('assets/css/project_details.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/light-box.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <style>

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
            <div style="padding-top: 60px" class="container-fluid margin_60_35 add_bottom_30">

                <div class="container-fluid">

                    {{-- start section 1 --}}
                      <!-- beverly area start hare  -->
                        <section class="beverly-area">
                            <div class="container">
                                <div class="row justify-content-center gx-auto gx-xl-5">
                                    <div class="col-lg-4 order-2 mt-5 mt-lg-0 order-lg-1 my-auto">
                                        <div class="beverly-content">
                                            <h2>{{ $subproject->getTranslatedAttribute('project->project_name') }}</h2>
                                            <h4>{{ $subproject->getTranslatedAttribute('sub_project_name') }}</h4>
                                           {!! $subproject->getTranslatedAttribute('sub_project_description') !!}
                                        </div>
                                    </div>
                                    <div class="col-md-8 order-1 order-lg-2">
                                        <div class="beverly-images">
                                            <img style="width: 924px;height: 520px;border-radius: 2%" src="{{ Voyager::image($subproject->sub_project_image)  }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- beverly area end hare  -->
                    {{-- end section 1 --}}
                        <!-- elegence ara start hare  -->
                        <section class="elegence-area mt-0">
                            <div class="container text-center">
                                <div class="elegence-wapper">
                                    <h2>{{ __('site.project_gallery') }}</h2>
                                    <p>{{ $subproject->getTranslatedAttribute('sub_project_name') }}</p>
                                </div>
                            </div>
                            <div class="elegence-gallery-box">

                                @php
                                    // Decode the JSON string into an associative array
                                    $images = json_decode($subproject->sub_project_gallery_images, true); // true forces associative array

                                    $imageCount = count($images);
                                @endphp

                                <div class="row g-0 gx-md-3">

                                    <div class="col-lg-4 col-md-6 d-none d-md-block">
                                        <div class="gallery-imges">
                                            <a href="{{ Voyager::image($images[0]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[0]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[1]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[1]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[2]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[2]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[3]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[3]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 pt-3  col-md-6 pt-md-0">
                                        <div class="gallery-imges">
                                            <a href="{{ Voyager::image($images[4]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[4]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[5]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[5]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[6]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[6]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[7]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[7]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[8]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[8]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 pt-3 d-none d-lg-block pt-lg-0">
                                        <div class="gallery-imges">
                                            <a href="{{ Voyager::image($images[9]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[9]) }}"
                                                    alt="">
                                            </a>
                                        </div>

                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[10]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[10]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[11]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[11]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ Voyager::image($images[12]) }}"
                                                data-fancybox="gallery">
                                                <img src="{{ Voyager::image($images[12]) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <!-- elegence area end hare  -->


                </div>
            </div>
            <!-- /container -->
        </main>
        <!-- end main -->

    @endsection

    @section('script')
        <script src="{{ asset('assets/js/light-box.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    @endsection
