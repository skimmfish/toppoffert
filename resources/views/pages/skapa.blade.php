<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="sv" class="no-js ie ie7 ie-legacy"> <![endif]-->
<!--[if IE 7 ]>    <html lang="sv" class="no-js ie ie7 ie-legacy"> <![endif]-->
<!--[if IE 8 ]>    <html lang="sv" class="no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="sv" class="no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="sv" class="no-js">
 <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head itemscope itemtype="http://schema.org/WebSite">
    <meta charset="utf-8">
    <title itemprop="name">@if(isset($title)){{$title}} - {{config('app.name')}} @else Skapa f&#246;rfr&#229;gan - {{config('app.name')}} @endif</title>

    <link rel="dns-prefetch" href="https://static.doubleclick.net/" />
    <link rel="dns-prefetch" href="https://s.ytimg.com/" />
    <link rel="dns-prefetch" href="https://i.ytimg.com/" />
    <link rel="dns-prefetch" href="https://yt3.ggpht.com/" />
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net/" />
    <link rel="dns-prefetch" href="https://www.youtube.com/" />


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logos/toppofferta_logo.svg') }} ">
    <link rel="icon" type="image/svg" sizes="32x32" href="{{ asset('img/logos/toppofferta_logo.svg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logos/toppofferta_logo.svg') }}">

    <meta name="author" content="{{config('app.name')}} Sverige AB" />
    <meta property="fb:admins" content="753251562" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="format-detection" content="telephone=no">

    
    <link href="{{route('skapa')}}" rel="canonical" />
    <meta content="NOINDEX,FOLLOW" name="GOOGLEBOT" />
    <meta content="NOINDEX,FOLLOW" name="ROBOTS" />
    <meta name="viewport" content="width=device-width" />


    
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/site_v638066915660000000.css')}}" />
            

<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.lazy.min.js')}}"></script>
<meta name="theme-color" content="#2F3033">

<script>
document.documentElement.className = document.documentElement.className.replace('no-js', 'js js-loading');
</script>
    <!--[if (lt IE 9)]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- 
                <script>
                    (function (d) {
                        var config = {
                            kitId: 'goi3eol',
                            scriptTimeout: 2000,
                            async: true
                        },
                            h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
                    })(document);
                </script>
            
 -->

    

    <!--[if (IE)]><link href="/dist/css/ie.css" rel="stylesheet" type="text/css"/><![endif]-->
    <style>
