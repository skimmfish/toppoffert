@extends('layouts.supplierheader')
@section('content')
@include('layouts.admin_topbar')

<style>
    .row{
        line-height:20px !important;margin-bottom:-15px !important;
    }
    .alert{
        font-family:'Spartan','GD Sherpa Regular';
    }
    </style>


<div class="container">

<div class="row" > @if (session('message'))   <div class="alert alert-info text-md" style="font-size:13px;">  {{ session('message') }}</div>@endif</div>

<h4>Kontaktinformation (visas ej för kund)</h4>
<h6 style="font-weight:400;">Här fyller du i dina kontaktuppgifter som vi använder för att kontakta dig. Dessa visas inte ut mot kund. Kontaktuppgifter som visas ut mot kund ändrar du i din företagsprofil.</h6>

<!--form starts here-->
<form class="form wht-bg" style="border-radius:9px;line-height:20px;" method="POST" action="{{route('save_kontact',['id'=>\Auth::user()->id])}}">
@csrf
@method('PUT')

<div class="row wht-bg">
<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Förnamn</label>
<input type="text" name="first_name" class="form-control input-control-lg" placeholder="Förnamn" value="{{\Auth::user()->f_name}}" required/>
</div>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Efternamn</label>
<input type="text" name="last_name" class="form-control input-control-lg" placeholder="Förnamn" value="{{\Auth::user()->l_name}}" required/>
</div>
</div>

<div class="row">
<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">E-post</label>
<input type="email" name="email" class="form-control input-control-lg" placeholder="Förnamn" value="{{\Auth::user()->email}}" required/>
</div>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Telefon</label>
<input type="text" name="telephone" class="form-control input-control-lg" placeholder="Telefon" 
value="{{\Auth::user()->telephone }}" required/>
</div>

</div>

<Div class="row ">
<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Alt. Telefon (Valfritt)</label>
<input type="text" name="alt_telephone" class="form-control input-control-lg" placeholder="Alt. Telefon" 
value="{{\Auth::user()->phone_no }}" required/>
</div>

</div>

<div class="row">
<div class="form-group col-md-12 col-lg-12 col-xs-12 col-sm-12 adjust_dw">
@if(\Auth::user()->receive_top_offers=='off')
<input type="checkbox" name="receive_top_offers" class="check_box_md" />
@else
<input type="checkbox" name="receive_top_offers" checked class="check_box_md" />
@endif
<label class="form-label tk_up">Få nyhetsbrev från {{config('app.name')}}</label>
</div>


<div class="form-group col-md-8 col-lg-8 col-xs-12 col-sm-8 adjust_dw">
<label class="form-label">Fakturaadress Adress<Br/>
<b>Använd adressen från min företagsprofil</b>
</label>
</div>
</div>

<hr/>


<div class="row">
<div class="form-group col-md-4 col-lg-4 col-xs-4 col-sm-4">
<label class="form-label">Fakturatyp: </label>
</div>

<div class="col-md-4 col-lg-4">
<select name="faktura" class="form-control">
<option value="E-postfaktura">E-postfaktura</option>
<option value="Papersfaktura">Papersfaktura</option>
</select>
</div>
</div>


<div class="row">
<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Adress</label>
<input type="text" name="address" class="form-control input-control-lg" placeholder="Adress" 
value="{{\Auth::user()->address }}" required/>
</div>


<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Företags-e-post</label>
<input type="text" name="business_email" class="form-control input-control-lg" placeholder="Företags-e-post" 
value="{{\Auth::user()->business_email }}" required/>
</div>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Provins</label>
<input type="text" name="province" class="form-control input-control-lg" placeholder="Provins" 
value="{{\Auth::user()->province }}" required/>
</div>


<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Postnummer</label>
<input type="text" name="pobox" class="form-control input-control-lg" placeholder="Postnummer" 
value="{{\Auth::user()->pobox }}" required/>
</div>
</div>

<Br/>
<a href="#" onClick="showHide()" class="text-primary underline adjust_dw">C/O Adress</a>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6 adjust_dw" id="hidebox">
<Br/>
<label class="form-label">C/O Adress</label>
<input type="text" name="c_o_address" class="form-control input-control-lg" placeholder="C/O Adress" 
value="{{\Auth::user()->c_o_address }}" required/>
</div>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6 adjust_dw pull-right" >
<button class="btn btn-primary btn-round dark-bg" style="background:#0d2453 !important;color:#fff;border:0;" type="submit">Spara Uppgifter</button>
</div>


</div>


</form>
</div>


@endsection