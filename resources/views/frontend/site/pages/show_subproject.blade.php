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
                                            <h2>{{ $subproject->project->project_name }}</h2>
                                            <h4>{{ $subproject->sub_project_name }}</h4>
                                            <p>Every detail has been carefully crafted at One Beverly to fit how you want to live. Unwind by the pool, work out in the open-air gym, or simply enjoy a quiet evening at home. This is where you can truly relax and feel at ease.</p>
                                            <p>With high-end finishes, smart home features, and breathtaking views, it’s more than just a home, this is a space made for living well.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-8 order-1 order-lg-2">
                                        <div class="beverly-images">
                                            <img style="width: 924px;height: 520px;border-radius: 2%" src="https://capitalbaths.com/wp-content/uploads/2023/11/product-selection-banner02.webp" alt="">
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
                                    <h2>Project Gallery</h2>
                                    <p>{{ $subproject->sub_project_name }}</p>
                                </div>
                            </div>
                            <div class="elegence-gallery-box">

                                <div class="row g-0 gx-md-3">

                                    <div class="col-lg-4 col-md-6 d-none d-md-block">
                                        <div class="gallery-imges">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/product-selection-banner02.webp"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/product-selection-banner02.webp"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/bathroom-solution-banner03.webp"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/bathroom-solution-banner03.webp"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit32-1.jpg"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit32-1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 pt-3  col-md-6 pt-md-0">
                                        <div class="gallery-imges">
                                            <a href="{{ asset('assets/images/gallery-images/gallery-img-5.png') }}"
                                                data-fancybox="gallery">
                                                <img src="{{ asset('assets/images/gallery-images/gallery-img-5.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="{{ asset('assets/images/gallery-images/gallery-img-6.png') }}"
                                                data-fancybox="gallery">
                                                <img src="{{ asset('assets/images/gallery-images/gallery-img-6.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit19.jpg"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit19.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/product-selection-banner02.webp"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/product-selection-banner02.webp"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 pt-3 d-none d-lg-block pt-lg-0">
                                        <div class="gallery-imges">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit29.jpg"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit29.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit22-1.jpg"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit22-1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/bathroom-solution-banner01.webp"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/bathroom-solution-banner01.webp"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-imges pt-3">
                                            <a href="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit44.jpg"
                                                data-fancybox="gallery">
                                                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit44.jpg"
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
