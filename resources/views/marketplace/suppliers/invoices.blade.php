@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')

<h1>Hej! {{\Auth::user()->f_name}}</h1>
 <p class="line-height-auto">Här är dina fakturor</p>


<div class="row g-3 mb-3">
<!--creating tabbed panes to contain both invoices and bills-->

<!--invoices-->
<div class="">



</div>


<!--for bills-->
<div class=""></div>

</div>


@endsection