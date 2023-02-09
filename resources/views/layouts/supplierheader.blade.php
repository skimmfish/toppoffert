@php

$unreadMessageCounter = sizeof(\App\Models\NotificationModel::where(['read_status'=>0,'receiver_id'=>'admin'])->get());
$supplierObj = new \App\Models\Suppliers;	

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
  font-family:'Spartan','GD Sherpa Regular' !important;
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

                  <a class="nav-link active" href="{{route('suppliers.dashboard')}}" data-bs-toggle="" aria-expanded="false">

<div class="d-flex align-items-center sidenav" id="sidenav">
    
  <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><g clip-path="url(#clip0_1514_6104)" stroke-width="1.429" stroke-linecap="round" stroke-linejoin="round"><path d="M2.143 12.143v6.428a.714.714 0 00.714.715h14.286a.714.714 0 00.714-.715v-6.428M11.429 12.143v7.143M2.143 14.286h9.286M.714 5.714l2.143-5h14.286l2.143 5H.714zM6.786 5.714v1.429A2.857 2.857 0 013.929 10h-.4A2.857 2.857 0 01.67 7.143V5.714"></path><path d="M13.214 5.714v1.429A2.857 2.857 0 0110.357 10h-.714a2.857 2.857 0 01-2.857-2.857V5.714M19.286 5.714v1.429A2.857 2.857 0 0116.428 10h-.357a2.857 2.857 0 01-2.857-2.857V5.714"></path></g><defs><clipPath id="clip0_1514_6104"><path fill="#fff" d="M0 0h20v20H0z"></path></clipPath></defs></svg>
  <span class="nav-link-text ps-1">Marknad</span> <div class="request_box">{{$request_count}}</div>
  </div>
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
                    
                   <!-- <li class="nav-item"><a class="nav-link" href="{{route('recent_messages')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center sidenav">
                        <svg viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><g clip-path="url(#clip0_1060_2513)"><path d="M18.588 15.88h-8.75l-5 3.75v-3.75h-2.5a1.25 1.25 0 01-1.25-1.25V2.13A1.25 1.25 0 012.338.88h16.25a1.25 1.25 0 011.25 1.25v12.5a1.25 1.25 0 01-1.25 1.25z" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_1060_2513"><path transform="translate(.463 .254)" d="M0 0h20v20H0z"></path></clipPath></defs></svg>  
                        <span class="nav-link-text ps-1">Meddelanden</span></div>
                      </a>
                      </li>-->
                    
                    
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

                    
                    <li class="nav-item"><a class="nav-link" href="{{route('settings.coverage')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bevakning</span></div>
                      </a><!-- more inner pages-->
                    </li>


                    <!--
                    <li class="nav-item"><a class="nav-link" href="{{route('settings.profile')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Företagsprofil</span></div>
                      </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('settings.ratings')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Omdömen</span></div>
                      </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('settings.stamps')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Certifikat och kvalitetsstämplar</span></div>
                      </a>
                    </li>

                     <li class="nav-item"><a class="nav-link" href="{{route('settings.labels')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Etiketter</span></div>
                      </a>
                    </li>

                   <li class="nav-item"><a class="nav-link" href="{{route('cannedresponses')}}" data-bs-toggle="" aria-expanded="false">
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
                </li>

                <li class="nav-item"><a class="nav-link" href="{{route('supplier_customer_care')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center sidenav">
                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><path d="M10 18.203L2.01 9.87a4.727 4.727 0 01-.886-5.46 4.728 4.728 0 017.571-1.228L10 4.487l1.305-1.305a4.727 4.727 0 016.686 6.685L10 18.203z" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>  
                        <span class="nav-link-text ps-1">Kundservice</span></div>
                      </a><!-- more inner pages-->
                    </li>

				@if(Auth::user()->is_admin)
                <li class="nav-item">
                  	
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">                    
                    <a class="nav-link text-black" role="button" data-bs-toggle="collapse" aria-expanded="true">
                    <div class="d-flex align-items-left"><span class="nav-link-text ps-1" style="font-weight:600;font-size:14px;">Administration</span>
                  </div>
                  </a>
                
                    
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages-->
       
                  <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center">
                    <svg viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-22c13665=""><g clip-path="url(#clip0_1060_2513)"><path d="M18.588 15.88h-8.75l-5 3.75v-3.75h-2.5a1.25 1.25 0 01-1.25-1.25V2.13A1.25 1.25 0 012.338.88h16.25a1.25 1.25 0 011.25 1.25v12.5a1.25 1.25 0 01-1.25 1.25z" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_1060_2513"><path transform="translate(.463 .254)" d="M0 0h20v20H0z"></path></clipPath></defs></svg>
                    <span class="nav-link-text ps-1 text-black">Sys. Meddelanden</span></div>
                  </a>

                  <ul class="nav collapse" id="email">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('sadmin.log',['type'=>'notifications'])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Inbox</span>
                      <p class="unread_notebox" style="font-family:GD Sherpa;font-size:10px;">{{ $unreadMessageCounter }}</p>
                      </div>
                      </a>
                      <!--more inner pages-->
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('sadmin.log',['type'=>'log'])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Logs</span>
                     
                      </div>
                      </a><!-- more inner pages-->
                    </li>
                    
                  </ul><!-- parent pages-->
                  
                  <a class="nav-link dropdown-indicator" href="#invoices" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="invoices">
                    <div class="d-flex align-items-center">
                    <svg width="800px" height="800px" viewBox="0 0 1024 1024" class="svg-icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M621.79 438.98h56.16L547.92 569.02 402.37 423.46 194.1 631.73l51.71 51.72 156.56-156.56 145.55 145.56 183.37-183.38v59.7h73.15V365.84H621.79z" fill="#0F1F3C" /><path d="M829.15 73.14h-6.48c-30.41 0-58.57 17.11-75.34 45.75-6.12 10.43-22.29 11.7-29.96 2.43-25.52-31.07-59.41-48.18-95.64-48.18-35.98 0-69.86 17.11-95.41 48.18-7.02 8.52-21.29 8.5-28.27-0.02-25.55-31.05-59.43-48.16-95.41-48.16s-69.86 17.11-95.41 48.18c-7.66 9.34-23.82 8.07-29.95-2.43-16.8-28.64-44.96-45.75-75.34-45.75h-7.25c-46.89 0-85.05 38.16-85.05 85.05V865.8c0 46.89 38.16 85.05 85.05 85.05h7.25c30.38 0 58.54-17.11 75.36-45.79 6.07-10.45 22.23-11.77 29.93-2.38 25.55 31.05 59.43 48.16 95.41 48.16s69.86-17.11 95.41-48.18c6.98-8.48 21.25-8.54 28.27 0.02 25.55 31.05 59.43 48.16 95.66 48.16 35.98 0 69.88-17.11 95.38-48.14 7.73-9.38 23.89-8.02 29.96 2.36 16.79 28.68 44.95 45.79 75.36 45.79h6.48c46.89 0 85.05-38.16 85.05-85.05V158.2c-0.01-46.9-38.17-85.06-85.06-85.06z m11.91 792.66c0 6.57-5.34 11.91-11.91 11.91h-6.48c-6.14 0-10.91-7.34-12.23-9.61-16.36-27.91-46.61-45.25-78.93-45.25-27.43 0-53.16 12.16-70.64 33.39-6.59 8.02-20.41 21.46-39.14 21.46-18.48 0-32.32-13.46-38.91-21.46-34.88-42.48-106.43-42.43-141.27-0.02-6.59 8.02-20.43 21.48-38.91 21.48s-32.32-13.46-38.91-21.46c-17.43-21.23-43.18-33.39-70.62-33.39-32.36 0-62.61 17.36-78.93 45.25-1.32 2.25-6.11 9.61-12.23 9.61h-7.25c-6.57 0-11.91-5.34-11.91-11.91V158.2c0-6.57 5.34-11.91 11.91-11.91h7.25c6.12 0 10.91 7.36 12.21 9.57 16.34 27.93 46.59 45.29 78.95 45.29 27.45 0 53.2-12.16 70.62-33.38 6.59-8.02 20.43-21.48 38.91-21.48s32.32 13.46 38.91 21.46c34.84 42.45 106.39 42.46 141.27 0.02 6.59-8.02 20.43-21.48 39.16-21.48 18.48 0 32.3 13.45 38.91 21.5 17.46 21.2 43.2 33.36 70.62 33.36 32.32 0 62.57-17.34 78.95-45.29 1.3-2.23 6.07-9.57 12.21-9.57h6.48c6.57 0 11.91 5.34 11.91 11.91v707.6z" fill="#0F1F3C" /></svg>  
                    <span class="nav-link-text ps-1 text-black">Fakturor</span></div>
                  </a>
                  <ul class="nav collapse" id="invoices">
                    <li class="nav-item"><a class="nav-link" href="{{ route('sadmin_all_invoices') }}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Alla fakturor</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('sadmin.new_invoice')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Skapa ny Faktura</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                  </ul><!-- parent pages-->
                  

                  <a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center">
                      <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color" data-v-69441b5d=""><path d="M5.625 5a4.375 4.375 0 108.75 0 4.375 4.375 0 00-8.75 0zM1.875 19.375a8.125 8.125 0 1116.25 0" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>  
                      <span class="nav-link-text ps-1 text-black">Användare</span></div>
                  </a>
                  <ul class="nav collapse" id="events">
                    <li class="nav-item"><a class="nav-link" href="{{route('sa_all_users',['type'=>'all'])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Alla Användare</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('sa_all_users',['type'=>'supplier'])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Leverantörer</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{route('supplier_customer_care')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">KunderService</span></div>
                      </a><!-- more inner pages-->
                    </li>


                    <li class="nav-item"><a class="nav-link" href="{{route('sa_all_users',['type'=>'deleted_users'])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1 text-black">Raderade Användare</span></div>
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
                    <div class="d-flex align-items-center">
                    <svg width="800px" height="800px" class="svg-icon" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>Settings</title>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Settings">
            <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"></rect>
            <circle id="Oval" stroke="#0C0310" stroke-width="2" stroke-linecap="round" cx="12" cy="12" r="3"></circle>
