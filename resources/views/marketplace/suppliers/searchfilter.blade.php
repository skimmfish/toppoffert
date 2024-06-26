@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')

<div class="row">
<h2>Tjänster Begär sökning</h2>
 <p class="line-height-auto text-md">Sökresultat från serviceförfrågningar från {{$catName}} och {{$subcatname}} tjänster</p>
<!--./row-->
</div>

<div class="row">

<div class="row g-3 mb-3" style="margin-bottom:30px;">
            <div class="col-md-12 col-lg-12 col-xl-12 col-xs-12 tp-padding">
@php

$categoriesCount = 0;

if(json_decode($supplierCoverage['categories'],true)==null){

  $categoriesCount = 0;

}else{

  $categoriesCount = sizeof(json_decode($supplierCoverage['categories'],true));

}

$buyerTypes = '';


@endphp

<div class="nav-tex"><span><b>{{$categoriesCount }} kategorier, alla områden,
  {{$buyerTypes}} 0 - 10 milj kr</b> <a href="#" onClick="triggerRefresh()"> Ändra </a></span></div>

          <div class="navigation_control">
            <a href="#" class="btn"><svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color icon no-fill"><g clip-path="url(#clip0_289_161)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16.674 13.588C15.525 16.19 12.97 18 10 18c-2.969 0-5.525-1.81-6.674-4.412M17 8.294C16.08 5.23 13.294 3 10 3S3.92 5.229 3 8.294"></path><path d="M13.376 13.486l4.234-.372.372 4.234M6.72 7.472L2.694 8.836 1.33 4.81"></path></g><defs><clipPath id="clip0_289_161"><path fill="#fff" d="M0 0h20v20H0z"></path></clipPath></defs></svg></a>
              <a href="#" class="btn"><svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color icon no-fill"><path d="M7.464 3.216L8.09 1.62A1.429 1.429 0 019.42.714h1.16a1.429 1.429 0 011.33.907l.626 1.595 2.071 1.197 1.693-.257a1.429 1.429 0 011.451.698l.58 1a1.428 1.428 0 01-.12 1.606l-1.068 1.344v2.392l1.068 1.338a1.428 1.428 0 01.12 1.609l-.58 1a1.428 1.428 0 01-1.451.698l-1.693-.257-2.071 1.197-.626 1.595a1.429 1.429 0 01-1.33.907H9.42a1.43 1.43 0 01-1.33-.907l-.626-1.595-2.071-1.197-1.693.257a1.428 1.428 0 01-1.451-.698l-.58-1a1.428 1.428 0 01.12-1.606l1.068-1.341V8.804L1.79 7.466a1.429 1.429 0 01-.12-1.609l.58-1A1.429 1.429 0 013.7 4.156l1.693.257 2.071-1.197zM7.143 10a2.857 2.857 0 105.714 0 2.857 2.857 0 00-5.714 0z" stroke-width="1.429" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
                <a href="#" class="btn"><svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color icon no-fill"><rect x="1" y="1" width="7" height="4" rx="1" stroke-width="1.5"></rect><rect x="11" y="1" width="8" height="18" rx="1" stroke-width="1.5"></rect><rect x="1" y="8" width="7" height="4" rx="1" stroke-width="1.5"></rect><rect x="1" y="15" width="7" height="4" rx="1" stroke-width="1.5"></rect></svg></a>
                  <a href="#" class="btn"><svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color icon no-fill"><rect x="1" y="1" width="18" height="4" rx="1" stroke-width="1.5"></rect><rect x="1" y="8" width="18" height="4" rx="1" stroke-width="1.5"></rect><rect x="1" y="15" width="18" height="4" rx="1" stroke-width="1.5"></rect></svg></a>
                    </div>
                    
                    <!--./end of tp-padding-->
                      </div>
                      <p class="line-height-auto text-md text-underline">{{sizeof($requests)}} Förfrågningar filtrerade från {{$catName}} och {{$subcatname}} tjänster</p>


{{-- @if($categoriesCount>0) --}}

    @if(sizeof($requests)>0)
    @foreach($requests as $x) 
    @php 
    
    $responderCount = \App\Http\Controllers\RespondersController::get_responders_count($x->id);  
    $subservice_cat = $x->subservice_cat;
    $service_category=$x->service_cat;
    $buyersType = $x->executed_for; 
    $buyersTypeName = \App\Http\Controllers\SuppliersController::getBuyerTypeName($buyersType);

    @endphp

     {{-- @if(in_array($service_category,json_decode($supplierCoverage['categories'],true)) && 
    in_array($subservice_cat,json_decode($supplierCoverage['subcategories'],true)) && 
    in_array($buyersType,json_decode($supplierCoverage['buyers_type'],true)))
    --}}

    

     <div class="row requests" id="requestFilter" style="margin:15px 0 12px 0;">
            <!--request_title_and_no. of_interested_suppliers-->
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-6 titles">
            <a href="{{route('supplier_view_request',['hash'=>$x->request_hash])}}" class="request_title underline">{{$x->request_title}}</a>
              <br/>

    <div class="responders_box">

      <div>
       <span>
      @php 
      $maxResponder = \App\Http\Controllers\ConfigController::get_value('max_responder');
      for($i=0;$i<((int)$maxResponder-$responderCount-6);$i++){
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
    
      <span>{{ (int)$maxResponder-$responderCount-6 }} till kan besvara</span>
    </div>

  </div>
           </div>

              <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 titles">
                  <span>{{$buyersTypeName}}</span><br/>
                  <span>ldag {{date('d F, Y',strtotime(explode(" ", $x->created_at)[0]))}}</span>
                         </div>

                  <div class="col-md-3 col-xs-3 col-xs-6 flex-rw titles">
                    <p><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color svg-icon svg-icon--spacing-right-small" data-v-40d54a8c=""><path d="M5.6 9.6c0 .636.506 1.247 1.406 1.697.9.45 2.12.703 3.394.703 1.273 0 2.494-.253 3.394-.703.9-.45 1.406-1.06 1.406-1.697s-.506-1.247-1.406-1.697c-.9-.45-2.121-.703-3.394-.703-1.273 0-2.494.253-3.394.703-.9.45-1.406 1.06-1.406 1.697z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.6 9.6v3.2c0 1.325 2.149 2.4 4.8 2.4s4.8-1.075 4.8-2.4V9.6M.8 3.2c0 .315.124.627.365.918.242.292.595.556 1.04.78.447.222.976.399 1.558.52.582.12 1.207.182 1.837.182.63 0 1.255-.062 1.837-.183a6.42 6.42 0 001.557-.52c.446-.223.8-.487 1.04-.779.242-.29.366-.603.366-.918 0-.315-.124-.627-.365-.918-.242-.292-.595-.556-1.04-.779a6.42 6.42 0 00-1.558-.52A9.125 9.125 0 005.6.8c-.63 0-1.255.062-1.837.183a6.419 6.419 0 00-1.557.52c-.446.223-.8.487-1.04.779C.923 2.572.8 2.885.8 3.2z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M.8 3.2v8c0 .71.618 1.349 1.6 1.789M.8 7.2c0 .71.618 1.349 1.6 1.789" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> 
                    <span>Uppskattat värde:&nbsp; @if($x->assignment_value) : 0 - {{$x->assignment_value}} kr @else Gör förfrågan @endif</span></p>

                    <p style="margin-top:-11px;">
                    <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color svg-icon svg-icon--spacing-right-small" data-v-40d54a8c=""><path d="M.8 2.4h14.4v12.8H.8V2.4zM4 .8V4M12 .8V4M.8 7.2h14.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> 
                    <span>@if($x->when_to) {{$x->when_to}} @else Gör förfrågan @endif</span>
                  </p>

                  
                  </div>

                    <div class="col-md-2 col-xs-4">
                      <a href="#" data-toggle="modal" data-attr="{{route('request_clear',['id'=>$x->id])}}" class="btn-grey-bg" id="deleteRequest" data-target="#requestModal">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-small fill-current-color" data-v-467c38da=""><path d="M6.631 23.25a2.263 2.263 0 01-2.242-2.064L3.06 5.25H1.5a.75.75 0 010-1.5h6V3A2.252 2.252 0 019.75.75h4.5A2.252 2.252 0 0116.5 3v.75h6a.75.75 0 010 1.5h-1.56l-1.328 15.937a2.262 2.262 0 01-2.242 2.063H6.631zm-.748-2.188c.032.386.36.688.748.688H17.37a.753.753 0 00.747-.688L19.435 5.25H4.565l1.318 15.812zM15 3.75V3a.75.75 0 00-.75-.75h-4.5A.75.75 0 009 3v.75h6z"></path><path d="M9.75 18a.75.75 0 01-.75-.75v-7.5a.75.75 0 011.5 0v7.5a.75.75 0 01-.75.75zM14.25 18a.75.75 0 01-.75-.75v-7.5a.75.75 0 011.5 0v7.5a.75.75 0 01-.75.75z"></path></svg>
                      </a>
                    </div>

                    <!--./end of .row .requests-->
                  </div> 

                  {{-- @endif --}}
                @endforeach   
                   @else


                   <div class="row">
                    <hr/>
                    <span class="text-lg">Oops! Din sökning gav inget resultat</span>
                   </div>



                   @endif

</div>

@endsection