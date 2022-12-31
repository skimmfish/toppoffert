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
    <title itemprop="name">@if(isset($title)) {{$title}} @else {{config('app.name')}} @endif</title>

    <link rel="dns-prefetch" href="https://s.ytimg.com/" />
    <link rel="dns-prefetch" href="https://i.ytimg.com/" />
    <link rel="dns-prefetch" href="https://yt3.ggpht.com/" />
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net/" />
    <link rel="dns-prefetch" href="https://www.youtube.com/" />


    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/icons/favicon.ico')}}" />
    <meta name="author" content="TOPPOFFERT.SE" />
    <meta property="fb:admins" content="753251562" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="format-detection" content="telephone=no">

    <meta content="Toppoffert.se Förverkliga ditt drömprojekt eller anlita ett företag som gör din vardag lite enklare. Skapa en gratis förfrågan så matchar vi ihop dig med kompetenta företag som får jobbet gjort" name="description" />
    <link href="index.html" rel="canonical" />
    <meta content="INDEX,FOLLOW" name="GOOGLEBOT" />
    <meta content="INDEX,FOLLOW" name="ROBOTS" />
    <meta name="viewport" content="width=device-width" />
    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.lazy.min.js') }}"></script>
        

    <link rel="stylesheet" type="text/css" href="{{asset('css/campaign_v638066915600000000.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom_def.css')}}" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="asset('img/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/icons/favicon-16x16.png')}}">
    <link rel="mask-icon" href="{{asset('img/icons/safari-pinned-tab.svg')}}" color="#8bc343">
    <meta name="theme-color" content="#2F3033">

<style id="critical-css">
.worktype-grid{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-auto-rows: 1fr;
    grid-gap: 0.7rem;
    text-align: center;
}
.worktype-grid-item .svg-icon{
    width: 40px !important;
    height: 40px !important;
    fill: #41509a;
    margin-bottom: 0.5rem;
    opacity: .7;
    transition: all .2s ease;
}
.worktype-grid>:first-child {
    grid-row: 1/1;
    grid-column: 1/1;
}
@media (min-width: 480px){
.worktype-grid-item {
    font-size: 1em;
}
}
@media (min-width: 380px){
.worktype-grid-item{
    padding: 1rem;
}
}

.worktype-grid:before, .worktype-grid>:first-child{
    grid-row: 1/1;
    grid-column: 1/1;
}

@media (min-width: 480px){
.worktype-grid-item {
    font-size: 1em;
}}

.worktype-grid-item{
    display: flex; flex-direction: column;    align-items: center; justify-content: center;    padding: 2rem 0.15rem 2rem 0.15rem;    background: #fff;    border-radius: 12px;    box-shadow: 0 3px 8px rgb(0 0 0 / 8%);    font-size: 0.65em;    font-weight:900 !important;    line-height: 1.3;
    cursor: pointer;    transition: all .2s ease;
}

.show-on-large-only img{
border-radius:15px;
}

@media (min-width: 769px){
.worktype-grid {
grid-template-columns: repeat(4,1fr);
grid-gap: 0.8rem;}
}

@media (max-width: 640px){
.worktype-grid {
grid-template-columns: repeat(3,1fr);
grid-gap: 0.8rem;}
}


img{
    max-width: 100%;
    height: auto;
    vertical-align: middle;
    border: 0;
    -ms-interpolation-mode: bicubic;
}

input:not([type=radio]):not([type=checkbox]):not(.autocomplete):not([type=submit]):not(.input-search-expandable):not(.fileuploader):not(.input-sidenav) {
    color: #000;
}

input:not([type=radio]):not([type=checkbox]):not(.autocomplete):not(.input-slideout){
    -webkit-transition: border .16s;
    -o-transition: border .16s;
    -moz-transition: border .16s;
    transition: border .16s;
}

.combo-box, .input, input, textarea{
    height: 44px;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding: 0 1em;
    outline: 0;
    color: #000;
    font-size: 1em;
    -webkit-box-shadow: inset 0 2px 4px 0 rgba(0,0,0,.04);
    box-shadow: inset 0 2px 4px 0 rgba(0,0,0,.04);
    font-family: "Open Sans","Helvetica Neue",Arial,sans-serif;height: 44px;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding: 0 1em;
    outline: 0;
    color: #000;
    font-size: 1em;
    -webkit-box-shadow: inset 0 2px 4px 0 rgba(0,0,0,.04);
    box-shadow: inset 0 2px 4px 0 rgba(0,0,0,.04);
    font-family: "Open Sans","Helvetica Neue",Arial,sans-serif;
}
@media(max-width:375px){
.show-on-medium-and-down img{border-radius:15px;}
}

@media(max-width:320px){
.show-on-medium-and-down img{border-radius:15px;}
}

.autocomplete-submit .svg-icon {
    width: 20px;
    height: 20px;
    fill: #fff;
}
svg:not(:root) {
    overflow: hidden;
}

.v-autocomplete{
    display:grid;grid-template-columns:88% 12%;
}
.autocomplete-submit{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 58.92308px;
    width: 58.92308px;
    background: #41509a;
    border: 1px solid #fff;
    border-radius: 50%;
    cursor: pointer;
    transition: all .2s ease;
    position:relative;left:-65px;top:8px;
}

@media (min-width: 480px){
    .v-autocomplete-input {
        height: 74px;
        padding-left: 2rem;
        border-radius: 37px;
        margin-bottom:25px;
        width:100%;
    }
}

@media(max-width:479px){
    .v-autocomplete-input {
        height: 74px;
        padding-left: 2rem;
        border-radius: 37px;
        margin-bottom:25px;
        width:100%;
    }
}





/*position: absolute;
    right: 32%;
    top: 40%;

v-autocomplete
*/




</style>



</head>

<body class="campaigns campaigns-layout">

@yield('content')

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
    


@include('layouts.footer_one')

</body>
</html>