<!--this form is for assigning credits to supplier after payment is confirmed-->
<span>Tilldela kredit till leverantörer här, efter bekräftelse av fakturabetalning</span>

<div class="row" style="background:#fff;border-radius:10px;">
<form class="form" method="POST" action="{{route('assign_credit_to_supplier',['id'=>$supplier_id])}}'">
@csrf
@method('PUT')

<div class="grid-box">
<span><img src="{{asset('img/avatar/'.$img)}}" class="img-responsive-sm" alt="{{$f_name}}" /></span>
<span><h6 style="font-size:14px !important;">{{$f_name.' '.$l_name}} ({{ $supObj->get_supplier_data('supplier_corp_name',$supplier_id) }})</h6></span>

</div>

<div class="row">
<div class="form-group col-md-10 col-xs-12 col-lg-10">
    <label class="form-label">Ange antalet poäng här</label>
<input type="number" name="credits" class="form-control" style="border-radius:50px;border:1px solid #0d2453;" value="{{old('credits')}}" placeholder="Ange poäng att tilldela" required/>
<button name="assign_button" title="assign credit" class="btn btn-primary dark_bg"><span class="text-md">Tilldela Kredit</span></button>

</div>

</div>
</div>
</form>
</div>