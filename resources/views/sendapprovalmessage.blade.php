<x-mail::message>

<img src="{{asset('img/logos/png.png')}}" lazyloading style="display:block;margin:auto;width:130px !important;height:auto">

Hej! {{$name}}, Din förfrågan {{$title}} har skickats ut till {{$no_of_coy}} av {{config('app.name')}} tjänsteföretag.

<b>Vad händer nu?</b>
Upp till sex företag kan besvara din förfrågan och ta kontakt med dig. 
När ett företag besvarat din förfrågan kan du logga in på ditt {{config('app.name')}}-konto för att läsa mer om dem. Här kan du även ta del av företagets omdömen och referenser samt få en bra överblick 
av alla företag som besvarat din förfrågan.

Användarnamn: {{$ur_email}}<br/>

Lösenord: {{$ur_pass}}

<x-mail::button :url="{{route('login')}}">
Login
</x-mail::button>

Tänk på att företagen lägger ner tid och engagemang på att skicka en offert. Svara därför de företag som kontaktar dig och meddela om du valt dem eller någon annan.

Glöm inte att avaktivera din förfrågan när du valt företag.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
