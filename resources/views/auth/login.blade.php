@extends('layouts.login_layout')
@section('content')

<div id="app">
        <div class="container-wrapper">
    <div class="login-container">
        <div class="login-wrapper">
            <div class="login-inner">
                <a href="{{route('index')}}" class="logo-offerta">
                   <!-- <svg class="logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 7311 3543.31" style="enable-background:new 0 0 7311 3543.31;" xml:space="preserve">
                        <path style="fill: #8BC343" d="M1482.89,3507.69c23.07,23.08,60.48,23.08,83.56,0l458.35-470.7h4731.71c281.87,0,512.49-230.62,512.49-512.49
                            V553.44c0-281.87-230.62-512.49-512.49-512.49H550.49C268.62,40.95,38,271.57,38,553.44V2524.5
                            c0,281.87,230.62,512.49,512.49,512.49h474.05L1482.89,3507.69z"/>
                        <g>
                            <path style="fill: #FFFFFF" d="M1483.22,825.57c341.33,0,645.52,249.37,645.52,654.37c0,403.22-304.2,652.6-645.52,652.6
                                c-339.56,0-643.75-249.37-643.75-652.6C839.47,1074.94,1143.66,825.57,1483.22,825.57z M1483.22,1895.55
                                c194.54,0,392.62-134.42,392.62-417.39s-198.08-417.38-392.62-417.38c-192.77,0-390.85,134.41-390.85,417.38
                                S1290.45,1895.55,1483.22,1895.55z"/>
                            <path style="fill: #FFFFFF" d="M2588.58,1140.38v95.5h196.31v201.61h-196.31v668.52H2351.6v-668.52h-145.02v-201.61h145.02v-99.05
                                c0-196.31,123.8-323.64,316.57-323.64c49.52,0,97.27,8.84,116.73,17.69v198.08c-12.38-5.31-33.6-8.84-74.28-8.84
                                C2657.56,1020.11,2588.58,1043.1,2588.58,1140.38z"/>
                            <path style="fill: #FFFFFF" d="M3219.94,1140.38v95.5h196.31v201.61h-196.31v668.52h-236.99v-668.52h-145.02v-201.61h145.02v-99.05
                                c0-196.31,123.8-323.64,316.57-323.64c49.52,0,97.27,8.84,116.73,17.69v198.08c-12.38-5.31-33.6-8.84-74.28-8.84
                                C3288.91,1020.11,3219.94,1043.1,3219.94,1140.38z"/>
                            <path style="fill: #FFFFFF" d="M4311.16,1856.65c-42.45,152.09-183.93,275.89-396.16,275.89c-240.52,0-449.21-171.55-449.21-465.14
                                c0-277.66,205.15-458.05,427.99-458.05c270.59,0,429.77,169.78,429.77,450.98c0,33.6-3.54,67.2-3.54,72.5h-622.53
                                c5.3,113.19,102.58,198.08,219.3,198.08c111.42,0,169.78-54.81,198.08-132.64L4311.16,1856.65z M4091.85,1571.9
                                c-5.3-84.89-60.13-171.55-194.54-171.55c-122.03,0-189.23,93.73-194.54,171.55H4091.85z"/>
                            <path style="fill: #FFFFFF" d="M4951.4,1469.33c-22.99-5.31-47.75-7.08-70.74-7.08c-120.26,0-224.6,58.36-224.6,245.83v397.92h-235.22
                                v-870.13h228.14v129.1c53.05-114.95,173.32-136.17,247.59-136.17c19.46,0,35.37,1.77,54.83,3.53V1469.33z"/>
                            <path style="fill: #FFFFFF" d="M5405.91,1235.88h175.09v208.69h-175.09v364.33c0,76.05,33.6,100.8,102.58,100.8c28.3,0,60.13-1.77,72.51-7.08
                                v194.55c-21.22,8.84-63.66,21.22-132.64,21.22c-169.78,0-275.89-99.03-275.89-268.81v-405h-157.41v-208.69h44.22
                                c91.96,0,134.41-60.14,134.41-137.95V975.9h212.23V1235.88z"/>
                            <path style="fill: #FFFFFF" d="M5918.78,1605.51l213.99-31.83c49.52-7.08,65.44-31.84,65.44-61.91c0-61.91-47.75-113.19-146.79-113.19
                                c-104.34,0-159.17,65.44-166.25,141.48l-208.69-44.22c14.15-136.17,137.95-286.5,373.17-286.5c275.9,0,378.48,155.63,378.48,330.72
                                v427.99c0,47.75,5.3,107.89,10.61,137.95h-215.77c-5.3-22.99-8.84-70.74-8.84-104.34c-44.21,68.97-127.34,129.11-256.44,129.11
                                c-185.7,0-298.89-127.34-298.89-261.75C5658.79,1711.62,5773.75,1628.49,5918.78,1605.51z M6198.21,1754.07v-38.91l-196.31,30.06
                                c-61.9,8.84-107.88,40.67-107.88,109.64c0,51.3,37.14,100.81,113.19,100.81C6106.24,1955.68,6198.21,1907.93,6198.21,1754.07z"/>
                        </g>
                    </svg>-->
                
