@extends('layouts.suppliers_header')
@section('content')

<div class="container">
<h4>Kontaktinformation (visas ej för kund)</h4>
<h6 style="font-weight:400;">Här fyller du i dina kontaktuppgifter som vi använder för att kontakta dig. Dessa visas inte ut mot kund. Kontaktuppgifter som visas ut mot kund ändrar du i din företagsprofil.</h6>

<!--form starts here-->
<form class="form" method="POST" action="">
@csrf

<div class="row">
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

<div class="form-group col-md-12 col-lg-12 col-xs-12 col-sm-12 adjust_dw">
<input type="checkbox" value="" name="confirm_fran" class="check_box_md" />
<label class="form-label">Få nyhetsbrev från {{config('app.name')}}</label>
</div>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6 adjust_dw">
<label class="form-label">Fakturaadress <Br/>
<b>Använd adressen från min företagsprofil</b>
</label>
</div>
</div>



<div class="row">
<div class="form-group col-md-5 col-lg-5 col-xs-5 col-sm-12">
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
<input type="text" name="Address" class="form-control input-control-lg" placeholder="Adress" 
value="{{\Auth::user()->address }}" required/>
</div>


<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">E-post</label>
<input type="text" name="business_email" class="form-control input-control-lg" placeholder="Adress" 
value="{{\Auth::user()->business_email }}" required/>
</div>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Ort</label>
<input type="text" name="Address" class="form-control input-control-lg" placeholder="Adress" 
value="{{\Auth::user()->address }}" required/>
</div>


<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Postnummer</label>
<input type="text" name="pobox" class="form-control input-control-lg" placeholder="Postnummer" 
value="{{\Auth::user()->pobox }}" required/>
</div>
</div>


<a href="#" onClick="showHide()" class="text-primary underline adjust_dw">C/O Adress</a>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6 adjust_dw" id="hidebox">
<label class="form-label">C/O Adress</label>
<input type="text" name="c_o_address" class="form-control input-control-lg" placeholder="C/O Adress" 
value="{{\Auth::user()->c_o_address }}" required/>
</div>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6 adjust_dw pull-right" >
<button class="btn btn-primary btn-round dark-bg" type="submit">Spara Uppgifter</button>
</div>


</div>


</form>
</div>


@endsection