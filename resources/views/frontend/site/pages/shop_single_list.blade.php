@extends('frontend.layouts.master')

@section('title','shop single list page')

@section('style')
<link href="{{ asset('assets/css/listing.css') }}" rel="stylesheet">
<style>
    .color-options {
        display: flex;
        gap: 5px;
        margin-top: 10px;
        margin-inline: auto;
        margin-block: 10px;
    }

    .color-circle {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 1px solid #ddd;
    }
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
            <div class="container top_banner">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                    <div class="container">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Shop</a></li>
                                            <li><a href="#">Category</a></li>
                                            <li>Bathroom</li>
                            </ul>
                        </div>
                        <h1>Bathroom</h1>
                    </div>
                </div>
                <img src="https://capitalbaths.com/wp-content/uploads/2023/11/product-selection-banner02.webp" class="img-fluid" alt="">
            </div>
            <!-- /top_banner -->
            <div id="stick_here"></div>
            <div class="toolbox elemento_stick">
                <div class="container">
                    <ul class="clearfix">
                        <li>
                            <div class="sort_select">
                                <select name="sort" id="sort">
                                    <option value="popularity" selected="selected">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to
                                </select>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}"><i class="ti-view-grid"></i></a>
                            <a href="#0"><i class="ti-view-list"></i></a>
                        </li>
                        <li>
                            <a href="#0" class="open_filters">
                                <i class="ti-filter"></i><span>Filters</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /toolbox -->
            <div class="container margin_30">
                <div class="row">
                    <aside class="col-lg-3" id="sidebar_fixed">
                        <div class="filter_col">
                            <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
                            <div class="filter_type version_2">
                                <h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Categories</a></h4>
                                <div class="collapse show" id="filter_1">
                                    <ul>
                                        <li>
                                            <label class="container_check">Bathroom
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Washroom
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Tiles & Slabs
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">kitchen
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Furniture
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Glass
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Mirrors
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /filter_type -->
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_2" data-bs-toggle="collapse" class="opened">Color</a></h4>
                                <div class="collapse show" id="filter_2">
                                    <ul>
                                        <li>
                                            <label class="container_check">Blue <small>06</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Red <small>12</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Orange <small>17</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Black <small>43</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_3" data-bs-toggle="collapse" class="closed">Brands</a></h4>
                                <div class="collapse" id="filter_3">
                                    <ul>
                                        <li>
                                            <label class="container_check">Adidas <small>11</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Nike <small>08</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Vans <small>05</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Puma <small>18</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_4" data-bs-toggle="collapse" class="closed">Price</a></h4>
                                <div class="collapse" id="filter_4">
                                    <ul>
                                        <li>
                                            <label class="container_check">$0 — $50<small>11</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">$50 — $100<small>08</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">$100 — $150<small>05</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">$150 — $200<small>18</small>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="buttons">
                                <a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
                            </div>
                        </div>
                    </aside>
                    <!-- /col -->
                    <div class="col-lg-9">

                        <!-- start product 1 -->
                        <div class="row row_item">
                            <div class="col-sm-4">
                                <figure>
                                    <span class="ribbon off">-30%</span>
                                    <a href="{{ route('normal_product_detail') }}">
                                        <img class="img-fluid lazy" src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" data-src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" alt="">
                                    </a>
                                    <div class="color-options">
                                        <div class="color-options">
                                            <div class="color-circle" style="background-color: #004AAD;"></div>
                                            <div class="color-circle" style="background-color: #A90034;"></div>
                                            <div class="color-circle" style="background-color: #FFD700;"></div>
                                            <div class="color-circle" style="background-color: white;"></div>
                                            <div class="color-circle" style="background-color: black;"></div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-sm-8">
                                <div class="rating"></div>
                                <a href="{{ route('normal_product_detail') }}">
                                    <h3 style="text-decoration: none;color: black;">M-Line Back to Wall Rimless WC</h3>
                                </a>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
                                <div class="price_box">
                                    <span class="new_price">From AED 2,080 to AED 3,900</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="btn_1">Add to cart</a></li>
                                    <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end product 1 -->

                        <!-- start product 2 -->
                        <div class="row row_item">
                            <div class="col-sm-4">
                                <figure>
                                    <span class="ribbon off">-30%</span>
                                    <a href="{{ route('normal_product_detail') }}">
                                        <img class="img-fluid lazy" src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" data-src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" alt="">
                                    </a>
                                    <div class="color-options">
                                        <div class="color-options">
                                            <div class="color-circle" style="background-color: #004AAD;"></div>
                                            <div class="color-circle" style="background-color: #A90034;"></div>
                                            <div class="color-circle" style="background-color: #FFD700;"></div>
                                            <div class="color-circle" style="background-color: white;"></div>
                                            <div class="color-circle" style="background-color: black;"></div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-sm-8">
                                <div class="rating"></div>
                                <a href="{{ route('normal_product_detail') }}">
                                    <h3 style="text-decoration: none;color: black;">M-Line Back to Wall Rimless WC</h3>
                                </a>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
                                <div class="price_box">
                                    <span class="new_price">From AED 2,080 to AED 3,900</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="btn_1">Add to cart</a></li>
                                    <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- start product 2 -->

                        <!-- start product 3 -->
                        <div class="row row_item">
                            <div class="col-sm-4">
                                <figure>
                                    <span class="ribbon off">-30%</span>
                                    <a href="{{ route('normal_product_detail') }}">
                                        <img class="img-fluid lazy" src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" data-src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" alt="">
                                    </a>
                                    <div class="color-options">
                                        <div class="color-options">
                                            <div class="color-circle" style="background-color: #004AAD;"></div>
                                            <div class="color-circle" style="background-color: #A90034;"></div>
                                            <div class="color-circle" style="background-color: #FFD700;"></div>
                                            <div class="color-circle" style="background-color: white;"></div>
                                            <div class="color-circle" style="background-color: black;"></div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-sm-8">
                                <div class="rating"></div>
                                <a href="{{ route('normal_product_detail') }}">
                                    <h3 style="text-decoration: none;color: black;">M-Line Back to Wall Rimless WC</h3>
                                </a>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
                                <div class="price_box">
                                    <span class="new_price">From AED 2,080 to AED 3,900</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="btn_1">Add to cart</a></li>
                                    <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- start product 3 -->

                        <!-- start product 4 -->
                        <div class="row row_item">
                            <div class="col-sm-4">
                                <figure>
                                    <span class="ribbon off">-30%</span>
                                    <a href="{{ route('normal_product_detail') }}">
                                        <img class="img-fluid lazy" src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" data-src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" alt="">
                                    </a>
                                    <div class="color-options">
                                        <div class="color-options">
                                            <div class="color-circle" style="background-color: #004AAD;"></div>
                                            <div class="color-circle" style="background-color: #A90034;"></div>
                                            <div class="color-circle" style="background-color: #FFD700;"></div>
                                            <div class="color-circle" style="background-color: white;"></div>
                                            <div class="color-circle" style="background-color: black;"></div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-sm-8">
                                <div class="rating"></div>
                                <a href="{{ route('normal_product_detail') }}">
                                    <h3 style="text-decoration: none;color: black;">M-Line Back to Wall Rimless WC</h3>
                                </a>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
                                <div class="price_box">
                                    <span class="new_price">From AED 2,080 to AED 3,900</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="btn_1">Add to cart</a></li>
                                    <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- start product 4 -->

                        <!-- start product 5 -->
                        <div class="row row_item">
                            <div class="col-sm-4">
                                <figure>
                                    <span class="ribbon off">-30%</span>
                                    <a href="{{ route('normal_product_detail') }}">
                                        <img class="img-fluid lazy" src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" data-src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" alt="">
                                    </a>
                                    <div class="color-options">
                                        <div class="color-options">
                                            <div class="color-circle" style="background-color: #004AAD;"></div>
                                            <div class="color-circle" style="background-color: #A90034;"></div>
                                            <div class="color-circle" style="background-color: #FFD700;"></div>
                                            <div class="color-circle" style="background-color: white;"></div>
                                            <div class="color-circle" style="background-color: black;"></div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-sm-8">
                                <div class="rating"></div>
                                <a href="{{ route('normal_product_detail') }}">
                                    <h3 style="text-decoration: none;color: black;">M-Line Back to Wall Rimless WC</h3>
                                </a>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
                                <div class="price_box">
                                    <span class="new_price">From AED 2,080 to AED 3,900</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="btn_1">Add to cart</a></li>
                                    <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- start product 5 -->

                        <!-- start product 6 -->
                        <div class="row row_item">
                            <div class="col-sm-4">
                                <figure>
                                    <span class="ribbon off">-30%</span>
                                    <a href="{{ route('normal_product_detail') }}">
                                        <img class="img-fluid lazy" src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" data-src="https://capitalbaths.com/wp-content/uploads/2023/11/toilet-cat01.webp" alt="">
                                    </a>
                                    <div class="color-options">
                                        <div class="color-options">
                                            <div class="color-circle" style="background-color: #004AAD;"></div>
                                            <div class="color-circle" style="background-color: #A90034;"></div>
                                            <div class="color-circle" style="background-color: #FFD700;"></div>
                                            <div class="color-circle" style="background-color: white;"></div>
                                            <div class="color-circle" style="background-color: black;"></div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-sm-8">
                                <div class="rating"></div>
                                <a href="{{ route('normal_product_detail') }}">
                                    <h3 style="text-decoration: none;color: black;">M-Line Back to Wall Rimless WC</h3>
                                </a>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
                                <div class="price_box">
                                    <span class="new_price">From AED 2,080 to AED 3,900</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="btn_1">Add to cart</a></li>
                                    <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- start product 6 -->


                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->

                <!-- start pagination -->
                <div class="pagination__wrapper">
                    <ul class="pagination">
                        <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                        <li>
                            <a href="#0" class="active">1</a>
                        </li>
                        <li>
                            <a href="#0">2</a>
                        </li>
                        <li>
                            <a href="#0">3</a>
                        </li>
                        <li>
                            <a href="#0">4</a>
                        </li>
                        <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                    </ul>
                </div>
                <!-- end pagination -->

            </div>
        </main>
		<!-- end main -->

@endsection

@section('script')
<script src="{{ asset('assets/js/sticky_sidebar.min.js') }}"></script>
<script src="{{ asset('assets/js/specific_listing.js') }}"></script>
@endsection
