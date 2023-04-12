@extends('layouts.clientsheader')
@section('content')

@include('layouts.admin_topbar')

@php

$supController = new \App\Http\Controllers\SuppliersController;

$ratingObj = new \App\Http\Controllers\RatingsController;
 
@endphp

<a href="{{url()->previous()}}" 
class="text-black btn btn-white btn_r_circle" style="border-radius:40px;">
<svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> Tillbaka
</a>


<div class="row">
<p class="line-height-auto"><h5>{{$title}}</h5>
<span>Se alla leverantörer som visat intresse</span>
<hr/>
</p>

<div class="grid-m">

<!--col-10-->

@if(sizeof($interestedSuppliers)>0)

@foreach($interestedSuppliers as $x)
@php

$rating = $ratingObj->getRatings($x->supplier_id)['rating'];

@endphp
<div class="col-md-6 col-lg-6 card ecommerce-card-min-width" style="margin-right:6px;border-radius:10px;">
        <!--card-->
              
        <div class="title">
            <div class="row">
                <span>
                    <a href="{{route('marketplace.buyers.sendmsg')}}">
                        <h6 class="align-items-center h6-md_title" style="font-size:1.2em !important">{{ $supController->get_supplier_data('supplier_corp_name',$x->supplier_id)}}</h6>
                            </a>
                            
                            <h5>{{ number_format($rating,1) }}</h5>

                            <div class="ratings_box" style="position:relative;left:50px;top:9px;">

@if(!empty($rating))
       <div class="rated">
          @for($i=0; $i<$rating;$i++)                                                   
               <label class="star-rating-complete" title="text">{{$i}} stars</label>
                  @endfor
                    </div>
                      @endif

<!--./end ratings_box-->
</div>


                            <small>Publicerades on {{ date('d M Y',strtotime($x->created_at)) }} </small>

                                </span>
                                <span class="move_top">  
                                @if(\App\Models\User::find($x->supplier_id)->profile_img!=NULL)
                                    <img src="{{asset('img/avatar/'.\App\Models\User::find($x->supplier_id)->profile_img)}}" class="img-responsive-md"/> 
                                @elseif(\App\Models\User::find($x->supplier_id)==NULL || (\App\Models\User::where('id',$x->supplier_id)->first()->profile_img)==NULL)

                                <svg width="40px" height="40px" viewBox="0 0 24 24" style="float:right" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9696 19.5047C16.7257 17.5293 15.0414 16 13 16H11C8.95858 16 7.27433 17.5293 7.03036 19.5047M16.9696 19.5047C19.3986 17.893 21 15.1335 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 15.1335 4.60137 17.893 7.03036 19.5047M16.9696 19.5047C15.5456 20.4496 13.8371 21 12 21C10.1629 21 8.45441 20.4496 7.03036 19.5047M15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>

                                @endif
                            </span>

                                </div>

                   </div>

                   <hr/>
              
                   <small class="line-height-20">{{$x->responder_msg}}</small>
                   
                   <div class="nuo_line">
                   <span>#{{$x->org_reg_number}} / <a href="mailto:{{$supController->get_supplier_data('email',$x->supplier_id)}}">{{$supController->get_supplier_data('email',$x->supplier_id)}}</a></span>
                   <span><a href="{{route('chat_with_supplier',['request_id'=>$requestBody->id,'request_hash'=>$requestBody->request_hash,'supplier_id'=>$x->supplier_id])}}" class="btn btn-ball">

                   <svg width="20px" height="20px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.6728 22L16.1434 13.0294C16.4081 12.75 16.4081 12.3088 16.1434 12.0147L7.65808 3" stroke="#fff" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                   </a></span>


                   </div>



   <!--./col-md-6-->
     </div>
@endforeach
@else

<span>Oops! Ge oss lite mer tid att betjäna din förfrågan</span>

@endif
</div>


@endsection