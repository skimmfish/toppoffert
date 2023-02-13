<style>
body{
    color:#000000;
}
    </style>
<div class="row">

<table class="table table-bordered table-stripped table-responsive table_rws">
<thead>
<tr>
<th>Username</th>
<th><span>{{ $profile->username }}</span></th>
<th><span>

@if($profile->profile_img!=NULL)<img src="{{asset('img/avatar/'.$profile->profile_img)}}" class="img-responsive-sm" alt="{{$profile->username}}" />
@else
<svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" style="position:relative;left:50%;" viewBox="0 0 24 24" class="svg-icon svg-icon--size-medium svg-icon--spacing-right-tiny fill-current-color"><path d="M12 15.75c-3.308 0-6-2.692-6-6s2.692-6 6-6 6 2.692 6 6-2.692 6-6 6zm0-10.5c-2.481 0-4.5 2.019-4.5 4.5s2.019 4.5 4.5 4.5 4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5z"></path><path d="M12 24c-2.677 0-5.211-.868-7.332-2.51a.507.507 0 01-.126-.099C1.655 19.094 0 15.674 0 12 0 5.383 5.383 0 12 0s12 5.383 12 12c0 3.674-1.655 7.094-4.543 9.391l-.015.016c-.043.043-.087.069-.112.084A11.868 11.868 0 0112 24zm-5.716-3.199A10.408 10.408 0 0012 22.5a10.41 10.41 0 005.717-1.699 8.966 8.966 0 00-5.716-2.045 8.965 8.965 0 00-5.717 2.045zM12 1.5C6.21 1.5 1.5 6.21 1.5 12c0 3.023 1.294 5.875 3.562 7.874A10.449 10.449 0 0112 17.257c2.573 0 5.023.927 6.938 2.616 2.268-2 3.562-4.851 3.562-7.874C22.5 6.21 17.79 1.5 12 1.5z"></path></svg>
@endif

</span> </th>
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