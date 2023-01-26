@extends('layouts.admin_app_elite')
@section('content')

@include('layouts.admin_topbar')

<div class="row m-3">
<h1>Hej! {{\Auth::user()->f_name}}</h1>
<p class="line-height-auto">Här hanterar du alla dina leverantörers krediter, tilldelar krediter, baserat på fakturauppfyllelse</p>

<h4 class="underline">Alla leverantörers lista</h4>

@php $id=1; @endphp

@if(sizeof($verified_suppliers)>0)

<div class="card mb-12 btn-reveal-trigger">	   
<div class="scrollable_table">
	    <table id="example" class="table table-responsive table-bordered table-stripped table_rws" style="color:#000 !important;padding:20px 4px 5px 5px !important;">
		<thead>	
        <tr>
                <th>S/N</th>
                <th>Leverantörens namn</th>
                <th>Leverantörens e-postadress</th>
                <th>Kreditvärde</th>
                <th>Senast uppdaterad</th>
                <th>Action</th>
            </tr>
</thead>
<tbody>
@foreach($verified_suppliers as $x)

            <tr>
            <td>{{$id++}}</td>
            <td><a href="#" data-attr="{{route('seeuserprofile',['id'=>$x->id])}}" data-toggle="modal" data-target="#requestModal">{{$x->f_name.' '.$x->l_name}}</a></td>
            <td><a href="mailto:{{$x->email}}">{{$x->email}}</a></td>
            <td>{{ $x->credits }}</td>
            <td>{{ date('D, M Y',strtotime($x->updated_at)) }}</td>
            <td>

            <a href="#" data-attr="" data-target="#requestModal"  id="sendInvoice" data-toggle="modal" class="text-primary">Skicka en faktura</a><br/>
            <a href="#" data-toggle="modal" data-attr="{{route('assign_credit',['supplier_id'=>$x->supplier_id,'img'=>$x->profile_img,'f_name'=>$x->f_name,'email'=>$x->email])}}" class="text-black" id="assignCredit" data-target="requestModal">Tilldela kredit</a><br/>

            </td>                
            </tr>

            </tbody>

            @endforeach

</table>
</div>
</div>
<!--pagination box-->
<div class="pagination">
  {!! $verified_suppliers->links('vendor.pagination.bootstrap-4') !!}
      </div>

@endif

      <!--modals-->
		<!-- view modal -->
    <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onClick="closeModal('#requestModal')" data-dismiss="modal" aria-label="Close"style="border-radius:50%;width:35px;height:35px;border:0;color:#0d2453;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection