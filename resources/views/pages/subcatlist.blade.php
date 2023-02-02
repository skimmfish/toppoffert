
<select class="flex-input form-control">
<option value="">Pin point where exactly your request fits in here</option>
@foreach($subcategories as $x)
<option value="{{$x->id.'_'.$x->service_cat_id}}">{{ucfirst($x->subcat_name)}}</option>
@endforeach

</select>