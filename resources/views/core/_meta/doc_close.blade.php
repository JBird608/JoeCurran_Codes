    	<!-- // JAVASCRIPT FILES GO HERE // -->
		<script src="{{ asset('assets/foundation/js/vendor/modernizr.js') }}"></script>
		<script src="{{ asset('assets/foundation/js/vendor/jquery.js') }}"></script>
		<script src="{{ asset('assets/foundation/js/foundation.min.js') }}"></script>
        @yield('js')
		<script>
			$(document).foundation();
    	</script>
	</body>
</html>