<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1900.000000pt" height="1900.000000pt" viewBox="0 0 310 310.31" preserveAspectRatio="xMidYMid meet" class="logo">
<g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
fill="#0d2453" stroke="none">
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
 <div class="login-box">
    <h1>Logga in</h1>
       <form id="form" method="post" novalidate action="{{ route('login') }}">                      
                        <div class="input-wrapper">
                            <div class="form-group text-input">
                                <label for="Email">Email</label>
                                <input type="email" class="input-large @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus data-val="true" data-val-email="Ogilitig e-postadress" data-val-required="Fyll i en e-postadress" id="Email" name="Email" value="" />
                                
                            </div>
                            <span class="error-message field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                            <div class="form-group text-input">
                                <label for="Password">Lösenord</label>
                                <input type="password" class="input-large" placeholder=" " data-val="true" data-val-required="Fyll i ett l&#xF6;senord" id="Password" name="Password" />
                            </div>
                            <div class="link-container">
                                <a class="forgot-password" href="{{ route('password.request') }}">Glömt ditt lösenord?</a>
                                <span class="error-message field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                                
                            </div>
                        </div>
                        <input type="hidden" id="ReturnUrl" name="ReturnUrl" value="" />
                        <div class="form-group submit-and-links">
                            <div class="form-group checkbox-wrapper">
                                <input type="checkbox" class="checkbox" checked="checked" data-val="true" data-val-required="The RememberLogin field is required." id="RememberLogin" name="RememberLogin" value="true" />
                                <label for="RememberLogin"></label>
                                <label for="RememberLogin">Fortsätt vara inloggad</label>
                            </div>
                            <button type="submit" id="submit" class="button button-rounded button-login">Logga in</button>
                            
                        </div>
                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8LRaIQn2hIJCg90zztmrAkE-e7NBF1JsUQlIFxgRbfv379boG1L0tGIi2gfalaiFOc28svyZ4ZKObCzI3tEn1pwlmF_HvZ1gN7EM408GS6h2_zABU-V606X6Oe6spx8wDHW8r4LjhOBUmK8YiqeD9CA" />
                    <input name="RememberLogin" type="hidden" value="false" /></form>
                </div>
            </div>
                <div class="login-footer desktop" >
                    <div class="bottom-links">
                        <a href="{{route('anslut-ditt-foretag')}}" class="link">Anslut företag</a>
                        <a href="https://toppoffert.se/skapa/" class="link">Skapa förfrågan</a>
                    </div>
                </div>
           
        </div>
        
    </div>
            <div class="login-footer mobile" >
                <div class="bottom-links">
                    <a href="{{route('anslut-ditt-foretag')}}" class="link">Anslut företag</a>
                    <a href="https://toppoffert.se/skapa/" class="link">Skapa förfrågan</a>
                </div>
            </div>
</div>

    </div>
@endsection

{{--
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

--}}