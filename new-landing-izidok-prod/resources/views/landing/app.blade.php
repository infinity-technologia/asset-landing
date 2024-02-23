<!DOCTYPE html>
<html lang="en">
	<head><base href=""/>
		<title>{{ env('APP_NAME') }} - {{ $title }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="Aplikasi rekam medis berbasis website yang telah tersertifikasi ISO 27001:2013, sekaligus dilengkapi dengan fitur operasional lengkap yang dapat mempermudah pelayanan pasien di klinik maupun tempat praktik dokter." />
		<meta name="keywords" content="aplikasi rekam medis, aplikasi rekam medis elektronik gratis, aplikasi rekam medis berbasis website, aplikasi medis untuk dokter, aplikasi dokter praktik mandiri, aplikasi pencatatan rekam medis, software rekam medis gratis, aplikasi klinik, aplikasi klinik gratis, aplikasi klinik berbasis web, website klinik, software klinik gratis, software klinik, aplikasi medis tersertifikasi iso" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Aplikasi rekam medis berbasis website yang telah tersertifikasi ISO 27001:2013, sekaligus dilengkapi dengan fitur operasional lengkap yang dapat mempermudah pelayanan pasien di klinik maupun tempat praktik dokter." />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/boxicons.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/landing-page.css') }}" rel="stylesheet" type="text/css" />
		
		<!-- KONNEK -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://media-app.wekonnek.id/konnek/widget/widgetchat.js"></script>
		<script src="https://media-app.wekonnek.id/konnek/widget/socket-io.client.js"></script>
		<!-- End of KONNEK -->
	</head>
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
		<div id="overlay">
            <div id="text-overlay">Sedang dalam proses...</div>
            <div class="spinner-border text-info text-overlay"></div>
        </div>
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			@yield('content')
			@include('landing.footer')
		</div>
		<div id="preloader"></div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<script>var hostUrl = "/";</script>
		<script src="{{ asset('js/plugins.bundle.js') }}"></script>
		<script src="{{ asset('js/scripts.bundle.js') }}"></script>
		<script src="{{ asset('js/fslightbox.bundle.js') }}"></script>
		<script src="{{ asset('js/typedjs.bundle.js') }}"></script>
		<script src="{{ asset('js/landing.js') }}"></script>
		{{-- <script src="{{ asset('js/general.js') }}"></script> --}}
		<script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.js') }}"></script>
		<script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
		<script src="{{ asset('js/contact-form.js') }}"></script>
		<script>
			(function() {
				new ChatWidget({
					env: 'production',
					clientId: '118243fc-1e83-42e5-8cda-a815471d13f7',
					clientSecret: '1dc8e065-2915-4b4e-8df2-45040e8314bd',
					sso: false,
				}).init(io);
			})()
		</script>
		@yield('js')
	</body>
</html>