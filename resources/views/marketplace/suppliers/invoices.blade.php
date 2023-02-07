@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')

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