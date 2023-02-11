@extends('layouts.supplierheader')
@section('content')
@include('layouts.admin_topbar')

<!--./row starting-->

<div class="row">
<div class="row" > @if (session('message'))   <div class="alert alert-info text-md" style="font-size:14.5px;">  {{ session('message') }}</div>@endif</div>

<h4>Byt lösenord</h4>


<h6 style="font-weight:400;">
Uppdatera ditt lösenord här. Om du behöver hjälp eller har glömt ditt lösenord. Kontakta <a href="{{route('customer_care')}}">kundservice</a>. 
</h6>

<form method="POST" action="{{ route('modifypass',['id'=>auth()->id()]) }}" class="form">
@csrf
@method('PUT')

<div class="row" style="background:#fff;padding:10px 10px 15px 15px;border-radius:8px;">
<div class="row">
<div class="form-group col-md-9 col-lg-9 col-xs-12 col-sm-9">
<label class="form-label">Nuvarande lösenord</label>
<input type="password" name="old_password" class="form-control input-control-lg" placeholder="Nuvarande lösenord" value="{{old('old_password')}}" required/>
</div>
</div>

<div class="row">
<div class="form-group col-md-9 col-lg-9 col-xs-12 col-sm-9">

<div class="labels input-group input-group-merge" data-hs-validation-validate-class>
<label class="form-label labs">Nytt lösenord</label>
<label class="pull-right text-gray">Minst 8 tecken</label>
</div>

<input type="password" name="new_password" class="form-control input-control-lg js-toggle-password" placeholder="Nytt lösenord" value="{{old('new_password')}}"/>
                    
</div>
</div>

<div class="row">
<div class="col-md-5">
<button class="btn btn-primary btn-primary btn-round dark-bg">Uppdatera lösenord</button>
</div>
</div>

 </div>




</form>


<!--./row-->
</div>
@endsection