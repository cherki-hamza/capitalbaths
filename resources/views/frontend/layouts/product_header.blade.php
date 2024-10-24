<!DOCTYPE html>
<html lang="en">

<head>

	<title>@yield('title')</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('assets/img/favicon.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="{{ asset('assets/img/favicon.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="{{ asset('assets/img/favicon.png') }}">

	<!-- GOOGLE WEB FONT -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
		rel="stylesheet">



	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
		integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- BASE CSS -->
	<link href="{{ asset('assets/css/bootstrap.custom.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

	<!-- watsup style -->
	<link rel="stylesheet" href="{{ asset('assets/css/watsup.css') }}">

    {{-- add custom style --}}
    @yield('style')

    {{-- latest style --}}
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    @endif

    <link href="{{ asset('assets/css/project_details.css') }}" rel="stylesheet">

    <style>
        .main-menu ul>li.submenu>a:after {
            color: black !important;
        }
    </style>

</head>

<body class="bg_gray">
