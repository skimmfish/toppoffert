<x-mail::message>

Tack för ditt intresse för att arbeta med Toppoffert, här är dina inloggningsuppgifter. <br/>

Hej! {{$fname}}<Br/>

Användarnamn: {{$ur_email}}<br/>

Lösenord: {{$ur_pw}}

<x-mail::button :url="{{route('login')}}">Login</x-mail::button>

När du loggat in kan du byta lösenord under "Kontoinställningar".

Hör av dig till oss om du har några frågor, vi finns här för att hjälpa dig.

Vänliga hälsningar,

Thank you.
<br/>
{{ config('app.name') }}
</x-mail::message>
