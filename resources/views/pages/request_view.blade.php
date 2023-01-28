@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')


<a href="{{route('suppliers.dashboard')}}"><svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> back
</a>

<div class="row m-3">
<h3>{{$requestBody->request_title}} #{{$requestBody->id}}</h3>

<div class="row">
<div class="col-md-8 col-lg-8 col-xs-12 col-xl-8 col-sm-8">
<h5>Description</h5>
<span>Hej! 
    <br/>{{$requestBody->mission_type}}</span>

<div id="map"></div>

<div class="other_details_area">
<h6 class="underline">Frågor och svar</h6>


<b>Mellan vilka datum väntas flytten ske?</b><Br/>
<span>{{ date('d, M, Y',strtotime($requestBody->date_from)) .' - '. date('d, M, Y',strtotime($requestBody->date_to)) }}</span>

<Br/>

<b>Vilka extra flyttjänster är du intresserad av?</b><br/>
<span>{{$requestBody->request_type}}</span>

<Br/>

<hr/>
<b>Förfrågan publicerad</b>
<b>{{$requestBody->updated_at}}</b>

</div>
</div>

<!--right section-->
<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
<table class="table table-bordered table-stripped table-responsive table_rws" style="color:#000 !important;">
<thead>
<tr>
<th><span><svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_429_11052)">
<circle cx="17" cy="7" r="3" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
<circle cx="7" cy="17" r="3" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14 14H20V19C20 19.5523 19.5523 20 19 20H15C14.4477 20 14 19.5523 14 19V14Z" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4 4H10V9C10 9.55228 9.55228 10 9 10H5C4.44772 10 4 9.55228 4 9V4Z" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_429_11052">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg></span>
</th><th><span>{{ \App\Http\Controllers\CategoriesController::get_cat_data($requestBody->service_cat)->cat_name }}</span>
</th>
</tr>

<tr>
<th>
<svg fill="#000000" width="14px" height="14px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
<path d="M21,15a3,3,0,0,0-3,3v3a3,3,0,0,0,6,0V18A3,3,0,0,0,21,15Zm1,6a1,1,0,0,1-2,0V18a1,1,0,0,1,2,0Z
M13,12V7a1,1,0,0,0-2,0v4H8a1,1,0,0,0,0,2h4A1,1,0,0,0,13,12Z
M23,2a1,1,0,0,0-1,1V5.374A12,12,0,1,0,7.636,23.182,1.015,1.015,0,0,0,8,23.25a1,1,0,0,0,.364-1.932A10,10,0,1,1,20.636,7H18a1,1,0,0,0,0,2h3a3,3,0,0,0,3-3V3A1,1,0,0,0,23,2Z
M15.383,15.076a1,1,0,0,0-1.09.217l-3,3a1,1,0,0,0,1.414,1.414L14,18.414V23a1,1,0,0,0,2,0V16A1,1,0,0,0,15.383,15.076Z"/></svg>
</th>
<th>{{ $requestBody->when_to }}</th>
</tr>

<tr>
<th>
<svg width="14px" height="14px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<title>Users</title><g id="Users" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect id="Container" x="0" y="0" width="24" height="24"></rect><path d="M9,11 C10.3807119,11 11.5,9.88071187 11.5,8.5 C11.5,7.11928813 10.3807119,6 9,6 C7.61928813,6 6.5,7.11928813 6.5,8.5 C6.5,9.88071187 7.61928813,11 9,11 Z" id="shape-1" stroke="#030819" stroke-width="2" stroke-linecap="round" stroke-dasharray="0,0">
</path><path d="M3,20 C3,16.6862915 5.6862915,14 9,14 C12.3137085,14 15,16.6862915 15,20 L15,20 L15,20" id="shape-2" stroke="#030819" stroke-width="2" stroke-linecap="round" stroke-dasharray="0,0">
</path><path d="M15,11 C16.3807119,11 17.5,9.88071187 17.5,8.5 C17.5,7.11928813 16.3807119,6 15,6" id="shape-3" stroke="#030819" stroke-width="2" stroke-linecap="round" stroke-dasharray="0,0">
</path><path d="M16.1344055,14.1070888 C18.9057082,14.6373905 21,17.0741212 21,20" id="shape-4" stroke="#030819" stroke-width="2" stroke-linecap="round" stroke-dasharray="0,0">
</path></g>
</svg>    
</th>
<th>{{ $requestBody->executed_for }}</th>
</tr>

