<x-mail::message>

<img src="{{asset('img/logos/png.png')}}" lazyloading style="display:block;margin:auto;width:130px !important;height:auto">

Hej {{$f_name}}!

{{$msg}}

Thank you.
<br/>
{{ config('app.name') }}
</x-mail::message>
