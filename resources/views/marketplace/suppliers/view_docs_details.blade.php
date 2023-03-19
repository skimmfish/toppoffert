
@extends('layouts.plain_header')
@section('content')

@php
$currentDateTime = \Carbon\Carbon::now();
$sevDaysLater = $currentDateTime->addDay(7);
$oneYearLater = $currentDateTime->addDay(365)
@endphp

<div class="container-fluid" style="padding-left:0;padding-right:0;overflow-x:hidden;">

<div class="row header_area" style="padding-top:25px;padding-bottom:50px;">
<div class="col-md-5 padded">

<h2>Acceptera Offert</h2>
<a href="{{route('index')}}"><h3>{{config('app.name')}} Sverige AB</h3></a>
<p>
    <span>Datum: {{date('Y-m-d')}}</span><br/>
    <span>Kontaktperson: {{\App\Http\Controllers\ConfigController::get_value('contact_person')}}</span><br/>
    <span>E-post: <a href="mailto:{{\App\Http\Controllers\ConfigController::get_value('business_email')}}">
        {{\App\Http\Controllers\ConfigController::get_value('business_email')}}</a></span><br/>
    <span>Telefon: <a href="tel:{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}">{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}</a></span><br/>
        </p>
            </div>
<!--end of col-md-5-->

<div class="col-md-7 img_bg"></div>
<!--./row-->
    </div>

    <!--end of --row header_area-->
    <div class="container-fluid" style="background:#fff;padding:0 0 30px 0">
<div class="row body">
    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12">
        <h2>Hej!
            Här är din godkända offert från {{config('app.name')}}. 
                <p>Om du har några frågor eller bara vill gå igenom avtalet är du alltid välkommen att kontakta mig.</p>
                    </h2>

    <p style="margin-top:25px !important;">
            <h4>Med vänlig hälsning<br/>
                {{\App\Http\Controllers\ConfigController::get_value('contact_person')}} på {{config('app.name')}}</h4>
                    </p>
                        </div>

                    <!--./body-->    
                    </div>

                    <div class="row sd_msg">
                             <a href="#" data-toggle="modal" class="btn btn-primary btncs" id="sendMessageAbbeh" data-target="#requestModal"
                             data-attr="{{route('send_message_to_abbeh',['email'=> \App\Http\Controllers\ConfigController::get_value('business_email')])}}">
                             Skicka ett meddelande till {{explode(" ",\App\Http\Controllers\ConfigController::get_value('contact_person'))[0]}}
                             </a>
                                </div>

                                    <!--offer details section-->
<div class="row alert alert-primary resize_div">

<div class="row accept_box" style="background:#fff;box-shadow:2px 2px 2px 2px #fff">
<h3 class="text-center">Offert</h3>

<div class="offertbox" style="background:#f3f9fd;padding:5px 10px;border-radius:10px;">
    <b class="text-center">Godkänn Offert</b>
    <Br/>
    <form action="{{route('accept_offert',['hash'=>$hash])}}" method="POST" STYLE="padding:10px 6px;">
    @csrf
    @method('PUT')
<input type="hidden" name="supplier_id" value="{{$supplier_id}}">
    <div class="form-group" style="display:flex;justify-content:space-between;margin-top:15px;">
    <input type="checkbox" name="accept_offer" class="checkbox" onchange="document.getElementById('acceptBtn').disabled = !this.checked;"> 
        <label class="form-label" style="text-align:left"> Jag godtar erbjudandet i denna offert samt <b>{{config('app.name')}} allmanna avtal och vilkor</b>
            </label>
                </div>