<tr>
<th> <svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.99993 13C4.99993 14.6484 5.66466 16.1415 6.74067 17.226C6.84445 17.3305 6.89633 17.3828 6.92696 17.4331C6.95619 17.4811 6.9732 17.5224 6.98625 17.5771C6.99993 17.6343 6.99993 17.6995 6.99993 17.8298V20.2C6.99993 20.48 6.99993 20.62 7.05443 20.727C7.10236 20.8211 7.17885 20.8976 7.27293 20.9455C7.37989 21 7.5199 21 7.79993 21H9.69993C9.97996 21 10.12 21 10.2269 20.9455C10.321 20.8976 10.3975 20.8211 10.4454 20.727C10.4999 20.62 10.4999 20.48 10.4999 20.2V19.8C10.4999 19.52 10.4999 19.38 10.5544 19.273C10.6024 19.1789 10.6789 19.1024 10.7729 19.0545C10.8799 19 11.0199 19 11.2999 19H12.6999C12.98 19 13.12 19 13.2269 19.0545C13.321 19.1024 13.3975 19.1789 13.4454 19.273C13.4999 19.38 13.4999 19.52 13.4999 19.8V20.2C13.4999 20.48 13.4999 20.62 13.5544 20.727C13.6024 20.8211 13.6789 20.8976 13.7729 20.9455C13.8799 21 14.0199 21 14.2999 21H16.2C16.48 21 16.62 21 16.727 20.9455C16.8211 20.8976 16.8976 20.8211 16.9455 20.727C17 20.62 17 20.48 17 20.2V19.2243C17 19.0223 17 18.9212 17.0288 18.8401C17.0563 18.7624 17.0911 18.708 17.15 18.6502C17.2114 18.59 17.3155 18.5417 17.5237 18.445C18.5059 17.989 19.344 17.2751 19.9511 16.3902C20.0579 16.2346 20.1112 16.1568 20.1683 16.1108C20.2228 16.0668 20.2717 16.0411 20.3387 16.021C20.4089 16 20.4922 16 20.6587 16H21.2C21.48 16 21.62 16 21.727 15.9455C21.8211 15.8976 21.8976 15.8211 21.9455 15.727C22 15.62 22 15.48 22 15.2V11.7857C22 11.5192 22 11.3859 21.9505 11.283C21.9013 11.181 21.819 11.0987 21.717 11.0495C21.6141 11 21.4808 11 21.2143 11C21.0213 11 20.9248 11 20.8471 10.9738C20.7633 10.9456 20.7045 10.908 20.6437 10.8438C20.5874 10.7842 20.5413 10.6846 20.4493 10.4855C20.1538 9.84622 19.7492 9.26777 19.2593 8.77404C19.1555 8.66945 19.1036 8.61716 19.073 8.56687C19.0437 8.51889 19.0267 8.47759 19.0137 8.42294C19 8.36567 19 8.30051 19 8.17018V7.06058C19 6.70053 19 6.52051 18.925 6.39951C18.8593 6.29351 18.7564 6.21588 18.6365 6.18184C18.4995 6.14299 18.3264 6.19245 17.9802 6.29136L15.6077 6.96922C15.5673 6.98074 15.5472 6.9865 15.5267 6.99054C15.5085 6.99414 15.4901 6.99671 15.4716 6.99826C15.4508 7 15.4298 7 15.3879 7H14.959M4.99993 13C4.99993 10.6959 6.29864 8.6952 8.20397 7.6899M4.99993 13H4C2.89543 13 2 12.1046 2 11C2 10.2597 2.4022 9.61337 3 9.26756M15 6.5C15 8.433 13.433 10 11.5 10C9.567 10 8 8.433 8 6.5C8 4.567 9.567 3 11.5 3C13.433 3 15 4.567 15 6.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></th>
    <th>{{ $requestBody->assignment_value }} Kr</th>
</tr>

