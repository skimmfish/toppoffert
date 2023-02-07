@extends('layouts.supplierheader')
@section('content')

@include('layouts.admin_topbar')

<!--send message box to buyers showing interest-->


<div class="row">

<form action="{{route('marketplace.supplier.sendbid')}}" method="POST">
    @csrf
    <input type="hidden" name="supplier_id" value="{{$supplier_id}}" />
    <input type="hidden" name="request_id" value="{{$id}}" />
    
</div>

@endsection