
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


    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/icons/favicon.ico')}}" />
    <meta name="author" content="{{config('app.name')}}.SE AB" />
    <meta property="fb:admins" content="753251562" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="format-detection" content="telephone=no">

    
    <link href="{{route('skapa')}}" rel="canonical" />
    <meta content="NOINDEX,FOLLOW" name="GOOGLEBOT" />
<meta content="NOINDEX,FOLLOW" name="ROBOTS" />
<meta name="viewport" content="width=device-width" />

<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.lazy.min.js')}}"></script>
            
<link rel="stylesheet" type="text/css" href="{{asset('css/site_v638066915660000000.css')}}"/>        
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/icons/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/icons/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/icons/favicon-16x16.png')}}">
<link rel="mask-icon" href="{{asset('img/icons/safari-pinned-tab.svg')}}" color="#8bc343">

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
</head>

<body class="enquiry-create">
    <script type="text/javascript">
        var _paq;
        if(_paq) {
        _paq = _paq;
        } else {
        _paq = [];
        }
        if (window.location.href.includes('staging.offertadev') || window.location.href.includes('localhost:')) {
            window.PiwikPROappID = '7dbc9a11-29d1-4b5a-806e-56dcb82507a4'
        } else {
            window.PiwikPROappID = '97384d4f-d41f-4ee9-8ff0-acf02a075074'
        }
        (function (window, document, dataLayerName, id) {
            window[dataLayerName] = window[dataLayerName] || [], window[dataLayerName].push({ start: (new Date).getTime(), event: "stg.start" }); var scripts = document.getElementsByTagName('script')[0], tags = document.createElement('script');
            function stgCreateCookie(a, b, c) { var d = ""; if (c) { var e = new Date; e.setTime(e.getTime() + 24 * c * 60 * 60 * 1e3), d = "; expires=" + e.toUTCString() } document.cookie = a + "=" + b + d + "; path=/" }
            var isStgDebug = (window.location.href.match("stg_debug") || document.cookie.match("stg_debug")) && !window.location.href.match("stg_disable_debug"); stgCreateCookie("stg_debug", isStgDebug ? 1 : "", isStgDebug ? 14 : -1);
            var qP = []; dataLayerName !== "dataLayer" && qP.push("data_layer_name=" + dataLayerName), isStgDebug && qP.push("stg_debug"); var qPString = qP.length > 0 ? ("?" + qP.join("&")) : "";
            tags.async = !0, tags.src = "https://fortnox.containers.piwik.pro/" + id + ".js" + qPString, scripts.parentNode.insertBefore(tags, scripts);
            !function (a, n, i) { a[n] = a[n] || {}; for (var c = 0; c < i.length; c++)!function (i) { a[n][i] = a[n][i] || {}, a[n][i].api = a[n][i].api || function () { var a = [].slice.call(arguments, 0); "string" == typeof a[0] && window[dataLayerName].push({ event: n + "." + i + ":" + a[0], parameters: [].slice.call(arguments, 1) }) } }(i[c]) }(window, "ppms", ["tm", "cm"]);
        })(window, document, 'dataLayer', window.PiwikPROappID);
    </script> 

    
    <div class="legacy-browser-warning alert-site">
        Du använder en webbläsare som inte stöds av {{config('app.name')}} och därför fungerar inte alla funktioner som de skall. <a class="link white" href="http://www.browsehappy.com/">Uppgradera din webbläsare</a> för att kunna använda {{config('app.name')}} alla funktioner.
    </div>

        <div class="fake-scrollbar"></div>
        <div class="page-wrapper">
            <header class="new-header">
                <div class="new-header-container">
                    <a class="new-header__logo" href="{{route('index')}}" aria-label="Hem">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="130.000000pt" height="130.000000pt" viewBox="0 0 500.000000 500.000000"
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
</a>
                    


<div class="new-header__menu" role="navigation">
    <a href="{{route('anslut-ditt-foretag')}}" class="new-header__menu--item">Anslut företag</a>
    
            <a href="{{route('login')}}" class="new-header__menu--item">Logga in</a>
        
    <a class="nav-icon" data-toggle-menu="mobile-nav">
        <div class="text-close">Stäng</div>
        <div class="text-menu">Meny</div>
        <div class="menu-icon"></div>
    </a>