<tr>
    <th>
    <svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.7502 3.56V2C16.7502 1.59 16.4102 1.25 16.0002 1.25C15.5902 1.25 15.2502 1.59 15.2502 2V3.5H8.75023V2C8.75023 1.59 8.41023 1.25 8.00023 1.25C7.59023 1.25 7.25023 1.59 7.25023 2V3.56C4.55023 3.81 3.24023 5.42 3.04023 7.81C3.02023 8.1 3.26023 8.34 3.54023 8.34H20.4602C20.7502 8.34 20.9902 8.09 20.9602 7.81C20.7602 5.42 19.4502 3.81 16.7502 3.56Z" fill="#292D32"/>
<path d="M19 15C16.79 15 15 16.79 15 19C15 19.75 15.21 20.46 15.58 21.06C16.27 22.22 17.54 23 19 23C20.46 23 21.73 22.22 22.42 21.06C22.79 20.46 23 19.75 23 19C23 16.79 21.21 15 19 15ZM21.07 18.57L18.94 20.54C18.8 20.67 18.61 20.74 18.43 20.74C18.24 20.74 18.05 20.67 17.9 20.52L16.91 19.53C16.62 19.24 16.62 18.76 16.91 18.47C17.2 18.18 17.68 18.18 17.97 18.47L18.45 18.95L20.05 17.47C20.35 17.19 20.83 17.21 21.11 17.51C21.39 17.81 21.37 18.28 21.07 18.57Z" fill="#292D32"/>
<path d="M20 9.83984H4C3.45 9.83984 3 10.2898 3 10.8398V16.9998C3 19.9998 4.5 21.9998 8 21.9998H12.93C13.62 21.9998 14.1 21.3298 13.88 20.6798C13.68 20.0998 13.51 19.4598 13.51 18.9998C13.51 15.9698 15.98 13.4998 19.01 13.4998C19.3 13.4998 19.59 13.5198 19.87 13.5698C20.47 13.6598 21.01 13.1898 21.01 12.5898V10.8498C21 10.2898 20.55 9.83984 20 9.83984ZM9.21 18.2098C9.02 18.3898 8.76 18.4998 8.5 18.4998C8.24 18.4998 7.98 18.3898 7.79 18.2098C7.61 18.0198 7.5 17.7598 7.5 17.4998C7.5 17.2398 7.61 16.9798 7.79 16.7898C7.89 16.6998 7.99 16.6298 8.12 16.5798C8.49 16.4198 8.93 16.5098 9.21 16.7898C9.39 16.9798 9.5 17.2398 9.5 17.4998C9.5 17.7598 9.39 18.0198 9.21 18.2098ZM9.21 14.7098C9.16 14.7498 9.11 14.7898 9.06 14.8298C9 14.8698 8.94 14.8998 8.88 14.9198C8.82 14.9498 8.76 14.9698 8.7 14.9798C8.63 14.9898 8.56 14.9998 8.5 14.9998C8.24 14.9998 7.98 14.8898 7.79 14.7098C7.61 14.5198 7.5 14.2598 7.5 13.9998C7.5 13.7398 7.61 13.4798 7.79 13.2898C8.02 13.0598 8.37 12.9498 8.7 13.0198C8.76 13.0298 8.82 13.0498 8.88 13.0798C8.94 13.0998 9 13.1298 9.06 13.1698C9.11 13.2098 9.16 13.2498 9.21 13.2898C9.39 13.4798 9.5 13.7398 9.5 13.9998C9.5 14.2598 9.39 14.5198 9.21 14.7098ZM12.71 14.7098C12.52 14.8898 12.26 14.9998 12 14.9998C11.74 14.9998 11.48 14.8898 11.29 14.7098C11.11 14.5198 11 14.2598 11 13.9998C11 13.7398 11.11 13.4798 11.29 13.2898C11.67 12.9198 12.34 12.9198 12.71 13.2898C12.89 13.4798 13 13.7398 13 13.9998C13 14.2598 12.89 14.5198 12.71 14.7098Z" fill="#292D32"/>
</svg>     
</th>
<th>{{ date('d, M, Y',strtotime($requestBody->date_from)) .' - '. date('d, M, Y',strtotime($requestBody->date_to)) }}</th>
</tr>


