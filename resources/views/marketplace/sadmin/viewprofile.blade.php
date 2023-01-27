<div class="row">

<table>
<thead>
<tr>
<th>Username</th>
</tr>

<tr>
<th  class="grid-box"><span><img src="{{asset('img/avatar/'.$profile->profile_img)}}" class="img-responsive-sm" lazyloading/></span> <span>{{ $profile->username }}</span></th>
</tr>

<tr>
<th>Full Name:</th>
</tr>

<tr>
<th>{{ $profile->f_name.' '.$profile->l_name }}</th>
</tr>

<tr>
<th>E-mail address</th>
</tr>

<tr>
    <th>{{ $profile->email }}</th>
</tr>

<tr>
    <th>User Location:</th>
</tr>

<tr>
    <th>{{ $profile->address.' '.$profile->city.', '.$profile->zip_code.', '.$profile->province }}</th>
</tr>

</thead>
</table>

</div>