.new-header.scrolled{
	background-color: #fff !important;
	transition: background-color 200ms linear;
  }
  
  .new-header__menu--item{
	font-family:'Open Sans';
  }
  
  *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
  }
  *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
  }
  *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
  }
  .wrapper{
	position: fixed;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	/*background: linear-gradient(-135deg, #c850c0, #4158d0);*/
	/* background: linear-gradient(375deg, #1cc7d0, #2ede98); */
   /* background: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%);*/
	/* clip-path: circle(25px at calc(0% + 45px) 45px); */
	background:#fff;
	clip-path: circle(25px at calc(100% - 45px) 45px);
	transition: all 0.3s ease-in-out;
  }
  
  #active:checked ~ .wrapper{
	clip-path: circle(75%);
  }
  .menu-btn{
	position: absolute;
	z-index: 2;
	right: 20px;
	/* left: 20px; */
	top: 30px;
	height: 50px;
	width: 60px;
	text-align: center;
	font-size: 30px;font-weight:400;
	color: #434345 !important;
	cursor: pointer;
	border-radius: 50%;
	line-height: 10px !important;
	/*background: linear-gradient(-135deg, #c850c0, #4158d0);*/
	/* background: linear-gradient(375deg, #1cc7d0, #2ede98); */
   /* background: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%); */
	/*background: #41509a !important;*/
	background-color: none !important;
  }

  #active:checked ~ .menu-btn{
	color: #434343 !important;
  }
  #active:checked ~ .menu-btn i:before{
	content: "\f00d";
  }
   
 
  .wrapper ul{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	list-style: none;
	text-align: center;
	background:none;
  }
  .wrapper ul li{
	margin: 12.5px 0;text-align: left !important;
  }
  .wrapper ul li a{
	color: none;
	text-decoration: none;
	font-size: 31px;
	font-weight: 800 !important;
	padding: 5px 30px;
	color: #434345;
	background:none;
	position: relative;
	line-height: 50px;
	transition: all 0.3s ease;
	text-align:left !important;
  }
  .wrapper ul li a:after{
	position: absolute;
	content: "";
	background:none;
	width: 104%;
	height: 110%;
	left: -2%;
	top: -5%; /* if the font is 'Oswald'*/
	transform: scaleY(0);
	z-index: -1;
	animation: rotate 1.5s linear infinite;
	transition: transform 0.3s ease;
  }
  .wrapper ul li a:hover:after{
	transform: scaleY(1);
  }
  .wrapper ul li a:hover{
	color: #434345;
  }
  input[type="checkbox"]{
	display: none;
  }
  


  .grid_base{
	display:grid;grid-template-columns: repeat(3);
  }
  .text-sm{
	font-size:13px !important;color:#434345 !important;font-weight:900 !important;
  }
  .icon-small{
top:37px;
  }

  .svg_logo{
   display:none; 
  }

  .grid_case{
		display:grid;grid-template-columns:28% 23% 23% 25%;
	}
	.grid_case .social{
		position:relative;top:-30px;
	}
	.texts_href{
		display:grid;grid-template-columns: 33% 33% 33%;grid-gap:3px;
	}

	.grid_case .href{
		font-size:11px !important;font-weight:800;color:#434345;
	}

  @media(max-width:1024px){
	.wrapper ul li a{
		color: none;
		text-decoration: none;
		font-size: 31px;
		font-weight: 800 !important;
		padding: 5px 30px;
		color: #434345;
		background:none;
		position: relative;
		line-height: 50px;
		transition: all 0.3s ease;
		text-align:left !important;
	  }
	
	  .grid_case{
		display:grid;grid-template-columns:34% 22% 20% 29%;
	}
	.grid_case .social{
		position:relative;top:-15px;left:28px !important;
	}
	}

 @media(max-width:425px){
	.wrapper ul li a{
		color: none;
		text-decoration: none;
		font-size: 22px !important;
		font-weight: 900 !important;
		padding: 0 35px;
		color: #434345;
		background:none;
		position: relative;
		line-height: 48px;
		transition: all 0.3s ease;
		text-align:left !important;
	  }
	  .hidden-425{
		display:none;
	  }

	  .hr{
		display:relative !important;top:-45px;left:18px !important;
	}
	.grid_case{display:grid;grid-template-columns:54% 23% 23% !important;
  grid-gap:0;}
	  .grid_case .href{
		font-size:7px !important;
	  }

	  .social{top:-24px;display:flex;flex-direction:row;}
    
	  .icon-small{
		top: 22px !important;
		left: -20px;
	 }
}
	 @media(max-width:320px){
		.icon-small{
			top: 22px !important;
			left: -40px;
		 }
		
		}
		 
		@media(max-width:375px){
			#_dropdown_logo,  .menu-btn-left{
				position: absolute;
				z-index: 3;
				right: 20px;
				 left: 9px !important;
				top: -21.2px !important;
				height: 50px;
				width: 50px;
				text-align: center;
				line-height: 50px;
				color: #fff;
				cursor: pointer;
				transition: all 0.3s ease-in-out;
			  }

			  .grid_case{display:grid;grid-template-columns: 55% 45% !important;}
			  .grid_case .href{
				font-size:8px !important;
			  }
			  .hidden_375{display:none;}
			  
			
		 }
 
		 .img_avatar{
			width:34px;height:34px;border-radius:50%;position:relative;left:-4px;
		 }

  @media(max-width:768px){
  .svg-logo{
display:block;
  }
  .svg_logo{
display:none;
float:left;
  }

  .grid_case{
		display:grid;grid-template-columns:36% 22% 20% 29%;
	}
	.grid_case .social{
		position:relative;top:-30px;
	}
	.texts_href{
		display:grid;grid-template-columns: 33% 33% 33%;grid-gap:3px;
	}

	.grid_case .href{
		font-size:9px !important;font-weight:800;color:#434345;
	}

}
    </style>


