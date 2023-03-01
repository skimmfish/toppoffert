<x-mail::message>

<img src="{{asset('img/logos/png.png')}}" lazyloading style="display:block;margin:auto;width:130px !important;height:auto">

Hej!, Admin, här är en ny kundförfrågan med detaljer nedan:

{{$msg}}
Avsändarens namn: {{$name}}
E-post: {{$reply_email}}
Telefon: {{$phone}}

<x-mail::button :url="mailto:$reply_email">
Svara till kunden
</x-mail::button>

Tack,<br>
{{ config('app.name') }}
</x-mail::message>
