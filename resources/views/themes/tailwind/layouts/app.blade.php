<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @if(isset($seo->title))
        <title>{{ $seo->title }}</title>
    @else
        <title>{{ setting('site.title', 'Laravel Wave') . ' - ' . setting('site.description', 'The Software as a Service Starter Kit built on Laravel & Voyager') }}</title>
    @endif

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">

    <link rel="icon" href="{{ Voyager::image(setting('site.favicon', '/wave/favicon.png')) }}" type="image/x-icon">

    {{-- Social Share Open Graph Meta Tags --}}
    @if(isset($seo->title) && isset($seo->description) && isset($seo->image))
        <meta property="og:title" content="{{ $seo->title }}">
        <meta property="og:url" content="{{ Request::url() }}">
        <meta property="og:image" content="{{ $seo->image }}">
        <meta property="og:type" content="@if(isset($seo->type)){{ $seo->type }}@else{{ 'article' }}@endif">
        <meta property="og:description" content="{{ $seo->description }}">
        <meta property="og:site_name" content="{{ setting('site.title') }}">

        <meta itemprop="name" content="{{ $seo->title }}">
        <meta itemprop="description" content="{{ $seo->description }}">
        <meta itemprop="image" content="{{ $seo->image }}">

        @if(isset($seo->image_w) && isset($seo->image_h))
            <meta property="og:image:width" content="{{ $seo->image_w }}">
            <meta property="og:image:height" content="{{ $seo->image_h }}">
        @endif
    @endif

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    @if(isset($seo->description))
        <meta name="description" content="{{ $seo->description }}">
    @endif 
<link rel="stylesheet" href="{{ asset('ready/'  . '/css/mystyle.css') }}">
    <!-- Styles -->
    <link href="{{ asset('themes/' . $theme->folder . '/css/app.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    body {
      background-color: #0f0f0f;
      color: white;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #000;
    }

    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.8)),
      url('https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=1600&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
    }

    .hero h1 {
      font-size: 4rem;
      font-weight: bold;
    }

    .green {
      color: #00ff88;
    }

    .btn-green {
      background: #00ff88;
      color: black;
      font-weight: bold;
      border: none;
    }

    .btn-green:hover {
      background: #00cc6e;
      color: white;
    }

    .section-title {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .card-custom {
      background: #1b1b1b;
      border: 1px solid #00ff88;
      transition: 0.3s;
      height: 100%;
    }

    .card-custom:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 20px rgba(0,255,136,.4);
    }

    footer {
      background: #000;
      padding: 20px;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body class="flex flex-col min-h-screen @if(Request::is('/')){{ 'bg-dark' }}@else{{ 'bg-dark' }}@endif @if(config('wave.dev_bar')){{ 'pb-10' }}@endif">

    @if(config('wave.demo') && Request::is('/'))
        @include('theme::partials.demo-header')
    @endif

    @include('theme::partials.header')

    <main class="flex-grow overflow-x-hidden fondo-contenedor">
        @yield('content')
    </main>



    @include('theme::partials.footer')

    @if(config('wave.dev_bar'))
        @include('theme::partials.dev_bar')
    @endif

    <!-- Full Screen Loader -->
    <div id="fullscreenLoader" class="fixed inset-0 top-0 left-0 z-50 flex flex-col items-center justify-center hidden w-full h-full bg-gray-900 opacity-50">
        <svg class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <p id="fullscreenLoaderMessage" class="mt-4 text-sm font-medium text-white uppercase"></p>
    </div>
    <!-- End Full Loader -->


    @include('theme::partials.toast')
    @if(session('message'))
        <script>setTimeout(function(){ popToast("{{ session('message_type') }}", "{{ session('message') }}"); }, 10);</script>
    @endif
    @waveCheckout

</body>
</html>
