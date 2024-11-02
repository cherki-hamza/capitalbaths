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
                        {{-- start brand --}}
                    @foreach ($brands as $brand)
                    <div  class="col-6 col-3 col-md-3 my-2">
                        <div class="card m-3 m-auto bg-dark text-white">
                            <a href="{{ route('brand_shop',['brand_name'=> $brand->slug]) }}">
                              <img style="height: 300px" src="{{ Voyager::image($brand->image)  }}" class="card-img-top" alt="{{ $brand->getTranslatedAttribute('name') }}">
                            </a>
                            <div class="card-body">
                                <a style="font-size: 20px" href="{{ route('brand_shop',['brand_name'=> $brand->slug]) }}" class="card-title h5 mt-1 mb-3 d-block text-center text-white">{{ $brand->getTranslatedAttribute('name') }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- end brand --}}

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