<button class="btn btn-primary accept" name="accept" id="acceptBtn" disabled>Godkänn Offert</button>
</form>
</div>
</div>



                <div class="row offert_details">
                  <div class="info_box">
                    <div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>Medlemskap</b></h6>
                            <ul><li> Premiumkontakter: 10 st/år</li>
                            <li> Fyndklipp: Obegränsat</li>
                            <li> Företagspresentation: Utökad</li>
                            <li> Visa mer</li>
                            </ul>
                        </div>

                     <div><b> {{\App\Http\Controllers\ConfigController::get_value('credits_per_month')}} kr/År</b></div>

                    </div>
                    <hr/> 
                    <div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>60 Kontakter</b></h6>
                            <!--<ul>
                                <li> 102 kr/kontakt (Ord.pris 230 kr)</li>
                            </ul>-->
                        </div>

                     <div><b> {{\App\Http\Controllers\ConfigController::get_value('credits_per_month')}} kr/År</b></div>

                    </div>
    
                        <hr/>

                    <div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>Startavgift Ingår</b></h6>
                            <ul><li> Ord.pris 990 kr</li>
                            </ul>
                        </div>

                     <div><b> {{\App\Http\Controllers\ConfigController::get_value('credits_per_year')}} kr/År</b></div>
                    </div>
                    
                    <hr/>

                    <div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>Alla storlekar på jobb Ingår</b></h6></div>

                     <div><svg height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310.277 310.277" xml:space="preserve"><g><path style="fill:#010002;" d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139
		c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437
		l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z"/></g></svg><b> Ingår</b></div>

                    </div>


<hr/>

<div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>Minst 3 förfrågningar varje dag (Vardagar förutom röda dagar)</b></h6></div>

                     <div><svg height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310.277 310.277" xml:space="preserve"><g><path style="fill:#010002;" d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139
		c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437
		l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z"/></g></svg><b> Ingår</b></div>

                    </div>

                    <hr/>
                    <div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>Ingen startavgift</b></h6></div>

                     <div><svg height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310.277 310.277" xml:space="preserve"><g><path style="fill:#010002;" d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139
		c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437
		l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z"/></g></svg><b> Ingår</b></div>

                    </div>




                    <hr/>
                    <div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>BRF- och företagsjobb</b></h6></div>

                     <div><svg height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310.277 310.277" xml:space="preserve"><g><path style="fill:#010002;" d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139
		c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437
		l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z"/></g></svg>
        <b> Ingår</b>
    </div>

                    </div>
<hr/>
                    <div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>Dubbla kontakter 1 månad</b></h6>
                            
                            <ul><li>Värde 3,999 kr</li></ul>
                                </div>

                     <div><svg height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310.277 310.277" xml:space="preserve"><g><path style="fill:#010002;" d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139
		c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437
		l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z"/></g></svg><b> Ingår</b></div>
                    </div>
                    <hr/>

                    <div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>1 krona till och med 2023-03-31 Ingår</b></h6>
                                </div>
                     <div><svg height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310.277 310.277" xml:space="preserve"><g><path style="fill:#010002;" d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139
		c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437
		l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z"/></g></svg><b> Ingår</b>
                </div>
                    </div>

                    <div class="bigx-md-bx">
                    <small>Ditt pris</small>
                   <h3> 3999kr/månad</h3>
                    </div>

                    <div>
                        </div>




                                   </div>
                                        </div>

                                        <!--categories box-->
   <div class="row resize_div categories_bx">
        <div>
            <p><h6>Offertvillkor</h6>
            <Hr/>
            <div class="offertill">
            <span>Erbjudandet gäller till:</span>
            <span>{{-- $sevDaysLater --}} {{ date('Y-m-d') }}</span>
            </div>
            </p>

<p><div class="offertill">
<span>Abonnemangsstart:</span>
<span>{{-- $oneYearLater --}} {{date('Y-m-d')}}</span>
</div>
</p>

<p>
<div class="offertill">
<span>Avtalstid:</span>
<span>12 månaders </span>
</div>
</p>



            </div>


        </div>


        <div>      <small style="text-align:justify">1. Faktisk abonnemangsstart kan ha justerats efter offertens godkännande</small></div>
                   <div> <small style="text-align:justify">2. Efter avtalstiden löper avtalet vidare månadsvis med 3 månaders uppsägningstid</small></div>
                    <div><small style="text-align:justify">3. Alla priser är exklusive moms</small></div>

</div>

        <!-- container-fluid-->

</div>

@endsection