</div>
<nav class="new-main-menu">
    <div class="new-main-menu__inner">
        <div class="new-main-menu__menu">
            <a href="{{route('anslut-ditt-foretag')}}" class="new-main-menu__menu--item mobile">Anslut företag</a>
            <a href="{{route('login')}}" class="new-main-menu__menu--item mobile">Logga in</a>
            <a href="{{route('kontactos-pg')}}" class="new-main-menu__menu--item">Kontakta oss</a>
            </div>
        </div>
    <ul class="new-main-menu__footer">
        <li class="new-main-menu__footer--item">
            {{config('app.name')}} Group AB
        </li>
        <li class="new-main-menu__footer--item">
            <a href="tel:010-33 020 11">010-33 020 11</a>
        </li>
        <li class="new-main-menu__footer--item">
            <a href="mailto:info@toppoffert.se">info@toppoffert.se</a>
        </li>
        <li class="new-main-menu__footer--item">
            <a href="https://www.linkedin.com/company/toppoffertse" class="social-icons">
                

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-small">
  <rect x="2" y="8.5" width="5" height="14" rx=".5" ry=".5" />
  <ellipse cx="4.48" cy="4" rx="2.48" ry="2.5" />
  <path d="M18.5 22.5h3a.5.5 0 0 0 .5-.5v-8.4C22 9.83 19.87 8 16.89 8a4.21 4.21 0 0 0-3.17 1.27A.41.41 0 0 1 13 9a.5.5 0 0 0-.5-.5h-3A.5.5 0 0 0 9 9v13a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-7.5a2.5 2.5 0 0 1 5 0V22a.5.5 0 0 0 .5.5z" />
</svg>

            </a>
            <a href="https://www.facebook.com/toppoffert.se/" class="social-icons">
                

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-small">
  <path d="M18.14 7.17a.5.5 0 0 0-.37-.17H14V5.59c0-.28.06-.6.51-.6h3a.44.44 0 0 0 .35-.15.5.5 0 0 0 .14-.34v-4a.5.5 0 0 0-.5-.5h-4.33C8.37 0 8 4.1 8 5.35V7H5.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5H8v11.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5V12h3.35a.5.5 0 0 0 .5-.45l.42-4a.5.5 0 0 0-.13-.38z" />
</svg>

            </a>
            <a href="https://www.instagram.com/toppoffert.se/" class="social-icons">
                

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-small">
  <path d="M17.5 0h-11A6.51 6.51 0 0 0 0 6.5v11A6.51 6.51 0 0 0 6.5 24h11a6.51 6.51 0 0 0 6.5-6.5v-11A6.51 6.51 0 0 0 17.5 0zM12 17.5a5.5 5.5 0 1 1 5.5-5.5 5.5 5.5 0 0 1-5.5 5.5zm6.5-11A1.5 1.5 0 1 1 20 5a1.5 1.5 0 0 1-1.5 1.5z" />
</svg>

            </a>
        </li>
    </ul>
</nav>
                    
                    <div class="header-material-circle"></div>
                </div>
            </header>
            <main class="content-main" role="main">
                
                

<section class="section">
    <div class="container">
        <h1 class="page-title">Vi introducerar dig till f&#246;retag <br/>redo att hjälpa dig
        </h1>
        <p class="page-subtitle text-center">Beskriv ditt behov och ta emot upp till sex offerter från lokala tjänsteföretag</p>
        <div class="grid">
            <div class="content">
<form action="{{route('skapa')}}" method="post"><div class="box box-enquiry-create has-button-bar">
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
            

<div data-allow-parent-select="false" data-parent-select-only="false"
     data-show-featured="true" data-inline-options="false"
     data-id="" data-parent-id="" data-parent-human-id=""
     class="what-select-wrapper whatwhere-select-wrapper">
    <div class="what-select whatwhere-select flex-input combo-box js-loading" >
<input autocomplete="off" class="autocomplete what-autocomplete whatwhere-input" id="WhatText" maxlength="100" name="WhatText" placeholder="Ange uppdragstyp" tabindex="1" title="Ange uppdragstyp" type="text" value="" />        <div data-toggle="modal" data-target="#what-parents" data-backdrop="false"
             class="what-dropdown options-loading">
            <div id="what-display-text" class="whatwhere-dropdown-text">
                Ange uppdragstyp
            </div>
        </div>
    </div>

    <input class="what-field whatwhere-field" id="WhatId" name="WhatId" type="hidden" value="" />

    

        <div class="what-options what-options-placeholder hidden"></div>
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
                <div class="flex-input dropdown"><select id="WhoId" name="WhoId" tabindex="4"><option value="1">Privatperson</option>
