@php

$unreadMessageCounter = sizeof(\App\Models\NotificationModel::where(['read_status'=>0,'receiver_id'=>'admin'])->get());
	
@endphp

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@if($title) {{ $title }} @else Administrator's Dashboard @endif - {{config('app.name')}} Project</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.ico') }} ">
    <link rel="icon" type="image/ico" sizes="32x32" href="{{ asset('favicon.ico') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#ffffff">
    <link href="//db.onlinewebfonts.com/c/0aee6008b82cde991ec28387169bb13e?family=GD+Sherpa" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('css/admin/js/config.js') }}"></script>

    <script src="{{ asset('css/admin/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Spartan:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="{{asset('admin/vendors/overlayscrollbars/OverlayScrollbars.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin/css/theme-rtl.min.css')}}" rel="stylesheet" id="style-rtl">
    <link href="{{asset('css/admin/css/theme.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('css/admin/css/user-rtl.min.css')}}" rel="stylesheet" id="user-style-rtl">
    <link href="{{asset('css/admin/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <link href="{{asset('css/supplier.css')}}" rel="stylesheet">
    <link href="{{asset('css/fixed_footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">
    

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
 
<!--for local/dev testing-->
<script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>

<script>
        // display a modal (small modal)
        $(document).on('click', '#deleteRequest', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#requestModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
</script>

<!--for approving requests-->
<script>
        // display a modal (small modal)
        $(document).on('click', '#approveRequest', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#requestModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
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

        <nav class="navbar navbar-light navbar-vertical navbar-expand-lg">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
		  
		  <!--wallet modals-->
				  
		  
		  <!------------------------end-->
		  
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="{{route('sadmin_index')}}">
              <div class="d-flex align-items-center py-3">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000pt" height="100.000000pt" viewBox="0 0 500.000000 500.000000"
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
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages-->
                <a class="nav-link dropdown-indicator text-black" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                    <div class="d-flex align-items-left"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1" style="font-weight:600;font-size:14px;">Dashboard</span>
                  </div>
                  </a>
                  
                  <ul class="nav collapse show" id="dashboard" style="line-height:26px;">

                    <li class="nav-item"><a class="nav-link" href="{{route('sadmin_all_requests')}}" aria-expanded="false">
                        <div class="d-flex align-items-left">
						<span class="nav-link-icon"><span class="fas fa-thin fa-wallet"></span></span>
						<span class="nav-link-text ps-1 text-black">Buyers' Requests</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('sadmin_all_sales')}}" aria-expanded="false">
                        <div class="d-flex align-items-left">
						<span class="nav-link-icon"><span class="fas fa-thin fa-wallet"></span></span>
						<span class="nav-link-text ps-1 text-black">Sales</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('sadmin_credit_mgt')}}" aria-expanded="false">
                        <div class="d-flex align-items-left">
						<span class="nav-link-icon"><span class="fas fa-thin fa-wallet"></span></span>
						<span class="nav-link-text ps-1 text-black">Credit Management</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#" aria-expanded="false">
                        <div class="d-flex align-items-left"><span class="nav-link-icon"><span class="fas fa-solid fa-history"></span></span><span class="nav-link-text ps-1 text-black">API Integrations</span></div>
                      </a><!-- more inner pages-->
                    </li>

                                
                  </ul>
                </li>
				@if(Auth::user()->is_admin)
                <li class="nav-item">
                  <!-- label-->
					<!--the navigation links here are for managing trades by the admin and authorized personnel-->
					
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">                    
                    <a class="nav-link dropdown-indicator text-black" role="button" data-bs-toggle="collapse" aria-expanded="true">
                    <div class="d-flex align-items-left"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1" style="font-weight:600;font-size:14px;">Admin</span>
                  </div>
                  </a>
                
                    
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages-->

				  				  
				  <!-- parent pages-->
				  <a class="nav-link" href="" target="_blank" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text ps-1 text-black">Logs</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1 text-black">System Notifications</span></div>
                  </a>

                  <ul class="nav collapse" id="email">
                    <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Inbox</span>
                      <p class="unread_notebox" style="font-family:GD Sherpa;font-size:10px;">{{ $unreadMessageCounter }}</p>
                      </div>
                      </a><!-- more inner pages-->
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">New Broadcast</span></div>
                      </a><!-- more inner pages-->
                    </li>

                  </ul><!-- parent pages-->
                  
                  <a class="nav-link dropdown-indicator" href="#invoices" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="invoices">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span>
                    <span class="nav-link-text ps-1 text-black">Invoices</span></div>
                  </a>
                  <ul class="nav collapse" id="invoices">
                    <li class="nav-item"><a class="nav-link" href="{{ route('sadmin_all_invoices') }}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">All Invoices</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('sadmin.new_invoice')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Create New Invoice</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                  </ul><!-- parent pages-->
                  

                  <a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1 text-black">Users</span></div>
                  </a>
                  <ul class="nav collapse" id="events">
                    <li class="nav-item"><a class="nav-link" href="{{route('sa_all_users',['type'=>all])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">All Users</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('sa_all_users',['type'=>suppliers])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Suppliers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('sa_all_users',['type'=>buyers])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Customers</span></div>
                      </a><!-- more inner pages-->
                    </li>


                    <li class="nav-item"><a class="nav-link" href="{{route('sa_all_users',['type'=>'deleted_users'])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Deleted Users</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages-->
                  
                  

                  <!-- parent pages-->
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label text-black" style="font-family:'Spartan','Brandon Grotesque';font-weight:600;font-size:11px;">Site-wide Settings</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="{{route('site_configuration')}}" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1 text-black">Site Settings</span></div>
                  </a><!-- parent pages-->
                  
                </li>
              </ul>

              @endif
			  

              <div class="settings" style="padding:10px;margin:0;background:#fff;border-radius:10px;">
               <div class="grid-2-x">
                  <img src="{{asset('img/avatar/'.\Auth::user()->profile_img)}}" class="img-responsive img-circle-md move-left-20" />
                <small>@if(\Auth::user()->user_cat=='SUPPLIER') {{$supplierObj->where('supplier_id','=',\Auth::user()->id)->first()->supplier_corp_name}} @endif</small>
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

        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="{{ route('index') }}">
            <div class="d-flex align-items-center">
              
            <img src="{{ asset('img/'.\App\Models\Config::get_value('site_logo_light')) }}" lazyloading alt="Site Logo" class="avatar avatar-xl avatar-4x3 me-2"/>
               
              <span class="font-sans-serif">{{config('app.name')}}</span></div>

          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
           
			  </div>
			  
			  <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
         	<!-- START OF TOP NAVIGATION-->
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  @if(Auth::user()->profile_img!=NULL)
                  <img class="rounded-circle" src="{{ asset('img/avatar/'.Auth::user()->profile_img) }}" alt="{{Auth::user()->username}}" />
@else
<img class="rounded-circle" src="{{ asset('img/avatar/img1.jpg') }}" alt="{{Auth::user()->username}}" />
@endif
           </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
         		  <a class="dropdown-item" href="">Profile &amp; personal settings</a>					
					
                  <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
			  <!--end of sidebar navigation-->
			  
			  
  @yield('content')

		@include('layouts.admin_copyright_footer')
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


        <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    	
	<script src="{{ asset('css/admin/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('css/admin/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendors/echarts/echarts.min.js') }}"></script>
	<script src="{{ asset('css/admin/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('css/admin/polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
    <script src="{{ asset('css/admin/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/theme.js') }}"></script>
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

<!-- Script -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


</body>
</html>