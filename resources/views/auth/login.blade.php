@extends('layouts.login_layout')
@section('content')

<style>
.form-group label{
    font-size:90%;
}
.text-center{
diplay:block;
margin:auto;
text-align:center;
}
.alert{
    background:#9dddc2;padding:10px;border-radius:5px;color:#000;
}
.logo-wrapper{
    display:flex;
    flex-direction:row;justify-self: center;
    margin:auto;position:relative;z-index:100000;
    justify-content:center;top:-20px;

}
.logo-wrapper .logo-offer .logo{
   display:block; width:230px !important;position:relative;z-index:100000 !important;
}
    </style>

<div id="app">

<div class="logo-wrapper">
<a href="{{route('index')}}" class="logo-offerta">
                   
                   <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300.31" class="logo" preserveAspectRatio="xMidYMid meet">
                   <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
                   fill="#005aad" stroke="none">
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
                   

</div>



<div class="container-wrapper">

<div class="login-container">
        <div class="login-wrapper">
        <div class="login-inner">

                      @if (session('status'))
                            <div class="alert alert-success" style="text-align:center;margin:0 0 10px auto;background:#9eeec2;padding:9px;border-radius:8px;color:#000">
                                {{ session('status') }}
                                </div>
                                @endif


 <div class="login-box">
    <h1>Logga in</h1>
       <form method="POST" action="{{route('login')}}" id="login_form">      
        @csrf                
                        <div class="input-wrapper">
                            <div class="form-group text-input">
                                <label for="Email">Email</label>
                                <input type="email" class="input-large @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus data-val="true" placeholder="Ogilitig e-postadress" id="Email" name="email" value="{{old('email')}}" reqired />
                            </div>
                            <span class="error-message field-validation-valid text-danger error-text email_error text-danger"></span>

                            <div class="form-group text-input">
                                <label for="Password">Lösenord</label>
                                <input type="password" class="input-large" placeholder="Fyll i ett l&#xF6;senord" data-val="true" id="password" name="password" required/>
                            </div>

                            <div class="link-container">
                                <a class="forgot-password" href="{{ route('password.request') }}">Glömt ditt lösenord?</a>
                                <span class="error-message field-validation-valid text-danger error-text text-danger password_error"></span>                                
                            </div>
                        </div>

                        <input type="hidden" id="ReturnUrl" name="ReturnUrl" value="" />
                        <div class="form-group submit-and-links">
                            <div class="form-group checkbox-wrapper">
                                <input type="checkbox" class="checkbox" checked="checked" data-val="true" data-val-required="The RememberLogin field is required." id="RememberLogin" name="RememberLogin" value="true" />
                                <label for="RememberLogin"></label>
                                <label for="RememberLogin">Fortsätt vara inloggad</label>
                            </div>
                            <button type="submit" id="submit" class="button button-rounded" style="background:#0055aa;height:60px;border-radius:50px;cursor:pointer">Logga in
                        
                            <svg width="25px" height="25px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.6728 22L16.1434 13.0294C16.4081 12.75 16.4081 12.3088 16.1434 12.0147L7.65808 3" stroke="#ffffff" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                        </button>
                            
                        </div>
                    <input name="RememberLogin" type="hidden" value="false" /></form>
                </div>
            </div>
                <div class="login-footer desktop" >
                    <div class="bottom-links">
                        <a href="{{route('anslut-ditt-foretag')}}" class="link">Anslut företag</a>
                        <a href="{{route('skapa')}}" class="link">Skapa förfrågan</a>
                    </div>
                </div>
           
        </div>
        
    </div>
            <div class="login-footer mobile" >
                <div class="bottom-links">
                    <a href="{{route('anslut-ditt-foretag')}}" class="link">Anslut företag</a>
                    <a href="{{route('skapa')}}" class="link">Skapa förfrågan</a>
                </div>
            </div>
</div>

    </div>

@endsection

