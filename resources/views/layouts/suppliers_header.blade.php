@php 
$requests = \App\Models\ServiceRequests::where(['matched'=>0,'publish_status'=>true,'project_execution_status'=>0])->get();
$catCount = sizeof(\App\Models\Categories::all());
$supplierObj = new \App\Models\Suppliers;
@endphp

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@if(isset($title)) {{$title}} -  {{config('app.name')}} @else Leverantor - {{config('app.name')}} @endif</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <link rel="icon" type="image/x-icon" sizes="192x192"  href="{{ asset('img/icons/favicon.ico')}}">
<link rel="icon" type="image/x-icon" sizes="32x32" href="{{ asset('img/icons/favicon.ico')}}">
<link rel="icon" type="image/x-icon" sizes="96x96" href="{{ asset('img/icons/favicon.ico')}}">
<link rel="icon" type="image/x-icon" sizes="16x16" href="{{ asset('img/icons/favicon.ico')}}">
<link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="{{ asset('img/icons/favicon.ico')}}">

  <link rel="manifest" href="{{ asset('img/icons/manifest.json')}}">
  
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/icons/apple-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/icons/apple-icon-60x60.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icons/apple-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/icons/apple-icon-76x76.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icons/apple-icon-114x114.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/icons/apple-icon-120x120.png')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/icons/apple-icon-144x144.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icons/apple-icon-152x152.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icons/apple-icon-180x180.png')}}">
  

    <meta name="theme-color" content="#ffffff">
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/theme-rtl.min.css')}}" rel="stylesheet" id="style-rtl">
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('assets/css/user-rtl.min.css')}}" rel="stylesheet" id="user-style-rtl">
    <link href="{{asset('assets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <link href="{{asset('css/supplier.css')}}" rel="stylesheet">
    <link href="{{asset('css/fixed_footer.css')}}" rel="stylesheet">
    
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
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>

      <div class="d-flex align-items-center">    
          <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation">
              <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="topp_logo" width="130.000000pt" height="130.000000pt" viewBox="0 0 500.000000 500.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
