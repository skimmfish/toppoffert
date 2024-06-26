<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="theme-color" content="#2F3033" />
    <meta name="msapplication-TileColor" content="#2F3033" />
    <title>Logga in - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('css/login/toppoffert.css')}}">
    
    <script src="{{asset('css/js/toppoffert.js')}}"></script>


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logos/toppofferta_logo.svg') }} ">
    <link rel="icon" type="image/svg" sizes="32x32" href="{{ asset('img/logos/toppofferta_logo.svg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logos/toppofferta_logo.svg') }}">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TTBP');</script>
    <!-- End Google Tag Manager -->

    <!--JQuery-->
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.lazy.min.js') }}"></script>
    

  <style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap);
  .input-large{font-family:'Open Sans';}
  </style>
  </head>
<body>

@yield('content')

</body>
</html>
