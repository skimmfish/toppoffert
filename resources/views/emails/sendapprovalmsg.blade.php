<x-mail::message>


<img src="{{asset('img/logos/png.png')}}" lazyloading style="display:block;margin:auto;width:130px !important;height:auto">


Kara! {{$fname}}

Tack för ditt intresse för att arbeta med Toppoffert, här är dina inloggningsuppgifter. 

Användarnamn: {{$ur_email}}

Lösenord: {{$ur_pw}}

<x-mail::button :url="'https://toppoffert.se/se/home/login'">
Login
</x-mail::button>

När du loggat in kan du byta lösenord under Kontoinställningar.

Hör av dig till oss om du har några frågor, vi finns här för att hjälpa dig.

Vänliga hälsningar,


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
