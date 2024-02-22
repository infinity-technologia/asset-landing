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
		<link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/boxicons.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/landing-page.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			@yield('content')
			@include('landing.footer')
		</div>
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
		<script src="{{ asset('js/general.js') }}"></script>
	</body>
</html>