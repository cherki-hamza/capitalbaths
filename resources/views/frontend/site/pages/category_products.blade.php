@extends('frontend.layouts.master')

@section('title','Category Products')

@section('style')

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
        <main>


            <div class="container margin_30">
                <div class="top_banner version_2">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <h1>{{ $category->getTranslatedAttribute('name') }}</h1>
                            </div>
                        </div>
                    </div>
                    <img src="{{ Voyager::image($category->image)  }}" class="img-fluid" alt="{{ $category->getTranslatedAttribute('name') }}">
                </div>
                <!-- /top_banner -->


            </div>

            <!-- start category section -->

            <section class="container py-5">

                <div class="category-title-wrapper">
                    <h3 class="">{{ $category->getTranslatedAttribute('name') }}</h3>
                </div>

                <div class="row">
                    <!-- start product category -->
                    @forelse ($subcategories as $subcategory)
                    <div class="col-md-3 col-sm-6 col-12 mb-4">
                        <div class="category-card">
                            <a href="{{ route('shop_by_category' , [ 'category_id'=> $category->id ,'category_name'=> $category->name , 'category_slug' => $subcategory->slug ]) }}">
                                <img style="width: 400px;height: 400px;" src="{{ Voyager::image($subcategory->image)  }}" alt="{{ $subcategory->getTranslatedAttribute('name') }}">
                            </a>
                            <button class="btn_shop  mt-4"><a style="color: inherit;text-decoration: none;" href="{{ route('shop_by_category' , ['category_id'=> $category->id ,'category_name'=> $category->name , 'category_slug' => $subcategory->slug ]) }}">{{ $subcategory->getTranslatedAttribute('name') }}</a></button>
                        </div>
                    </div>
                    @empty

                    <div id="error_page">
                                <div class="container">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-xl-7 col-lg-9">
                                            <img src="{{ asset('assets/img/404.svg') }}" alt="" class="img-fluid" width="400" height="212">
                                            <p class="my-5">Oops Empty , There'is no Product in this Category.</p>
                                            <form>
                                                <div class="search_bar">
                                                   <a class="btn_1" href="{{ route('site') }}">Back To Home Page</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /container -->
                            </div>

                      @endforelse
                    <!-- end product category-->



                   <!-- start the project pagination -->
                    <div style="margin-bottom: 50px;" class="pagination__wrapper my-4">
                        <ul class="pagination">
                            {{ $subcategories->links('pagination::bootstrap-4') }}
                        </ul>
                    </div><br><br><br>
                    <!-- end the projects paginations -->

                </div>
            </section>

            <!-- end category section -->

            <br><br>

        </main>
		<!-- end main -->

@endsection

@section('script')
    <script src="js/modernizr.js"></script>
	<script src="js/video_header.min.js"></script>
    <script src="js/carousel-home-2.js"></script>
@endsection
