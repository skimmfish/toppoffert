@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')

<h1 class="h1_m_30">Hej! {{\Auth::user()->f_name}} {{\Auth::user()->l_name }}</h1>
<h3 class="redc_grey">{{$supplierObj->where('supplier_id',\Auth::user()->id)->first()->supplier_corp_name}}. {{\Auth::user()->phone_no}}
</h3>

<div class="containerx">

<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 bevel_border">
<h6 class="text-black">Avtal  - {{config('app.name')}} Medium</h6>

<div class="grid-box">
<!--image layer-->
@php
$avatar = \Auth::user()->profile_img;

@endphp


<div class="img_box">

@if(!is_null($avatar))
<img src="{{asset('img/avatar/'.$avatar)}}" class="usr_icon img-circle-md"/>
@else

<svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 21.0001H6.5C5.11929 21.0001 4 19.8808 4 18.5001C4 14.4194 10 14.5001 12 14.5001C14 14.5001 20 14.4194 20 18.5001C20 19.8808 18.8807 21.0001 17.5 21.0001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


@endif
</div>

<div class="text_board text-lg text-black">
    <span>{{config('app.name')}} Bas</span>
        <span class="text-gray text-md" style="margin-top:-20px">{{ explode(" ",\Auth::user()->created_at)[0] .' - '. date('Y-m-d')}}</span>
    <!--./text-board-->
            </div>
<!--./grid-box-->
        </div>
    <!--ratings--box-->
    <div class="ratings_box">
         <div class="progress" style="background-color:none;padding:0;position:relative;top:30px;height:10px !important;">
			 <div class="progress-bar bg-primary" role="progressbar" style="height:10px !important;margin-left:-5px;width:{{$credit}}%;background-color:none;border-radius:6px;" aria-valuenow="{{$credit}}" aria-valuemin="0" aria-valuemax="200"></div>
				</div>
    
        <div class="creditbox"><b>{{$credit}} krediter kvar</b></div>
        </div>
<!-- ./col-md-6 bevel_border-->
<a href="{{route('accountsummary')}}" class="text-black underline float-bottom text-tiny">Kontosammanställning</a>
</div>

<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 bevel_border">

<h5>{{ number_format($ratings,1) }}</h5>
<div class="ratings_box">

@if(!empty($ratings))
       <div class="rated">
          @for($i=0; $i<$ratings;$i++)                                                   
               <label class="star-rating-complete" title="text">{{$i}} stars</label>
                  @endfor
                    </div>
                      @endif

<!--./end ratings_box-->
</div>

<p style="margin-top:-40px;margin-bottom:120px"><b>Baserat på {{$review_count}} omdömen</b></p>
<span><a href="{{route('settings.ratings')}}" class="text-black underline float-bottom mina-bottom text-tiny">Mina omdömen</a></span>
</div>

</div>

@endsection