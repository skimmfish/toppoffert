<!--this form is for assigning credits to supplier after payment is confirmed-->
<div class="row">

<form class="form" method="POST" action="{{route('assign_credit_to_supplier',['id'=>$supplier_id])}}'">
@csrf
@method('PUT')
<div class="grid-box">

<span><img src="{{asset('img/avatar/'.$img)}}" class="img-response-md" alt="{{$f_name}}" /></span>
<span><h6>{{$f_name}}</h6></span>

</div>

<div class="form-group col-md-6">
<input type="number" name="credits" value="{{old('credits')}}" placeholder="Ange poäng att tilldela" required/>
</div>

<div class="form-group">
<button name="assign_button" title="assign credit" class="btn btn-primary btn-round dark_bg">Tilldela kredit</button>
</div>
</form>
</div>