@php

$catName = null; $subCatNameSelected = null;

if(isset($catSelected) && isset($subCatSelected)){

  $catName = \App\Http\Controllers\CategoriesController::getcatdata('cat_name',$catSelected);
  
$subCatNameSelected = \App\Http\Controllers\CategoriesController::getsubcatdata('subcat_name',$subCatSelected).'_'.$catSelected.'_'.$subCatSelected;

}
@endphp


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
	<link rel="stylesheet" text="text/css" href="{{asset('css/skapcss.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Spartan:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

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


<!--this function fetches all the associated sub_Cat_names-->
<script type="text/javascript">
function fetchCategoriesForSkapa(category){
    if(category){
    $.ajax({
    type: 'GET',
    url: "{{ route('categories_for_page') }}",
   
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

<style>


.form-control{

  padding:17px 11px;

}
  </style>
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


<main class="content-main" role="main" style="background:#0d2453">   

<section class="section" style="padding:0">
<div class="white-bg" style="background:#fff !important;margin:0 !important;padding:100px 0 50px 50px;">

<h1 class="page-title text-white" style="font-family:'Spartan' !important;margin-bottom:35px;color:#000;">Vi introducerar dig till f&#246;retag <br/>redo att hjälpa dig</h1>
		@if(!is_null($subCatNameSelected))
		<p class="page-subtitle text-pull-left text-white"><span class="tiny text-lg-1x">Få hjälp med </span>
    <b class="text-black">{{$catName}}</b></p>
        @else
		<p class="page-title text-pull-left text-white text-lg-1x">Beskriv ditt behov och ta emot upp till sex offerter från lokala tjänsteföretag</p>
		@endif
</div>

</section>


<section class="section">

<div class="container">

		<div class="grid">
            <div class="content">

            <form method="POST" action="{{route('skapa_request')}}" enctype="multipart/form-data">
          @csrf 
          @method('POST')
          <div class="row">
          <div class="form-group">
          <label class="form-label">Vad behöver du hjälp med?</label>
          
          <input id="WhatText" name="catName" maxlength="100" list="cat_name" value="@if(isset($catSelected)) {{$catName}} @else {{old('catName')}} @endif" onChange="fetchCategoriesForSkapa(this.value)" title="Ange uppdragstyp" placeholder="Ange uppdragstyp" onClick="fetchCategoriesForSkapa(this.value)" name="cat_name" class="form-control form-control-lg input-lg flex-input" placeholder="Ange uppdragstyp" required />

            <datalist id="cat_name" onChange="fetchCategoriesForSkapa(catName.value)" onClick="fetchCategoriesForSkapa(catName.value)">
              @if(isset($catSelected))
                <option selected value="{{$catName}}">{{$catName}}</option>
                  @else
                    <option value="">Välj ett alternativ</option>  
                        @foreach($categories as $s)
                           <option value="{{$s->cat_name}}">{{ ucfirst($s->cat_name) }}</option>
                               @endforeach
                                   @endif
                                      </datalist>
                                            </div>

            <div class="form-group">

            <label class="form-label" for='sub_category'>Välj en underkategori för din förfrågan</label>
				<br/>
                	@if(isset($subCatSelected) && !is_null($subCatSelected))
                  	<input type="hidden" name="sub_category" class="form-control form-control-lg input-lg flex-input" value="{{$subCatNameSelected}}" style="height:70px;padding-top:0 !important;"/>
                    <input type="text" name="sub_catgr" class="form-control form-control-lg input-lg flex-input" value="{{$catName}}" style="height:70px;padding-top:0 !important;"/>

                    
                    @else
                    <div id="subcategories_fetcher"></div>
                      @endif
                    <!--end of subcategory-->      
                    </div>

                    <div class="form-group">
    <label for="request_title" class="form-label">Beskrivning</label>
    <textarea class="flex-input enquiry-description form-control" id="request_title" maxlength="4000" name="request_title" placeholder="Tips: En bra och tydlig beskrivning möjliggör fler och bättre svar" rows="2" required>
</textarea>

<span class="text-black">@if($errors->has('request_title'))
              {{ $errors->first('request_title') }}
              @endif
                </span>
                  </div>

<!--end of request_title-->

            <!--for territory of assignment-->
            <div class="form-group">
              <label for="territory" class="form-label">Plats</label>
            {{-- <input class="flex-input form-control" style="height:65px !important;" placeholder="Plats" 
            name="territory" type="text" value="{{old('territory')}}" required/> --}}
           
           
           
<select name="territory" class="flex-input form-control">
<option selected="" value="{{old('territory')}}">Hela Sverige</option>
<option>Blekinge</option>
<option>Dalarna</option>
<option>Gotland</option>
<option>Gävleborg</option>
<option>Göteborg</option>
<option>Halland</option>
  <option>Jämtland</option>
  <option>Jönköping</option>
  <option>Kalmar</option>
  <option>Kronoberg</option>
  <option>Norrbotten</option>
  <option>Skaraborg</option>
  <option>Skåne</option>
  <option>Stockholm</option>
  <option>Södermanland</option>
  <option>Uppsala</option>
  <option>Värmland</option>
  <option>Västerbotten</option>
  <option>Västernorrland</option>
  <option>Västmanland</option>
  <option>Älvsborg</option>
<option>Örebro</option>
<option>Östergötland</option>
</select>
           
            <span class="text-danger">@if($errors->has('territory'))
              {{ $errors->first('territory') }}
              @endif
                </span>
                  </div>

                  <!--end of plats-->


            <div class="form-group">
                <label for="WhoId" class="form-label">Uppdraget ska utf&#246;ras &#229;t</label><br/>
                  <select id="WhoId" name="executed_for" class="flex-input form-control">
                    <option value="1">Bostadsr&#228;ttsf&#246;rening</option>
                        <option value="2">Byggherre/Entrepren&#246;r</option>
                          <option value="3">F&#246;retag</option>
                            <option value="4">Ideell f&#246;rening</option>
                              <option value="5">Kommun/Myndighet</option>
                                <option value="6">Privatperson</option>
                                    <option value="7">Villaf&#246;rening</option>
                                      </select> 
                                          </div>

            <div class="form-group">
                <label for="WhenId" class="form-label">N&#228;r ska uppdraget p&#229;b&#246;rjas</label>
                    <select id="WhenId" name="when_to" class="flex-input form-control">
                    <option value="Snarast m&#246;jligt">Snarast m&#246;jligt</option>
                    <option value="Inom 1 m&#229;nad">Inom 1 m&#229;nad</option>
                    <option value="Inom 3 m&#229;nader">Inom 3 m&#229;nader</option> 
                    <option value="Inom 6 m&#229;nader">Inom 6 m&#229;nader</option>
                    <option value="Inom 12 m&#229;nader">Inom 12 m&#229;nader</option>
                    <option value="Tidpunkt mindre viktig">Tidpunkt mindre viktig</option>
                    </select>
                </div>
 


<div class="two-columns">
<div class="form-group column">
		  <label for="fro_date" class="form-label">Från vilket datum </label>
		  <input class="flex-input form-control" style="width:100%;margin-top:8px;" id="fro_date" name="fro_date" type="date" value="{{old('fro_date')}}" required/>

		  <span class="text-black">@if($errors->has('fro_date'))
		{{ $errors->first('fro_date') }}
		@endif
	  </span>
</div>


<div class="form-group column">
		  <label for="to_date" class="form-label" style="margin-top:-8px !important;">Till när</label>
		  <input class="flex-input form-control" style="width:100%;margin-top:0px;" id="to_date" name="to_date" type="date" value="{{old('to_date')}}" required/>
	  </div>

	  <span class="text-black">@if($errors->has('to_date'))
		{{ $errors->first('to_date') }}
		@endif
	  </span>

</div>
</div>

<!--end of dates-->

<hr class="divider-full-width" />
        <h5 class="media-content h4 form-label">
            Kontaktuppgifter
</h5>

<hr class="divider-full-width" />


            <div class="form-group">
                <label for="Name" class="form-label">Namn</label>
                <input autocomplete="name" class="flex-input form-control" id="Name" placeholder="Namn" name="Name" type="text" value="{{old('Name')}}" />
            <span class="text-black">@if($errors->has('Name'))
              {{ $errors->first('Name') }}
              @endif
            </span>

          </div>


<!--email-->
		  <div class="form-group">
			<label for="Name" class="form-label">E-post</label>
                <input autocomplete="email" class="full-width input-email flex-input form-control" id="Email" name="Email" type="email" value="{{old('Email')}}" />
            
            <span class="text-black">@if($errors->has('Email'))
              {{ $errors->first('Email') }}
              @endif
            </span>

        </div>
<!--end of E-post-->

            <div class="form-group">
                <label for="Name" class="form-label">Telefon</label>
                <input autocomplete="tel" class="flex-input form-control" id="Phone" name="Phone" type="tel" value="{{old('Phone')}}" />
            <span class="text-black">@if($errors->has('Phone'))
              {{ $errors->first('Phone') }}
              @endif
            </span>

          </div>
<!--end of Telefon-->

                <div class="form-group">
                    <label for="Name" class="form-label">Postnummer (d&#228;r uppdraget ska utf&#246;ras)</label>
        <input autocomplete="postal-code" class="flex-input form-control" data-regexp="^(?:[ ]*[0-9]){5}[?:[ ]*]*$" id="PostCode" name="PostCode" placeholder="Postnummer" title="Postnr." type="number" value="{{old('PostCode')}}" />
			    <span class="text-black">@if($errors->has('PostCode'))
              {{ $errors->first('PostCode') }}
              @endif
            </span>
         </div>

<!--Postal-code-->
         
<!--nxt-->
<div class="two-columns">
<div class="form-group column">
		  
<label for="ContactPreferencesId" class="form-label">N&#228;r vill du bli kontaktad</label>
                      <select id="ContactPreferencesId" name="whentobecontacted" class="flex-input form-control" style="width:99%">
          <option value="N&#228;r som helst">N&#228;r som helst</option>
<option value="Omg&#229;ende">Omg&#229;ende</option>
<option value="F&#246;rmiddag">F&#246;rmiddag</option>
<option value="Eftermiddag">Eftermiddag</option>
<option value="Kv&#228;ll">Kv&#228;ll</option>
</select>
</div>


<div class="form-group column">
		  <label for="filer" class="form-label" style="position:relative;top:-12px !important;">Välj en fil</label><br/>
		  <input class="flex-input form-control file" style="width:99%;margin-top:-9px;width:99%" id="filer" name="filer" type="file" value="{{old('filer')}}" />
	  </div>
	  <span class="text-black">@if($errors->has('filer'))
		{{ $errors->first('filer') }}
		@endif
	  </span>
</div>
</div>
</div>
<!--end of nxt-->

<div class="form-group column">
<button type="submit" class="button btn-flat-bed" name="gratis" style="width:64%">
<svg width="50px" height="50px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="#ffffff" d="M128 224v512a64 64 0 0 0 64 64h640a64 64 0 0 0 64-64V224H128zm0-64h768a64 64 0 0 1 64 64v512a128 128 0 0 1-128 128H192A128 128 0 0 1 64 736V224a64 64 0 0 1 64-64z"/><path fill="#ffffff" d="M904 224 656.512 506.88a192 192 0 0 1-289.024 0L120 224h784zm-698.944 0 210.56 240.704a128 128 0 0 0 192.704 0L818.944 224H205.056z"/></svg>	

<span>Gratis!</span></button>
</div>
</form>

</div>

</section>
        </main>

		@include('pages.footer')
    </body>
</html>