<header class="version_1">
    <style>
        .menu ul li ul li ul {
           /*  max-height: 300px; */
            /* overflow-y: auto; */
            height: auto;
           /*  max-width: 300px; */
            background: white !important;
        }
    </style>
    <div class="layer"></div><!-- Mobile menu overlay mask -->
    <div class="main_header">
        <div class="container en_max_style ar_max_style">
            <div class="row small-gutters">
                <div class="col-md-5 col-xl-1 col-lg-1 d-lg-flex  align-items-center">
                    <div id="logo">
                        <a href="{{ route('site') }}"><img style="max-width: fit-content;" src="{{asset('assets/img/logo.png') }}" alt=""
                                width="180" height="35"></a>
                    </div>
                </div>
                <nav class="col-md-7 col-xl-11 col-lg-11">
                    <a class="open_close" href="javascript:void(0);">
                        <div class="hamburger hamburger--spin">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                    <!-- Mobile menu button -->
                    <div class="main-menu">
                        <div id="header_menu">
                            <a href="index.html"><img src="{{asset('assets/img/logo.png') }}"
                                    alt="" width="100" height="35"></a>
                            <a href="{{ route('site') }}" class="open_close" id="close_in"><i class="ti-close"></i></a>
                        </div>
                        <ul class="ar_menu_ul">

                            <!-- startb bathroom -->
                            <li class="megamenu submenu mobile_m">
                                <a href="javascript:void(0);" style="color: black;"
                                    class="show-submenu-mega">{{ __('site.bathroom') }}</a>
                                <div class="menu-wrapper">
                                    <div class="row small-gutters">
                                        <div class="col-lg-3">
                                            @php
                                                $bathrooms_category = $categories->where('name','Bathroom')->first();
                                            @endphp
                                            <h3>{{ $bathrooms_category->getTranslatedAttribute('name') }}</h3>
                                            <ul>
                                                @foreach ($bathrooms_category->subcategories as $subcategory)
                                                 <li><a href="#">{{ $subcategory->getTranslatedAttribute('name') }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        width="400" height="550" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        width="400" height="550" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        width="400" height="550" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /menu-wrapper -->
                            </li>
                            <!-- end bathroom -->

                            <!-- start Tiles & Slabs  -->
                            <li class="megamenu submenu">
                                <a href="javascript:void(0);" style="color: black;"
                                    class="show-submenu-mega">{{ __('site.tile_slabs') }}</a>
                                <div class="menu-wrapper">
                                    <div class="row small-gutters">
                                        @php
                                        $tile_slabs_category = $categories->where('name','Tiles & Slabs')->first();

                                       @endphp

                                        @foreach ($tile_slabs_category->subcategories as $category)
                                            <div class="col-lg-3">
                                                <h3>{{ $category->getTranslatedAttribute('name') }}</h3>
                                                <ul>
                                                    @foreach ($category->childrens_categories as $category)
                                                     <li><a href="#">{{ $category->getTranslatedAttribute('name') }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach

                                        <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        width="400" height="550" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        width="400" height="550" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /menu-wrapper -->
                            </li>
                            <!-- end Tiles & Slabs -->


                            <!-- start kitchen  -->
                            <li class="megamenu submenu">
                                <a href="javascript:void(0);" style="color: black;"
                                    class="show-submenu-mega">{{ __('site.kitchen') }}</a>
                                <div class="menu-wrapper">
                                    <div class="row small-gutters">
                                        <div class="col-lg-3">
                                            @php
                                                $kitchen_category = $categories->where('name','kitchen')->first();
                                            @endphp
                                            <h3>{{ $kitchen_category->getTranslatedAttribute('name') }}</h3>
                                            <ul>
                                                @foreach ($kitchen_category->subcategories as $category)
                                                  <li><a href="#">{{ $category->getTranslatedAttribute('name') }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-lg-9 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        width="600px" height="350px" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /menu-wrapper -->
                            </li>
                            <!-- end kitchen -->

                            <!-- start Furnitur  -->
                            <li class="megamenu submenu">
                                <a href="javascript:void(0);" style="color: black;"
                                    class="show-submenu-mega">{{ __('site.Furniture') }}</a>
                                <div class="menu-wrapper">
                                    <div class="row small-gutters">
                                        <div class="col-lg-3">
                                            @php
                                                $furniture_category = $categories->where('name','Furniture')->first();
                                            @endphp
                                            <h3>{{ $furniture_category->getTranslatedAttribute('name') }}</h3>
                                            <ul>
                                                @foreach ($furniture_category->subcategories as $category)
                                                 <li><a href="#">{{ $category->getTranslatedAttribute('name') }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-lg-9 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        data-src="https://capitalbaths.com/wp-content/uploads/2023/11/vanity-unit51.jpg"
                                                        width="600px" height="350px" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /menu-wrapper -->
                            </li>
                            <!-- end Furnitur -->

                            <!-- start glass -->
                            <li class="submenu">
                                @php
                                  $glass_category = $categories->where('name','Glass')->first();
                                @endphp
                                <a href="javascript:void(0);" style="color: black;"
                                    class="show-submenu">{{ $glass_category->getTranslatedAttribute('name') }}</a>
                                <ul>
                                    @foreach ($glass_category->subcategories as $category)
                                      <li><a href="#">{{ $category->getTranslatedAttribute('name') }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <!-- end glass -->

                            <!-- start mirrrors -->
                            <li class="submenu">
                                @php
                                  $mirrors_category = $categories->where('name','Mirrors')->first();
                                @endphp
                                <a href="javascript:void(0);" style="color: black;"
                                    class="show-submenu">{{ $mirrors_category->getTranslatedAttribute('name') }}</a>
                                <ul>
                                    @foreach ($mirrors_category->subcategories as $category)
                                      <li><a href="#">{{ $category->getTranslatedAttribute('name') }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <!-- end mirrrors -->

                            <!-- start brands -->
                            <li class="submenu">
                            <li><a href="{{ route('brands') }}" style="color: black;">{{ __('site.brand') }}</a>
                            </li>
                            <!-- end brands -->

                            <!-- start Projects  -->
                            <li class="megamenu submenu">
                                <a href="javascript:void(0);" style="color: black;"
                                    class="show-submenu-mega">{{ __('site.projects') }}</a>
                                <div class="menu-wrapper">
                                    <div class="row small-gutters">
                                        <div class="col-lg-3">
                                            <h3>{{ __('site.latest_project') }}</h3>
                                            <ul style="margin-top: 52px;">
                                                <li>
                                                    <p>{{ __('site.project_desc') }}</p>
                                                </li>

                                                <center>
                                                    <a style="margin-top: 40px;" href="{{ route('projects') }}"
                                                        class="btn_1 outline">{{ __('site.view_all_projects') }}</a>
                                                </center>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://sanipexgroup.com/wp/wp-content/uploads/2024/04/Institutional-Museum-of-the-Future-768x768px-1.webp"
                                                        data-src="https://sanipexgroup.com/wp/wp-content/uploads/2024/04/Institutional-Museum-of-the-Future-768x768px-1.webp"
                                                        width="251" height="251" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://sanipexgroup.com/wp/wp-content/uploads/2024/04/Bluewaters-Island-Dubai-cat-image.webp"
                                                        data-src="https://sanipexgroup.com/wp/wp-content/uploads/2024/04/Bluewaters-Island-Dubai-cat-image.webp"
                                                        width="251" height="251" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                                    <img src="https://sanipexgroup.com/wp/wp-content/uploads/2024/04/Atlantis-the-Royal-Dubai-cat-image-1-1.webp"
                                                        data-src="https://sanipexgroup.com/wp/wp-content/uploads/2024/04/Atlantis-the-Royal-Dubai-cat-image-1-1.webp"
                                                        width="251" height="251" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /menu-wrapper -->
                            </li>
                            <!-- end Projects -->

                            <li><a href="{{ route('services') }}" style="color: black;">{{ __('site.services') }}</a>
                            </li>

                            <li><a href="{{ route('about') }}" style="color: black;">{{ __('site.about') }}</a>
                            </li>
                            <li><a href="{{ route('contact') }}" style="color: black;">{{ __('site.contact_us') }}</a>
                            </li>
                        </ul>
                    </div>
                    <!--/main-menu -->
                </nav>
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /main_header -->

    <div class="main_nav Sticky">
        <div class="container">
            <div class="row small-gutters">
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <nav class="categories">
                        <ul class="clearfix">
                            <li><span>
                                    <a href="#">
                                        <span class="hamburger hamburger--spin">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                        </span>
                                        {{ __('site.the_categories') }}
                                    </a>
                                </span>
                                <div id="menu">
                                    <ul>
                                        @foreach ($categories as $category)
                                        <li>
                                            <span><a href="#0">{{ $category->getTranslatedAttribute('name') }}</a></span>
                                            <ul>
                                                @foreach ($category->subcategories as $subcategory)
                                                 <li><a href="#">{{ $subcategory->getTranslatedAttribute('name') }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{-- start searsh button --}}
                <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                    <div class="custom-search-input">
                        <input type="text" placeholder="Search over 10.000 products">
                        <button type="submit"><i class="header-icon_search_custom"></i></button>
                    </div>
                </div>
                {{-- end seaarsh button --}}
                {{-- start 3 icons --}}
                <div id="showrooms" class="col-xl-3 col-lg-2 col-md-3">

                    <a class="showrooms_desktop" id="showrooms_mobile" href="{{ route('showrooms') }}">
                        <img style="width: 25px;height: 25px;"
                            src="https://sanipexgroup.com/media/wysiwyg/showrooms-icon.webp" alt=""> {{ __('site.showrooms') }}
                    </a>

                    <ul class="top_tools">
                        {{-- start shoping cart --}}
                          @include('frontend.inc._cart')
                        {{-- end shoping cart --}}

                        <li>
                            <a href="#0" class="wishlist"><span>Wishlist</span></a>
                        </li>
                        <li>
                            <div class="dropdown dropdown-access">
                                <a href="account.html" class="access_link"><span>Account</span></a>
                                <div class="dropdown-menu">
                                    <a href="account.html" class="btn_1">Sign In or Sign Up</a>
                                    <ul>
                                        <li>
                                            <a href="track-order.html"><i class="ti-truck"></i>Track your
                                                Order</a>
                                        </li>
                                        <li>
                                            <a href="account.html"><i class="ti-package"></i>My Orders</a>
                                        </li>
                                        <li>
                                            <a href="account.html"><i class="ti-user"></i>My Profile</a>
                                        </li>
                                        <li>
                                            <a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /dropdown-access-->
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
                        </li>
                        <li class="mobile_category">
                            <a href="#menu" class="btn_cat_mob">
                                <div class="hamburger hamburger--spin" id="hamburger">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                                {{ __('site.the_categories') }}
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- end 3 icons --}}
            </div>
            <!-- /row -->
        </div>
        <div class="search_mob_wp">
            <input type="text" class="form-control" placeholder="Search over 10.000 products">
            <input type="submit" class="btn_1 full-width" value="Search">
        </div>
        <!-- /search_mobile -->
    </div>
    <!-- /main_nav -->
</header>
