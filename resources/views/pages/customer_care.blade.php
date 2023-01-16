<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@if(isset($title)) {{ $title }} @else KundService - {{config('app.name')}} @endif - {{config('app.name')}}</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('ico/site_logo.png') }} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('ico/site_logo.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('ico/site_logo.png') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('ico/site_logo.png') }}">

    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('ico/site_logo.svg')}}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('vendors/overlayscrollbars/OverlayScrollbars.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="{{asset('css/clients.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/index.509e34c1.css')}}" />
    
<script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>

<style>
/*<!--extra styles-->*/
@font-face {font-family: "GD Sherpa Regular";
  src: url("{{asset('fonts/0aee6008b82cde991ec28387169bb13e.eot') }}"); /* IE9*/
  src: url("{{asset('fonts/0aee6008b82cde991ec28387169bb13e.eot?#iefix') }}") format("embedded-opentype"), /* IE6-IE8 */
  url("{{asset('fonts/0aee6008b82cde991ec28387169bb13e.woff2') }}") format("woff2"), /* chrome、firefox */
  url("{{asset('fonts/0aee6008b82cde991ec28387169bb13e.woff') }}") format("woff"), /* chrome、firefox */
  url("{{asset('fonts/0aee6008b82cde991ec28387169bb13e.ttf') }}") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url("{{asset('fonts/0aee6008b82cde991ec28387169bb13e.svg#GD Sherpa Regular') }}") format("svg"); /* iOS 4.1- */
}

body{
font-family:'GD Sherpa Regular' !important;font-size:14px;
}

.cc_phone{
        height:50px;padding:11px 14px 11px 14px;border-radius:8px;
}
.cc_phone svg{
        width:30px;
}
.cc_phone:active, .cc_phone:hover{
        background:#f0f2ff;text-decoration:none;
}
.avatar-xl span{
        position:relative;right:-35px;top:-14px;
}
.nav-link svg{
        width:30px;position:relative;top:10px;

}
  </style>
  </head>

  <body>

<div class="container-fluid">
@include('layouts.nav__bar')

<div class="row mainx">

<div class="col-md-10 col10" style="border:0">

<h1 class="kseerv_h1">Kundservice</h1>
</div>
<div class="col-md-10 col10">

<div class="row">

<div class="col-md-8 col-sm-8 col-lg-8 col-xs-10 gen_body">
<h3>Har du frågor? Vår kundservice finns här för att hjälpa till </h3>

<p class="text">Du har tillgång till vår email och telefonsupport.
Du kan också kika om du hittar svar på din fråga bland våra <a href="{{route('faqs')}}"><u><b>Vanliga frågor och svar</b></u></a>.
</p>


<div class="line_item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-small svg-icon--spacing-right-small fill-current-color" data-v-095efe40=""><path d="M5.25 24a.747.747 0 01-.75-.75V19.5H2.25A2.252 2.252 0 010 17.25v-15A2.252 2.252 0 012.25 0h19.5A2.252 2.252 0 0124 2.25v15a2.252 2.252 0 01-2.25 2.25H11.5l-5.8 4.35a.753.753 0 01-.45.15zm-3-22.5a.75.75 0 00-.75.75v15c0 .414.336.75.75.75h3a.75.75 0 01.75.75v3l4.8-3.6a.753.753 0 01.45-.15h10.5a.75.75 0 00.75-.75v-15a.75.75 0 00-.75-.75H2.25z"></path><path d="M5.25 8.25a.75.75 0 010-1.5h13.5a.75.75 0 010 1.5H5.25zM5.25 12.75a.75.75 0 010-1.5h10.5a.75.75 0 010 1.5H5.25z"></path></svg> 


@if($dayOfWeek=='Sat' || $dayOfWeek=='Sun')
<b>Chatten är stängd</b> 
<span class="alert-danger">StängdÖppnar</span> 
<b>igen måndag kl. 10.</b></div>

@else
<b>Chatt med oss</b> 

<span class="alert-success" style="border-radius:5px;padding:1px 2px;">Öppen</span> 
@endif


<p class="tel_phone">
<div class="other_info"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-small svg-icon--spacing-right-small fill-current-color" data-v-095efe40=""><path d="M18.023 24.039a6.293 6.293 0 01-3.411-1.01A50.484 50.484 0 01.993 9.406c-1.606-2.524-1.259-5.747.84-7.846l.774-.774A2.58 2.58 0 014.442.028c.694 0 1.345.269 1.834.758l3.262 3.266a2.597 2.597 0 01-.002 3.667 1.098 1.098 0 00.001 1.549l5.232 5.233c.193.192.468.306.76.306s.567-.114.773-.32c.49-.489 1.141-.759 1.835-.759s1.345.269 1.835.758l3.261 3.26a2.598 2.598 0 010 3.669l-.774.774a6.24 6.24 0 01-4.436 1.85zm-2.581-2.26c.798.5 1.683.757 2.583.757 1.267 0 2.464-.5 3.372-1.408l.774-.774a1.098 1.098 0 000-1.549l-3.26-3.259c-.206-.206-.481-.319-.774-.319s-.568.114-.774.32a2.578 2.578 0 01-1.834.759 2.57 2.57 0 01-1.824-.75l-5.228-5.229a2.598 2.598 0 010-3.669 1.096 1.096 0 00.001-1.545l-.027-.028-3.236-3.239a1.09 1.09 0 00-.773-.318c-.293 0-.568.114-.775.32l-.774.773a4.756 4.756 0 00-.653 5.951 48.97 48.97 0 0013.202 13.207z"></path></svg> Ring oss på <a href="tel:010-330-20-11"><u>010-330 20 11</u></a></div>
<div class="other_info"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-small svg-icon--spacing-right-small fill-current-color" data-v-095efe40=""><path d="M3 20.5a2.252 2.252 0 01-2.25-2.25v-12a2.22 2.22 0 01.498-1.411l.023-.027A2.238 2.238 0 013 4h18a2.245 2.245 0 011.757.845l.018.026c.311.399.475.875.475 1.379v12A2.252 2.252 0 0121 20.5H3zm-.75-2.25c0 .414.336.75.75.75h18a.75.75 0 00.75-.75V6.562l-7.276 5.596a4.077 4.077 0 01-2.474.841c-.891 0-1.77-.299-2.474-.841L2.25 6.562V18.25zm8.19-7.281c.444.342.998.53 1.56.53s1.115-.188 1.559-.53l7.111-5.47H3.329l7.111 5.47z"></path></svg>
Maila oss på <a href="mailto:info@toppoffert.se"><u>info@toppoffert.se</u></a></div>
</p>
</div>
</div>

<div class="col-md-3 col-xs-2 col-lg-3 col-sm-4 open_close">
<b>Öppettider</b>
<p><div class="open_info">Måndag-fredag 9-17.</div>
<div class="open_info"> Lunchstängt 12-13.</div>
</p>
<!--./open_close-->
</div>


<div class="col-md-1"></div>

</div>

</div>

</div>

</div>
</body>
@include('layouts.client__footer')
</html>