<!--this function fetches all the associated sub_Cat_names-->
<script type="text/javascript">
function fetchCategories(category){
    if(category){
    $.ajax({
    type: 'GET',
    url: "{{ route('categories') }}",
   
    data: {
    cat_name: category,
    },
    success: function (response) {
     // We get the element having id of display_info and put the response inside it
     $( '#subcategories_fetcher' ).html(response);
    }
    });
   }else
   {
    $( '#subcategories_fetcher' ).html("<small class='text-danger'>Kontrollera Ditt Val</small>");
   }
} //end of fetchServersList() function
</script>

</head>


<body class="enquiry-create">
    
    <div class="legacy-browser-warning alert-site">
        Du använder en webbläsare som inte stöds av {{config('app.name')}} och därför fungerar inte alla funktioner som de skall. <a class="link white" href="http://www.browsehappy.com/">Uppgradera din webbläsare</a> för att kunna använda {{config('app.name')}} alla funktioner.
    </div>

        <div class="fake-scrollbar"></div>
        <header class="new-header">
                <div class="new-header-container">
                    <a class="new-header__logo" href="{{route('index')}}" aria-label="Hem">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="130.000000pt" height="130.000000pt" viewBox="0 0 500.000000 500.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)" fill="#005aad" stroke="none" class="svg-logo"><path d="M943 3272 c-156 -51 -248 -200 -274 -446 -17 -163 2 -336 50 -448 23
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
126 3 156 -22 26 -59 34 -95 21z"/><path d="M1482 2748 c-7 -7 -12 -35 -12 -63 0 -57 12 -75 50 -75 38 0 50 18
50 75 0 57 -12 75 -50 75 -14 0 -31 -5 -38 -12z"/><path d="M1877 2742 c-20 -22 -23 -92 -5 -110 17 -17 65 -15 72 4 3 9 6 35 6
59 0 34 -5 47 -19 55 -27 14 -35 13 -54 -8z"/><path d="M2256 2744 c-19 -18 -22 -94 -4 -112 7 -7 21 -12 33 -12 32 0 45 20
45 66 0 43 -19 74 -45 74 -7 0 -21 -7 -29 -16z"/><path d="M3538 2759 c-36 -21 -21 -39 32 -39 52 0 60 8 34 34 -18 18 -41 20
-66 5z"/></g></svg></a>

@include('layouts.navigationbar')
</header>

<main class="content-main" role="main">         
<section class="section">
    <div class="container">
        <h1 class="page-title">Vi introducerar dig till f&#246;retag <br/>redo att hjälpa dig
        </h1>
        <p class="page-subtitle text-center">Beskriv ditt behov och ta emot upp till sex offerter från lokala tjänsteföretag</p>
        <div class="grid">
            <div class="content">
<form method="POST" action="{{route('skapa_request')}}">
@csrf
@method('POST')
<div class="box box-enquiry-create has-button-bar">
        <div class="media media-center block">
            <div class="media-left">
                
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.5 18.5" class="icon-round-bg">
  <path d="M5.2 5.3H12v1.1H5.2zm10.2 8.3c.5-.9.4-2.1-.4-2.9-.4-.4-1-.7-1.7-.7-.6 0-1.3.3-1.7.7-.5.5-.7 1.1-.7 1.7 0 .6.3 1.3.7 1.7.5.5 1.1.7 1.7.7.4 0 .8-.1 1.2-.3l2.7 2.7.9-.9-2.7-2.7zm-1.1-.1c-.5.5-1.5.5-2 0-.6-.6-.6-1.5 0-2 .3-.3.6-.4 1-.4s.7.1 1 .4c.3.3.4.6.4 1s-.1.7-.4 1z" />
  <path d="M14.1 15.5H4.5c-.2 0-.3-.1-.3-.3V3.3c0-.2.2-.3.3-.3H14c.2 0 .3.1.3.3v6.1c.4.1.8.3 1.1.5V3.3c0-.8-.6-1.4-1.4-1.4H4.5c-.8 0-1.4.6-1.4 1.4v11.9c0 .8.6 1.4 1.4 1.4H14c.6 0 .8-.1 1-.6l-.5-.5h-.4z" />
  <path d="M5.2 8.4H12v1.1H5.2z" />
