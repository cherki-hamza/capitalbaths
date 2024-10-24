<footer style="color: black !important;margin-top: 40px;" class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h3 data-bs-target="#collapse_1" style="color: black !important;">{{ __('site.categories') }}</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_1">
                    <ul>
                        <li><a style="color: black !important;" href="#">{{ __('site.bathroom') }}</a></li>
                        <li><a style="color: black !important;" href="#">{{ __('site.tile_slabs') }}</a></li>
                        <li><a style="color: black !important;" href="#">{{ __('site.kitchen') }}</a></li>
                        <li><a style="color: black !important;" href="#">{{ __('site.Furniture') }}</a></li>
                        <li><a style="color: black !important;" href="#">{{ __('site.glass') }}</a></li>
                        <li><a style="color: black !important;" href="#">{{ __('site.mirror') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 data-bs-target="#collapse_2" style="color: black !important;">{{ __('site.quick_links') }}</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_2">
                    <ul>
                        <li><a style="color: black !important;" href="{{ route('brands') }}">{{ __('site.brand') }}</a></li>
                        <li><a style="color: black !important;" href="{{ route('projects') }}">{{ __('site.projects') }}</a></li>
                        <li><a style="color: black !important;" href="{{ route('services') }}">{{ __('site.services') }}</a></li>
                        <li><a style="color: black !important;" href="{{ route('about') }}">{{ __('site.about') }}</a></li>
                        <li><a style="color: black !important;" href="{{ route('contact') }}">{{ __('site.contact_us') }}</a></li>
                        {{-- <li><a style="color: black !important;" href="#">Glasses & Mirror</a></li>
                        <li><a style="color: black !important;" href="#">Showers and bathtubs</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 data-bs-target="#collapse_3" style="color: black !important;">{{ __('site.contacts') }}</h3>
                <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                    <ul>
                        <li style="color: black !important;"><i style="color: black !important;"
                                class="ti-home"></i>Dubai, | JUSTIME , Warsan 3 - in Building Materials Mall ,<br>Dubai - Emirate</li>
                        <li style="color: black !important;"><i style="color: black !important;"
                                class="ti-headphone-alt"></i>+971 045762781</li>
                        <li style="color: black !important;"><i style="color: black !important;"
                                class="ti-email"></i><a style="color: black !important;"
                                href="#0">shujjat@capitalbaths.com</a></li>
                    </ul>
                </div>
            </div>
            <div style="border-radius: 20px;" class="col-lg-3 col-md-6 mb-2">
                <h3 data-bs-target="#collapse_4" class="my-2"
                    style="color: black !important;margin-top: -6px !important;">{{ __('site.get_more') }}
                </h3>
                <div class="collapse dont-collapse-sm" id="collapse_4">
                    <div id="newsletter">
                        <div  style="direction: ltr;" class="form-group">
                            <input style="color: black !important;" type="email" name="email_newsletter"
                                id="email_newsletter" class="form-control" placeholder="Your email">
                            <button type="submit" id="submit-newsletter"><i
                                    class="ti-angle-double-right"></i></button>
                        </div>
                    </div>
                    <div class="follow_us">
                        <h5 style="color: black !important;">{{ __('site.folow_us') }}</h5>
                        <ul>
                            <li><a href="https://www.facebook.com/Capitalbaths"><img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        target="_blank" data-src="{{ asset('assets/img/facebook_icon.svg') }}" alt="capitalbaths facebook"
                                        class="lazy"></a></li>
                            <li><a href="https://www.instagram.com/capitalbaths.ae"><img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        target="_blank" data-src="{{ asset('assets/img/instagram_icon.svg') }}" alt="capitalbaths instagram"
                                        class="lazy"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <hr>
        <div class="row add_bottom_25">
            <div class="col-lg-6">
                <ul class="footer-selector clearfix d-flex">
                    <li>
                        <div class="styled-select lang-selector">
                            <select style="color: black !important;">
                                <option value="English" selected>English</option>
                                <option value="French">Arabic</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="styled-select currency-selector">
                            <select style="color: black !important;">
                                <option value="US Dollars" selected> AED , د.إ </option>
                                <option value="Euro">US Dollars</option>
                            </select>
                        </div>
                    </li>
                    <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            data-src="{{ asset('assets/img/cards_all.svg') }}" alt="capitalbaths master card" width="198" height="30" class="lazy"></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="additional_links">
                    <li><a style="color: black !important;" href="#0">{{ __('site.terms_conditions') }}</a></li>
                    <li><a style="color: black !important;" href="#0">{{ __('site.privacy') }}</a></li>
                    <li><span style="color: black !important;">© {{ date('Y') }} {{ __('site.Capitalbaths') }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
