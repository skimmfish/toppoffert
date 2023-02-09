@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')

@php
$supplierObj = new \App\Models\Suppliers;
@endphp

<!--send message box to buyers showing interest-->

<a href="{{url()->previous()}}" class="text-black btn btn-white"><svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> back
</a>


<h1 class="h1_m_30" style="font-size:30px;">Hej! {{\Auth::user()->f_name}} {{\Auth::user()->l_name }}</h1>
<h3 class="redc_grey" style="font-size:14px !important; ">{{$supplierObj->where('supplier_id',\Auth::user()->id)->first()->supplier_corp_name}}. {{\Auth::user()->phone_no}}
</h3>

<div class="row">
<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
<!--here is a flow of communication between buyer and supplier-->
h
</div>

<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
<div class="row buyers_info">
<!--details-->
<p class="info_item">
<span>Name:</span>
<span>{{\App\Models\User::get_data('f_name',$buyer_id).' '.\App\Models\User::get_data('l_name',$buyer_id)}}</span>
</p>

<p class="info_item">
<span>Phone Number:</span>
<span><a href="tel:{{\App\Models\User::get_data('phone_no',$buyer_id)}}">{{\App\Models\User::get_data('phone_no',$buyer_id)}}</a>, <a href="tel:{{\App\Models\User::get_data('telephone',$buyer_id)}}">{{\App\Models\User::get_data('telephone',$buyer_id)}}</a></span>
</p>

<p class="info_item">
<span>Email Address:</span>
<span><a href="tel:{{\App\Models\User::get_data('email',$buyer_id)}}">{{\App\Models\User::get_data('email',$buyer_id)}}</a></span>
</p>


</div>

<!--tis window has a floating chat widget at the footer of the page-->
    <div class="fixed-footer request_credit_footer message_footer" id="divv_msg_box" style="background:none !important;">
    <a href="#" onClick="closeDiv('divv_msg_box')" title="close" class="btn btn-primary circle">x</a>
    <form action="{{route('marketplace.supplier.sendbid')}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="supplier_id" value="{{$supplier_id}}" />
    <input type="hidden" name="request_id" value="{{$id}}" />
    <div class="form-group">
        <textarea class="msg_box form-control" name="request_response" required placeholder="Ange din korrespondens här, köparen återkommer när de ser ditt meddelande!"></textarea>
        </div>
        <div class="col-md-12 form-group">
        <button name="send_msg" class="btn btn-success btn-dark">Skicka meddelande</button>
        </div>
    </form>
    </div>


</div>

@endsection