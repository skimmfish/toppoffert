@extends('layouts.admin_app_elite')
@section('content')
@include('layouts.admin_topbar')

<div class="row m-3">
<h1>Hej! {{\Auth::user()->f_name}}</h1>
 <p class="line-height-auto">Välkommen till din instrumentpanel</p>

 <!--snapshot of sales-->
 <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 abox">


<h1></h1>

 </div>



 <!--snapshot of requests sent this week-->

<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 abox">

</div>



<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 abox"></div>


<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 abox"></div>


</div>
@endsection

