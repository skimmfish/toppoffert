@php

$unreadMessageCounter = sizeof(\App\Models\NotificationModel::where(['read_status'=>0,'receiver_id'=>'admin'])->get());
$supplierObj = new \App\Models\Suppliers;	


$requests = \App\Models\ServiceRequests::where(['customer_id'=>\Auth::user()->id,'publish_status'=>true])->get();
   $requests = \App\Models\ServiceRequests::where(['customer_id'=>\Auth::user()->id,'archival_status'=>false])->orderBy('project_execution_status','ASC')->get();
   $archivedrequest = \App\Models\ServiceRequests::where(['customer_id'=>\Auth::user()->id,'archival_status'=>true])->get();
           


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

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logos/toppofferta_logo.svg') }} ">
    <link rel="icon" type="image/svg" sizes="32x32" href="{{ asset('img/logos/toppofferta_logo.svg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logos/toppofferta_logo.svg') }}">

    <meta name="msapplication-TileImage" content="">
    <meta name="author" content="Toppoffert Sverige AB" />

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
    <link href="{{asset('css/clients.css')}}" rel="stylesheet">
    

       <!-- Script -->
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="{{asset('js/navtabs.js')}}" type="text/javascript"></script>

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

<script type="text/javascript">  
            function selects(checkboxName,divSel,divDesel){  
                var ele=document.getElementsByName(checkboxName);  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  

                //disable checkall box and enable deselect all
                var div = document.getElementById(divDesel);
                var selAll = document.getElementById(divSel);

                selAll.style.display = 'none';
                div.style.display = 'block';
            }  

            function deSelect(checkboxName,divSel,divDesel){  
                var ele=document.getElementsByName(checkboxName);  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  

                                //disable checkall box and enable deselect all
                var div = document.getElementById(divDesel);
                var selAll = document.getElementById(divSel);

                selAll.style.display = 'block';
                div.style.display = 'none';
            }             

        </script>  

        <!--for closing msg box-->
        <script>
          function closeDiv(dv){
            var div = document.getElementById(dv);
            div.style.display = 'none';

            var chatbubble = document.getElementById('displayOnDivClose');
            chatbubble.style.display = 'block';
          }

//to open chat window after closure
          function openChatWindow(dv){
            var div = document.getElementById(dv);
            div.style.display = 'block';

            var chatbubble = document.getElementById('displayOnDivClose');
            chatbubble.style.display = 'none';
            
          }
            </script>


<script type="text/javascript">  
            function selectBuyer(checkboxName){  
                var ele=document.getElementsByName(checkboxName);  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  

                //disable checkall box and enable deselect all
                var div = document.getElementById('deselectAllBuyersType');
                var selAll = document.getElementById('selectAllBuyersType');

                selAll.style.display = 'none';
                div.style.display = 'block';
            }  

            function deselectBuyer(checkboxName){  
                var ele=document.getElementsByName(checkboxName);  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  

                                //disable checkall box and enable deselect all
                var div = document.getElementById('deselectAllBuyersType');
                var selAll = document.getElementById('selectAllBuyersType');

                selAll.style.display = 'block';
                div.style.display = 'none';
            }             

        </script>  
        


<style>
#deselectAllBuyers, #deselectAllCat, #deselectPrice{display:none;}
  </style>
<!-- deleteUser -->

