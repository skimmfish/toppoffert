<x-mail::message>
# Introduction

<img src="{{ $message->embed('img/logos/site_logo.png')}}" lazyloading style="display:block;margin:auto;">

Hej {{$f_name}}

Här kommer ditt nya lösenord.

Användarnamn: {{$ur_email}}

Lösenord: {{$ur_pw}}

<x-mail::button :url="{{route('login')}}">Login</x-mail::button>

När du loggat in kan du byta lösenord under "Kontoinställningar".

Hör av dig till oss om du har några frågor, vi finns här för att hjälpa dig.

Vänliga hälsningar,
<br/>
{{ config('app.name') }}
</x-mail::message>
