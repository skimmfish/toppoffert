@extends('layouts.admin_app_elite')
@section('content')

@include('layouts.admin_topbar')


<div class="notify_div">
@if (session('message')) 
 <div class="alert alert-info text-md">  {{ session('message') }} </div>
              @elseif(session('error'))
              <div class="alert alert-danger text-md">  {{ session('error') }}   </div>  
                      @endif 
                    <!--./notify-->
                    </div>


<div class="row" style="margin-bottom:15px;">
<a href="{{url()->previous()}}"  class="text-black btn btn-white" style="height:40px;border-radius:40px;padding-top:6px !IMPORTANT;margin-bottom:15px;">
<svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> Tillbaka
</a>
</div>


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
            <button class="btn btn-falcon-default btn-sm dropdown-toggle ms-2 dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>                  
                    <div class="dropdown-menu">
                    <a href="#" data-attr="" data-target="#requestModal"  id="sendInvoice" data-toggle="modal" class="text-primary dropdown-item">Skicka en faktura</a><br/>
                    <a href="#" data-attr="{{route('assign_credit',['supplier_id'=>$x->supplier_id])}}" class="text-black dropdown-item" data-toggle="modal" id="assignCredit" data-target="#requestModal">Tilldela kredit</a><br/>
                    <div class="dropdown-divider"></div>
<!--                    <a class="dropdown-item text-danger" href="#">Delete user</a>-->
                    </div>
                    </div>
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