<script>
        // display a modal (small modal)
        $(document).on('click', '#deleteUser', function(event) {
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


<!--confirmation popup to request for buyer's contact and send bid message-->
<script>
        // display a modal (small modal)
        $(document).on('click', '#sendResponse', function(event) {
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


<!--view user-->
<script>
        // display a modal (small modal)
        $(document).on('click', '#viewUsr', function(event) {
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

<!-- replyNotice -->

<!--view user-->
<script>
        // display a modal (small modal)
        $(document).on('click', '#viewRequest', function(event) {
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


<script>
        // display a modal (small modal)
        $(document).on('click', '#replyNotice', function(event) {
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

<!--for deleting requests-->
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


<script>
        // display a modal (small modal) for assigning credit
        $(document).on('click', '#assignCredit', function(event) {
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


<script>
        // display a modal (small modal) for previewing images
        $(document).on('click', '#viewImage', function(event) {
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

<script>
        // display a modal (small modal) for sending invoice to user
        $(document).on('click', '#sendInvoice', function(event) {
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

<style>
  
.navbar-vertical.navbar-expand-lg .nav-link{
    line-height:35px;
}
body{
  font-family:'Spartan','GD Sherpa Regular' !important;overflow-y:auto;
}
h1,h2,h3,h4,h5,h6{
  font-family:'Spartan','GD Sherpa Regular';
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

        <nav class="navbar navbar-light navbar-vertical navbar-expand-lg">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
		  
		  <!------------------------end-->
		  
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div>
          
            <a class="navbar-brand" href="@if(\Auth::user()->user_cat=='SADMIN'){{route('sadmin_index')}} @elseif(\Auth::user()->user_cat=='SUPPLIER')
            {{route('suppliers.dashboard')}} @endif">
              <div class="d-flex align-items-center py-3">
              <img src="{{asset('img/logos/png.png')}}" class="img-responsive-logo" lazyloading/>
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

                  <a class="nav-link active" href="{{route('marketplace.clients.active_requests')}}" data-bs-toggle="" aria-expanded="false">

<div class="d-flex align-items-center sidenav" id="sidenav">
    
  <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><g clip-path="url(#clip0_1514_6104)" stroke-width="1.429" stroke-linecap="round" stroke-linejoin="round"><path d="M2.143 12.143v6.428a.714.714 0 00.714.715h14.286a.714.714 0 00.714-.715v-6.428M11.429 12.143v7.143M2.143 14.286h9.286M.714 5.714l2.143-5h14.286l2.143 5H.714zM6.786 5.714v1.429A2.857 2.857 0 013.929 10h-.4A2.857 2.857 0 01.67 7.143V5.714"></path><path d="M13.214 5.714v1.429A2.857 2.857 0 0110.357 10h-.714a2.857 2.857 0 01-2.857-2.857V5.714M19.286 5.714v1.429A2.857 2.857 0 0116.428 10h-.357a2.857 2.857 0 01-2.857-2.857V5.714"></path></g><defs><clipPath id="clip0_1514_6104"><path fill="#fff" d="M0 0h20v20H0z"></path></clipPath></defs></svg>
  <span class="nav-link-text ps-1">Aktiva förfrågningar</span> <div class="request_box">{{ sizeof($requests)}}</div>
  </div>
</a><!-- more inner pages-->
</li>

<li class="nav-item"><a class="nav-link" href="{{route('marketplace.clients.archived_requests')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center" id="sidenav">

                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 20H6C4.89543 20 4 19.1046 4 18V8H20V18C20 19.1046 19.1046 20 18 20H17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 4H18L20 8H4L6 4Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 14L12 20M12 20L14.5 17.5M12 20L9.5 17.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="nav-link-text ps-1">Arkiverade</span> <div class="request_box">{{ sizeof($archivedrequest)}}</div></div>
                      </a><!-- more inner pages-->
                    </li>


                    <li class="nav-item"><a class="nav-link" href="{{route('marketplace.clients.unapproved_requests')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center sidenav">
                        <svg fill="#0d2453" height="20px" width="20px" version="1.1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                    	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 24 24"
	                    xml:space="preserve"><g id="inactive">
                        <path d="M13.6,23.9c-7.8,1-14.5-5.6-13.5-13.5c0.7-5.3,5-9.7,10.3-10.3c7.8-1,14.5,5.6,13.5,13.5C23.2,18.9,18.9,23.2,13.6,23.9z
		                M13.7,2.1C6.9,1,1,6.9,2.1,13.7c0.7,4.1,4,7.5,8.2,8.2C17.1,23,23,17.1,21.9,10.3C21.2,6.2,17.8,2.8,13.7,2.1z"/>
                    	<polyline points="5.6,4.2 19.8,18.3 18.4,19.8 4.2,5.6 	"/></g></svg>
                        <span class="nav-link-text ps-1">Ej godkända</span></div>
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
                      </a>
                      </li>
                    
                    
                    <li class="nav-item">
                  <!-- label-->
                  
               <!-- parent pages-->
               
                    <li class="nav-item">
                      <a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center sidenav">
                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-69441b5d=""><path d="M5.625 5a4.375 4.375 0 108.75 0 4.375 4.375 0 00-8.75 0zM1.875 19.375a8.125 8.125 0 1116.25 0" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span class="nav-link-text ps-1">Mina Sidor</span></div>
                      </a>

                      <ul class="nav collapse" id="orders">
                      
                    <li class="nav-item"><a class="nav-link" href="{{route('contact-information')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kontaktinformation</span></div>
                      </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('settings.password')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Byt lösenord</span></div>
                      </a><!-- more inner pages-->
                    </li>
                 
                    <li class="nav-item"><a class="nav-link" href="{{route('settings.cookie')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie-inställningar</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{route('supplier_customer_care')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center sidenav">
                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><path d="M10 18.203L2.01 9.87a4.727 4.727 0 01-.886-5.46 4.728 4.728 0 017.571-1.228L10 4.487l1.305-1.305a4.727 4.727 0 016.686 6.685L10 18.203z" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>  
                        <span class="nav-link-text ps-1">Kundservice</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages-->
              </ul>

              <div class="settings" style="padding:6px;margin:0;background:#fff;border-radius:10px;">
               <div class="grid-2-x">
               @if(\Auth::user()->profile_img!=NULL) 
               <img src="{{asset('img/avatar/'.\Auth::user()->profile_img)}}" class="img-responsive img-circle-md move-left-20" />
                @else
                <svg width="34px" height="34px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.9696 19.5047C16.7257 17.5293 15.0414 16 13 16H11C8.95858 16 7.27433 17.5293 7.03036 19.5047M16.9696 19.5047C19.3986 17.893 21 15.1335 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 15.1335 4.60137 17.893 7.03036 19.5047M16.9696 19.5047C15.5456 20.4496 13.8371 21 12 21C10.1629 21 8.45441 20.4496 7.03036 19.5047M15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                  @endif
                <small>@if(\Auth::user()->user_cat=='SUPPLIER') {{$supplierObj->where('supplier_id','=',\Auth::user()->id)->first()->supplier_corp_name }} @else 
                {{\Auth::user()->f_name.' '.\Auth::user()->l_name}}  
                @endif</small>
                  </div>

              <div class="grid-2-y">
              <div class="footer-item">
              <svg viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-mini fill-current-color" style="fill: none;" data-v-270f2b45=""><g clip-path="url(#clip0_1810_41320)" stroke="#B8C3D5" stroke-width=".75" stroke-linecap="round" stroke-linejoin="round"><path d="M11.625.374L.375 11.624M11.625 3.749V.374H8.25M.375.374L4.5 4.499M11.625 8.249v3.375H8.25M7.5 7.499l4.125 4.125"></path></g><defs><clipPath id="clip0_1810_41320"><path fill="#fff" d="M0 0h12v12H0z"></path></clipPath></defs></svg>
              <a href="{{route('suppliers.dashboard')}}" target="_blank"><span class="text-black">Home</span></a>
              </div>
              <div class="footer-item">
              <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-mini fill-current-color" style="fill: none;" data-v-270f2b45=""><g clip-path="url(#clip0_738_26060)" stroke="#B8C3D5" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><path d="M19.375 10.003H6.25M9.375 13.128L6.25 10.003l3.125-3.125"></path><path d="M13.125 13.75v3.75a1.197 1.197 0 01-1.137 1.25H1.761A1.197 1.197 0 01.625 17.5v-15a1.197 1.197 0 011.136-1.25h10.227a1.197 1.197 0 011.137 1.25v3.75"></path></g><defs><clipPath id="clip0_738_26060"><path fill="#fff" d="M0 0h20v20H0z"></path></clipPath></defs></svg>  
              <a href="{{route('logout')}}"><span class="text-black">Logga ut</span></a></div>
              </div>

                </div>
              </div>
            

          </div>
        </nav>

        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="{{ route('index') }}">
            <div class="d-flex align-items-center">
              
            <img src="{{asset('img/logos/png.png')}}" class="img-responsive-logo" lazyloading/>
               
              <span class="font-sans-serif">{{config('app.name')}}</span>
            
            </div>

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

  <p style="margin-top:35px;"></p>


</main>

<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


        <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    	
    <script
src='//eu.fw-cdn.com/10491327/338276.js'
chat='true'>
</script>

	<script src="{{ asset('css/admin/vendors/popper/popper.min.js') }}"></script>
  
    <script src="{{ asset('css/admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
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