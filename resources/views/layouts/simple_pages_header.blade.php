<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->

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
  


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @if(isset($title)) {{ $title }} @else {{ 'Home' }}	@endif - {{config('app.name')}}	</title>
    <!-- Styles -->
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">


  <meta content="Här har vi sammanställt några av de vanligaste frågorna vi brukar få och svaren på dessa. Hittar du inte det du söker eller vill fråga mer så får du gärna kontakta oss på info@toppoffert.se så hjälper vi dig." name="description" />
    <link href="{{route('faqs')}}" rel="canonical" />
    <meta content="INDEX,FOLLOW" name="GOOGLEBOT" />
	<meta content="INDEX,FOLLOW" name="ROBOTS" />
    <meta name="keywords" content="Anslut ditt foretag, {{\App\Http\Controllers\ConfigController::get_value('header_keywords')}}" />
    
  <link rel="stylesheet" type="text/css" href="{{asset('css/header_nav.css')}}" />
  <meta name="viewport" content="width=device-width" />
  

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('css/vendor.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/font/bootstrap-icons.css') }}">
  <link href="//db.onlinewebfonts.com/c/0aee6008b82cde991ec28387169bb13e?family=GD+Sherpa" rel="stylesheet" type="text/css"/>

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('css/theme.minc619.css?v=1.0') }}">

	
<style>
@font-face {font-family: "GD Sherpa Regular";
  src: url("{{asset('font/0aee6008b82cde991ec28387169bb13e.eot') }}"); /* IE9*/
  src: url("{{asset('font/0aee6008b82cde991ec28387169bb13e.eot?#iefix') }}") format("embedded-opentype"), /* IE6-IE8 */
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.woff2') }}") format("woff2"), /* chrome、firefox */
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.woff') }}") format("woff"), /* chrome、firefox */
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.ttf') }}") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.svg#GD Sherpa Regular') }}") format("svg"); /* iOS 4.1- */
}


body,p{
font-family:'Spartan','GD Sherpa Regular','Century Gothic','Arial' !important;font-weight:400;color:#000;line-height:40px;
}
body{font-size:14px;}
.olive{line-height:40px;color:#222 !important;font-size:14px !important;font-weight:600 !important;}
.form-label, .accordion-body, p{font-size:15px;line-height:34px;font-weight:600;}
ul>li{line-height:35px;}
.img_circle{
	width:40px;height:40px;border-radius:50%;
}
.form-control{font-size:13px;}
h6{font-size:22px;font-weight:500;font-family:'GD Sherpa Regular','Spartan','Brandon Grotesque';line-height:40px}
.h5{font-size:17px;font-weight:400;line-height:40px}
.mb-0{
	font-family:'GD Sherpa Regular','Spartan','Brandon Grotesque' !important;font-size:18px;line-height:40px;font-weight:400;	
}

b{
  color:#000;font-weight:700 !important;font-weight:14.5px;
}
h1,h2,h3,h4,h5,h6{
  font-family:'Space Grotesk','Spartan';font-size:16px;font-weight:800;text-transform:capitalize;
}
h1{font-size:24px;}
.accordion-button{
  font-family:'Space Grotesk','Spartan';
}

.form .btn_sn{
  left:-59px;
}
  .btn_sn svg {
    line-height: 31px;
    top: -7px;
    position: relative;

}
</style>
</head>
<body>


  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
          data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
    <!-- Topbar -->
    <div class="container navbar-topbar">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Toggler -->
       
        <!-- End Toggler -->

        <div id="topbarNavDropdown" class="navbar-nav-wrap-collapse collapse navbar-collapse navbar-topbar-collapse">
          <div class="navbar-toggler-wrapper">
            <div class="navbar-topbar-toggler d-flex justify-content-between align-items-center">
              
            <!--<span class="navbar-toggler-text small">Topbar</span>-->

              <!-- Toggler -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-x"></i>
              </button>
              <!-- End Toggler -->
            </div>
          </div>

        </div>
      </nav>
    </div>
    <!-- End Topbar -->

    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="{{route('index')}}" aria-label="{{ config('app_name') }}">
          <img class="me-2" src="{{ asset('img/logos/jpeg.jpg') }}" alt="Site Logo" style="width:8%;position:relative;top:50px" />
     
        </a>
        <!-- End Default Logo -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </button>
        <!-- End Toggler -->
      
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-absolute-top-scroller">
            <ul class="navbar-nav">
              <!-- Landings -->
              <li class="hs-has-mega-menu nav-item">
                <a class="hs-mega-menu-invoker nav-link" aria-current="page" href="{{ route('index') }}">Hem</a>
  
              </li>

              <li class="nav-item">
              <a class="hs-mega-menu-invoker nav-link" href="{{route('intresseanmalan')}}">skicka Intresse</a>
            </li>

            <li class="nav-item"> 
            <a class="hs-mega-menu-invoker nav-link" href="{{route('faqs')}}">FAQs</a>
            </li>

              <li class="nav-item"> 
            <a class="hs-mega-menu-invoker nav-link" href="{{route('kontactos-pg')}}">Konkta Os</a>
            </li>
        
              <!-- Button -->
              <li class="nav-item">
				
			{{--	
				@if(Auth::check())
						@if(Auth::user()->is_admin==true)
					<a href="{{ route('admin.dashboard.core-admin.index') }}"><img src="{{asset('img/160x160/'.App\Models\Profile::get_profile_data(Auth::user()->id,'profile_img')) }}" alt="{{Auth::user()->username}}" class="img_circle"/></a>
				@else
					<a href="{{ route('admin.dashboard.index') }}"><img src="{{asset('img/160x160/'.App\Models\Profile::get_profile_data(Auth::user()->id,'profile_img')) }}" alt="{{Auth::user()->username}}" class="img_circle"/></a>
								@endif
								@else
					<a class="btn btn-light btn-transition" href="{{route('login') }}" style="border-radius:7px;font-weight:700;">Get Started <i class="bi-chevron-right small ms-1" style="color:#000000;"></i></a>
					
				@endif

                --}}
				
				</a>
              </li>
              <!-- End Button -->
            </ul>
          </div>
        </div>
        <!-- End Collapse -->
		
		
		
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->
  
   <!-- ========== END HEADER ========== -->
	
       @yield('content')


@include('pages.footer')

        
      </div>
    </div>
  </div>

  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>
  <!-- ========== END SECONDARY CONTENTS ========== -->


  <!-- JS Implementing Plugins -->
  <script src="{{ asset('js/vendor.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/dist/aos.js') }}"></script>

  <!-- JS Front -->
  <script src="{{ asset('js/theme.min.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF TEXT ANIMATION (TYPING)
      // =======================================================
      HSCore.components.HSTyped.init('.js-typedjs')
    })()
  </script>




<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

     




</body>
</html>

