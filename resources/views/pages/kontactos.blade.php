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
    <title itemprop="name">@if(isset($title)){{$title}} - {{config('app.name')}} @else Kontakta Oss - {{config('app.name')}} @endif</title>

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
    
    <link href="https://fonts.googleapis.com/css?family=Spartan:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <meta name="author" content="TOPPOFFERT Sverige AB"/>
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="format-detection" content="telephone=no">

    <meta content="Har du frågor kring hur {{config('app.name')}} tjänst fungerar eller hur vi kan hjälpa ditt företag att växa? Kontakta kundservice på info@toppoffert.se eller 010-33 020 11." name="description" />
    <link href="{{route('kontactos-pg')}}" rel="canonical" />
    <meta content="INDEX,FOLLOW" name="GOOGLEBOT" />
<meta content="INDEX,FOLLOW" name="ROBOTS" />

<meta name="viewport" content="width=device-width" />
<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.lazy.min.js')}}"></script>
    
               
 <!-- End Visual Website Optimizer Asynchronous Code -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="{{asset('css/site_v638066915660000000.css')}}"/>

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
body{font-family:'Spartan','GD Sherpa Regular' !important;}
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

		 /**
		=========================================================
		 FOOTER
		=========================================================
		 **/

		 .footer, .grid-row,.footer .grid-row{
			background:#dfdfdf !important;
			padding:15px 20px;
			height:auto;
			width:100%;
			overflow-x:hidden !important;
			color:#000;
			font-family:'Spartan','GD Sherpa Regular';
		}
		.footer{
			padding:15px 10px 25px 90px !important;
			display:grid;grid-template-columns: 28% 22% 22% 28%;grid-gap:20px;
			align-items: center;
			justify-content: center;
		}

		.footer span, .footer h4, .footer h4 span, .box_1 .foo_h4{
			font-family:'GD Sherpa Regular' !important;
		}
		.foo_h4 span{
			color:#000;
		}
		.foo_h4{color:#000;}
		.footer_navigation_ul li{
			color:#dfdfdf;
		}
		.footer_navigation_ul{
			padding-top:0;margin-top:-45px;line-height:35px;
		}
		.footer_navigation_ul li > a, .footer_navigation_ul b{
			color:#000;font-family: 'Spartan','GD Sherpa Regular';
			font-size:13px;font-weight:400;
		}
		.footer_navigation_ul b{
			font-weight:700;font-size:19px;
		}
		.footer_navigation_ul li > a:hover{
			text-decoration:underline;
		}
		.footer_logo{
			width:130px;margin:10px 0 15px 0;
		}
		.copyright{
			background:#efefef;
			text-align:Center;color:#000;font-family: 'GD Sherpa Regular';
			font-size:13.5px;
			padding:20px 15px;
		}
		.adjust{
			margin:10px auto 10px auto;	} .email_form .input-md{
			border-radius:10px;height:60px;padding-left:9px;width:82%;
		}
		.text-opacity-drop{
			color:#000 !important;font-family:'Spartan','GD Sherpa Regular' !important;font-weight:600;

		}
			.text-opacity-drop span,.adjust span{
				font-family:'Spartan','GD Sherpa Regular' !important;font-weight:600;
			}
		.btn_sn svg{
			line-height:25px;
		}
		.input-md::placeholder{
			font-weight:700;font-size:12px;
		}
		.email_form label{
			font-size:10.5px;margin:0 0 15px 0px;
		}
		.divbox_1{font-family:'Spartan','GD Sherpa Regular' !important;font-weight: 500;}
		.box_4 .socials{margin:15px 0 0 10px;display:flex;flex-direction: row;justify-content:first baseline;flex:auto;position:relative;
		}

		.box_4 .form{
		display:flex;flex-direction: column;flex:1;flex-basis: auto;
		}

		.form .input-md{width:100%;height:65px;}
		.socials a, .phone div span{ margin-right:10px;}
		.phone div{	display:flex;flex-direction: row;flex:1 1;margin:15px 0 0 10px;	}
	
		.form .btn_sn{
			width:55px;height:55px;border-radius:50%;background:#0055aa;padding:8px;border:1px solid #fff;
			line-height: 50px;position:relative;left:-74px;top:3px;
		}
		.form .input-item{
			display: grid;grid-template-columns: 95% 5%;grid-gap:0;
		}

.page-section .center{
	text-align:center;
}
.loginlk{
        margin-right:55px;
    }
	.navhamburger{
    position:relative;top:9px;
}

.pad-section{padding-top:20px;
background:none;}
.pad-section b, .pad-section h4{font-weight:800;}
.pad-section b{font-size:16.5px;text-align: center !important;}
.pad-section h4{
	margin-top:-14px;font-size:35px;font-weight: 900;
}
.pad-section small{
	font-weight: 800;text-align: center;
}
.page-section__inner .col_title{
	font-weight:800;font-size:23px;font-family: 'Spartan','GD Sherpa Regular' !important;
}
.page-section__inner .cols{
	background:#efefef;border-radius:15px;padding:15px 25px;margin-top:20px;
}
.page-section__inner .text{font-family: 'Spartan','GD Regular Sherpa' !important;font-size:12.5px;line-height:30px;font-weight:600;}
.box_4{
padding-top:30px;padding-left:15px;
}


@media(min-width:1440px){
	.btn_search_sok{
		left:127.5%;border:0 !important;
		}
		.padd-box_1{
			padding-right:100px;
		}
}

@media(max-width:768px){
	.footer{
		grid-template-columns: 50% 50%;line-height: 35px;
		grid-gap:10px;
		padding: 20px 10px 25px 68px !important
		}
		
}

@media(max-width:425px){
.footer{
grid-template-columns: 100%;line-height: 35px;
grid-gap:67px;
padding: 20px 0 25px 20px !important
}
.bg_two{
	background-image:url('../img/cleaners.jpg');
	background-position:center center;position:Relative;left:110px;background-size:cover;
}


.h6_one{
	font-size:24px;position:relative;top:20px;bottom:10px;font-weight:700;margin-bottom:30px
}

.h4_one{
	font-size:25px;font-weight:800;line-height:40px;
}

.h5_one{

font-weight: 800;
font-size: 13.5px;
margin: auto;
line-height: 34px;
padding: 3px 27px;
margin-bottom:-49px;
}

.cols svg{
	width:45px !important;height:45px !important;
}
.footer_navigation_ul .box_1{
	margin-top:15px;padding:5px;
}
.box_4{
	padding-top:0;
}
.form .input-item{
left:-20px;
}

.email_form .input-md{
	width:80%;
}
}

/**********
*PAGE STYLES
*/
.page-title{
  font-size:34px;text-align:left;color:#000;font-weight:400;line-height:44px;
  font-family:'Spartan','GD Sherpa Regular' !important;
}
.page-subtitle{
  font-size:20px;
}
.text-pull-left{
  text-align:left;
}
.form-label, .text-white{
  color:#fff;
}
.form-control{
  height:60px;
  border-radius:10px;
  font-family:'Spartan','GD Sherpa Regular' !important;
  padding-left:10px;font-weight:500;
}

.two-columns{
	display:flex;flex-direction:row;flex:1 1;
}
.row{
  display:block;
  grid-template-columns:80% 20%;grid-gap:15px;
  flex-direction:row;justify-content:space-between;
  flex:1;
}
.text-lg-1x{
	font-size:20px !important;font-weight:400 !important;color:#000;
}
.text-black{color:#000;}
.btn-flat-bed{
	width:65%;
}
.btn-flat-bed span{
	position:relative;top:-20px;margin-right:-15px
}
</style>


  </head>

<body class="info info contactus">

    <div class="legacy-browser-warning alert-site">
        Du använder en webbläsare som inte stöds av {{config('app.name')}}och därför fungerar inte alla funktioner som de skall. <a class="link white" href="http://www.browsehappy.com/">Uppgradera din webbläsare</a> för att kunna använda {{config('app.name')}} alla funktioner.
    </div>

        <div class="fake-scrollbar"></div>

        <div class="page-wrapper">
            <header class="new-header">
                <div class="new-header-container">
                    <a class="new-header__logo" href="{{route('index')}}" aria-label="Hem">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="130.000000pt" height="130.000000pt" viewBox="0 0 500.000000 500.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
fill="#005aad" stroke="none" class="svg-logo">
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
</a>
                    

@include('layouts.navigationbar')

            </header>
            <main class="content-main" role="main">
                
        <div class="container breadcrumbs-container">
        <nav class="breadcrumbs">
            <a href="https://toppoffert.se/" class="breadcrumb-icon">
                

<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 612" class="icon-small icon-faded">
  <path d="M500 292.59a21.37 21.37 0 0 0-21.6 21.61v221.87H370.72v-87.64c0-11.54-9.62-21.29-21-21.29h-85.1c-11.87 0-21.9 9.75-21.9 21.29v87.64H135.33V321.73c0-11.6-9.69-21-21.6-21a21 21 0 0 0-21 21v236a21 21 0 0 0 21 21h150.89a21 21 0 0 0 21-21V470h42.51v87.64c0 11.6 9.69 21 21.6 21H500a21 21 0 0 0 21-21V314.2c0-11.92-9.42-21.61-21-21.61z" />
  <path d="M593.79 307L464.27 176.94V89.32a21.49 21.49 0 0 0-21.9-21.55c-11.58 0-21 9.67-21 21.55V134L321.89 33.92a20.88 20.88 0 0 0-14.72-6.64 21.51 21.51 0 0 0-15.3 6.62L20.57 305.19a21.83 21.83 0 0 0-6.5 16.13 19.37 19.37 0 0 0 6.49 13.87 19.43 19.43 0 0 0 13.89 6.49 21.89 21.89 0 0 0 16.11-6.49l256.58-256 256 258.41c3.74 3.74 9 5.71 15.3 5.71a23.12 23.12 0 0 0 14.95-5.31l.38-.35a22 22 0 0 0 .02-30.65z" />
</svg>

            </a>
    <span itemscope itemtype="http://schema.org/BreadcrumbList">
        <span class="breadcrumbs-arrow">
            &gt;
        </span>
        <a href="https://toppoffert.se/" itemprop="url" class="title-info">
            <span itemprop="title">Om {{config('app.name')}}</span>
        </a>
    </span>
    <span itemscope itemtype="http://schema.org/BreadcrumbList">
        <span class="breadcrumbs-arrow">
            &gt;
        </span>
        <a href="{{route('kontactos-pg')}}" itemprop="url" class="title-info">
            <span itemprop="title">Kontakta oss</span>
        </a>
    </span>
        </nav>
    </div>



<section class="section">

<div class="container">

<div class="row msgbox" style="text-align:center;display:block;margin:auto;padding:14px 12px;">

@if (session('message')) 
 <div class="alert alert-info text-md" style="font-weight:700;color:#22cc22">  {{ session('message') }} </div>
              @elseif(session('error'))
              <div class="alert alert-danger text-md" style="font-weight:700;color:#ff4444">  {{ session('error') }}
                  </div>  
                      @endif      

</div>


<h1 class="page-title">Kontakta oss</h1>
        <div class="grid">
            <div class="white-box content">
                <p>
                    Du är alltid välkommen att höra av dig till oss om du har några frågor kring tjänsten eller vill komma i kontakt med oss.
                    Du hittar även många svar under <a class="link" href="{{route('faqs')}}">vanliga frågor.</a>
                </p>
                <div class="block hidden-small">
                    <div class="h5 hidden-small block-small">
                        

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 18" class="icon">
  <g id="Layer_2" data-name="Layer 2">
    <path d="M19 0H3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3zM3 2h16a1 1 0 0 1 .89.56L11 8.78 2.11 2.56A1 1 0 0 1 3 2zm16 14H3a1 1 0 0 1-1-1V4.92l8.43 5.9a1 1 0 0 0 1.15 0L20 4.92V15a1 1 0 0 1-1 1z" id="Layer_1-2" data-name="Layer 1" />
  </g>
</svg>

                        <a class="link" href="mailto:info@toppoffert.se">
                            info@toppoffert.se
                        </a>
                    </div>
                    <div class="h5 hidden-small block-small">
                        

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.89 21.93" class="icon">
  <g id="Layer_2" data-name="Layer 2">
    <path d="M19.3 12.9a11.9 11.9 0 0 1-2.59-.65 3 3 0 0 0-3.17.68l-.72.72a15 15 0 0 1-4.58-4.59L9 8.34a3 3 0 0 0 .68-3.16A11.91 11.91 0 0 1 9 2.58 3 3 0 0 0 6 0H2.73A3 3 0 0 0 0 3.29a20.89 20.89 0 0 0 3.22 9.1 20.63 20.63 0 0 0 6.3 6.3 20.91 20.91 0 0 0 9.08 3.23h.29a3 3 0 0 0 3-3v-3a3 3 0 0 0-2.59-3.02zm.59 3v3a1 1 0 0 1-1.07 1 18.89 18.89 0 0 1-8.21-2.9 18.64 18.64 0 0 1-5.7-5.7A18.86 18.86 0 0 1 2 3.09a1 1 0 0 1 .23-.73A1 1 0 0 1 3 2h3a1 1 0 0 1 1 .85 13.87 13.87 0 0 0 .76 3 1 1 0 0 1-.22 1.05L6.27 8.2a1 1 0 0 0-.16 1.2 17 17 0 0 0 6.37 6.37 1 1 0 0 0 1.2-.16L15 14.35a1 1 0 0 1 1-.22 13.85 13.85 0 0 0 3 .75 1 1 0 0 1 .86 1z" id="Layer_1-2" data-name="Layer 1" />
  </g>
</svg>

                        <a class="link" href="tel:+{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}">
                        {{\App\Http\Controllers\ConfigController::get_value('phone_no')}}
                        </a>
                    </div>
                </div>
                <div class="block visible-small">
                    <a class="button-large button button-email full-width visible-small block" href="mailto:info@toppoffert.se">
                        

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 18" class="icon icon-faded">
  <g id="Layer_2" data-name="Layer 2">
    <path d="M19 0H3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3zM3 2h16a1 1 0 0 1 .89.56L11 8.78 2.11 2.56A1 1 0 0 1 3 2zm16 14H3a1 1 0 0 1-1-1V4.92l8.43 5.9a1 1 0 0 0 1.15 0L20 4.92V15a1 1 0 0 1-1 1z" id="Layer_1-2" data-name="Layer 1" />
  </g>
</svg>

                        info@toppoffert.se
                    </a>
                    <a class="button-large button button-phone full-width visible-small block" href="tel:{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}">
                        

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.89 21.93" class="icon icon-faded">
  <g id="Layer_2" data-name="Layer 2">
    <path d="M19.3 12.9a11.9 11.9 0 0 1-2.59-.65 3 3 0 0 0-3.17.68l-.72.72a15 15 0 0 1-4.58-4.59L9 8.34a3 3 0 0 0 .68-3.16A11.91 11.91 0 0 1 9 2.58 3 3 0 0 0 6 0H2.73A3 3 0 0 0 0 3.29a20.89 20.89 0 0 0 3.22 9.1 20.63 20.63 0 0 0 6.3 6.3 20.91 20.91 0 0 0 9.08 3.23h.29a3 3 0 0 0 3-3v-3a3 3 0 0 0-2.59-3.02zm.59 3v3a1 1 0 0 1-1.07 1 18.89 18.89 0 0 1-8.21-2.9 18.64 18.64 0 0 1-5.7-5.7A18.86 18.86 0 0 1 2 3.09a1 1 0 0 1 .23-.73A1 1 0 0 1 3 2h3a1 1 0 0 1 1 .85 13.87 13.87 0 0 0 .76 3 1 1 0 0 1-.22 1.05L6.27 8.2a1 1 0 0 0-.16 1.2 17 17 0 0 0 6.37 6.37 1 1 0 0 0 1.2-.16L15 14.35a1 1 0 0 1 1-.22 13.85 13.85 0 0 0 3 .75 1 1 0 0 1 .86 1z" id="Layer_1-2" data-name="Layer 1" />
  </g>
</svg>

                        010-33 020 11
                    </a>
                </div>

                <p class="small" style="margin-bottom: 10px">
                    Öppettider: måndag-fredag 9-17. Lunchstängt 12-13.
                </p>

                 <p class="small">
                    Avvikande öppettider: Dag före röd dag har vi öppet 09-15. Dagen före midsommarafton, julafton och nyårsafton har vi öppet som vanligt. Röda dagar har vi stängt. 
                </p>


                <h4>Skicka ett meddelande till oss</h4>

<form action="{{route('sendmsg_to_cs')}}" method="post">
@csrf
<textarea class="flex-input" cols="20" id="FormModel_Message" minlength="5" name="msgto_send" style="border-radius:8px;" placeholder="Ange dina förfrågningar/klagomål här" required="required" rows="2"></textarea>

<input class="flex-input input-email" id="FormModel_Email" name="return_email" placeholder="Din email" style="border-radius:8px;" placeholder="e-post" type="email" value="{{old('return_email')}}" />

<input class="flex-input input-phone" id="FormModel_Telephone" name="telefon" style="border-radius:8px" placeholder="Telefon" type="tel" value="{{old('telefon')}}" />
<button type="submit" class="button-primary" style="background:#0055aa !important; border-radius:50px;height:60px;">Skicka

<svg width="24px" height="24px" STYLE="position:relative;top:7px;" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.6728 22L16.1434 13.0294C16.4081 12.75 16.4081 12.3088 16.1434 12.0147L7.65808 3" stroke="#FFFFFF" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</button>
</form>                <div class="block">
                    <hr />

      <a href="https://www.facebook.com/profile.php?id=100089330416542" class="black block" target="_blank">
          <div class="media">
             <div class="media-left">                          
                <svg width="30px" height="30px" viewBox="0 0 960 960" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M549.621 876.405C542.929 875.206 524.752 883.396 524.053 874.107C526.25 776.23 528.148 678.352 530.845 580.474C533.441 569.288 603.354 573.383 618.135 570.187C640.208 566.792 638.11 537.428 643.204 520.649C643.704 495.68 664.478 447.141 625.227 444.844C609.746 440.749 545.426 450.137 543.229 435.955C525.551 388.315 576.887 382.322 611.244 378.427C646.101 374.931 635.813 297.628 641.207 270.961C645.102 228.614 564.203 239.001 536.637 236.305C485.102 237.104 429.571 257.578 407.798 307.815C388.922 344.37 385.926 385.119 381.931 425.268C378.934 433.858 347.074 429.463 337.386 431.76C290.445 431.661 311.019 520.749 307.224 551.81C309.022 585.468 355.164 574.582 378.135 575.281C390.32 581.373 381.531 635.705 384.128 651.286C384.627 651.286 385.027 651.286 385.526 651.286C382.929 721.398 379.434 791.511 375.239 861.623C374.24 868.115 377.836 882.297 366.75 877.903C324.203 874.707 415.489 866.117 374.24 849.738V878.102L525.351 879.101V864.719C487.898 870.412 615.439 871.311 577.586 874.707C568.098 877.204 558.81 875.606 549.621 876.405Z" fill="#ffffff"/><path d="M869.219 530.637C866.822 447.241 862.927 363.845 857.134 280.35C832.665 87.4909 697.134 68.6145 531.741 84.6944C471.516 87.5908 410.492 81.2987 349.768 86.7918C296.934 89.4884 240.705 91.9853 194.263 120.45C143.926 149.913 117.658 204.145 107.471 259.776C98.2826 306.417 90.4924 352.959 89.993 400.699C85.998 462.922 88.1952 525.244 93.5885 587.466C97.983 641.698 103.177 696.33 123.351 747.366C144.824 799.301 187.471 831.361 236.909 850.937C278.158 867.316 324.1 874.907 366.647 878.103C377.733 882.497 374.238 868.415 375.137 861.823C379.331 791.711 382.927 721.698 385.424 651.486C384.924 651.486 384.525 651.486 384.025 651.486C381.429 635.806 390.218 581.573 378.033 575.481C354.962 574.782 308.919 585.668 307.122 552.01C310.917 520.949 290.243 431.86 337.284 431.96C346.972 429.763 378.832 434.158 381.828 425.468C385.823 385.319 388.919 344.57 407.696 308.015C429.469 257.778 484.999 237.304 536.535 236.505C564.1 239.101 644.999 228.814 641.104 271.161C635.811 297.828 645.998 375.131 611.141 378.627C576.784 382.522 525.449 388.515 543.127 436.155C545.324 450.337 609.643 440.949 625.124 445.044C664.375 447.341 643.601 495.98 643.102 520.849C638.008 537.628 640.205 566.992 618.033 570.387C603.251 573.683 533.339 569.588 530.742 580.674C528.045 678.552 526.048 776.43 523.95 874.307C524.65 883.596 542.827 875.306 549.519 876.604C558.807 875.805 567.995 877.403 577.484 875.006C615.336 871.611 654.787 870.712 692.24 865.019C748.27 856.43 799.706 836.954 833.663 781.623C878.407 706.817 872.914 614.532 869.219 530.637Z" fill="#000"/></svg>
                            </div>
                            <div class="media-content h4">
                                Skriv till oss på Facebook
                            </div>
                        </div>
                    </a>
                    <div class="block">
                        <div class="media">
                            <div class="media-left">
                                

                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.4" d="M8.5 10.5H15.5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7 18.4302H11L15.45 21.3902C16.11 21.8302 17 21.3602 17 20.5602V18.4302C20 18.4302 22 16.4302 22 13.4302V7.43018C22 4.43018 20 2.43018 17 2.43018H7C4 2.43018 2 4.43018 2 7.43018V13.4302C2 16.4302 4 18.4302 7 18.4302Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                            </div>
                            <div class="media-content">
                                <div class="h4">Chatta med oss</div>
                                <p class="small" style="margin-bottom: 10px">Chatten har öppet måndag-fredag 9-17. Lunchstängt 12-13.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="aside">
                <div class="box">
                    <div class="h4 title">{{config('app.name')}} Sverige AB</div>
                    <div class="title-info subtitle"></div>
                    <address class="h6 block">
                      {{\App\Http\Controllers\ConfigController::get_value('address')}}<br/><br/>

                    <span class="title-info subtitle">Tel</span> <a href="tel:{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}">{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}</a><br />
                    </address>
                </div>
                <div class="box block">
                    <div class="block text-center">
                       
                  </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!--
<section class="section-alt">
    <div class="container">
        <h2 class="section-title">Kontaktpersoner</h2>
        <div class="four-columns">
            <div class="column text-center">
                <img src="{{asset('img/profilepictures/profile-anna-bergius.jpg')}}" class="profile-picture" alt="Anna Bergius" />
                <div class="h5">Anna Bergius</div>
                <div class="title-info">VD</div>
                <div>
                    <a href="mailto:anna.bergius@toppoffert.se" class="link">anna.bergius@toppoffert.se</a>
                </div>
            </div>
            <div class="column text-center">
                <img src="{{asset('img/profilepictures/profile-caroline-lindblad.jpg')}}" class="profile-picture" alt="Caroline Lindblad" />
                <div class="h5">Caroline Lindblad</div>
                <div class="title-info">Marknadschef</div>
                <div>
                    <a href="mailto:caroline.lindblad@toppoffert.se" class="link">caroline.lindblad@toppoffert.se</a>
                </div>
            </div>
            <div class="column text-center">
                <img src="{{asset('img/profilepictures/profile-martin-hjorth.png')}}" class="profile-picture" alt="Martin Hjorth" />
                <div class="h5">Martin Hjorth</div>
                <div class="title-info">Försäljningschef</div>
                <div>
                    <a href="mailto:magnus.svanblom@toppoffert.se" class="link">martin.hjorth@fortnox.se</a>
                </div>
            </div>
            <div class="column text-center">
                <img src="{{asset('img/profilepictures/profile-mia-paarni.jpg')}}" class="profile-picture" alt="Mia Päärni" />
                <div class="h5">Mia Päärni</div>
                <div class="title-info">Ekonomiansvarig</div>
                <div>
                    <a href="mailto:mia.paarni@toppoffert.se" class="link">mia.paarni@toppoffert.se</a>
                </div>
            </div>
        </div>
    </div>
</section>
-->
</main>
        </div>
        
        @include('pages.footer')

    </body>
</html>