@extends('frontend.layouts.master')

@section('title','Capitalbaths')


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

			<!-- start header-video -->
			<div class="header-video">
				<div id="hero_video">
					<div class="opacity-mask d-flex align-items-center">
						<div class="container">
							<div class="row justify-content-center ">
								<div class="col-lg-8">
									<div class="slide-text white">
										<h3 style="font-size: 40px;">{{  $slider_data->getTranslatedAttribute('slider_title') }}</h3> <br><br>
										<p style="font-size: 30px;">{!! strip_tags($slider_data->getTranslatedAttribute('slider_description')) !!}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<video autoplay loop muted>
					<source src="{{ $slider_data->slider_video }}" type="video/mp4"
						class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro"
						data-provider="" data-video-width="1920" data-video-height="960"> {{-- data-video-width="1920" data-video-height="960" --}}
					Your browser does not support the video tag.
				</video>

			</div>
			<!-- end header-video -->

			<!-- start category section -->
			<section class="container py-5">

				<div class="category-title-wrapper">
					<h3 class="">{{ __('site.categories') }}</h3>
				</div>

				<div class="row">

                    @foreach ($categories as $category)
					<div class="col-md-3 col-sm-6 col-12 mb-4">
						<div class="category-card">
                            <a style="color: inherit;text-decoration: none;" href="{{ route('category_products' , ['category_id' => $category->id,'category_slug' => $category->slug ]) }}">
                                <img style="width: 400px;height: 400px;"
                                    src="{{ Voyager::image($category->image) }}"
                                    alt="{{ $category->getTranslatedAttribute('name') }}">
                                <p>{{ $category->getTranslatedAttribute('name') }}</p>
                                <button class="btn_shop">
                                    {{ __('site.shop_now') }}

                                </button>
                            </a>
						</div>
					</div>
                    @endforeach

				</div>
			</section>
			<!-- end category section -->

			<!-- start Featured Collections section -->
			<section class="container py-2">
				<!-- Gradient Heading -->
				<div class="section-title-wrapper">
					<h3>{{ __('site.featured_collections') }}</h3>
				</div>

				<!-- Featured Collection Grid -->
				<div class="row">

                    @foreach ($colections as $colection)
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="collection-card">
							<img src="{{ Voyager::image($colection->colection_image)  }}" alt="{{ $colection->getTranslatedAttribute('colection_image') }}">
							<p>{{ $colection->getTranslatedAttribute('colection_name') }}</p>
						</div>
					</div>
                    @endforeach

				</div>
			</section>
			<!-- end Featured Collections section -->

			<!-- start customer review -->
			<div class="cantainer">

				<div id="wrap">
					<div class="container" style="max-width: 1520px;padding-right: 10px;padding-left: 10px;">
						<div class="row">
							<div class="col-lg-22">

								<div class="section-title-wrapper">
									<h3>{{ __('site.customer_reviews') }}</h3>
								</div>

								<div class="row">
									<div class="col-lg-12">

										<section class="carousel-wrap">
											<ul class="carousel">
                                                @php
                                                  $reviews_styles =  ['main-pos','right-pos','back-pos','back-pos','back-pos','back-pos','left-pos'];
                                                @endphp
                                                @foreach ($reviews as $index =>  $review)
												<li class="items {{ $reviews_styles[$index] }}" id="{{ $review->id }}">
													<div class="review-card review-card--option-4 text-center">
														<div class="review-author">
															<span class="ra-author">
																<img style="width: 50ps;height: 50px;"
																	src="https://sanipexgroup.com/wp/wp-content/uploads/2024/08/iconmonstr-quote-3-1.svg"
																	alt="">
															</span>

														</div>
														<div class="review-content">
                                                            {!! $review->getTranslatedAttribute('review_content') !!}
														</div>

														<ul class="ra-rating-star">
															<img style="width: 90px;height: 15px;"
																src="https://sanipexgroup.com/wp/wp-content/uploads/2024/08/16231559165-star-rating-condensed.svg">
														</ul>
													</div>
												</li>
                                                @endforeach

											</ul>
											<span class="slider">
												<a href="javascript:void(0);" value="Prev" id="prev"><i
														class="fas fa-chevron-left"></i></a>
												<a href="javascript:void(0);" value="Next" id="next"><i
														class="fas fa-chevron-right"></i></a>

											</span>
										</section>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end section reviews -->

			<!-- start instagram -->
			<div style="margin-top: -30px;" class="container-fluid text-center">
				<div class="section-title-wrapper">
					<h3>{{ __('site.instagram_feed') }}</h3>
				</div>
				<div class="instagram-feed">

                    @foreach ($instagrams as $instagram)
					<div class="feed-item"
						style="width: 350px; height: 400px; position: relative; overflow: hidden;border-radius: 20px;margin-inline: 10px;">
						<video autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover;">
							<source src="{{ $instagram->video_url }}"
								type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<div class="feed-caption">{{ $instagram->getTranslatedAttribute('title') }}</div>
					</div>
                    @endforeach

				</div>
			</div>
			<!-- end instagram -->

			<!-- /container -->

		</main>
		<!-- end main -->

@endsection

@section('video_script')
  <script src="{{ asset('assets/js/video_header.min.js') }}"></script>
  <script src="{{ asset('assets/js/bathromsslider.js') }}"></script>
@endsection
