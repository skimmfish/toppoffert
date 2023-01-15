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
    <link href="{{asset('assets/css/theme-rtl.min.css')}}" rel="stylesheet" id="style-rtl">
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('assets/css/user-rtl.min.css')}}" rel="stylesheet" id="user-style-rtl">
    <link href="{{asset('assets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <link href="{{asset('css/quote_clients.css')}}" rel="stylesheet">

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
        height:50px;background:#f0f2ff;padding:11px 14px 11px 14px;border-radius:8px;
}
.cc_phone svg{
        width:30px;
}
.cc_phone:active, .cc_phone:hover{
        background:#fff;
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

<div class="row-fluid">
<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          
            <!--<div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div>-->

            <a class="navbar-brand" href="{{route('index')}}" style="position:relative;top:-40px;left:-15px;">
              <div class="d-flex align-items-center py-3 img_lg_xl">
                <img src="{{asset('img/logos/site_logo.svg')}}" class="svg_logo" style="position:relative;top:20%;" width="150" lazyloading/>
              </div>
            </a>
          
        </nav>

           <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;"></nav>

        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">

                  <a class="navbar-brand" href="{{route('index')}}">
              <div class="d-flex align-items-center py-3" style="display:flex;justify-content:center !important">
                <img src="{{asset('img/logos/site_logo.svg')}}" width="90" lazyloading/>
              </div>
            </a>
          


        <!--right wing navigation-->
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">

              <li class="nav-item dropdown">
        
              <a href="" title="Enquiries" class="btn_corn_1 cc_phone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-medium svg-icon--spacing-right-tiny fill-current-color"><path d="M11.246 24a.743.743 0 01-.53-.22.745.745 0 01-.205-.677l.75-3.75a.748.748 0 01.205-.384l7.631-7.63a2.844 2.844 0 012.026-.839 2.873 2.873 0 012.03 4.899l-7.627 7.629a.74.74 0 01-.384.205l-3.749.75a.615.615 0 01-.147.017zm.956-1.706l2.424-.485 7.467-7.469a1.368 1.368 0 00-.027-1.962 1.33 1.33 0 00-.941-.379c-.366 0-.71.142-.968.401l-7.471 7.47-.484 2.424zM2.242 21a2.252 2.252 0 01-2.25-2.25V2.25A2.252 2.252 0 012.242 0h15a2.252 2.252 0 012.25 2.25V9a.75.75 0 01-1.5 0V2.25a.75.75 0 00-.75-.75h-15a.75.75 0 00-.75.75v16.5c0 .414.336.75.75.75h6a.75.75 0 010 1.5h-6z"></path><path d="M8.242 6a.75.75 0 010-1.5h6a.75.75 0 010 1.5h-6zM5.242 10.5a.75.75 0 010-1.5h9a.75.75 0 010 1.5h-9zM5.242 15a.75.75 0 010-1.5h7.5a.75.75 0 010 1.5h-7.5z"></path></svg><span class="span_text">Förfrågningar</span></a>

              <a href="{{route('feeds')}}" title="Customer Care" class="btn_corn_1 cc_phone" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"> 
             
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-medium svg-icon--spacing-right-tiny fill-current-color"><path d="M15.08 20.746a1.502 1.502 0 01-1.421-1.016L8.921 4.993l-2.596 6.128A2.241 2.241 0 014.25 12.5H.75a.75.75 0 010-1.5h3.5a.748.748 0 00.693-.462l2.602-6.12a1.498 1.498 0 011.967-.792c.392.167.695.493.833.896l4.738 14.738 2.579-6.851A2.256 2.256 0 0119.748 11h3.5a.75.75 0 010 1.5h-3.5a.748.748 0 00-.693.462l-2.586 6.843a1.524 1.524 0 01-.907.861c-.156.053-.318.08-.482.08z"></path></svg><span class="span_text">Handelser</span></a>       

              <a href="{{route('customer_care')}}" title="Customer Care" class="btn_corn_1 cc_phone" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-medium svg-icon--spacing-right-tiny fill-current-color"><path d="M11.969 24.011c-1.439 0-2.61-1.177-2.61-2.625s1.171-2.625 2.61-2.625a2.62 2.62 0 012.576 2.199 8.226 8.226 0 003.941-2.498 2.998 2.998 0 01-1.002-2.724l.586-3.879a2.988 2.988 0 011.188-1.975c.271-.198.569-.347.889-.444l-.004-.103a8.165 8.165 0 00-8.521-7.828 8.151 8.151 0 00-7.828 7.915c.342.095.66.249.948.46a2.995 2.995 0 011.189 1.981l.586 3.873a2.991 2.991 0 01-2.952 3.449 2.948 2.948 0 01-1.757-.576 2.992 2.992 0 01-1.186-1.976l-.586-3.874a2.99 2.99 0 01.549-2.234 2.937 2.937 0 011.71-1.134A9.628 9.628 0 014.84 3.134 9.62 9.62 0 0111.967.002a9.66 9.66 0 019.674 9.271l.004.104a2.952 2.952 0 011.771 1.151c.475.647.669 1.44.548 2.234l-.585 3.878a2.991 2.991 0 01-1.185 1.971 2.954 2.954 0 01-2.319.523 9.813 9.813 0 01-5.574 3.429 2.598 2.598 0 01-2.332 1.448zm0-3.75c-.612 0-1.11.505-1.11 1.125s.498 1.125 1.11 1.125c.612 0 1.11-.505 1.11-1.125s-.498-1.125-1.11-1.125zm9.042-9.451a1.478 1.478 0 00-1.457 1.267l-.587 3.885a1.5 1.5 0 00.276 1.123 1.466 1.466 0 001.193.603c.314 0 .615-.099.871-.286a1.49 1.49 0 00.589-.981l.586-3.884a1.502 1.502 0 00-.275-1.122 1.468 1.468 0 00-1.196-.605zm-18.024.001c-.471 0-.917.226-1.194.604a1.5 1.5 0 00-.276 1.122l.587 3.88c.057.395.271.753.589.986a1.482 1.482 0 002.064-.318 1.5 1.5 0 00.275-1.122l-.587-3.879a1.494 1.494 0 00-.591-.989 1.452 1.452 0 00-.867-.284z"></path></svg> 
              <span class="span_text">Kundservice</span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                        <div class="list-group-item"></div>
                       </div>
              </li>
              
              <li class="nav-item dropdown">
        
              <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                @if(\Auth::user()->profile_img==NULL)
                    <img class="rounded-circle" src="{{asset('img/avatar/'.\Auth::user()->profile_img)}}" lazyloading alt="{{\Auth::user()->username}}" />
                    <span class="span_text">{{Auth::user()->f_name}}</span>
                    @else
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-medium svg-icon--spacing-right-tiny fill-current-color"><path d="M12 15.75c-3.308 0-6-2.692-6-6s2.692-6 6-6 6 2.692 6 6-2.692 6-6 6zm0-10.5c-2.481 0-4.5 2.019-4.5 4.5s2.019 4.5 4.5 4.5 4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5z"></path><path d="M12 24c-2.677 0-5.211-.868-7.332-2.51a.507.507 0 01-.126-.099C1.655 19.094 0 15.674 0 12 0 5.383 5.383 0 12 0s12 5.383 12 12c0 3.674-1.655 7.094-4.543 9.391l-.015.016c-.043.043-.087.069-.112.084A11.868 11.868 0 0112 24zm-5.716-3.199A10.408 10.408 0 0012 22.5a10.41 10.41 0 005.717-1.699 8.966 8.966 0 00-5.716-2.045 8.965 8.965 0 00-5.717 2.045zM12 1.5C6.21 1.5 1.5 6.21 1.5 12c0 3.023 1.294 5.875 3.562 7.874A10.449 10.449 0 0112 17.257c2.573 0 5.023.927 6.938 2.616 2.268-2 3.562-4.851 3.562-7.874C22.5 6.21 17.79 1.5 12 1.5z"></path></svg>
                <span class="span_text">{{Auth::user()->f_name}}</span>
                @endif
                </div>
                </a>
                  <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item" href="pages/user/settings.html">Cookie Settings</a>
                    <a class="dropdown-item" href="{{route('auth.logout')}}">Logga ut</a>
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
</div>


        <div class="row">
            <div class="col-md-6 col-xxl-6">
            <h5 class="mb-0 mt-2 d-flex align-items-center h6" style="font-weight:bold !important">Välkommen tillbaka, {{\Auth::user()->f_name}}</h5><br/>

            <div class="card h-md-100 ecommerce-card-min-width">

              <div class="card-header pb-0">
              <div>
                <h6 class="mb-0 mt-2 d-flex align-items-center h6-md_title">{{$top_request->request_title}} <br/>
                </h6>
                <small>Publicerades on {{date('d M Y',strtotime($top_request->created_at))}} </small>

        </div>
              
              <div class="service_request_publish_status">@if($top_request->publish_status) <small class="btn btn-success">Published</small> @else <small class="btn alert-danger">Unpublished</small> @endif</div>

                </div>

                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row">
                    <div class="col">
                     
                </div>
                    <div class="col-auto ps-0">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-6">
            <a href="{{route('index')}}" class="btn button-rounded button-primary-outline create-enquiry__desktop" target="_blank"> Skapa ny förfrågan <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small svg-icon--spacing-right-tiny fill-current-color media-right-small" style="fill: none;"><path d="M6.167 9.682L15.5.5M15.5 5.747V.5h-5.333M8.083 3.833h-7a.583.583 0 00-.583.584v10.5a.583.583 0 00.583.583h10.5a.583.583 0 00.584-.583v-7" stroke="#6172BC" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>

            </div>
        </div>
            



        <div class="row g-3 mb-3">
@if(sizeof($requests)>0)
@foreach($requests as $x)
        <div class="col-md-6 col-xxl-6 request_items">
             <div class="card h-md-100 ecommerce-card-min-width">
              <div class="card-header pb-0">
              <div>
                <h6 class="mb-0 mt-2 d-flex align-items-center h6-md_title">{{$x->request_title}} <br/>
                </h6>
                <small>Publicerades on {{ date('d M Y',strtotime($x->created_at)) }} </small></div>
              
              <div class="service_request_publish_status">@if($x->publish_status) <small class="btn btn-success">Published</small> @else <small class="btn alert-danger">Unpublished</small> @endif</div>
                </div>

                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row">
                    <div class="col">
                     
                              </div>
                    <div class="col-auto ps-0">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endforeach
@endif
        </div>

      
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('css/admin/vendors/popper/popper.min.js')}}"></script>
    <script src="{{asset('css/admin/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('css/admin/vendors/anchorjs/anchor.min.js')}}"></script>
    <script src="{{asset('css/admin/vendors/is/is.min.js')}}"></script>
    <script src="{{asset('css/admin/vendors/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('css/admin/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('css/admin/vendors/lodash/lodash.min.js')}}"></script>
    <script src="{{asset('polyfill.io/v3/polyfill.min58be.js?features=window.scroll')}}"></script>
    <script src="{{asset('css/admin/vendors/list.js/list.min.js')}}"></script>
    <script src="{{asset('css/admin/assets/js/theme.js')}}"></script>
  </body>
</html>