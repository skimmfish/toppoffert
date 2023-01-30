@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')


<h3>Hej! {{\Auth::user()->f_name}}</h3>
 <p class="line-height-auto">Ställ in Din Tjänsttäckning Här</p>

 <div class="row">

<div class="nav-tex wht-bg">
<span><b>Bevakning</b></span><Br/>
<span>{{$category_count }} kategorier, alla områden,alla köpartyper,0 - 15 milj kr</span><Br/>
<span style="font-size:12.5px">{{\App\Http\Controllers\ConfigController::get_value('min_requests_for_suppliers').' - '.\App\Http\Controllers\ConfigController::get_value('max_requests_for_suppliers') }} förfrågningar/mån</span>
</div>

<div class="main-container wht-bg">
<!--tabbed pane-->



</div>


<!--./row wht-bg-->
</div>

@endsection