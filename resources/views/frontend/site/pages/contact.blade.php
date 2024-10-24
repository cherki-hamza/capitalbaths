@extends('frontend.layouts.master')

@section('title','Contact Us')

@section('style')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <!-- contact CSS style -->
  <link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet">

  <!-- style leaflet for the map -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
   <!-- stayle for te map -->
  <style>
      #map { height: 500px; }

      .margin_60_35 {
          padding-top: 0px;
          padding-bottom: 35px;
      }
  </style>

  <!-- style for telepho plugin -->
  <style>
      .iti--allow-dropdown input, .iti--allow-dropdown input[type=text], .iti--allow-dropdown input[type=tel], .iti--separate-dial-code input, .iti--separate-dial-code input[type=text], .iti--separate-dial-code input[type=tel] {
          padding-right: 122px;
      }
      .iti__country-list {
          width: 380px;
      }
      a.btn_1.full-width, .btn_1.full-width {
           margin-bottom: 0px;
      }
      .lowercase {
			text-transform: lowercase;
	  }
  </style>

    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <style>
            .iti__selected-flag {
            margin-left: 295px;
        }
        </style>
   @endif
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
            {{-- start message session --}}
                <div class="container margin_60">
                    @if($message = Session::get('success'))
                    <div class="my-2 alert alert-success">

                        <strong>{{$message}}</strong>

                    </div>
                @elseif($message = Session::get('info'))
                <div class="my-2 alert alert-info">

                        <strong>{{$message}}</strong>

                    </div>
                @endif
                {{-- end mesage session --}}
                <div class="main_title">
                    <h2 class="text-capitalize my-3">{{ __('site.CONTACT_JUSTIME') }}</h2>
                    <p style="font-size: 20px;">
                        {{ __('site.contact_desc') }}
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="box_contacts">
                            <i class="ti-support"></i>
                            <h2>{{ __('site.JUSTIME_Help-Center') }}</h2>
                            <a href="#0">+971 045762781</a> - <a href="#0">shujjat@capitalbaths.com</a><br>
                            <small>Saturday to Thursday 9am-9pm Friday 4:30-9pm</small><br>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box_contacts">
                            <i class="ti-map-alt"></i>
                            <h2>{{ __('site.showrooms') }}</h2>
                            <div>Dubai, | JUSTIME , Warsan 3 - in Building Materials Mall , Dubai</div>
                            <small>Saturday to Thursday 9am-9pm Friday 4:30-9pm</small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box_contacts">
                            <i class="ti-package"></i>
                            <h2>{{ __('site.JUSTIME_Orders') }}</h2>
                            <a href="#0">+971 045762781</a> - <a href="#0">shujjat@capitalbaths.com</a><br>
                            <small>Saturday to Thursday 9am-9pm Friday 4:30-9pm</small><br>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        <div class="bg_white">
            <div class="container margin_60_35">

                <h4 class="pb-3">{{ __('site.contact_us') }}</h4>
                <form method="POST" action="{{route('contact_store')}}" id="contact-form-dev">
                    @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-6 add_bottom_25">
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" placeholder="{{ __('site.fullname') }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="{{ __('site.email') }}">
                        </div>
                        <div class="form-group">
                            <input dir="rtl" type="phone" class="form-control" name="phone" id="phone" placeholder="{{ __('site.phone') }}">
                            <input type="hidden" value="United Arab Emirates" name="country_name" id="country_name">
                            <input type="hidden" value="+971" name="area_code" id="area_code">
                            <input type="hidden" value="ae" name="country_code" id="country_code">
                            <input type="hidden" value="https://flagicons.lipis.dev/flags/4x3/ae.svg" name="country_flag" id="country_flag">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" style="height: 80px;" placeholder="{{ __('site.message') }}"></textarea>
                        </div>
                        <style>
                            a.btn_1:hover, .btn_1:hover {
                                color: white !important;
                            }
                        </style>
                        <div class="form-group">
                            <input style="background-color: #000;color: white;" class="btn_1 full-width" type="submit" value="Submit">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 add_bottom_25">
                    <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.2110234068195!2d55.459394675959274!3d25.162351533110197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f63e4a55c2d55%3A0x1d2e0d189690e075!2sJUSTIME!5e0!3m2!1sen!2sae!4v1728558930997!5m2!1sen!2sae" style="border: 0" allowfullscreen></iframe>
                    </div>
                </div>
                </form>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
            <!-- /container -->



           <div class="container my-5">

           </div>
           <!-- /container -->
        </main>
		<!-- end main -->

@endsection


@section('script')

{{-- telephone and flag script --}}
<script>
    function displayTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        document.querySelector('.WhatsappChat__Time-sc-1wqac52-5.cqCDVm').innerHTML = timeString;
    }

    // Run the displayTime function when the page loads
    window.onload = function() {
        displayTime();
        // Update the time every minute
        setInterval(displayTime, 60000);
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>



<script>
    $(document).ready(function(){
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
        separateDialCode: true,
        initialCountry: "ae",
        //utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js",
        });

        // store the instance variable so we can access it in the console e.g. window.iti.getNumber()
        window.iti = iti;

        //detect onchange for the text input
        $("body").on('DOMSubtreeModified', ".iti__selected-dial-code", function() {
            var area_code = $('.iti__selected-dial-code').text();
            document.getElementById('area_code').value = area_code;



            var countryData = iti.getSelectedCountryData();
            // Extract the country code
            var  countryCode = countryData.iso2;
            var  country_name = countryData.name;

            // Construct the URL for the flag image
            // https://flagicons.lipis.dev/flags/4x3/af.svg
            var flagUrl = "https://flagicons.lipis.dev/flags/4x3/" + countryCode +".svg";

            document.getElementById('country_code').value = countryCode;
            document.getElementById('country_flag').value = flagUrl;
            document.getElementById('country_name').value = country_name;

            /* console.log(countryCode);
            console.log(flagUrl);
            console.log(area_code); */

            console.log(country_name);
        });


   });
</script>

@endsection
