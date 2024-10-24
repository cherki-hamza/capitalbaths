
@if (Route::is('custom_product_detail'))
   @include('frontend.layouts.product_header')
@elseif (Route::is('normal_product_detail'))
    @include('frontend.layouts.product_header')
@elseif (Route::is('showrooms'))
    @include('frontend.layouts.product_header')
@else
   @include('frontend.layouts.header')
@endif


@yield('content')

@include('frontend.layouts.footer')