</svg>

            </div>
            <div class="media-content h4">
                Vad behöver du hjälp med?
            </div>
        </div>

<div class="block">            
<div class="row" >

<input id="WhatText" name="catName" maxlength="100" list="cat_name" onChange="fetchCategories(this.value)" tabindex="1" title="Ange uppdragstyp" placeholder="Ange uppdragstyp" onClick="fetchCategories(this.value)" name="cat_name" class="form-control-lg input-lg flex-input" placeholder="Ange uppdragstyp">

<datalist id="cat_name" onChange="fetchCategories(catName.value)" onClick="fetchCategories(catName.value)">
 <option value="">Select an option</option>
   @foreach($categories as $s)
   <option value="{{$s->cat_name}}">{{ ucfirst($s->cat_name) }}</option>
   @endforeach
</datalist> 


<div class="row" >
<label for='sub_category'>Välj en underkategori för din förfrågan</label>

<div class="flex-input dropdown">

<div id="subcategories_fetcher"></div>
    </div>
        </div>
            </div>

<div class="whatwhere-modal-cover modal-cover" data-dismiss="modal"></div>
        </div>

        <hr class="divider-full-width" />
        <div class="media media-center block block-first">
        <div class="media-left">
            

<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" class="icon-round-bg">
  <path d="M79.3 47.7c-1.9 0-3.5 1.6-3.5 3.5v29.3H19.5V24.2h29.3c1.9 0 3.5-1.6 3.5-3.5s-1.6-3.5-3.5-3.5H17.2c-2.6 0-4.7 2.1-4.7 4.7v60.9c0 2.6 2.1 4.7 4.7 4.7h60.9c2.6 0 4.7-2.1 4.7-4.7V51.2c0-2-1.6-3.5-3.5-3.5zm7.4-24.3L76.6 13.3c-.5-.5-1.3-.8-2-.8s-1.4.3-2 .8l-39 39v14.1h14.1l39-39c.6-.6.8-1.3.8-2s-.3-1.4-.8-2zm-41.4 36h-4.7v-4.7l34-34 4.7 4.7-34 34z" />
</svg>

        </div>
        <div class="media-content h4">
            Beskrivning
        </div>
    </div>
    <span class="what-hint tiny p" id="whatHint"></span>

    <label for="Description">Beskrivning</label>
    <textarea class="flex-input enquiry-description" cols="20" id="Description" maxlength="4000" name="Description" placeholder="Tips: En bra och tydlig beskrivning möjliggör fler och bättre svar" rows="2" tabindex="3">
</textarea>
    <div class="two-columns no-margins">
            <div class="column">
                <label for="WhoId">Uppdraget ska utf&#246;ras &#229;t</label>
                <div class="flex-input dropdown">
<select id="WhoId" name="executed_for" tabindex="4">
<option value="1">Bostadsr&#228;ttsf&#246;rening</option>
<option value="2">Byggherre/Entrepren&#246;r</option>
<option value="3">F&#246;retag</option>
<option value="4">Ideell f&#246;rening</option>
<option value="5">Kommun/Myndighet</option>
<option value="6">Privatperson</option>
<option value="7">Villaf&#246;rening</option>

</select></div>
            </div>

            <div class="column">
                <label for="WhenId">N&#228;r ska uppdraget p&#229;b&#246;rjas</label>
                <div class="flex-input dropdown">
                    <select id="WhenId" name="when_to" tabindex="5"><option value="1">Snarast m&#246;jligt</option>
