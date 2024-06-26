@extends('layouts.admin_app_elite')
@section('content')

@include('layouts.admin_topbar')

<style>
.row{
    margin-bottom:20px;
}
.label{font-weight:600 !important;font-size:13.5px;}
.form-group{
    margin-bottom:10px !important;
}
</style>



<div class="row m-3">

<div class="notify_div">
@if (session('message')) 
 <div class="alert alert-info text-md">  {{ session('message') }} </div>
              @elseif(session('error'))
              <div class="alert alert-danger text-md">  {{ session('error') }}   </div>  
                      @endif 
                    <!--./notify-->
                    </div>

<Br/>
<div class="row" style="margin-bottom:15px;">
<a href="{{url()->previous()}}"  class="text-black btn btn-white" style="height:40px;border-radius:40px;padding-top:6px !IMPORTANT;margin-bottom:15px;">
<svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> Tillbaka
</a>
</div>


<h1 class="line-height-auto">Hej! {{\Auth::user()->f_name}}</h1>
<p class="line-height-auto">Skapa nya leverantörer här<br/>
<small class="line-height-auto">Ange din nya leverantörs information i enlighet med detta</small>
</p>

<hr/>

<form class="form wht-bg form-border" action="{{route('create_supplier')}}" method="POST">
@csrf

<div class="row">
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 form-group">
<label class="label">Kontakt Person</label>
<input type="text" name="contactPerson" class="form-control" placeholder="Kontakt Person" value="{{old('contactPerson')}}" required/>
</div>

<span class="">
      @if($errors->has('contactPerson'))
        <span class="help-block">
            <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('contactPerson') }}</strong>
                </span>
                    @endif   
                        </span>
</div>


    <div class="row">
    <div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6 col-12">
        <label class="label">Företagsnamn eller org-nummer</label>
            <input class="form-control input-control-lg" type="text" name="company" value="{{old('company')}}"
                autocomplete="off" placeholder="Företagsnamn eller org-nummer">
            <span class="help-block">
            @if($errors->has('company'))
   <span class="help-block">
   <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('company') }}</strong>
    </span>
    @endif   
        </span>
</div>

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="label">E-post</label>
<input type="email" name="email" class="form-control input-control-lg" placeholder="E-post" value="{{old('email')}}" required/>
                    <span class="">                      
                    @if($errors->has('email'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('email') }}</strong>
                       </span>
                       @endif
                   </span>                   
</div>
</div>


<div class="row">

<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="label">Telefon</label>
<input type="text" name="phoneNumber" class="form-control input-control-lg" placeholder="Telefon" 
value="{{old('phoneNumber') }}" required/>

<span class="input-error-icon">                      
                    @if($errors->has('phoneNumber'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('phoneNumber') }}</strong>
                       </span>  @endif </span>
</div>


<div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6">
<label class="label">Alt. Telefon</label>
<input type="text" name="phone_no" class="form-control input-control-lg" placeholder="Alt. Telefon" 
value="{{old('phone_no') }}" required/>

<span class="input-error-icon">                      
                    @if($errors->has('phone_no'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('phone_no') }}</strong>
                       </span>
                       @endif
                   </span>   
</div>
</div>

<div class="row">
<div class="form-group col-md-6 col-lg-6 col-sm-6 col-xs-12">
<label class="label">Adress</label>
<input type="text" name="address" class="form-control input-control-lg" placeholder="Adress" 
value="{{old('address') }}" required/>

<span class="input-error-icon">                      
                    @if($errors->has('address'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('address') }}</strong>
                       </span>
                       @endif
                   </span>   
</div>


<div class="form-group col-md-6 col-lg-6 col-sm-6 col-xs-12">
<label class="label">Företags-e-post</label>
<input type="text" name="business_email" class="form-control input-control-lg" placeholder="Företags-e-post" 
value="{{old('business_email') }}" required/>
</div>
<span class="input-error-icon">                      
                    @if($errors->has('business_email'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('business_email') }}</strong>
                       </span>
                       @endif
                   </span>   
</div>


