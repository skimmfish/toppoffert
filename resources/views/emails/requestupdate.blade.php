<x-mail::message>
<img src="{{ asset('img/logos/png.png')}}" lazyloading style="display:block;margin:auto;width:130px;height:auto">

Hej {{$f_name}}

Din förfrågan {{$request_title}} har skickats ut till {{$quote_company_count}} av {{config('app.name')}} tjänsteföretag.
Vad händer nu?

Upp till sex företag kan besvara din förfrågan och ta kontakt med dig. När ett företag besvarat din förfrågan kan du logga in på ditt Offerta-konto för att läsa mer om dem. Här kan du även ta del av företagets omdömen och referenser samt få en bra överblick av alla företag som besvarat din förfrågan. 

<x-mail::button :url="'login'">
    Logga In
</x-mail::button>

Tänk på att företagen lägger ner tid och engagemang på att skicka en offert. Svara därför de företag som kontaktar dig och meddela om du valt dem eller någon annan.

Glöm inte att avaktivera din förfrågan när du valt företag. 


Vänliga hälsningar,

{{ config('app.name') }}
</x-mail::message>
