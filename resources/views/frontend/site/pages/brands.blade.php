@extends('frontend.layouts.master')

@section('title','Brands')

@section('style')
  <!-- brand CSS style -->
  <link href="{{ asset('assets/css/account.css') }}" rel="stylesheet">
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
			<div class="container my-4">
                <div class="container brand-section">
					<div class="row gy-4">
                        @foreach ($brands as $brand)
						<div class="col-6 col-md-3">
							<a href="{{ route('brand_shop',['brand_name'=> $brand->slug]) }}">
							<div class="card brand-card">
                                 <a href="{{ route('brand_shop', ['brand_name'=> $brand->slug]) }}">
                                    <img src="{{ Voyager::image($brand->image)  }}" alt="{{ $brand->getTranslatedAttribute('name') }}">
                                    <div class="card-body text-center">
                                        <p class="card-text brand_no_color">{{ $brand->getTranslatedAttribute('name') }}</p>
                                    </div>
                                </a>
							</div>
						   	</a>
						</div>
                        @endforeach

					</div>
				</div>
			</div>

			<!-- start the project pagination -->
			<div style="margin-bottom: 50px;" class="pagination__wrapper my-4">
				<ul class="pagination">
                    {{ $brands->links('pagination::bootstrap-4') }}
				</ul>
			</div><br><br><br>
			  <!-- end the projects paginations -->
		</main>
		<!-- end main -->

@endsection

@section('script')

@endsection