fill="#0d2663" stroke="none">
<path d="M943 3272 c-156 -51 -248 -200 -274 -446 -17 -163 2 -336 50 -448 23
-55 81 -121 133 -155 l38 -23 0 -125 0 -126 132 111 132 110 1484 0 c1321 0
1491 2 1545 16 153 39 250 149 293 331 22 91 22 311 0 412 -31 142 -103 255
-194 306 -102 57 -33 55 -1727 54 -1436 0 -1564 -2 -1612 -17z m2210 -329 c4
-2 7 -17 7 -32 0 -24 -5 -30 -30 -34 -38 -8 -39 -33 -2 -38 52 -8 69 0 76 33
3 18 14 40 23 50 22 24 82 39 118 30 24 -7 31 -15 33 -39 3 -27 -1 -31 -27
-36 -41 -9 -42 -37 -1 -37 28 0 30 -2 30 -40 0 -38 -2 -40 -30 -40 l-29 0 -3
-112 -3 -113 -55 0 -55 0 -3 113 -3 112 -49 0 -49 0 -3 -112 -3 -113 -55 0
-55 0 -3 113 c-2 104 -4 112 -22 112 -17 0 -20 7 -20 40 0 33 4 40 19 40 13 0
21 10 25 34 7 38 31 63 72 76 26 8 78 4 97 -7z m-334 -37 c61 -30 91 -86 91
-173 0 -76 -16 -120 -58 -155 -46 -38 -95 -51 -173 -46 -118 9 -176 64 -186
178 -6 66 8 118 44 161 57 67 185 83 282 35z m-1501 -28 l-3 -53 -62 -3 -63
-3 0 -145 0 -145 -62 3 -63 3 -3 142 -3 142 -62 3 -62 3 -3 39 c-6 68 -13 66
198 66 l191 0 -3 -52z m2862 7 c0 -43 1 -45 30 -45 28 0 30 -2 30 -40 0 -38
-2 -40 -30 -40 l-31 0 3 -72 c3 -72 4 -73 31 -76 26 -3 28 -6 25 -40 -3 -35
-5 -37 -43 -40 -21 -2 -54 -1 -73 3 -45 8 -62 50 -62 150 0 68 -2 75 -20 75
-17 0 -20 7 -20 40 0 36 3 40 25 40 21 0 26 7 36 45 11 45 12 45 55 45 l44 0
0 -45z m-170 -96 c0 -49 0 -49 -32 -49 -57 0 -63 -10 -68 -112 l-5 -93 -57 -3
-58 -3 0 156 0 155 46 0 c38 0 47 -4 51 -20 5 -18 7 -19 17 -5 13 18 63 34 89
27 13 -3 17 -15 17 -53z m-2392 31 c101 -62 96 -219 -8 -273 -51 -26 -154 -20
-199 12 -84 60 -80 199 8 258 46 31 150 32 199 3z m222 5 c0 -19 11 -19 36 0
26 20 100 19 135 -2 74 -44 79 -208 8 -267 -36 -30 -101 -35 -137 -10 l-22 15
0 -71 0 -71 -57 3 -58 3 -3 208 -2 207 50 0 c38 0 50 -4 50 -15z m380 -6 l0
-20 26 20 c19 15 41 21 76 21 43 0 55 -5 83 -33 40 -40 53 -102 35 -176 -16
-69 -48 -96 -113 -96 -29 0 -60 4 -69 9 -15 7 -17 0 -20 -56 l-3 -63 -57 -3
-58 -3 0 211 0 210 50 0 c44 0 50 -3 50 -21z m1447 1 c44 -26 66 -64 67 -113
l1 -42 -107 -3 c-99 -2 -108 -4 -108 -22 0 -24 12 -31 52 -32 22 -1 36 5 46
20 12 18 24 22 69 22 55 0 55 0 48 -27 -15 -60 -71 -93 -160 -93 -65 0 -110
17 -145 54 -19 21 -25 40 -28 89 -6 114 47 167 168 167 47 0 74 -6 97 -20z"/>
<path d="M2668 2829 c-50 -19 -64 -134 -22 -180 24 -27 87 -26 114 3 27 29 29
126 3 156 -22 26 -59 34 -95 21z"/>
<path d="M1482 2748 c-7 -7 -12 -35 -12 -63 0 -57 12 -75 50 -75 38 0 50 18
50 75 0 57 -12 75 -50 75 -14 0 -31 -5 -38 -12z"/>
<path d="M1877 2742 c-20 -22 -23 -92 -5 -110 17 -17 65 -15 72 4 3 9 6 35 6
59 0 34 -5 47 -19 55 -27 14 -35 13 -54 -8z"/>
<path d="M2256 2744 c-19 -18 -22 -94 -4 -112 7 -7 21 -12 33 -12 32 0 45 20
45 66 0 43 -19 74 -45 74 -7 0 -21 -7 -29 -16z"/>
<path d="M3538 2759 c-36 -21 -21 -39 32 -39 52 0 60 8 34 34 -18 18 -41 20
-66 5z"/>
</g>
</svg>
 </button>
    </div>
          <a class="navbar-brand">
              <div class="d-flex align-items-center py-3 credit">{{ \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id)->credits }} Krediter
            </div>
            </a>
          </div>

          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
                  <ul class="nav collapse show" id="dashboard">
                    <li class="nav-item">
                      <a class="nav-link active" href="{{route('suppliers.dashboard')}}" data-bs-toggle="" aria-expanded="false">

                      <div class="d-flex align-items-center sidenav" id="sidenav">
                          
                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><g clip-path="url(#clip0_1514_6104)" stroke-width="1.429" stroke-linecap="round" stroke-linejoin="round"><path d="M2.143 12.143v6.428a.714.714 0 00.714.715h14.286a.714.714 0 00.714-.715v-6.428M11.429 12.143v7.143M2.143 14.286h9.286M.714 5.714l2.143-5h14.286l2.143 5H.714zM6.786 5.714v1.429A2.857 2.857 0 013.929 10h-.4A2.857 2.857 0 01.67 7.143V5.714"></path><path d="M13.214 5.714v1.429A2.857 2.857 0 0110.357 10h-.714a2.857 2.857 0 01-2.857-2.857V5.714M19.286 5.714v1.429A2.857 2.857 0 0116.428 10h-.357a2.857 2.857 0 01-2.857-2.857V5.714"></path></g><defs><clipPath id="clip0_1514_6104"><path fill="#fff" d="M0 0h20v20H0z"></path></clipPath></defs></svg>
                        <span class="nav-link-text ps-1">Marknad</span> <div class="request_box">{{$request_count}}</div></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('supplier_sales')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center" id="sidenav">
                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><path d="M16.908 11.825l-4.616.917M3.067 11.833h2.041l2.925 3.284a1.176 1.176 0 00.834.383 38.494 38.494 0 004.783-4.075c.092-.258-.083-.517-.242-.733l-2.091-2.7M8.817 5.9l-.292-.25A1.8 1.8 0 007.5 5.317c-.223 0-.443.042-.65.125L3.125 6.925" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path><path d="M.625 5.5h1.667a.833.833 0 01.833.767v5.35a.833.833 0 01-.833.758H.625M19.375 12.375h-1.667a.834.834 0 01-.833-.758v-5.35a.834.834 0 01.833-.767h1.667M12.292 7.667l-2.875.95A1.342 1.342 0 017.75 7.9a1.358 1.358 0 01.617-1.783l2.8-1.409c.273-.139.576-.21.883-.208.227.002.452.04.667.117l4.166 1.516" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>  
                        <span class="nav-link-text ps-1">Försäljning</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('suppliers.project')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center sidenav">
                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><path d="M9.997 13.125v2.5M15.3 19.375a5.626 5.626 0 00-10.607 0H15.3zM13.75.625h3.125a1.25 1.25 0 011.25 1.25V5a8.125 8.125 0 11-16.25 0V1.875a1.25 1.25 0 011.25-1.25H6.25" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.442 2.144l1.04 2.049h1.773a.485.485 0 01.35.833l-1.628 1.598.901 2.071a.49.49 0 01-.699.614L10 8.083 7.82 9.31a.49.49 0 01-.698-.614l.901-2.07-1.627-1.602a.485.485 0 01.349-.834h1.773l1.04-2.045a.495.495 0 01.884 0z" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>  
                        <span class="nav-link-text ps-1">Projekt</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('suppliers_dashboard')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center sidenav">
                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><path d="M.714 19.286h18.572M6.429 19.286V.714H.714v18.572M12.143 19.286v-10H6.429v10" stroke-width="1.429" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.857 19.286V5h-5.714v14.286" stroke-width="1.429" stroke-linecap="round" stroke-linejoin="round"></path></svg>  
                        <span class="nav-link-text ps-1">Överblick</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('recent_messages')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center sidenav">
                        <svg viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><g clip-path="url(#clip0_1060_2513)"><path d="M18.588 15.88h-8.75l-5 3.75v-3.75h-2.5a1.25 1.25 0 01-1.25-1.25V2.13A1.25 1.25 0 012.338.88h16.25a1.25 1.25 0 011.25 1.25v12.5a1.25 1.25 0 01-1.25 1.25z" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_1060_2513"><path transform="translate(.463 .254)" d="M0 0h20v20H0z"></path></clipPath></defs></svg>  
                        <span class="nav-link-text ps-1">Meddelanden</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item">
                  <!-- label-->
                  
               <!-- parent pages-->
               
                    <li class="nav-item">
                      <a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center sidenav">
                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-69441b5d=""><path d="M5.625 5a4.375 4.375 0 108.75 0 4.375 4.375 0 00-8.75 0zM1.875 19.375a8.125 8.125 0 1116.25 0" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span class="nav-link-text ps-1">Mina Sidor</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="orders">
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('suppliers_dashboard')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Överblick</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact-information')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kontaktinformation</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('settings.password')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Byt lösenord</span></div>
                      </a><!-- more inner pages-->
                    </li>
                 

                    <li class="nav-item"><a class="nav-link" href="{{route('accountsummary')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kontosammanställning</span></div>
                      </a><!-- more inner pages-->
                    </li>
                 
                    <li class="nav-item"><a class="nav-link" href="{{route('settings.invoices')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Fakturor och betalningar</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('settings.profile')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Företagsprofil</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <!--<li class="nav-item"><a class="nav-link" href="{{route('settings.ratings')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Omdömen</span></div>
                      </a>
                    </li>-->

                    <li class="nav-item"><a class="nav-link" href="{{route('settings.stamps')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Certifikat och kvalitetsstämplar</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <!-- <li class="nav-item"><a class="nav-link" href="{{route('settings.labels')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Etiketter</span></div>
                      </a>
                    </li>-->

                  <!--  <li class="nav-item"><a class="nav-link" href="{{route('cannedresponses')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Svarsmallar</span></div>
                      </a>
                    </li>-->
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('settings.notifications')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pushnotiser</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('settings.cookie')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie-inställningar</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>                  
                
                  <li class="nav-item"><a class="nav-link" href="{{route('customer_care')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center sidenav">
                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><path d="M10 18.203L2.01 9.87a4.727 4.727 0 01-.886-5.46 4.728 4.728 0 017.571-1.228L10 4.487l1.305-1.305a4.727 4.727 0 016.686 6.685L10 18.203z" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>  
                        <span class="nav-link-text ps-1">Kundservice</span></div>
                      </a><!-- more inner pages-->
                    </li>

                </ul><!-- parent pages-->
                 </li>

                  </ul>
                </li>
              </ul>

              <div class="settings" style="padding:10px;margin:0;background:#fff;border-radius:10px;">
               <div class="grid-2-x">
                  <img src="{{asset('img/avatar/'.\Auth::user()->profile_img)}}" class="img-responsive img-circle-md move-left-20" />
                <small>{{$supplierObj->where('supplier_id','=',\Auth::user()->id)->first()->supplier_corp_name}}</small>
                  </div>

              <div class="grid-2-y">
              <div class="footer-item">
              <svg viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-mini fill-current-color" style="fill: none;" data-v-270f2b45=""><g clip-path="url(#clip0_1810_41320)" stroke="#B8C3D5" stroke-width=".75" stroke-linecap="round" stroke-linejoin="round"><path d="M11.625.374L.375 11.624M11.625 3.749V.374H8.25M.375.374L4.5 4.499M11.625 8.249v3.375H8.25M7.5 7.499l4.125 4.125"></path></g><defs><clipPath id="clip0_1810_41320"><path fill="#fff" d="M0 0h12v12H0z"></path></clipPath></defs></svg><a href="{{route('marketplace.clients')}}" target="_blank"><span>Växla till köpare</span></a>
              </div>
              <div class="footer-item logout">
              <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-mini fill-current-color" style="fill: none;" data-v-270f2b45=""><g clip-path="url(#clip0_738_26060)" stroke="#B8C3D5" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><path d="M19.375 10.003H6.25M9.375 13.128L6.25 10.003l3.125-3.125"></path><path d="M13.125 13.75v3.75a1.197 1.197 0 01-1.137 1.25H1.761A1.197 1.197 0 01.625 17.5v-15a1.197 1.197 0 011.136-1.25h10.227a1.197 1.197 0 011.137 1.25v3.75"></path></g><defs><clipPath id="clip0_738_26060"><path fill="#fff" d="M0 0h20v20H0z"></path></clipPath></defs></svg>  
              <a href="{{route('logout')}}"><span>Logga ut</span></a></div>
              </div>

                </div>
              </div>
            </div>
        </nav>

        <!--end of sidebar navigation for col-lg-->

        <!--mobile-navigation area-->
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" id="hide_lg" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="{{route('index')}}">
            <div class="d-flex align-items-center">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="130.000000pt" height="130.000000pt" class="topp_logo" viewBox="0 0 500.000000 500.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
fill="#0d2663" stroke="none">
<path d="M943 3272 c-156 -51 -248 -200 -274 -446 -17 -163 2 -336 50 -448 23
-55 81 -121 133 -155 l38 -23 0 -125 0 -126 132 111 132 110 1484 0 c1321 0
1491 2 1545 16 153 39 250 149 293 331 22 91 22 311 0 412 -31 142 -103 255
-194 306 -102 57 -33 55 -1727 54 -1436 0 -1564 -2 -1612 -17z m2210 -329 c4
-2 7 -17 7 -32 0 -24 -5 -30 -30 -34 -38 -8 -39 -33 -2 -38 52 -8 69 0 76 33
3 18 14 40 23 50 22 24 82 39 118 30 24 -7 31 -15 33 -39 3 -27 -1 -31 -27
-36 -41 -9 -42 -37 -1 -37 28 0 30 -2 30 -40 0 -38 -2 -40 -30 -40 l-29 0 -3
-112 -3 -113 -55 0 -55 0 -3 113 -3 112 -49 0 -49 0 -3 -112 -3 -113 -55 0
-55 0 -3 113 c-2 104 -4 112 -22 112 -17 0 -20 7 -20 40 0 33 4 40 19 40 13 0
21 10 25 34 7 38 31 63 72 76 26 8 78 4 97 -7z m-334 -37 c61 -30 91 -86 91
-173 0 -76 -16 -120 -58 -155 -46 -38 -95 -51 -173 -46 -118 9 -176 64 -186
178 -6 66 8 118 44 161 57 67 185 83 282 35z m-1501 -28 l-3 -53 -62 -3 -63
-3 0 -145 0 -145 -62 3 -63 3 -3 142 -3 142 -62 3 -62 3 -3 39 c-6 68 -13 66
198 66 l191 0 -3 -52z m2862 7 c0 -43 1 -45 30 -45 28 0 30 -2 30 -40 0 -38
-2 -40 -30 -40 l-31 0 3 -72 c3 -72 4 -73 31 -76 26 -3 28 -6 25 -40 -3 -35
-5 -37 -43 -40 -21 -2 -54 -1 -73 3 -45 8 -62 50 -62 150 0 68 -2 75 -20 75
-17 0 -20 7 -20 40 0 36 3 40 25 40 21 0 26 7 36 45 11 45 12 45 55 45 l44 0
0 -45z m-170 -96 c0 -49 0 -49 -32 -49 -57 0 -63 -10 -68 -112 l-5 -93 -57 -3
-58 -3 0 156 0 155 46 0 c38 0 47 -4 51 -20 5 -18 7 -19 17 -5 13 18 63 34 89
27 13 -3 17 -15 17 -53z m-2392 31 c101 -62 96 -219 -8 -273 -51 -26 -154 -20
-199 12 -84 60 -80 199 8 258 46 31 150 32 199 3z m222 5 c0 -19 11 -19 36 0
26 20 100 19 135 -2 74 -44 79 -208 8 -267 -36 -30 -101 -35 -137 -10 l-22 15
0 -71 0 -71 -57 3 -58 3 -3 208 -2 207 50 0 c38 0 50 -4 50 -15z m380 -6 l0
-20 26 20 c19 15 41 21 76 21 43 0 55 -5 83 -33 40 -40 53 -102 35 -176 -16
-69 -48 -96 -113 -96 -29 0 -60 4 -69 9 -15 7 -17 0 -20 -56 l-3 -63 -57 -3
-58 -3 0 211 0 210 50 0 c44 0 50 -3 50 -21z m1447 1 c44 -26 66 -64 67 -113
l1 -42 -107 -3 c-99 -2 -108 -4 -108 -22 0 -24 12 -31 52 -32 22 -1 36 5 46
20 12 18 24 22 69 22 55 0 55 0 48 -27 -15 -60 -71 -93 -160 -93 -65 0 -110
17 -145 54 -19 21 -25 40 -28 89 -6 114 47 167 168 167 47 0 74 -6 97 -20z"/>
<path d="M2668 2829 c-50 -19 -64 -134 -22 -180 24 -27 87 -26 114 3 27 29 29
126 3 156 -22 26 -59 34 -95 21z"/>
<path d="M1482 2748 c-7 -7 -12 -35 -12 -63 0 -57 12 -75 50 -75 38 0 50 18
50 75 0 57 -12 75 -50 75 -14 0 -31 -5 -38 -12z"/>
<path d="M1877 2742 c-20 -22 -23 -92 -5 -110 17 -17 65 -15 72 4 3 9 6 35 6
59 0 34 -5 47 -19 55 -27 14 -35 13 -54 -8z"/>
<path d="M2256 2744 c-19 -18 -22 -94 -4 -112 7 -7 21 -12 33 -12 32 0 45 20
45 66 0 43 -19 74 -45 74 -7 0 -21 -7 -29 -16z"/>
<path d="M3538 2759 c-36 -21 -21 -39 32 -39 52 0 60 8 34 34 -18 18 -41 20
-66 5z"/>
</g>
</svg>

            </div>
          </a>

          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a></div>
                </div>
              </li>
           
          </div>
		  
        </nav>


        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" class="topp_logo" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="{{route('index')}}">
              <div class="d-flex align-items-center">
              <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="130.000000pt" height="130.000000pt" viewBox="0 0 500.000000 500.000000" preserveAspectRatio="xMidYMid meet" class="svgico">
                <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)" fill="#0d2663" stroke="none">
                  <path d="M943 3272 c-156 -51 -248 -200 -274 -446 -17 -163 2 -336 50 -448 23
-55 81 -121 133 -155 l38 -23 0 -125 0 -126 132 111 132 110 1484 0 c1321 0
1491 2 1545 16 153 39 250 149 293 331 22 91 22 311 0 412 -31 142 -103 255
-194 306 -102 57 -33 55 -1727 54 -1436 0 -1564 -2 -1612 -17z m2210 -329 c4
-2 7 -17 7 -32 0 -24 -5 -30 -30 -34 -38 -8 -39 -33 -2 -38 52 -8 69 0 76 33
3 18 14 40 23 50 22 24 82 39 118 30 24 -7 31 -15 33 -39 3 -27 -1 -31 -27
-36 -41 -9 -42 -37 -1 -37 28 0 30 -2 30 -40 0 -38 -2 -40 -30 -40 l-29 0 -3
-112 -3 -113 -55 0 -55 0 -3 113 -3 112 -49 0 -49 0 -3 -112 -3 -113 -55 0
-55 0 -3 113 c-2 104 -4 112 -22 112 -17 0 -20 7 -20 40 0 33 4 40 19 40 13 0
21 10 25 34 7 38 31 63 72 76 26 8 78 4 97 -7z m-334 -37 c61 -30 91 -86 91
-173 0 -76 -16 -120 -58 -155 -46 -38 -95 -51 -173 -46 -118 9 -176 64 -186
178 -6 66 8 118 44 161 57 67 185 83 282 35z m-1501 -28 l-3 -53 -62 -3 -63
-3 0 -145 0 -145 -62 3 -63 3 -3 142 -3 142 -62 3 -62 3 -3 39 c-6 68 -13 66
198 66 l191 0 -3 -52z m2862 7 c0 -43 1 -45 30 -45 28 0 30 -2 30 -40 0 -38
-2 -40 -30 -40 l-31 0 3 -72 c3 -72 4 -73 31 -76 26 -3 28 -6 25 -40 -3 -35
-5 -37 -43 -40 -21 -2 -54 -1 -73 3 -45 8 -62 50 -62 150 0 68 -2 75 -20 75
-17 0 -20 7 -20 40 0 36 3 40 25 40 21 0 26 7 36 45 11 45 12 45 55 45 l44 0
0 -45z m-170 -96 c0 -49 0 -49 -32 -49 -57 0 -63 -10 -68 -112 l-5 -93 -57 -3
-58 -3 0 156 0 155 46 0 c38 0 47 -4 51 -20 5 -18 7 -19 17 -5 13 18 63 34 89
27 13 -3 17 -15 17 -53z m-2392 31 c101 -62 96 -219 -8 -273 -51 -26 -154 -20
-199 12 -84 60 -80 199 8 258 46 31 150 32 199 3z m222 5 c0 -19 11 -19 36 0
26 20 100 19 135 -2 74 -44 79 -208 8 -267 -36 -30 -101 -35 -137 -10 l-22 15
0 -71 0 -71 -57 3 -58 3 -3 208 -2 207 50 0 c38 0 50 -4 50 -15z m380 -6 l0
-20 26 20 c19 15 41 21 76 21 43 0 55 -5 83 -33 40 -40 53 -102 35 -176 -16
-69 -48 -96 -113 -96 -29 0 -60 4 -69 9 -15 7 -17 0 -20 -56 l-3 -63 -57 -3
-58 -3 0 211 0 210 50 0 c44 0 50 -3 50 -21z m1447 1 c44 -26 66 -64 67 -113
l1 -42 -107 -3 c-99 -2 -108 -4 -108 -22 0 -24 12 -31 52 -32 22 -1 36 5 46
20 12 18 24 22 69 22 55 0 55 0 48 -27 -15 -60 -71 -93 -160 -93 -65 0 -110
17 -145 54 -19 21 -25 40 -28 89 -6 114 47 167 168 167 47 0 74 -6 97 -20z"/>
<path d="M2668 2829 c-50 -19 -64 -134 -22 -180 24 -27 87 -26 114 3 27 29 29
126 3 156 -22 26 -59 34 -95 21z"/>
<path d="M1482 2748 c-7 -7 -12 -35 -12 -63 0 -57 12 -75 50 -75 38 0 50 18
50 75 0 57 -12 75 -50 75 -14 0 -31 -5 -38 -12z"/>
<path d="M1877 2742 c-20 -22 -23 -92 -5 -110 17 -17 65 -15 72 4 3 9 6 35 6
59 0 34 -5 47 -19 55 -27 14 -35 13 -54 -8z"/>
<path d="M2256 2744 c-19 -18 -22 -94 -4 -112 7 -7 21 -12 33 -12 32 0 45 20
45 66 0 43 -19 74 -45 74 -7 0 -21 -7 -29 -16z"/>
<path d="M3538 2759 c-36 -21 -21 -39 32 -39 52 0 60 8 34 34 -18 18 -41 20
-66 5z"/>
</g>
</svg>

              </div>
            </a>
            
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                  
                <form class="position-relative" data-bs-display="static">
                  <input class="form-control search-input fuzzy-search" style="border-radius:6px !important;width:100%;font-size:12px;height:50px;" type="text" placeholder="Sök bland förfrågningar" />
                    <a href="#" class="dropdown"><svg data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 162.14 91.19" class="svg-icon fill-current-color icon" data-v-6d27ee15=""><path d="M88.2 88.18l70.94-70.94a10 10 0 00.18-14.06l-.18-.19a9.73 9.73 0 00-7.13-3H10.14A10.28 10.28 0 00.01 10.14a9.66 9.66 0 003 7.12l70.94 70.92a9.94 9.94 0 0014 .21l.2-.21z"></path></svg></a>
                  </form>

                  <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
                    <div class="dropdown-caret-bg" aria-label="Close"></div>
                  </div>

                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1 title">Most popular products</div>
                        </div>
                      </a>
                      
                    </div>
                    </div>
                </div>
              </li>
            </ul>

            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
              </li>
              <li class="nav-item d-none d-sm-block">
              </li>
              <li class="nav-item dropdown">

              <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll">
                
              <img src="{{asset('img/msg.png')}}" class="nav_img" />

              </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3">
                        <a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom"> </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                              </div>
                            </div>
                            <div class="notification-body">

                          </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                              </div>
                            </div>
                            <div class="notification-body">
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom"></div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                              </div>
                            </div>
                            <div class="notification-body">
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                              </div>
                            </div>
                            <div class="notification-body">

                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              
                            </div>
                            <div class="notification-body">

                          </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>

              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                <img src="{{asset('img/user_icon.png')}}" class="nav_img usr_icon" />
                </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                 
                  <a class="dropdown-item" href="{{route('suppliers_dashboard')}}" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Överblick</span></div>
                 </a>
                 
                  <a class="dropdown-item" href="{{route('contact-information')}}" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1"> Kontaktinformation</span></div>
                      </a>
                      <a class="dropdown-item" href="{{route('settings.password')}}" data-bs-toggle="" aria-expanded="false">Byt lösenord</a>
                                     
                      <a class="dropdown-item" href="{{route('accountsummary')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kontosammanställning</span></div>
                      </a>

                      <a class="dropdown-item" href="{{route('settings.invoices')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Fakturor och betalningar</span></div>
                      </a>
                      <a class="dropdown-item" href="{{route('settings.notifications')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pushnotiser</span></div>
                      </a>

                      <a class="dropdown-item" href="{{route('settings.cookie')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie-inställningar</span></div>
                      </a>

                      <a class="dropdown-item" data-bs-toggle="" aria-expanded="false" href="{{route('logout')}}">
                      <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logga ut</span></div>
                    </a>
                 
                  </div>
                </div>
              </li>
            </ul>
          </nav>

          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
			  
@yield('content')

@include('layouts.fixed_footer')

</div>

  </main><!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  
  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/anchorjs/anchor.min.js')}}"></script>
  <script src="{{asset('vendors/is/is.min.js')}}"></script>
  <script src="{{asset('vendors/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
  <script src="{{asset('vendors/lodash/lodash.min.js')}}"></script>
  <script src="{{asset('polyfill.io/v3/polyfill.min58be.js?features=window.scroll')}}"></script>
  <script src="{{asset('vendors/list.js/list.min.js')}}"></script>
  <script src="{{asset('assets/js/theme.js')}}"></script>
</body>

</html>