@if (LaravelLocalization::getCurrentLocale() == 'ar')

<div  style="height: 20px;margin-top: 5px;max-width: 1500px;" class="container-fluid">
    <div class="row col-12">

        <div class="col-12">

            <div style="float: left;" class="lang_position en_lang_position">

                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <span>
                        @php
                            if ( $localeCode == 'ar') {
                                $code = 'ae';
                            }elseif ($localeCode == 'en') {
                                $code = 'us';
                            }else {
                                $code = $localeCode;
                            }
                        @endphp
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><img style="width: 20px;height: 20px;border-radius: 100%; margin-right: 5px;"
                            src='{{ asset("assets/img/{$code}.png")}}'></a>

                    </span>
                @endforeach

            </div>

            <a style="text-decoration: none;color: black;" href="#"><span style="margin-inline: 5px;"><i
                        class="fas fa-map-marker-alt"></i></span><span class="capithalbaths_responsive">{{ __('site.find_us') }}</span></a>
            <a style="text-decoration: none;color: black;" href="#"><span style="margin-inline: 5px;"> <i
                        class="fas fa-phone-alt"></i></span><span class="capithalbaths_responsive"> +971 045762781
                </span>
            </a>
            <a style="text-decoration: none;color: black;" href="#"><span style="margin-inline: 5px;"><img
                        style="width: 25px;height: 25px;" src="{{ asset('assets/img/watsup.svg') }}" alt=""></span><span
                    class="capithalbaths_responsive"> +971 045762781 </span>
            </a>



        </div>


    </div>
</div>

@else

<div style="height: 20px;margin-top: 5px;max-width: 1500px;" class="container-fluid">
    <div class="row col-12">

        <div class="col-12">
            <a style="text-decoration: none;color: black;" href="#"><span style="margin-inline: 5px;"><i
                        class="fas fa-map-marker-alt"></i></span><span class="capithalbaths_responsive">{{ __('site.find_us') }}</span></a>
            <a style="text-decoration: none;color: black;" href="#"><span style="margin-inline: 5px;"> <i
                        class="fas fa-phone-alt"></i></span><span class="capithalbaths_responsive"> +971 045762781
                </span></a>
            <a style="text-decoration: none;color: black;" href="#"><span style="margin-inline: 5px;"><img
                        style="width: 25px;height: 25px;" src="{{ asset('assets/img/watsup.svg') }}" alt=""></span><span
                    class="capithalbaths_responsive"> +971 045762781 </span></a>
            <div style="float: right;margin-right: 77px;" class="">

                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <span>
                        @php
                            if ( $localeCode == 'ar') {
                                $code = 'ae';
                            }elseif ($localeCode == 'en') {
                                $code = 'us';
                            }else {
                                $code = $localeCode;
                            }
                        @endphp
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><img style="width: 20px;height: 20px;border-radius: 100%; margin-right: 5px;"
                        src='{{ asset("assets/img/{$code}.png")}}'></a>

                    </span>
                @endforeach

            </div>
        </div>


    </div>
</div>

@endif