<path d="M10.069,3.36281 C10.7151,1.54573 13.2849,1.54573 13.931,3.3628 C14.338,4.5071 15.6451,5.04852 16.742,4.52713 C18.4837,3.69918 20.3008,5.51625 19.4729,7.25803 C18.9515,8.35491 19.4929,9.66203 20.6372,10.069 C22.4543,10.7151 22.4543,13.2849 20.6372,13.931 C19.4929,14.338 18.9515,15.6451 19.4729,16.742 C20.3008,18.4837 18.4837,20.3008 16.742,19.4729 C15.6451,18.9515 14.338,19.4929 13.931,20.6372 C13.2849,22.4543 10.7151,22.4543 10.069,20.6372 C9.66203,19.4929 8.35491,18.9515 7.25803,19.4729 C5.51625,20.3008 3.69918,18.4837 4.52713,16.742 C5.04852,15.6451 4.5071,14.338 3.3628,13.931 C1.54573,13.2849 1.54573,10.7151 3.36281,10.069 C4.5071,9.66203 5.04852,8.35491 4.52713,7.25803 C3.69918,5.51625 5.51625,3.69918 7.25803,4.52713 C8.35491,5.04852 9.66203,4.5071 10.069,3.36281 Z" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round">
</path></g></g></svg>  
                    <span class="nav-link-text ps-1 text-black">Site Settings</span></div>
                  </a><!-- parent pages-->
                  
                </li>
              </ul>

              @endif
			  

              <div class="settings" style="padding:6px;margin:0;background:#fff;border-radius:10px;">
               <div class="grid-2-x">
                  <img src="{{asset('img/avatar/'.\Auth::user()->profile_img)}}" class="img-responsive img-circle-md move-left-20" />
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

 @include('layouts.fixed_footer') 

</main>

<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


        <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    	
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