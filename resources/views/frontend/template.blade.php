@extends('frontend.layouts.master')

@section('title','template page')

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

        </main>
		<!-- end main -->

@endsection

@section('script')

@endsection
