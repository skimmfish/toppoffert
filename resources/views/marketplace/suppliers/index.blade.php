@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')

<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 col-xs-12"><h1>Hej! {{\Auth::user()->f_name}}</h1>
 <p class="line-height-auto">Välkommen till din instrumentpanel</p>
 </div>
<!--./row-->
</div>

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

{{-- @if($categoriesCount>0) --}}

    @if($request_count>0)
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

    <a hre="#" data-attr="{{route('supplier_view_request',['hash'=>$x->request_hash])}}"  id="viewRequest" data-toggle="modal" data-target="#requestModal">
     <div class="row requests">
            <!--request_title_and_no. of_interested_suppliers-->
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-6 titles">
            <a href="{{route('supplier_view_request',['hash'=>$x->request_hash])}}" class="request_title underline">{{$x->request_title}}</a>
              <br/>
               <div class="responders_box">

      <div>
       <span>
      @php 
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

  </div>
           </div>

              <div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 titles">
                  <span>{{$buyersTypeName}}</span><br/>
                  <span>ldag {{date('d F, Y',strtotime(explode(" ", $x->created_at)[0]))}}</span>
                         </div>

                  <div class="col-md-3 col-xs-3 col-xs-6 flex-rw titles">
                    <p><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color svg-icon svg-icon--spacing-right-small" data-v-40d54a8c=""><path d="M5.6 9.6c0 .636.506 1.247 1.406 1.697.9.45 2.12.703 3.394.703 1.273 0 2.494-.253 3.394-.703.9-.45 1.406-1.06 1.406-1.697s-.506-1.247-1.406-1.697c-.9-.45-2.121-.703-3.394-.703-1.273 0-2.494.253-3.394.703-.9.45-1.406 1.06-1.406 1.697z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.6 9.6v3.2c0 1.325 2.149 2.4 4.8 2.4s4.8-1.075 4.8-2.4V9.6M.8 3.2c0 .315.124.627.365.918.242.292.595.556 1.04.78.447.222.976.399 1.558.52.582.12 1.207.182 1.837.182.63 0 1.255-.062 1.837-.183a6.42 6.42 0 001.557-.52c.446-.223.8-.487 1.04-.779.242-.29.366-.603.366-.918 0-.315-.124-.627-.365-.918-.242-.292-.595-.556-1.04-.779a6.42 6.42 0 00-1.558-.52A9.125 9.125 0 005.6.8c-.63 0-1.255.062-1.837.183a6.419 6.419 0 00-1.557.52c-.446.223-.8.487-1.04.779C.923 2.572.8 2.885.8 3.2z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M.8 3.2v8c0 .71.618 1.349 1.6 1.789M.8 7.2c0 .71.618 1.349 1.6 1.789" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> <span>Uppskattat värde:&nbsp; : 0 - {{$x->assignment_value}} kr</span></p>
                    <p style="margin-top:-11px;">
                    <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color svg-icon svg-icon--spacing-right-small" data-v-40d54a8c=""><path d="M.8 2.4h14.4v12.8H.8V2.4zM4 .8V4M12 .8V4M.8 7.2h14.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> <span>{{$x->when_to}}</span></p>

                  </div>

                    <div class="col-md-2 col-xs-4">
                      <a href="#" data-toggle="modal" data-attr="{{route('request_clear',['id'=>$x->id])}}" class="btn-grey-bg" id="deleteRequest" data-target="#requestModal">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-small fill-current-color" data-v-467c38da=""><path d="M6.631 23.25a2.263 2.263 0 01-2.242-2.064L3.06 5.25H1.5a.75.75 0 010-1.5h6V3A2.252 2.252 0 019.75.75h4.5A2.252 2.252 0 0116.5 3v.75h6a.75.75 0 010 1.5h-1.56l-1.328 15.937a2.262 2.262 0 01-2.242 2.063H6.631zm-.748-2.188c.032.386.36.688.748.688H17.37a.753.753 0 00.747-.688L19.435 5.25H4.565l1.318 15.812zM15 3.75V3a.75.75 0 00-.75-.75h-4.5A.75.75 0 009 3v.75h6z"></path><path d="M9.75 18a.75.75 0 01-.75-.75v-7.5a.75.75 0 011.5 0v7.5a.75.75 0 01-.75.75zM14.25 18a.75.75 0 01-.75-.75v-7.5a.75.75 0 011.5 0v7.5a.75.75 0 01-.75.75z"></path></svg>
                      </a>
                    </div>

                    <!--./end of .row .requests-->
                  </div> 
                </a>
                {{-- @endif --}}
                @endforeach   
                  {{-- @endif --}}

                    @elseif(sizeof($requests)<=0)

                    <hr/>
