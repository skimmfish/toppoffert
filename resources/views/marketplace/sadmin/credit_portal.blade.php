@extends('layouts.admin_app_elite')
@section('content')

@include('layouts.admin_topbar')

<div class="row m-3">
<h1>Hej! {{\Auth::user()->f_name}}</h1>
<p class="line-height-auto">Här hanterar du alla dina leverantörers krediter, tilldelar krediter, baserat på fakturauppfyllelse</p>


</div>
@endsection