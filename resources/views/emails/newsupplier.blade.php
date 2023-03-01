<x-mail::message>

<img src="{{asset('img/logos/png.png')}}" lazyloading style="display:block;margin:auto;width:130px !important;height:auto">

<div>Hej {{$f_name}}!</div>
<p>
{{$msg}}
</p>

Tack!
<br/>
{{ config('app.name') }}
</x-mail::message>
