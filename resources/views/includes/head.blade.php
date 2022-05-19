<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'AshRealEstate') }} | @yield('title')</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="/assets/css/default/app.min.css" rel="stylesheet" />
<!-- ================== END BASE CSS STYLE ================== -->

@stack('css')
