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
@csrf 
@method('GET')

<div class="row">
<div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
<input type="text" name="username_email_telephone" class="form-control input-control-lg border-input-field" placeholder="Enter user's username/email/telephone" />
</div>

<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
<select name="user_cat" class="form-control border-input-field input-select">
<option value="">Select an user type</option>
<option value="SUPPLIER">SUPPLIERS</option>
<option value="CLIENT">CUSTOMERS</option>
</select>
</div>

<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
<button onClick="fetchUser(username_email_telephone.value,user_cat.value)" class="btn btn-primary btn-round" style="background-color:#dfdfdf !important;border-radius:50px;">
<svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 22L20 20" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</button>
</div>
</div>
<!--./form-->
</form>
<!--./row-->
</div>

<!--table section for all users-->
@php $id=1; @endphp

@if(sizeof($allusers)>0)


@if($user_cat=='CLIENT')
<div class="card mb-12 btn-reveal-trigger" id="dataFilter">	   

<div class="scrollable_table">
	    <table id="example" class="table table-responsive table-bordered table-stripped table_rws" style="color:#000 !important;padding:20px 4px 5px 5px !important;">
		<thead>	
        <tr>
                <th>S/N</th>
                <th>Fullständiga namn <hr/> Användarnamn</th>
                <th>E-postadress</th>
                <th>Plats</th>
                <th>Telefonnummer / Alternativt telefonnummer</th>
                <th>Avatar</th>
                <th>Användarkategori</th>
                <th>Registreringsdatum</th>
                <th>Handling</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allusers as $x)
            <tr>
            <td>{{$id++}}</td>
            <td><a href="#" data-attr="{{route('seeuserprofile',['id'=>$x->id])}}" data-toggle="modal" data-target="#requestModal" id="viewUsr">{{$x->f_name.' '.$x->l_name}}</a> / {{$x->username}}</td>
            <td><a href="mailto:{{$x->email}}">{{$x->email}}</a></td>
            <td></td>
            <td>{{$x->phone_no}} <hr/> {{$x->telephone}}</td>
            <td><img src="{{ asset('img/avatar/'.$x->profile_img) }}" lazyloading class="img-responsive-sm" /></td>
            <td>{{$x->user_cat}}</td>
            <td>{{ date('D, M Y',strtotime($x->updated_at)) }}</td>
            <td>
            <!--actions-->
            <a href="#" data-toggle="modal" data-attr="{{route('seeuserprofile',['id'=>$x->id])}}" class="text-primary" title="View User" id="viewUsr" class="text-success" data-target="#requestModal">Visa användare</a><br/>
            <a href="#" data-toggle="modal" data-attr="{{route('send_message',['email'=>$x->email])}}" title="Send a notification" id="notifyUsr" data-target="#requestModal">Skicka ett meddelande</a>
            <a href="#" data-toggle="modal" data-attr="{{route('delete_user',['id'=>$x->id])}}" class="text-black" id="deleteUser" data-target="#requestModal" title="Delete User">Ta bort användare</a><Br/>



            </td>                
            </tr>

            </tbody>

            @endforeach

</table>
</div>
</div>

@elseif($user_cat=='SUPPLIER')

@foreach($allusers as $x)
<div class="row move-down">
<!--name column-->
<div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
<img src="{{asset('img/avatar/'.$x->profile_img)}}" class="img-responsive-sm" lazyloading />
</div>

<div class="col-md-4 col-lg-4 col-xs-8 col-sm-4">
<h6><a href="#" data-attr="{{route('seeuserprofile',['id'=>$x->id])}}" data-toggle="modal" data-target="#requestModal" id="viewUsr">{{$x->f_name. ' '.$x->l_name}} </a><Br/>
<small>{{ $supObj->get_supplier_data('supplier_corp_name',$x->id) }} <Br/>
{{date('D, M, Y',strtotime($x->created_at))}}
</small>
</h6>
</div>


<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 grid-box" style="grid-gap:10px;">
<span>
<svg width="30px" height="30px" viewBox="0 0 1024 1024" fill="#000000" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z" fill="" /></svg>    
</span>
<span class="text-black">{{$x->address.', '.$x->city.', '.' '.$x->province.', '.$x->zipcode }}<Br/>
<a href="telno:{{$x->telephone}}">{{$x->telephone}}</a><br/>
<a href="telno:{{$x->phone_no}}">Alt. {{$x->phone_no}}</a>

</span>
</div>

<div class="col-xs-3 col-lg-2 col-md-2 col-sm-2">
<a href="mailto:{{$x->phone_no}}">
<div class="dialer"><svg width="22px" height="22px" viewBox="0 0 24 24" class="svg-icon" xmlns="http://www.w3.org/2000/svg">
<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"/>
<path d="M20 4H15.2M20 4V8.8V4Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</div>
</a>
</div>

<!--./row-->
</div>

@endforeach
@endif

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