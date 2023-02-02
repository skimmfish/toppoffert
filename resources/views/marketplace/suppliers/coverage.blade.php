@extends('layouts.supplierheader')
@section('content')
@include('layouts.admin_topbar')



<div class="row">
<div class="row" > @if (session('message'))   <div class="alert alert-info text-md" style="font-size:14.5px;">  {{ session('message') }}</div>@endif</div>

<div class="nav-tex wht-bg">
<h2 class="text-lg" style="font-size:18px !important;">Bevakning<Br/>
<small class="text-success">{{$category_count }} kategorier, alla områden,alla köpartyper,0 - 15 milj kr</small><Br/>
</h6>
<span style="font-size:12.5px">{{\App\Http\Controllers\ConfigController::get_value('min_requests_for_suppliers').' - '.\App\Http\Controllers\ConfigController::get_value('max_requests_for_suppliers') }} förfrågningar/mån</span>
</div>

<div class="row tabs wht-bg">
<button href="#" onclick="openCity('category')">Kategorier</button>
<button href="#" onclick="openCity('uppdragstorlekar')">Uppdragstorlekar</button>
<button href="#" onclick="openCity('kopartyper')">Köpartyper</button>
<button href="#" onclick="openCity('omrade')">Omrade</button>

</div>


<div id="category" class="row city main-container wht-bg shif-dw">
<!--tabbed pane-->
<form action="{{route('fix_supplier_category',['id'=>\Auth::user()->id])}}" method="POST">
@csrf
@method('PUT')
<input type="hidden" name="supplier_id" value="{{\Auth::user()->id}}" />
<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check" style="font-size:14.5px;">Välj kategorier av tjänster du kan erbjuda</label>

@foreach($categories as $x)
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
    <label class="rw_check"><input type="checkbox" name="service_categories[]" class="checkbox" value="{{$x->id}}"/> <span>{{$x->cat_name}}</span></label>

    @php
    $subcats = \App\Http\Controllers\CategoriesController::get_sub_cats($x->id);    @endphp

    <div class="left-adjust sub_cats">

    @if(sizeof($subcats)<=0)

    @else
    @foreach($subcats as $e)
    <div class="row adjusted_row">
        <label class="rw_check"><input type="checkbox" name="service_sub_categories[]" class="checkbox" value="{{$e->id}}"/> <span>{{$e->subcat_name}}</span></label>
            </div>
        @endforeach
            @endif
            </div>

</div>
@endforeach
</div>

<!--close of ./wrapper -->
</div>


<!--Omrade group of selections-->
<div id="uppdragstorlekar" class="city row" style="display:none">
<div class="main-container wht-bg shif-dw">
<!--tabbed pane-->

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="checkallassignment[]" value="checkallassignment"/> <span>Välj alla uppdragsvärden</span>

</label>
</div>


<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="assignment_size[]" value="0-15000"/> <span>0 - 15,000 Kr</span>
</label>
</div>
    

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="assignment_size[]" value="15000-50000" /> <span>15,000 - 50,000 Kr</span>
</label>
</div>


<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="assignment_size[]" value="50000-200000" /> <span>50,000 - 200,000 Kr</span>
</label>
</div>


<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="assignment_size[]" value="200000-500000" /> <span>200,000 - 500,000 Kr</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="assignment_size[]" value="500000-1000000" /> <span>500,000 - 1 000,000 Kr</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="assignment_size[]" value="1000000-3000000" /> <span>1,000,000 - 3,000,000 Kr</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="assignment_size[]" value="300000-10000000" /> <span>3,000,000 - 10,000,000 Kr</span>
</label>
</div>


<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="assignment_size[]" value="above 10000000" /> <span>>10,000,000 Kr</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="assignment_size[]" value="Ospecificerat (visas ej)"/> <span>Ospecificerat (visas ej)</span>
</label>
</div>
</div>    
</div>


<!--buyer types-->
<div id="kopartyper" class="city row" style="display:none">
<div class="main-container wht-bg shif-dw">
<!--tabbed pane-->
<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" class="checkbox" name="buyer_type_checkall[]" value="checkallbuyer_type"/><span>Välj alla kunder</span>
</label>
</div>
    

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" name="buyer_type[]" class="checkbox" value="bostadsrättsförening" /><span>Bostadsrättsförening</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" name="buyer_type[]" class="checkbox" value="byggherre/entreprenör"/><span>Byggherre/Entreprenör</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" name="buyer_type[]" class="checkbox" value="företag"/><span>Företag</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" name="buyer_type[]" class="checkbox" value="ideell förening"/><span>Ideell förening</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" name="buyer_type[]" class="checkbox" value="kommun/myndighet"/><span>Kommun/Myndighet</span>
</label>
</div>


<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" name="buyer_type[]" class="checkbox" value="Privatperson"/><span>Privatperson</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label rw_check">
<input type="checkbox" name="buyer_type[]" class="checkbox" value="villaförening"/><span>Villaförening</span>
</label>
</div>

</div>
</div>

<div class="form-group row shft-dw">
<button name="save" type="submit" class="btn btn-primary dark_bg pull-right">Spara Bevakning</button>
</div>
</form>


<!--./row wht-bg-->

<!--close of ./wrapper -->

<!--./row wht-bg-->
</div>

@endsection