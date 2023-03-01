<x-mail::message>

<img src="{{asset('img/logos/png.png')}}" lazyloading style="display:block;margin:auto;width:120px !important;height:auto;margin-bottom:15px;">

Kära {{$f_name}},
Du är välkommen till Toppoffert Sverige AB, vänligen gå igenom länken nedan för att se över ditt affärsavtal, det kräver din underskrift så att vi kan komma igång.
Tack.


<x-mail::button :url="$url" color="success">
See Agreement Documents
</x-mail::button>

Tack,<br>
{{ config('app.name') }}
</x-mail::message>
