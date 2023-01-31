<div class="row">
<span>Välj alla kunder</span>
<div class="main-container wht-bg shif-dw">

<!--tabbed pane-->
<form action="{{route('save_buyer_type',['id'=>\Auth::user()->id])}}" method="POST">

@csrf 
@method('PUT')

<input type="hidden" name="supplier_id" value="{{\Auth::user()->id}}" />

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="buyer_type[]" />Välj alla kunder
</label>
</div>
    

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="buyer_type[]" value="bostadsrättsförening" />Bostadsrättsförening
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="buyer_type[]" value="byggherre/entreprenör"/>Byggherre/Entreprenör
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="buyer_type[]" value="företag"/>Företag
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="buyer_type[]" value="ideell förening"/>Ideell förening
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="buyer_type[]" value="kommun/myndighet"/>Kommun/Myndighet
</label>
</div>


<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="buyer_type[]" value="Privatperson"/>Privatperson
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="buyer_type[]" value="villaförening"/>Villaförening
</label>
</div>

</div>
</div>
</div>

</form>


<!--close of ./wrapper -->

</div>


<!--./row wht-bg-->
</div>
