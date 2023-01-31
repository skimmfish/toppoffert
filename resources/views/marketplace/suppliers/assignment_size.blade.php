<div class="row">
<span>Välj alla uppdragsvärden</span>
<div class="main-container wht-bg shif-dw">

<!--tabbed pane-->
<form action="{{route('save_assignment_size',['id'=>\Auth::user()->id])}}" method="POST">

@csrf 
@method('PUT')

<input type="hidden" name="supplier_id" value="{{\Auth::user()->id}}" />

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="assignment_size[]" value="0-15000"/> <span>0 - 15,000 Kr</span>
</label>
</div>
    

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="assignment_size[]" value="15000-50000" /> <span>15,000 - 50,000 Kr</span>
</label>
</div>


<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="assignment_size[]" value="50000-200000" /> <span>50,000 - 200,000 Kr</span>
</label>
</div>


<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="assignment_size[]" value="200000-500000" /> <span>200,000 - 500,000 Kr</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="assignment_size[]" value="500000-1000000" /> <span>500,000 - 1 000,000 Kr</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="assignment_size[]" value="1000000-3000000" /> <span>1,000,000 - 3,000,000 Kr</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="assignment_size[]" value="300000-10000000" /> <span>3,000,000 - 10,000,000 Kr</span>
</label>
</div>


<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="assignment_size[]" value="above 10000000" /> <span>>10,000,000 Kr</span>
</label>
</div>

<div class="form-group" style="padding-top:14px;">
<label class="form-label">
<input type="checkbox" name="assignment_size[]" value="Ospecificerat (visas ej)"/> <span>Ospecificerat (visas ej)</span>
</label>
</div>

</form>

</div>
</div>