<div class="row">
<div class="form-group col-md-6 col-lg-6 col-sm-6 col-xs-12">
<label class="label">Provins</label>
<input type="text" name="province" class="form-control input-control-lg" placeholder="Provins" 
value="{{old('province') }}" required/>
<span class="input-error-icon">                      
                    @if($errors->has('province'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('province') }}</strong>
                       </span>
                       @endif
                   </span>  
</div>

<div class="form-group col-md-6 col-lg-6 col-sm-6 col-xs-12">
<label class="label">Postnummer</label>
<input type="text" name="pobox" class="form-control input-control-lg" placeholder="Postnummer" 
value="{{old('pobox')}}" required/>
<span class="input-error-icon">                      
                    @if($errors->has('pobox'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('pobox') }}</strong>
                       </span>
                       @endif
                   </span>  
</div>

</div>

<div class="form-group col-md-6 col-lg-6 col-sm-6 adjust_dw pull-right col-xs-12">
<button class="btn btn-primary btn-round dark-bg" type="submit" style="cursor:pointer;background:#0d2453 !important;color:#fff;border:0;border-radius:6px;width:100%" type="submit"><label class="label">Spara Uppgifter</label></button>
</div>


</form>

{{--
<!--intressmalan pg-->

<form action="{{route('register_supplier')}}" method="POST">
@csrf
<div id="supplierRegisterForm" class="form-new">
    <!-- Email input -->
    <div id="formGroupEmail" class="form-group">
        <div class="label">E-post</div>
        <div class="register-input-container">
            <input class="form-control input-field" type="email" name="email" placeholder="Foretag E-post" autocomplete="email">

                <span class="input-error-icon">  
                    
 @if($errors->has('email'))
   <span class="help-block">
   <strong class="text-tiny weight-400 red">{{ $errors->first('email') }}</strong>
    </span>
    @endif
    </span>
        </div>
            </div>

    <!-- Search input -->
    <div id="formGroupSearch" class="form-group company-search-group">
        <div class="label">Företagsnamn eller org-nummer</div>
        <div class="register-input-container">
            <input class="form-control input-field" type="text" placeholder="Företagsnamn eller org-nummer" name="company"
                autocomplete="off" placeholder=" ">
            <span id="companySearchErrorIcon" class="input-error-icon">
            @if($errors->has('company'))
                <span class="help-block">
                            <strong class="text-tiny weight-400 red">{{ $errors->first('company') }}</strong>
        </span>
    @endif
   
        </span>
        </div>
    </div>

    <!-- Phone input -->
    <div id="formGroupPhoneNumber" class="form-group">
        <div class="label">Telefon</div>
        <div class="register-input-container">
            <input class="form-control input-field" name="phoneNumber" placeholder="Telefon" autocomplete="tel" type="tel">
           
            <span class="input-error-icon">                      
                    @if($errors->has('phoneNumber'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('phoneNumber') }}</strong>
                       </span>
                       @endif
                   </span>   

        </div>
    </div>

 <!-- Contact input -->
 <div id="formGroupContact" class="form-group">
        <div class="label">Företags Adress</div>
        <div class="register-input-container">
            <input class="form-control input-field" name="address" placeholder="Företags Adress" autocomplete="address" type="text">
        </div>

        <span class="input-error-icon">                      
                    @if($errors->has('address'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('address') }}</strong>
                       </span>
                       @endif
                   </span>   
    </div>


    <!-- Contact input -->
    <div id="formGroupContact" class="form-group">
        <div class="label">Kontaktperson</div>
        <div class="register-input-container">
            <input class="form-control input-field" name="contactPerson" placeholder="Kontaktperson" autocomplete="name" type="text">
           
            
        <span class="input-error-icon">                      
                    @if($errors->has('contactPerson'))
                      <span class="help-block">
                      <strong class="text-tiny weight-400 red alert alert-danger">{{ $errors->first('contactPerson') }}</strong>
                       </span>
                       @endif
                   </span>  
        </div>
     </div>

    <!-- Submit button -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary dark-bg" style="cursor:pointer;font-family:'Spartan' ,'GD Sherpa Regular';font-size:13px;height:50px;border:0;">Skickar...</button>
    </form>
--}}
</div>


@endsection