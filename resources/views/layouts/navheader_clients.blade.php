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
    <title>@if(isset($title)) {{ $title }} @else Enquiries - Quotation Buyers @endif - {{config('app.name')}}</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.ico') }} ">
    <link rel="icon" type="image/ico" sizes="32x32" href="{{ asset('favicon.ico') }}" />
    <link href="//db.onlinewebfonts.com/c/0aee6008b82cde991ec28387169bb13e?family=GD+Sherpa" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('css/admin/js/config.js') }}"></script>
    <script src="{{ asset('css/admin/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Opens+Sans:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="{{ asset('css/admin/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/theme.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{ asset('css/admin/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
	<link href="{{ asset('css/admin/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
	<link href="{{asset('css/quote_clients.css') }}" rel="stylesheet" />
	
<!--for local/dev testing-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.lazy.min.js')}}"></script>
	
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
  font-family:'GD Sherpa Regular';font-size:14px;
}
  </style>
	
  </head>
<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="row-fluid" style="margin:0 !important;width:100%;min-width:100vw;overflow:hidden;padding:0;" data-layout="container-fluid">
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
		  
          <!--<div class="d-flex align-items-center" style="justify-content:center !important">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div>
            <a class="navbar-brand" href="" style="display:flex;align-item:center;justify-content:center;">
              <div class="d-flex align-items-center py-3">
                <img class="me-2" src="{{ asset('img/logos/site_logo.png') }}" alt="" width="90" />
              <span class="font-sans-serif"></span></div>
            </a>
          </div>-->
        </nav>
          
			  <!--end of sidebar navigation-->
			  
			  
  @yield('content')

  </div>
          

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
	<script src="{{ asset('css/admin/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('css/admin/polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
    <script src="{{ asset('css/admin/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/theme.js') }}"></script>
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

<!-- Script -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!--generic function to close all bootstrap modals-->
<script type="text/javascript">
function closeModal(modalToClose){
$('#closeModal').click( function (){
$(modalToClose).modal('hide');     
}); 
}
</script>	

</body>
</html>