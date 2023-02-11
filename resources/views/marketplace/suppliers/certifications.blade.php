@extends('layouts.supplierheader')
@section('content')
@include('layouts.admin_topbar')

<div class="container certification_section">
<div class="row" > @if (session('message'))   <div class="alert alert-info text-md" style="font-size:14.5px;">  {{ session('message') }}</div>@endif</div>


<a href="{{url()->previous()}}" 
class="text-black btn btn-white">
<svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> back
</a>
<br/><br/>

<div class="row">
<h1>Hej! {{\Auth::user()->f_name}}</h1>
<p class="line-height-auto">Ladda upp ditt företags certifieringar här</p>

<form action="" method="POST">

@csrf
<div class="form-group">

</div>

</form>
</div>
</div>

@endsection
