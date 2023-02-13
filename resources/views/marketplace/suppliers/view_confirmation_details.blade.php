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

<h2>Tack för din beställning</h2>
<a href="{{route('index')}}"><h3>{{config('app.name')}} Sverige AB</h3></a>
<p>
    <span>Datum: {{date('Y-m-d')}}</span><br/>
    <span>Kontaktperson: {{\App\Http\Controllers\ConfigController::get_value('contact_person')}}</span><br/>
    <span>E-post: <a href="mailto:{{\App\Http\Controllers\ConfigController::get_value('business_email')}}">
        {{\App\Http\Controllers\ConfigController::get_value('business_email')}}</a></span><br/>
    <span>Telefon: <a href="tel:{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}">{{\App\Http\Controllers\ConfigController::get_value('phone_no')}}</a></span><br/>
        </p>
            </div>

<div class="col-md-7 img_bg"></div>
<!--./row-->
    </div>

    <div class="container-fluid" style="background:#fff;padding:0 0 30px 0">
<div class="row body">
    <div class="col-md-6">
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
<div class="row alert alert-primary resize_div" style="width:100% !important">

<div class="row accept_box" style="background:#fff;box-shadow:2px 2px 2px 2px #fff">
<h3 class="text-center">Offert</h3>

<div class="offertbox" style="background:#f3f9fd;padding:5px 10px;border-radius:10px;">
    <Br/>
    <h5 class="text-success"><b style="color:green !important;text-align:center">Tack för din beställning</b></h5>

    <div class="row box_d_man" style="justify-content:space-between;margin-top:15px;">
<div><img src="{{asset('img/dancing_man.jpg')}}" class="img-responsive-circle" /></div>
      <div class="form-label" style="font-size:13.5px;line-height:27px;">{{$info}}</div>
</div>
    </div>
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
                        <div><h6><b>70 Kontakter</b></h6>
                            <ul><li> 102 kr/kontakt (Ord.pris 230 kr)</li>
                            </ul>
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
                        <div><h6><b>BRF- och företagsjobb</b></h6></div>

                     <div><svg height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310.277 310.277" xml:space="preserve"><g><path style="fill:#010002;" d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139
		c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437
		l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z"/></g></svg><b> Ingår</b></div>

                    </div>
<hr/>
                    <div class="info_line" style="display:flex;justify-content:space-between">
                        <div><h6><b>Dubbla kontakter 1 månad</b></h6>
                            
                            <ul><li>Värde 7 140 kr</li></ul>
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
                   <h3> 7 440 kr/månad</h3>
                    </div>


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
            <span>{{$sevDaysLater}}</span>
            </div>
            </p>

<p><div class="offertill">
<span>Abonnemangsstart:</span>
<span>{{$oneYearLater}}</span>
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

        <div class="resize_div" style="background:#fff !important;">
        <small><i>* Faktisk abonnemangsstart kan ha justerats efter offertens godkännande<Br/>
        ** Efter avtalstiden löper avtalet vidare månadsvis med 3 månaders uppsägningstid</i></small>
            </div>
    <!-- container-fluid-->

</div>

@endsection