@extends('layouts.supplierheader')
@section('content')
@include('layouts.admin_topbar')

<style>
    body,h4,span{
        font-family:'Spartan','GD Sherpa Regular' !important;
    }
    .row{
        line-height:20px !important;margin-bottom:-15px !important;
    }
    .alert{
        font-family:'Spartan','GD Sherpa Regular';
    }
    </style>


<div class="container-fluid">

<div class="row" > @if (session('message'))   <div class="alert alert-info text-md" style="font-size:13px;">  {{ session('message') }}</div>@endif</div>

<h4>Kontaktinformation (visas ej för kund)</h4><HR/>
<h6 style="font-weight:400;font-family:'Spartan' !important;font-size:14.5px !important;">Här fyller du i dina kontaktuppgifter som vi använder för att kontakta dig. Dessa visas inte ut mot kund. Kontaktuppgifter som visas ut mot kund ändrar du i din företagsprofil.</h6>

<!--form starts here-->

<div class="row certificates">

<!--for certifications-->
<div class="col-md-8 col-lg-8 col-sm-8 col-xl-8 col-xs-12">

@if($certificate==NULL)

<a href="#" class="btn btn-dark" style="background:#0d2453 !important;padding-top:13.5px;border:0 !important" data-attr="{{route('file_uploader_view',['id'=>Auth::user()->id])}}" title="Ladda upp certifieringsdokument" data-toggle="modal" data-target="#requestModal" id="uploadCertificate">
<svg width="35px" height="35px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Ladda upp certifieringsdokument</title><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Upload-2"><rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"></rect><line x1="12" y1="14" x2="12" y2="20" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></line><path d="M15,15 L12.7071,12.7071 C12.3166,12.3166 11.6834,12.3166 11.2929,12.7071 L9,15" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path><path d="M19.9495,16 C20.5978,15.3647 21,14.4793 21,13.5 C21,11.567 19.433,10 17.5,10 C17.3078,10 17.1192,10.0155 16.9354,10.0453 C16.4698,6.63095 13.5422,4 10,4 C6.13401,4 3,7.13401 3,11 C3,12.9587 3.80447,14.7295 5.10102,16" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path></g></g></svg>
</a>

@endif

</div>

<!--for company registration cert-->
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4 col-xs-12">

</div>
</div>


<form class="form wht-bg" style="border-radius:9px;line-height:20px;padding:15px;" method="POST" action="{{route('save_kontact',['id'=>\Auth::user()->id])}}">

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

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="form-label">Välkomstmeddelande till köpare</label>
<textarea type="text" name="welcome_msg_to_buyers" class="form-control input-control-lg" placeholder="Ange det första meddelandet som går till din potentiella kund när du lägger bud på jobb på Toppoffert">{{ old('welcome_msg_to_buyers') }}</textarea>
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



<!--modals-->
		<!-- view modal -->
        <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onClick="closeModal('#requestModal')" data-dismiss="modal" aria-label="Close"style="border-radius:50%;width:35px;height:35px;border:0;color:#0d2453;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection