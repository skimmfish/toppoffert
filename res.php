@extends('layouts.supplierheader')
@section('content')
@include('layouts.admin_topbar')

<div class="container certification_section">
<div class="row">
<h3>Ladda upp ditt företags certifieringar här</h3>
<form action="" method="POST">
@csrf
<div class="form-group">

</div>

</form>
</div>
</div>

@endsection
