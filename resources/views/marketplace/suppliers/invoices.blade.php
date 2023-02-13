@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')


<div class="row">
<a href="{{url()->previous()}}" 
class="text-black btn btn-white btn_r_circle" style="border-radius:40px;">
<svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> Tillbaka
</a>
</div>

<h1>Hej! {{\Auth::user()->f_name}}</h1>
 <p class="line-height-auto">Här är dina fakturor</p>
 <div class="row"><small> @if (session('message'))   <div class="alert alert-info text-md" style="font-size:14.5px;">  {{ session('message') }}</div>@endif </small></div>


<div class="row g-3 mb-3">
<!--creating tabbed panes to contain both invoices and bills-->

<div class="tabs wht-bg">
<button href="#" onclick="openCity('paid')">Betald faktura</button>
<button href="#" onclick="openCity('unpaid')">Obetald faktura</button>
</div>


<!--invoices-->
<div class="card">
<div class="card-header city scrollable_table" id="paid">
@if(sizeof($invoices)>0)
<table class="table table-responsive table-bordered table_rws">
<thead>
<tr>
    <th>S/N</th>
    <th>Fakturatyp</th>
    <th>Belopp</th>
    <th>Status för inlösen</th>
    <th>Handling</th>
</tr>
</thead>
<tbody>
@foreach($invoices as $x)
<tr>
    <td>{{$id++}}</td>
    <td>{{$x->invoice_desc}}</td>
    <td>{{number_format($x->amount,2)}}Kr</td>
    <td>@if($x->fulfillment_date!=NULL)<span class="alert alert-success">Betald</span> @else <span class="alert alert-danger">Obetald</span>@endif</td>
    <td>
    @if($x->fulfillment_date==NULL)
        <!--this link goes to the document generator page-->
            <a href="" target="_blank">Pay</a>
                @endif
                <Br/>
                <a href="#" data-toggle="modal" data-target="#requestModal" class="text-primary underline" data-attr="{{route('delete_invoice',['id'=>$x->id])}}">Delete invoice</a>
                <a href="#" data-toggle="modal" data-target="#requestModal" class="text-success underline" data-attr="{{route('view_invoice',['id'=>$x->id])}}">Delete invoice</a>
    
            </td>
    </tr>
@endforeach
</tbody>



<tfoot>
</tfoot>
</table>
@endif
</div>
<!-- ./card-->
</div>


<!--for bills-->
<div class="city" id="unpaid" style="display:none"></div>

</div>


@endsection