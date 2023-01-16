<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@if(isset($title)) {{ $title }} @else Enquiries - Quotation Buyers @endif - {{config('app.name')}}</title>

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

    <link href="{{asset('css/index.509e34c1.css')}}" rel="stylesheet" />
    <link href="{{asset('css/chunk.css')}}" rel="stylesheet" />

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
h1,h2,h3,h4,h5,h6{
        font-familg:'GD Sherpa Regular' !important;
}
h1{font-size:36px;font-weight:900;}

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
<!--clearing divs-->
<div class="clearfix"></div>

<div class="row mainx">
    <div class="col-lg-6 col-xs-12 col-sm-6 colmd-6 bg-neutral">
        <h1 class="mb-0 mt-2 d-flex align-items-center" style="font-weight:bold !important">Välkommen tillbaka, {{\Auth::user()->f_name}}</h1><br/>
            </div>

    <div class="col-lg-6 col-xs-12 col-sm-6 colmd-6 bg-neutral">
        <a href="{{route('index')}}" class="btn btn-primary btn-dark" target="_blank"> Skapa ny förfrågan <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small svg-icon--spacing-right-tiny fill-current-color media-right-small" style="fill: none;"><path d="M6.167 9.682L15.5.5M15.5 5.747V.5h-5.333M8.083 3.833h-7a.583.583 0 00-.583.584v10.5a.583.583 0 00.583.583h10.5a.583.583 0 00.584-.583v-7" stroke="#6172BC" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
            </div>
            <!--./row-fluid-->
                </div>


<div class="row mainx">
@if(sizeof($requests)>0)
@foreach($requests as $x)

<div class="col-md-6 col-xxl-6 request_items">

        <!--card-->
        <div class="card ecommerce-card-min-width tw-div">
              <div>
                <h6 class="align-items-center h6-md_title">{{$x->request_title}}</h6>
                    <small>Publicerades on {{ date('d M Y',strtotime($x->created_at)) }} </small>
                        </div>
              
              <div class="service_request_publish_status">@if($x->project_execution_status==1) <small class="alert-primary">Avklarad</small> @elseif($x->project_execution_status==0) <small class="alert-success">publicerade</small> 
              @elseif($x->project_execution_status==2)<small class="alert-grey">Avpublicerad</small>@endif
                    </div>

<hr/>                    
<br/>
@if($x->project_execution_status==0)
<div class="rw_control">

<div class="fact-icon" data-v-0b12e4d7="">
<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small svg-icon--spacing-right-tiny fill-current-color" style="fill: none;" data-v-0b12e4d7=""><path d="M5.785 17.942L1.36 13.034a1.517 1.517 0 01-.134-1.841v0a1.517 1.517 0 012.025-.459l2.375 1.434-1.241-8.742a1.525 1.525 0 011.133-1.667v0a1.525 1.525 0 011.867 1.159l1.133 5.641V2.068A1.433 1.433 0 0110.001.626v0a1.441 1.441 0 011.442 1.442v6.491l1.058-5.683a1.484 1.484 0 012.713-.503c.204.323.277.711.204 1.086l-1.167 5.834 2.209-4.409a1.323 1.323 0 011.933-.516v0a1.317 1.317 0 01.5 1.608l-2.167 5.433a4.249 4.249 0 00-.308 1.608v2.05a4.325 4.325 0 01-1.733 3.459v0a4.3 4.3 0 01-2.6.833H9a4.309 4.309 0 01-3.216-1.417v0z" stroke="#64748B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>
@if(isset($interested_suppliers) && $interested_suppliers>0){{$interested_suppliers}} interested companies @endif

<Br/>
<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small svg-icon--spacing-right-tiny fill-current-color" style="fill: none;" data-v-0b12e4d7=""><path d="M18.75 18.125a1.25 1.25 0 01-1.25 1.25h-15a1.25 1.25 0 01-1.25-1.25V1.875A1.25 1.25 0 012.5.625h12.537c.327 0 .64.127.874.355l2.461 2.402a1.249 1.249 0 01.378.895v13.848zM5.038 6.875h10M5.038 10.625h10M5.038 14.375h5" stroke="#64748B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>
@if(isset($msgs) && $msgs>0){{$msgs}} new messages @endif

@if(isset($offerCount) && $obj->getOffers($x->request_id,\Auth::user()->id)['offer_count']>0) 
<br/>
<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small svg-icon--spacing-right-tiny fill-current-color" style="fill: none;" data-v-0b12e4d7=""><path d="M18.125 15.625h-8.75l-5 3.75v-3.75h-2.5a1.25 1.25 0 01-1.25-1.25v-12.5a1.25 1.25 0 011.25-1.25h16.25a1.25 1.25 0 011.25 1.25v12.5a1.25 1.25 0 01-1.25 1.25z" stroke="#64748B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
</svg> $obj->getOffers($x->request_id,\Auth::user()->id)['offer_count'] offer
@endif
</div>

<div class="active_control fact-icon">
<a href="#" data-toggle="" class="dropdown-toggle button-square-rounded button-transparent">
<img src="{{asset('img/gear.png')}}" class="img svg_icon" style="width:20px;height:20px;" lazyloading />
</a>
</div>
</div>

@elseif($x->project_execution_status==2)
<div class="span_tw_div">
<span class="text-md">Har du valt företag för detta uppdrag? </span>
<span><a href="{{route('projekt_winnr')}}" class="btn btn-primary btn-dark" style="padding-top:2px !important; font-size:12.5px;" target="_blank">Ange vinnare</a></span>
</div>
@endif

</div>

                        <!--./card-->
            <!--./col-md-6-->
            </div>
@endforeach
@endif

<!--./row-->
</div>


<!--./container-fluid-->
</div>

</body>
<!--JS scripts-->
@include('layouts.client__footer') 
</html>