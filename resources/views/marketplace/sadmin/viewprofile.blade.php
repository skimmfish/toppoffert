<div class="row">

<table class="table table-bordered table-stripped table-responsive table_rws">
<thead>
<tr>
<th>Username</th>
<th><span>{{ $profile->username }}</span></th>
<th><span><img src="{{asset('img/avatar/'.$profile->profile_img)}}" class="img-responsive-sm" lazyloading/></span> </th>
</tr>
@if($profile->user_cat=='SUPPLIER')
<tr>
<th>Supplier Corp. Name</th>
<th><span>{{$supObj->get_supplier_data('supplier_corp_name',$profile->id) }}</span></th>
</tr>
@endif
<tr>
<th>Full Name:</th>
<th>{{ $profile->f_name.' '.$profile->l_name }}</th>
</tr>

<tr>
<th>Phone Numbers:</th>
<th>{{ $profile->telephone.', '.$profile->phone_no }}</th>
</tr>

<tr>
<th>E-mail address</th>
    <th>{{ $profile->email }}</th>
</tr>

<tr>
    <th>User Location:</th>
    <th>{{ $profile->address.' '.$profile->city.', '.$profile->zip_code.', '.$profile->province }}</th>
</tr>

</thead>
</table>

</div>