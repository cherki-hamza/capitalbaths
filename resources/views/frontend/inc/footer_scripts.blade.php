<!-- COMMON SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.7.1.js"
integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<!-- Bootstrap JS (Optional for responsive features) -->


<script src="{{ asset('assets/js/common_scripts.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
@yield('video_script')
<script src="{{ asset('assets/js/capitalbaths.js') }}"></script>

{{-- add custom script --}}
@yield('script')