<option value="3">Inom 1 m&#229;nad</option>
<option value="4">Inom 3 m&#229;nader</option>
<option value="5">Inom 6 m&#229;nader</option>
<option value="6">Inom 12 m&#229;nader</option>
<option value="7">Tidpunkt mindre viktig</option>
</select></div>
            </div>

            
        <input id="PriceId" name="PriceId" type="hidden" value="1" />    </div>

    <input id="ShowBygghemma" name="ShowBygghemma" type="hidden" value="False" />


    <hr class="divider-full-width" />
    <div class="media media-center block">
        <div class="media-left">
          
<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 218" class="icon-round-bg">
  <path d="M181 22.16H50.45a6 6 0 0 0-6 6v34.43H37a6 6 0 0 0 0 12h7.5V103H37a6 6 0 1 0 0 12h7.5v28.48H37a6 6 0 0 0 0 12h7.5v34.46a6 6 0 0 0 6 6H181a6 6 0 0 0 6-6V28.13a6 6 0 0 0-6-5.97zm-6 161.73H56.43v-28.48h7.5a6 6 0 0 0 0-12h-7.5V115h7.5a6 6 0 0 0 0-12h-7.5V74.54h7.5a6 6 0 1 0 0-12h-7.5V34.11H175v149.78z" />
  <path d="M120 111.75a24.58 24.58 0 1 0-24.56-24.58A24.6 24.6 0 0 0 120 111.75zm0-37.21a12.63 12.63 0 1 1-12.63 12.63A12.64 12.64 0 0 1 120 74.54zM92.65 156.44a6 6 0 0 0 6-6v-10.3a12 12 0 0 1 12-12h18.87a12 12 0 0 1 12 12v10.33a6 6 0 1 0 12 0v-10.33a24 24 0 0 0-24-24h-18.87a24 24 0 0 0-24 24v10.33a6 6 0 0 0 6 5.97z" />
</svg>

        </div>
        <div class="media-content h4">
            Kontaktuppgifter
            <span class="tooltipstered tooltip tooltip-small pull-right" data-tooltip="Dina kontaktuppgifter kan endast ses av sex företag">
                

<svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330" class="icon-tiny icon-faded">
  <path d="M165 0C74.019 0 0 74.018 0 164.999S74.019 330 165 330s165-74.02 165-165.001C330 74.018 255.981 0 165 0zm0 300c-74.439 0-135-60.561-135-135.001C30 90.56 90.561 30 165 30s135 60.56 135 134.999C300 239.439 239.439 300 165 300z" />
  <path d="M165.002 230c-11.026 0-19.996 8.968-19.996 19.991 0 11.033 8.97 20.009 19.996 20.009 11.026 0 19.996-8.976 19.996-20.009 0-11.023-8.97-19.991-19.996-19.991zM165 60c-30.342 0-55.026 24.684-55.026 55.024 0 8.284 6.716 15 15 15 8.284 0 15-6.716 15-15C139.974 101.226 151.2 90 165 90s25.027 11.226 25.027 25.024c0 13.8-11.227 25.026-25.027 25.026-8.284 0-15 6.716-15 15V185c0 8.284 6.716 15 15 15s15-6.716 15-15v-17.044c23.072-6.548 40.027-27.79 40.027-52.931C220.027 84.684 195.342 60 165 60z" />
