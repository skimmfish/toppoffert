@extends('layouts.admin_app_elite')
@section('content')

@include('layouts.admin_topbar')

<div class="row m-3">
<h1>Hej! {{\Auth::user()->f_name}}</h1>
<p class="line-height-auto">Hantera alla användare inklusive leverantörer och kunder här</p>

<!--filter formgroup-->
<div class="row">
<span class="text-black text-primary">Använd sökfiltret nedan för att hitta användare</span>
<form class="form" method="POST" action="">    
<div class="row">
<div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
<input type="text" name="username_email_telephone" class="form-control input-control-lg" placeholder="Enter user's username/email/telephone" />
</div>

<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
<select name="user_cat" class="form-control input-select">
<option value="">Select an user type</option>
<option value="SUPPLIER">SUPPLIERS</option>
<option value="CLIENT">CUSTOMERS</option>
</select>
</div>

<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
<button onClick="fetchUser(username_email_telephone.value,user_cat.value)" class="btn btn-primary btn-round dark-bg">Fetch</button>
</div>
</div>
<!--./form-->
</form>
<!--./row-->
</div>

<!--table section for all users-->
@php $id=1; @endphp

@if(sizeof($allusers)>0)

<div class="card mb-12 btn-reveal-trigger" id="dataFilter">	   
<div class="scrollable_table">
	    <table id="example" class="table table-responsive table-bordered table-stripped table_rws" style="color:#000 !important;padding:20px 4px 5px 5px !important;">
		<thead>	
        <tr>
                <th>S/N</th>
                <th></th>
                <th>E-postadress</th>
                <th>e</th>
                <th></th>
                <th></th>
            </tr>
</thead>
<tbody>
@foreach($allusers as $x)

            <tr>
            <td>{{$id++}}</td>
            <td><a href="#" data-attr="{{route('seeuserprofile',['id'=>$x->id])}}" data-toggle="modal" data-target="#requestModal">{{$x->f_name.' '.$x->l_name}}</a></td>
            <td><a href="mailto:{{$x->email}}">{{$x->email}}</a></td>
            <td></td>
            <td>{{ date('D, M Y',strtotime($x->updated_at)) }}</td>
            <td></td>                
            </tr>

            </tbody>

            @endforeach

</table>
</div>
</div>

<!--pagination box-->
<div class="pagination">
  {!! $allusers->links('vendor.pagination.bootstrap-4') !!}
      </div>

@else

<div class="row">
    <span class="underline">No such users on the database</span>
</div>

@endif








  <!-- ./ end of row m-3-->
   </div>
@endsection