<option value="2">F&#246;retag</option>
<option value="3">Byggherre/Entrepren&#246;r</option>
<option value="4">Bostadsr&#228;ttsf&#246;rening</option>
<option value="5">Villaf&#246;rening</option>
<option value="6">Ideell f&#246;rening</option>
<option value="7">Kommun/Myndighet</option>
</select></div>
            </div>

            <div class="column">
                <label for="WhenId">N&#228;r ska uppdraget p&#229;b&#246;rjas</label>
                <div class="flex-input dropdown"><select id="WhenId" name="WhenId" tabindex="5"><option value="1">Snarast m&#246;jligt</option>
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
                <input autocomplete="tel" class="full-width input-phone" id="Phone" name="Phone" tabindex="14" type="tel" value="" />
            </div>
        </div>

            <div class="column">
                <div class="form-group form-group-whatwhere">
                    <label for="Name">Postnummer (d&#228;r uppdraget ska utf&#246;ras)</label>
                    

    <div 
        class="where-postcode-container form-group no-label ">
        <input autocomplete="postal-code" class="where-postcode-field input-address full-width no-validation" data-regexp="^(?:[ ]*[0-9]){5}[?:[ ]*]*$" id="PostCode" name="PostCode" placeholder="" tabIndex="16" title="Postnr." type="number" value="" />
        
    </div>

                </div>
            </div>

    </div>

    <div class="two-columns no-margins">
            <div class="column">
                <div class="form-group form-group-half">
                    <label for="ContactPreferencesId">N&#228;r vill du bli kontaktad</label>
                    <div class="flex-input dropdown"><select id="ContactPreferencesId" name="ContactPreferencesId" tabindex="18"><option value="1">N&#228;r som helst</option>
<option value="2">Omg&#229;ende</option>
<option value="3">F&#246;rmiddag</option>
<option value="4">Eftermiddag</option>
<option value="5">Kv&#228;ll</option>
</select></div>
                </div>
            </div>

        <div class="column nolabel-input">


<div class="fileuploader-wrapper">
    <div class="fileuploader-button tooltip-fileuploader button-fileuploader flex-input button-paper-clip js" data-tooltip="&lt;ul class=&#39;tooltip-list&#39;&gt;&lt;li&gt;Det &#228;r valfritt att bifoga filer.&lt;/li&gt;&lt;li&gt;Du kan v&#228;lja att bifoga t.ex. bilder, ritningar och kravspecifikation som hj&#228;lper till att beskriva ditt uppdrag.&lt;/li&gt;&lt;li&gt;Du kan bifoga filer upp till 5 filer som vardera &#228;r upp till 5 Mb stora.&lt;/li&gt;&lt;/ul&gt;">
        

<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="206 -206 512 512" class="icon icon-fileuploader">
  <path d="M541.5-29.2L513.7-57l-139 139c-23 23-23 60.4 0 83.4 23 23 60.4 23 83.4 0L625-1.4c38.4-38.4 38.4-100.6 0-139-38.4-38.4-100.6-38.4-139 0L310.8 34.8c-.1.1-.3.2-.4.4-53.5 53.5-53.5 140.3 0 193.8s140.3 53.5 193.9 0l.4-.4 119.6-119.5-27.8-27.8-119.6 119.5-.4.4c-38.1 38.1-100.1 38.1-138.3 0-38.1-38.1-38.1-100.1 0-138.2.1-.1.3-.2.4-.4l175.2-175.1c23-23 60.4-23 83.4 0 23 23 23 60.4 0 83.4L430.3 137.6c-7.7 7.7-20.1 7.7-27.8 0-7.7-7.7-7.7-20.1 0-27.8l139-139z" />
</svg>

        <span class="p fileuploader-text">Bifoga filer</span>
        <input type="file" class="fileuploader flex-input" name="files[]" multiple="multiple"
               data-url="/api/files/"
               data-delete-url="/api/files/"
               data-form-data='{ "ownerId": "fc388303-aa4f-4646-91f5-99ba6e6bf1f1", "folderId": "2c5e6755-c7c3-42d0-be47-ed432fa4a311" }'
            tabindex="19" />

        <input id="FileUploadData_OwnerId" name="FileUploadData.OwnerId" type="hidden" value="fc388303-aa4f-4646-91f5-99ba6e6bf1f1" />
        <input id="FileUploadData_FolderId" name="FileUploadData.FolderId" type="hidden" value="2c5e6755-c7c3-42d0-be47-ed432fa4a311" />
    </div>
    
    <div class="progress-bar hidden">
        <div class="progress" style="width: 0%;"></div>
    </div>
    <div class="uploaded-files hidden">
        
    </div>
</div>        </div>
    </div>


    <input class="what-selection-method-field" id="WhatSelectionMethod" name="WhatSelectionMethod" type="hidden" value="preset" />
    <p>
        Vi på {{config('app.name')}} är måna om din personliga integritet och vår <a href="https://offerta.se/anvandarvillkor/integritetspolicy/" class="link">integritetspolicy</a> förklarar hur vi samlar in och använder dina personuppgifter. Genom att klicka på knappen 'Offerta mig!' skickar du in din förfrågan och godkänner våra <a href="https://offerta.se/anvandarvillkor/kopare/" class="link">användarvillkor</a> för att använda Offertas tjänst.
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
        

<footer class="new-footer">
  <div class="new-footer__inner">
    <div class="new-footer__inner mobile-logo">
      <a href="{{route('index')}}" class="new-footer__inner--link" aria-label="Hem">
        


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7311 3543.31" style="enable-background:new 0 0 7311 3543.31" class="logo-offerta-footer site-logo">
  <path style="fill:#8bc343" d="M1482.89 3507.69c23.07 23.08 60.48 23.08 83.56 0l458.35-470.7h4731.71c281.87 0 512.49-230.62 512.49-512.49V553.44c0-281.87-230.62-512.49-512.49-512.49H550.49C268.62 40.95 38 271.57 38 553.44V2524.5c0 281.87 230.62 512.49 512.49 512.49h474.05l458.35 470.7z" />
  <path style="fill:#fff" d="M1483.22 825.57c341.33 0 645.52 249.37 645.52 654.37 0 403.22-304.2 652.6-645.52 652.6-339.56 0-643.75-249.37-643.75-652.6 0-405 304.19-654.37 643.75-654.37zm0 1069.98c194.54 0 392.62-134.42 392.62-417.39s-198.08-417.38-392.62-417.38c-192.77 0-390.85 134.41-390.85 417.38s198.08 417.39 390.85 417.39zM2588.58 1140.38v95.5h196.31v201.61h-196.31v668.52H2351.6v-668.52h-145.02v-201.61h145.02v-99.05c0-196.31 123.8-323.64 316.57-323.64 49.52 0 97.27 8.84 116.73 17.69v198.08c-12.38-5.31-33.6-8.84-74.28-8.84-53.06-.01-122.04 22.98-122.04 120.26zM3219.94 1140.38v95.5h196.31v201.61h-196.31v668.52h-236.99v-668.52h-145.02v-201.61h145.02v-99.05c0-196.31 123.8-323.64 316.57-323.64 49.52 0 97.27 8.84 116.73 17.69v198.08c-12.38-5.31-33.6-8.84-74.28-8.84-53.06-.01-122.03 22.98-122.03 120.26zM4311.16 1856.65c-42.45 152.09-183.93 275.89-396.16 275.89-240.52 0-449.21-171.55-449.21-465.14 0-277.66 205.15-458.05 427.99-458.05 270.59 0 429.77 169.78 429.77 450.98 0 33.6-3.54 67.2-3.54 72.5h-622.53c5.3 113.19 102.58 198.08 219.3 198.08 111.42 0 169.78-54.81 198.08-132.64l196.3 58.38zm-219.31-284.75c-5.3-84.89-60.13-171.55-194.54-171.55-122.03 0-189.23 93.73-194.54 171.55h389.08zM4951.4 1469.33c-22.99-5.31-47.75-7.08-70.74-7.08-120.26 0-224.6 58.36-224.6 245.83V2106h-235.22v-870.13h228.14v129.1c53.05-114.95 173.32-136.17 247.59-136.17 19.46 0 35.37 1.77 54.83 3.53v237zM5405.91 1235.88H5581v208.69h-175.09v364.33c0 76.05 33.6 100.8 102.58 100.8 28.3 0 60.13-1.77 72.51-7.08v194.55c-21.22 8.84-63.66 21.22-132.64 21.22-169.78 0-275.89-99.03-275.89-268.81v-405h-157.41v-208.69h44.22c91.96 0 134.41-60.14 134.41-137.95V975.9h212.23v259.98zM5918.78 1605.51l213.99-31.83c49.52-7.08 65.44-31.84 65.44-61.91 0-61.91-47.75-113.19-146.79-113.19-104.34 0-159.17 65.44-166.25 141.48l-208.69-44.22c14.15-136.17 137.95-286.5 373.17-286.5 275.9 0 378.48 155.63 378.48 330.72v427.99c0 47.75 5.3 107.89 10.61 137.95h-215.77c-5.3-22.99-8.84-70.74-8.84-104.34-44.21 68.97-127.34 129.11-256.44 129.11-185.7 0-298.89-127.34-298.89-261.75-.01-157.4 114.95-240.53 259.98-263.51zm279.43 148.56v-38.91l-196.31 30.06c-61.9 8.84-107.88 40.67-107.88 109.64 0 51.3 37.14 100.81 113.19 100.81 99.03.01 191-47.74 191-201.6z" />
</svg>

      </a>
    </div>
    <div class="new-footer__inner--item">
      <nav class="footer-icons">
        <a href="https://www.linkedin.com/company/toppoffert" class="footer-icons__item"
          aria-label="{{config('app.name')}} på LinkedIn">
          

<svg data-name="Outline Version" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-medium">
  <path d="M.81 7.95a.75.75 0 0 0-.75.75v13.93a.75.75 0 0 0 .75.75h4.86a.75.75 0 0 0 .75-.75V8.7a.75.75 0 0 0-.75-.75zm4.11 13.93H1.56V9.45h3.36zM17.89 7.94a7.35 7.35 0 0 0-3.53.93V8.7a.75.75 0 0 0-.75-.75h-5.1a.75.75 0 0 0-.75.75v13.93a.75.75 0 0 0 .75.75h5.11a.75.75 0 0 0 .75-.75v-7.25a1.39 1.39 0 0 1 2.79 0v7.25a.75.75 0 0 0 .75.75h5.36a.75.75 0 0 0 .75-.75V15.5c-.02-4.67-2.35-7.56-6.13-7.56zm4.62 13.94h-3.86v-6.5a2.89 2.89 0 0 0-5.79 0v6.5h-3.6V9.45h3.61v.84a.75.75 0 0 0 1.26.55 6.07 6.07 0 0 1 3.77-1.4c2.93 0 4.62 2.21 4.62 6.06zM3.24 7.13A3.25 3.25 0 1 0 0 3.88a3.25 3.25 0 0 0 3.24 3.25zm0-5a1.75 1.75 0 1 1-1.75 1.75 1.75 1.75 0 0 1 1.75-1.75z" />
</svg>

        </a>
        <a href="https://www.facebook.com/toppoffert.se/" class="footer-icons__item" aria-label="Offerta på Facebook">
          

<svg data-name="Outline Version" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-medium">
  <path d="M5.87 12.5h2.25v10.75a.75.75 0 0 0 .75.75h5a.75.75 0 0 0 .75-.75V12.5h3.1a.75.75 0 0 0 .75-.67l.42-4a.75.75 0 0 0-.76-.83h-3.51V5.84c0-.34.1-.35.26-.35h3a.75.75 0 0 0 .75-.75v-4a.75.75 0 0 0-.76-.74h-4.33c-5 0-5.42 4.29-5.42 5.6V7H5.87a.75.75 0 0 0-.75.75v4a.75.75 0 0 0 .75.75zm.75-4h2.25a.75.75 0 0 0 .75-.75V5.6c0-1.53.51-4.1 3.92-4.1h3.58V4h-2.24a1.71 1.71 0 0 0-1.76 1.85v1.9a.75.75 0 0 0 .75.75h3.43L17 11h-3.13a.75.75 0 0 0-.75.75V22.5h-3.5V11.75a.75.75 0 0 0-.75-.75H6.62z" />
</svg>

        </a>
        <a href="https://www.instagram.com/toppoffert.se/" class="footer-icons__item" aria-label="Offerta på Instagram">
          

<svg data-name="Outline Version" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-medium">
  <path d="M6.74 24h10.5A6.76 6.76 0 0 0 24 17.25V6.75A6.76 6.76 0 0 0 17.24 0H6.74A6.76 6.76 0 0 0 0 6.75v10.5A6.76 6.76 0 0 0 6.74 24zM1.49 6.75A5.26 5.26 0 0 1 6.74 1.5h10.5a5.26 5.26 0 0 1 5.25 5.25v10.5a5.26 5.26 0 0 1-5.25 5.25H6.74a5.26 5.26 0 0 1-5.25-5.25z" />
  <path d="M12 17.75A5.75 5.75 0 1 0 6.24 12 5.76 5.76 0 0 0 12 17.75zm0-10A4.25 4.25 0 1 1 7.74 12 4.26 4.26 0 0 1 12 7.75z" />
  <circle cx="18.84" cy="5.15" r="1.25" />
</svg>

        </a>
      </nav>
    </div>
   
    <div class="new-footer__inner--item">
      <nav class="footer-menu">
        <a class="footer-menu__item" href="{{route('anslut-ditt-foretag')}}">
          Anslut ditt företag
        </a>
        <a class="footer-menu__item" href="" target="_blank">
          Jobba hos oss
        </a>
        <a class="footer-menu__item" href="">
          Beställarskolan
        </a>
      </nav>
    </div>
    <div class="new-footer__inner--item">
      <nav class="footer-menu">
        <a class="footer-menu__item blog" href="">
          Blogg
        </a>
        <a class="footer-menu__item companies-blog" href="/">
          Företagsblogg
        </a>
        <a class="footer-menu__item" href="">
          Press
        </a>
        <a class="footer-menu__item" href="">
          Integritetspolicy
        </a>
        <span id="cookieSettings" class="footer-menu__item">
          Cookie inställningar
        </span>
      </nav>
    </div>
    <div class="new-footer__inner--item">
      <div>
        <span class="footer-menu__item no-link">
          {{config('app.name')}} Group AB
        </span>
        <div class="media">
          <span>
            <a href="mailto:info@toppoffert.se" class="footer-menu__item">
              info@toppoffert.se
            </a>
            <a href="tel:010-33 020 11" class="footer-menu__item">
              010-33 020 11
            </a>
            <a class="footer-menu__item" href="{{route('kontactos-pg')}}">
              Skicka meddelande
            </a>
          </span>
        </div>
      </div>
      <a href="{{route('index')}}" class="new-footer__inner--link hide-mobile" aria-label="Hem">
        


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7311 3543.31" style="enable-background:new 0 0 7311 3543.31" class="logo-offerta-footer site-logo">
  <path style="fill:#8bc343" d="M1482.89 3507.69c23.07 23.08 60.48 23.08 83.56 0l458.35-470.7h4731.71c281.87 0 512.49-230.62 512.49-512.49V553.44c0-281.87-230.62-512.49-512.49-512.49H550.49C268.62 40.95 38 271.57 38 553.44V2524.5c0 281.87 230.62 512.49 512.49 512.49h474.05l458.35 470.7z" />
  <path style="fill:#fff" d="M1483.22 825.57c341.33 0 645.52 249.37 645.52 654.37 0 403.22-304.2 652.6-645.52 652.6-339.56 0-643.75-249.37-643.75-652.6 0-405 304.19-654.37 643.75-654.37zm0 1069.98c194.54 0 392.62-134.42 392.62-417.39s-198.08-417.38-392.62-417.38c-192.77 0-390.85 134.41-390.85 417.38s198.08 417.39 390.85 417.39zM2588.58 1140.38v95.5h196.31v201.61h-196.31v668.52H2351.6v-668.52h-145.02v-201.61h145.02v-99.05c0-196.31 123.8-323.64 316.57-323.64 49.52 0 97.27 8.84 116.73 17.69v198.08c-12.38-5.31-33.6-8.84-74.28-8.84-53.06-.01-122.04 22.98-122.04 120.26zM3219.94 1140.38v95.5h196.31v201.61h-196.31v668.52h-236.99v-668.52h-145.02v-201.61h145.02v-99.05c0-196.31 123.8-323.64 316.57-323.64 49.52 0 97.27 8.84 116.73 17.69v198.08c-12.38-5.31-33.6-8.84-74.28-8.84-53.06-.01-122.03 22.98-122.03 120.26zM4311.16 1856.65c-42.45 152.09-183.93 275.89-396.16 275.89-240.52 0-449.21-171.55-449.21-465.14 0-277.66 205.15-458.05 427.99-458.05 270.59 0 429.77 169.78 429.77 450.98 0 33.6-3.54 67.2-3.54 72.5h-622.53c5.3 113.19 102.58 198.08 219.3 198.08 111.42 0 169.78-54.81 198.08-132.64l196.3 58.38zm-219.31-284.75c-5.3-84.89-60.13-171.55-194.54-171.55-122.03 0-189.23 93.73-194.54 171.55h389.08zM4951.4 1469.33c-22.99-5.31-47.75-7.08-70.74-7.08-120.26 0-224.6 58.36-224.6 245.83V2106h-235.22v-870.13h228.14v129.1c53.05-114.95 173.32-136.17 247.59-136.17 19.46 0 35.37 1.77 54.83 3.53v237zM5405.91 1235.88H5581v208.69h-175.09v364.33c0 76.05 33.6 100.8 102.58 100.8 28.3 0 60.13-1.77 72.51-7.08v194.55c-21.22 8.84-63.66 21.22-132.64 21.22-169.78 0-275.89-99.03-275.89-268.81v-405h-157.41v-208.69h44.22c91.96 0 134.41-60.14 134.41-137.95V975.9h212.23v259.98zM5918.78 1605.51l213.99-31.83c49.52-7.08 65.44-31.84 65.44-61.91 0-61.91-47.75-113.19-146.79-113.19-104.34 0-159.17 65.44-166.25 141.48l-208.69-44.22c14.15-136.17 137.95-286.5 373.17-286.5 275.9 0 378.48 155.63 378.48 330.72v427.99c0 47.75 5.3 107.89 10.61 137.95h-215.77c-5.3-22.99-8.84-70.74-8.84-104.34-44.21 68.97-127.34 129.11-256.44 129.11-185.7 0-298.89-127.34-298.89-261.75-.01-157.4 114.95-240.53 259.98-263.51zm279.43 148.56v-38.91l-196.31 30.06c-61.9 8.84-107.88 40.67-107.88 109.64 0 51.3 37.14 100.81 113.19 100.81 99.03.01 191-47.74 191-201.6z" />
</svg>

      </a>
    </div>
  </div>
  <nav class="new-footer__footer-menu">
    <a href="{{route('kontactos-pg')}}" class="new-footer__footer-menu--link home-page">
      
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24" class="icon icon-medium">
  <path d="M7.488 24a1.98 1.98 0 0 1-1.881-1.551L2.542 10.398l-1.289 1.177a.75.75 0 0 1-1.011-1.108L11.492.196a.747.747 0 0 1 1.011 0l11.25 10.271a.752.752 0 0 1-.506 1.304.751.751 0 0 1-.506-.196l-1.29-1.177-3.069 12.075A1.961 1.961 0 0 1 16.524 24H7.488zm-.421-1.897a.48.48 0 0 0 .456.397H16.5a.473.473 0 0 0 .424-.373L20.196 9.25l-8.198-7.485-8.2 7.486 3.269 12.852z" />
  <path d="M11.997 18a3.754 3.754 0 0 1-3.75-3.75 3.754 3.754 0 0 1 3.75-3.75 3.754 3.754 0 0 1 3.75 3.75 3.754 3.754 0 0 1-3.75 3.75zm0-6c-1.241 0-2.25 1.009-2.25 2.25s1.009 2.25 2.25 2.25 2.25-1.009 2.25-2.25S13.238 12 11.997 12z" />
</svg>

      <div class="new-footer__footer-menu--text">Hitta proffs</div>
    </a>
    <a href="{{route('anslut-ditt-foretag')}}" class="new-footer__footer-menu--link supplier-register-link">
      

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24" class="icon icon-medium">
  <path d="M5.253 21.497a5.213 5.213 0 0 1-3.712-1.535A5.213 5.213 0 0 1 .006 16.25c0-1.404.545-2.722 1.535-3.712l4.773-4.774a5.215 5.215 0 0 1 3.716-1.539c1.402 0 2.719.544 3.708 1.531a5.225 5.225 0 0 1 .538 6.804.752.752 0 0 1-1.048.165.744.744 0 0 1-.299-.489.745.745 0 0 1 .134-.558 3.732 3.732 0 0 0-.384-4.86 3.726 3.726 0 0 0-2.649-1.094 3.729 3.729 0 0 0-2.655 1.099l-4.774 4.774a3.754 3.754 0 0 0 0 5.303c.707.707 1.649 1.096 2.652 1.096s1.945-.389 2.652-1.096l.932-.932a.744.744 0 0 1 1.06 0 .744.744 0 0 1 0 1.06l-.932.932a5.205 5.205 0 0 1-3.712 1.537z" />
  <path d="M13.978 18.024a5.213 5.213 0 0 1-3.709-1.535 5.223 5.223 0 0 1-.536-6.803.752.752 0 0 1 1.047-.166.746.746 0 0 1 .3.49.745.745 0 0 1-.134.558 3.731 3.731 0 0 0 .383 4.859 3.725 3.725 0 0 0 2.65 1.096 3.727 3.727 0 0 0 2.654-1.1l4.773-4.773c.708-.708 1.098-1.65 1.098-2.652s-.39-1.943-1.098-2.652c-.707-.707-1.649-1.096-2.652-1.096s-1.945.389-2.652 1.096l-.75.75a.744.744 0 0 1-1.06 0c-.142-.141-.22-.33-.22-.53s.078-.389.22-.53l.75-.75c.99-.99 2.309-1.536 3.712-1.536s2.722.545 3.712 1.536a5.213 5.213 0 0 1 1.538 3.712 5.213 5.213 0 0 1-1.538 3.712l-4.773 4.773a5.213 5.213 0 0 1-3.711 1.54h-.004z" />
</svg>

      <div class="new-footer__footer-menu--text">Anslut företag</div>
    </a>
    
        <a href="{{route('login')}}" class="new-footer__footer-menu--link">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24" class="icon icon-medium">
  <path d="M11.245 16.494a.743.743 0 0 1-.53-.22l-3.75-3.75a.763.763 0 0 1-.22-.531c0-.089.016-.178.049-.264.004-.013.01-.026.015-.037a.704.704 0 0 1 .157-.23l3.749-3.749a.744.744 0 0 1 1.06 0c.142.141.22.33.22.53s-.078.389-.22.53l-2.47 2.47h13.939a.75.75 0 0 1 0 1.5H9.305l2.47 2.47a.752.752 0 0 1-.53 1.281z" />
  <path d="M11.229 23.244a11.13 11.13 0 0 1-4.907-1.134 11.174 11.174 0 0 1-5.71-6.444 11.176 11.176 0 0 1 .519-8.595 11.174 11.174 0 0 1 6.444-5.71 11.258 11.258 0 0 1 3.68-.621c1.707 0 3.36.384 4.915 1.14a11.186 11.186 0 0 1 5 4.816.75.75 0 0 1-1.323.707 9.696 9.696 0 0 0-4.333-4.174 9.659 9.659 0 0 0-4.259-.989 9.746 9.746 0 0 0-3.19.539A9.684 9.684 0 0 0 2.48 7.727a9.685 9.685 0 0 0-.45 7.449 9.685 9.685 0 0 0 4.949 5.585c1.34.652 2.77.982 4.251.982 3.714 0 7.162-2.152 8.783-5.481a.754.754 0 0 1 1.002-.346.748.748 0 0 1 .346 1.003c-1.869 3.842-5.847 6.325-10.132 6.325z" />
</svg>

          Logga in
        </a>
      
    
    
  </nav>
</footer>
        <script defer src="{{asset('wchat.freshchat.com/js/widget.js')}}"></script>
<script>
    var retries = 5;
    function initChat() {
        if (retries > 0 && window.fcWidget) {
            window.fcWidget.init({
                token: "62991366-f918-4244-9199-d663f807e81a",
                host: "https://wchat.freshchat.com",
                locale: 'sv'
            });

        }
        else {
            setTimeout(function () {
                retries--;
                initChat();
            }, 1000)
        }
    }

    initChat();
</script>

    

    

    <div id="help-overlay" class="overlay-center hidden animate-fast fade">
        <button class="button-square-small button-secondary close-button overlay-close-button">
            

<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" class="icon-small no-adjust">
  <path d="M54.91 49.41L37.21 31.7l17.61-17.62.09-.08a3.26 3.26 0 0 0 0-4.05 3.21 3.21 0 0 0-4.62-.57L32.5 27.08 14.88 9.47l-.56-.57a3.3 3.3 0 0 0-4.62.57 3.26 3.26 0 0 0-.7 2.44 3.39 3.39 0 0 0 1.22 2.17L27.88 31.7 10.17 49.41a3.12 3.12 0 0 0-.94 2.35 3.34 3.34 0 0 0 3.3 3.3 3.37 3.37 0 0 0 2.35-1l17.71-17.75L50.3 54a3.12 3.12 0 0 0 2.35.94 3.29 3.29 0 0 0 2.26-.94 3.36 3.36 0 0 0 0-4.59z" />
</svg>

        </button>
        <div id="help-overlay-loading-indicator" class="hidden loading-indicator-panel">
            

<svg viewBox="0 0 50 50" class="spinner">
  <circle class="path" cx="25" cy="25" r="16" fill="none" stroke-width="5" />
</svg>

        </div>
        <div id="help-overlay-content" class="overlay-content"></div>
        <hr class="divider-toolbar" />
        <div id="help-overlay-actions" class="text-right"></div>
    </div>

    <!-- End Document ================================================== -->


    <!-- SiteJS -->
    
            <script async data-main="site/_main" src="../dist/js/bundled-require_v638066915840000000.js" type="text/javascript"></script>
        
    <!-- /SiteJS -->
    <!-- BottomScripts -->
    
    <!-- /BottomScripts -->
</body>
</html>