<div class="col-md-2 col-lg-2 col-xs-3 col-sm-2">
<svg width="60px" height="60px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 0C7.90405 0 4.5835 3.32056 4.5835 7.41667V8.33334C4.5835 10.5339 4.2847 12.4847 3.82936 13.8507C3.59994 14.539 3.34881 15.0238 3.11851 15.316C2.948 15.5324 2.84626 15.5761 2.82292 15.5834C2.27551 15.5891 1.8335 16.0346 1.8335 16.5833V16.7917C1.8335 17.344 2.28121 17.7917 2.8335 17.7917H21.1668C21.7191 17.7917 22.1668 17.344 22.1668 16.7917V16.5833C22.1668 16.0346 21.7248 15.5891 21.1774 15.5834C21.1541 15.5761 21.0523 15.5324 20.8818 15.316C20.6515 15.0238 20.4004 14.539 20.171 13.8507C19.7156 12.4847 19.4168 10.5339 19.4168 8.33334V7.41667C19.4168 3.32056 16.0963 0 12.0002 0ZM2.82044 15.5841C2.81863 15.5844 2.81773 15.5846 2.81774 15.5847C2.81774 15.5847 2.81812 15.5847 2.81886 15.5845C2.81928 15.5844 2.8198 15.5843 2.82044 15.5841ZM6.5835 7.41667C6.5835 4.42512 9.00862 2 12.0002 2C14.9917 2 17.4168 4.42512 17.4168 7.41667V8.33334C17.4168 10.6891 17.7336 12.8633 18.2736 14.4832C18.4305 14.9538 18.6124 15.3966 18.8219 15.7917H5.1784C5.38795 15.3966 5.56986 14.9538 5.72672 14.4832C6.26668 12.8633 6.5835 10.6891 6.5835 8.33334V7.41667Z" fill="#000000"/>
<path d="M10.0541 19.9054C9.72577 19.4613 9.09959 19.3675 8.65552 19.6959C8.21145 20.0242 8.11764 20.6504 8.446 21.0945C9.27811 22.2198 10.5352 22.9999 12.0001 22.9999C13.465 22.9999 14.722 22.2198 15.5541 21.0945C15.8825 20.6504 15.7887 20.0242 15.3446 19.6959C14.9005 19.3675 14.2744 19.4613 13.946 19.9054C13.4147 20.6239 12.7124 20.9999 12.0001 20.9999C11.2877 20.9999 10.5854 20.6239 10.0541 19.9054Z" fill="#000000"/>
</svg>
    </div>
<div class="col-md-10 col-xs-9 col-lg-10 col-sm-10 text-black">
<h6>Lägga märke till</h6>
<span style="line-height:31px;">Det finns inga förfrågningar från köpare för tillfället, vänligen kom tillbaka senare.</span>
</span>
</div>


                    @endif

              <!--
<div class="row">
<hr/>
<div class="col-md-2 col-lg-2 col-xs-3 col-sm-2">
<svg width="60px" height="60px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 0C7.90405 0 4.5835 3.32056 4.5835 7.41667V8.33334C4.5835 10.5339 4.2847 12.4847 3.82936 13.8507C3.59994 14.539 3.34881 15.0238 3.11851 15.316C2.948 15.5324 2.84626 15.5761 2.82292 15.5834C2.27551 15.5891 1.8335 16.0346 1.8335 16.5833V16.7917C1.8335 17.344 2.28121 17.7917 2.8335 17.7917H21.1668C21.7191 17.7917 22.1668 17.344 22.1668 16.7917V16.5833C22.1668 16.0346 21.7248 15.5891 21.1774 15.5834C21.1541 15.5761 21.0523 15.5324 20.8818 15.316C20.6515 15.0238 20.4004 14.539 20.171 13.8507C19.7156 12.4847 19.4168 10.5339 19.4168 8.33334V7.41667C19.4168 3.32056 16.0963 0 12.0002 0ZM2.82044 15.5841C2.81863 15.5844 2.81773 15.5846 2.81774 15.5847C2.81774 15.5847 2.81812 15.5847 2.81886 15.5845C2.81928 15.5844 2.8198 15.5843 2.82044 15.5841ZM6.5835 7.41667C6.5835 4.42512 9.00862 2 12.0002 2C14.9917 2 17.4168 4.42512 17.4168 7.41667V8.33334C17.4168 10.6891 17.7336 12.8633 18.2736 14.4832C18.4305 14.9538 18.6124 15.3966 18.8219 15.7917H5.1784C5.38795 15.3966 5.56986 14.9538 5.72672 14.4832C6.26668 12.8633 6.5835 10.6891 6.5835 8.33334V7.41667Z" fill="#000000"/>
<path d="M10.0541 19.9054C9.72577 19.4613 9.09959 19.3675 8.65552 19.6959C8.21145 20.0242 8.11764 20.6504 8.446 21.0945C9.27811 22.2198 10.5352 22.9999 12.0001 22.9999C13.465 22.9999 14.722 22.2198 15.5541 21.0945C15.8825 20.6504 15.7887 20.0242 15.3446 19.6959C14.9005 19.3675 14.2744 19.4613 13.946 19.9054C13.4147 20.6239 12.7124 20.9999 12.0001 20.9999C11.2877 20.9999 10.5854 20.6239 10.0541 19.9054Z" fill="#000000"/>
</svg>
    </div>
<div class="col-md-10 col-xs-9 col-lg-10 col-sm-10 text-black">
<h6>Vänligen ställ in dina tjänstekategoriområden och köpartyper här och servicekostnad.</h6>
<span style="line-height:31px;">Dina tjänstekategorier, köparsegmentering och serviceleveranskostnad skulle avgöra vilka typer av annonser som.</span>
<a href="{{route('settings.coverage')}}" class="underline">Ställ in kategorier, prissättning och köpartyper här</a>
</span>
</div>
    -->
{{-- @endif --}}
</div>


              <!--modal-->
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