<tr>

<th>
</th>

</tr>
</thead>
</table>

<!--other sections-->
<div class="other_info">
<h6 class="text-sm">Liknande förfrågningar</h6>
@if(sizeof($related)>0)
@foreach($related as $x)

<div class="related_item">

<p><svg fill="#000000" width="14px" height="14px" viewBox="0 0 24 24" id="link-alt-2" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><path id="primary" d="M14.5,9.5a3.54,3.54,0,0,1,0,5l-5,5a3.54,3.54,0,0,1-5,0h0a3.54,3.54,0,0,1,0-5" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary-2" data-name="primary" d="M19.5,9.5a3.54,3.54,0,0,0,0-5h0a3.54,3.54,0,0,0-5,0l-5,5a3.54,3.54,0,0,0,0,5h0" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>
<a href="https://toppoffert.se/marketplace/suppliers/view-service-request/{{x->hash}}"><b>{{$x->request_title}}</b></a></p>
<p><svg width="14px" height="14px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<title>Users</title><g id="Users" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect id="Container" x="0" y="0" width="24" height="24"></rect><path d="M9,11 C10.3807119,11 11.5,9.88071187 11.5,8.5 C11.5,7.11928813 10.3807119,6 9,6 C7.61928813,6 6.5,7.11928813 6.5,8.5 C6.5,9.88071187 7.61928813,11 9,11 Z" id="shape-1" stroke="#030819" stroke-width="2" stroke-linecap="round" stroke-dasharray="0,0">
</path><path d="M3,20 C3,16.6862915 5.6862915,14 9,14 C12.3137085,14 15,16.6862915 15,20 L15,20 L15,20" id="shape-2" stroke="#030819" stroke-width="2" stroke-linecap="round" stroke-dasharray="0,0">
</path><path d="M15,11 C16.3807119,11 17.5,9.88071187 17.5,8.5 C17.5,7.11928813 16.3807119,6 15,6" id="shape-3" stroke="#030819" stroke-width="2" stroke-linecap="round" stroke-dasharray="0,0">
</path><path d="M16.1344055,14.1070888 C18.9057082,14.6373905 21,17.0741212 21,20" id="shape-4" stroke="#030819" stroke-width="2" stroke-linecap="round" stroke-dasharray="0,0">
</path></g>
</svg> <b>{{$x->executed_for}}</b></p>
<p>

<svg fill="#000000" width="14px" height="14px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
<path d="M21,15a3,3,0,0,0-3,3v3a3,3,0,0,0,6,0V18A3,3,0,0,0,21,15Zm1,6a1,1,0,0,1-2,0V18a1,1,0,0,1,2,0Z
M13,12V7a1,1,0,0,0-2,0v4H8a1,1,0,0,0,0,2h4A1,1,0,0,0,13,12Z
M23,2a1,1,0,0,0-1,1V5.374A12,12,0,1,0,7.636,23.182,1.015,1.015,0,0,0,8,23.25a1,1,0,0,0,.364-1.932A10,10,0,1,1,20.636,7H18a1,1,0,0,0,0,2h3a3,3,0,0,0,3-3V3A1,1,0,0,0,23,2Z
M15.383,15.076a1,1,0,0,0-1.09.217l-3,3a1,1,0,0,0,1.414,1.414L14,18.414V23a1,1,0,0,0,2,0V16A1,1,0,0,0,15.383,15.076Z"/></svg>

<b>{{$x->when_to}}</b></p>
<p>

<div class="ders_box">
 <span>
@php 
$responderCount =  \App\Http\Controllers\RespondersController::get_responders_count($requestBody->id);
$maxResponder = \App\Http\Controllers\ConfigController::get_value('max_responder');
for($i=0;$i<((int)$maxResponder-$responderCount);$i++){
  echo "<span class='emptyballs'>.</span>";
}
@endphp
</span>

<span>
@php 
for($i=0;$i<($responderCount);$i++){
  echo "<span class='balls'>.</span>";
}
@endphp
</span>
<span>{{ (int)$maxResponder-$responderCount }} till kan besvara</span>
</div>
</p>

</div>


@endforeach
@endif
</div>
</div>
</div>

@endsection