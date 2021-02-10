<head>
	
	<meta charset="utf-8" />
	<title>@yield('pageTitle') | RTGS </title>
	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="https://keenthemes.com/metronic" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link rel="stylesheet" href="{{ URL::asset('public/assets/plugins/custom/fullcalendar/fullcalendar.bundleafa4.css?v=7.2.0') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/plugins/global/plugins.bundleafa4.css?v=7.2.0') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/plugins/custom/prismjs/prismjs.bundleafa4.css?v=7.2.0') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/assets/css/style.bundleafa4.css?v=7.2.0') }}">
	
    <link rel="icon" href="{{ URL::asset('public/images/logo/favicon.png') }}" type="image/png" sizes="16x16">
	
@stack('links')
@stack('style')
</head>