</svg>

            </span>
        </div>
    </div>
    <div class="two-columns grid-inputs">
        <div class="column">
            <div class="form-group form-group-half">
                <label for="Name">Namn</label>
                <input autocomplete="name" class="input-name full-width" id="Name" name="Name" tabindex="12" type="text" value="" />
            </div>
        </div>
        <div class="column">
            <div class="form-group">
                <label for="Name">E-post</label>
                <input autocomplete="email" class="full-width input-email" id="Email" name="Email" tabindex="13" type="email" value="" />
            </div>
        </div>
        <div class="column">
            <div class="form-group form-group-half">
                <label for="Name">Telefon</label>
                <div class="where-postcode-container form-group no-label ">
                <input autocomplete="tel" class="full-width input-phone" id="Phone" name="Phone" tabindex="14" type="tel" value="" />
            </div></div>
        </div>

            <div class="column">
                <div class="form-group form-group-whatwhere">
                    <label for="Name">Postnummer (d&#228;r uppdraget ska utf&#246;ras)</label>
    <div class="where-postcode-container form-group no-label ">
        <input autocomplete="postal-code" class="where-postcode-field input-address full-width no-validation" data-regexp="^(?:[ ]*[0-9]){5}[?:[ ]*]*$" id="PostCode" name="PostCode" placeholder="" tabIndex="16" title="Postnr." type="number" value="" />
    </div>

                </div>
            </div>

    </div>

    <div class="two-columns no-margins">
            <div class="column">
                <div class="form-group form-group-half">
                    <label for="ContactPreferencesId">N&#228;r vill du bli kontaktad</label>
                    <div class="flex-input dropdown"><select id="ContactPreferencesId" name="whentobecontacted" tabindex="18"><option value="1">N&#228;r som helst</option>
<option value="2">Omg&#229;ende</option>
<option value="3">F&#246;rmiddag</option>
<option value="4">Eftermiddag</option>
<option value="5">Kv&#228;ll</option>
</select></div>
                </div>
            </div>

        <div class="column nolabel-input">


<div class="fileuploader-wrapper">
    
    <div class="progress-bar hidden">
        <div class="progress" style="width: 0%;"></div>
    </div>

    <div class="uploaded-files hidden">
        
    </div>
      </div>        
       </div>
          </div>


    <input class="what-selection-method-field" id="WhatSelectionMethod" name="WhatSelectionMethod" type="hidden" value="preset" />
    <p>
        Vi på {{config('app.name')}} är måna om din personliga integritet och vår <a href="{{route('integritetspolicy')}}" class="link">integritetspolicy</a> förklarar hur vi samlar in och använder dina personuppgifter. Genom att klicka på knappen '{{config('app.name')}}} mig!' skickar du in din förfrågan och godkänner våra användarvillkor för att använda {{config('app.name')}} tjänst.
    </p>

    <div class="button-bar">
        <button type="submit" id="enquiry-form-submit" class="button-large button-primary click-once button-create-enquiry button-flat" tabindex="20">
            <div class="button-spinner"></div>
            <span data-submit-text="Skapar förfrågan...">{{config('app.name')}} mig!</span>
            <span class="badge">Gratis!</span>
        </button>
    </div>
</div>
<input name="__RequestVerificationToken" type="hidden" value="my7vqT9y5FIUPq_BKjYscj3Cz0FymyG2OA3US_TKU7x-N4HJTyWwLTaEwvblCeZRMVyzlHMrYnJp4qwzuLpMX7i1ESJllIATWAPyqiNdL581" /></form>            </div>
            <aside class="aside">
                <div class="box">
                    <h4>Hur fungerar {{config('app.name')}}?</h4>
                    <p>Inom ett par timmar kommer vi att introducera dig till intresserade f&#246;retag. Du kommer att kunna jämföra offerter, erbjudanden, kundomdömen och profiler. När du är redo – anlita det bästa proffset för dig!</p>
                    <ul class="list-clean small">
                        <li class="media media-center">
                            <div class="media-left">

<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-round-bg">
  <path d="M20.71 5.29a1 1 0 0 0-1.41 0L9 15.59l-4.29-4.3A1 1 0 0 0 3.3 12.7l5 5a1 1 0 0 0 1.41 0l11-11a1 1 0 0 0 0-1.41z" />
</svg>
</div>
                            <div class="media-content">
                                <strong>Skapa din förfrågan (snart klar)</strong>
                            </div>
                        </li>
                        <li class="media media-center">
                            <div class="media-left">

<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="icon-round-bg" />
</div>
                            <div class="media-content">Ta emot offerter gratis</div>
                        </li>
                        <li class="media media-center">
                            <div class="media-left">

<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="icon-round-bg" />
</div>
                            <div class="media-content">Anlita det bästa proffset för dig</div>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
            </main>
        </div>
        

        @include('pages.gen_footer')

    </body>
</html>