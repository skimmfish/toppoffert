

<div class="new-header__menu" role="navigation">

    <a href="{{route('anslut-ditt-foretag')}}" class="new-header__menu--item">Anslut företag</a>  

    <a href="{{ route('intresseanmalan') }}" class="new-header__menu--item">Anmäl Intresse</a>  

    @if(\Auth::check())
      <a href="{{route('redirect_to_dashboard')}}" class="new-header__menu--item">
        @if(!is_null(\Auth::user()->profile_img))
        <img src="{{asset('img/avatar/'.\Auth::user()->profile_img)}}" class="img_avatar"/> {{\Auth::user()->f_name}} {{\Auth::user()->l_name}}
      @else

      <svg width="30px" height="30px" viewBox="0 0 24 24" style="position:relative;left:-15px;top:4px;" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.5 21.0001H6.5C5.11929 21.0001 4 19.8808 4 18.5001C4 14.4194 10 14.5001 12 14.5001C14 14.5001 20 14.4194 20 18.5001C20 19.8808 18.8807 21.0001 17.5 21.0001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>


        @endif
    </a>
      @else
      <a href="{{route('login')}}" class="new-header__menu--item loginlk">Logga In</a>
    @endif
   

    <a class="nav-icon" data-toggle-menu="mobile-nav" onClick="showLogo()">
        <div class="text-menu"></div>
        </a>
</div>
        <input type="checkbox" id="active">
        <label for="active" class="menu-btn-left">
          <!--logo-->
<a href="{{route('index')}}" aria-label="Hem" id="_dropdown_logo">
<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="130.000000pt" height="130.000000pt" class="svg_logo" viewBox="0 0 500.000000 500.000000"
 preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
fill="#005aad" stroke="none"><path d="M943 3272 c-156 -51 -248 -200 -274 -446 -17 -163 2 -336 50 -448 23
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
17 -145 54 -19 21 -25 40 -28 89 -6 114 47 167 168 167 47 0 74 -6 97 -20z"/><path d="M2668 2829 c-50 -19 -64 -134 -22 -180 24 -27 87 -26 114 3 27 29 29
126 3 156 -22 26 -59 34 -95 21z"/><path d="M1482 2748 c-7 -7 -12 -35 -12 -63 0 -57 12 -75 50 -75 38 0 50 18
50 75 0 57 -12 75 -50 75 -14 0 -31 -5 -38 -12z"/><path d="M1877 2742 c-20 -22 -23 -92 -5 -110 17 -17 65 -15 72 4 3 9 6 35 6
59 0 34 -5 47 -19 55 -27 14 -35 13 -54 -8z"/><path d="M2256 2744 c-19 -18 -22 -94 -4 -112 7 -7 21 -12 33 -12 32 0 45 20
45 66 0 43 -19 74 -45 74 -7 0 -21 -7 -29 -16z"/><path d="M3538 2759 c-36 -21 -21 -39 32 -39 52 0 60 8 34 34 -18 18 -41 20
-66 5z"/></g></svg></a>
<!--end of navigation_logo--> 
</label>



<script>

function showClose(){

var div = document.getElementById('open');
div.style.display = 'none';
div.style.visibility = 'hidden';


var divClose = document.getElementById('close');
divClose.style.display = 'block';
divClose.style.visibility = 'visible';

}



function showOpen(){

  var div = document.getElementById('open');
div.style.display = 'block';
div.style.visibility = 'visible';
div.style.position = 'relative';
div.style.left = '9.3px';
div.style.top = '9.2px';

var divClose = document.getElementById('close');
divClose.style.display = 'none';
divClose.style.visibility = 'hidden';

}

</script>


<label for="active" class="menu-btn">

<div style="background:#dfdfdf;width:50px;height:50px;border-radius:50%;">

<svg width="30px" height="30px" class="navhamburger" viewBox="0 0 24 24" fill="none" onClick="showClose()" id="open" xmlns="http://www.w3.org/2000/svg">
<path d="M4 17H20M4 12H20M4 7H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

<svg width="40px" height="40px" viewBox="0 0 32 32" onClick="showOpen()" id="close" style="display:none;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g id="icomoon-ignore">
</g>
<path d="M10.722 9.969l-0.754 0.754 5.278 5.278-5.253 5.253 0.754 0.754 5.253-5.253 5.253 5.253 0.754-0.754-5.253-5.253 5.278-5.278-0.754-0.754-5.278 5.278z" fill="#000000">
</path>
</svg>


</div>


</label>

      <div class="wrapper">
      <ul>
      <li class="show_768">
      @if(\Auth::check())
      <a href="{{route('redirect_to_dashboard')}}" class="lia"><img src="{{asset('img/avatar/'.\Auth::user()->profile_img)}}" class="img_avatar"/>{{\Auth::user()->f_name}} {{\Auth::user()->l_name}}</a>
      @else
      <a href="{{route('login')}}" id="lia">Logga In</a>
    @endif
    </li>
 
 <li>   <a href="{{route('anslut-ditt-foretag')}}" id="lia">Anslut företag</a>  </li>

    <li><a href="{{ route('intresseanmalan') }}" id="lia">Anmäl Intresse</a> </li> 

      <li><a href="{{route('kontactos-pg')}}" id="lia">Kontakta Oss</a></li>

      <!--
      <li class="hr"><hr/></li>

      <li class="grid_case">
    <span><a class="href">Toppoffert Sverige AB</a></span>
    <span class="hidden_375"><a href="tel:{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}" class="href">{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}</a></span>
    <span class="hidden_425"><a href="mailto:info@toppoffert.se" class="href">info@toppoffert.se</a></span>
    
              <span class="social">
                <a href="https://www.facebook.com/toppoffert.se/" class="social-icons social-icon-y">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-small">
                  <path d="M18.14 7.17a.5.5 0 0 0-.37-.17H14V5.59c0-.28.06-.6.51-.6h3a.44.44 0 0 0 .35-.15.5.5 0 0 0 .14-.34v-4a.5.5 0 0 0-.5-.5h-4.33C8.37 0 8 4.1 8 5.35V7H5.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5H8v11.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5V12h3.35a.5.5 0 0 0 .5-.45l.42-4a.5.5 0 0 0-.13-.38z" />
                </svg>
                </a>
                <a href="https://www.instagram.com/toppoffert.se/" class="social-icons social-icon-y">  
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-small">
                <path d="M17.5 0h-11A6.51 6.51 0 0 0 0 6.5v11A6.51 6.51 0 0 0 6.5 24h11a6.51 6.51 0 0 0 6.5-6.5v-11A6.51 6.51 0 0 0 17.5 0zM12 17.5a5.5 5.5 0 1 1 5.5-5.5 5.5 5.5 0 0 1-5.5 5.5zm6.5-11A1.5 1.5 0 1 1 20 5a1.5 1.5 0 0 1-1.5 1.5z" />
                </svg>
                </a>
                </span>

    </li>-->

    </ul>


    </div>
</div>

