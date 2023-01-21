@extends('layouts.suppliers_header')
@section('content')

<h1 class="h1_m_30">Hej! {{\Auth::user()->f_name}} {{\Auth::user()->l_name }}</h1>
<h3 class="redc_grey">{{$supplierObj->where('supplier_id',\Auth::user()->id)->first()->supplier_corp_name}}. <Br/>
{{\Auth::user()->phone_no}}
</h3>

<div class="container">
<div class="row">
<div class="col-md-5 col-lg-5 col-xs-12 col-sm-5 bevel_border"></div>


<div class="col-md-5 col-lg-5 col-xs-12 col-sm-5 bevel_border">

<h5>{{ $ratings }}</h5>
<span class="ratings_box"></span>
<p>Baserat på {{$review_count}} omdömen</p>

</div>

</div>
</div>

@endsection