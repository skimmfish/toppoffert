<div class="row">

<table>
<thead>
<tr>
<th>Username</th>
</tr>

<tr>
    <th>{{ $profileID->username }}</th>
</tr>

<tr>
<th>Full Name:</th>
</tr>

<tr>
    <th>{{ $profileID->f_name.' '.$profileID->l_name }}</th>
</tr>

<tr>
<th>E-mail address</th>
</tr>

<tr>
    <th>{{ $profileID->email }}</th>
</tr>

<tr>
    <th>User Location:</th>
</tr>

<tr>
    <th>{{ $profileID->address.' '.$profileID->city.', '.$profileID->zip_code.', '.$profileID->province }}</th>
</tr>







</thead>
</table>

</div>