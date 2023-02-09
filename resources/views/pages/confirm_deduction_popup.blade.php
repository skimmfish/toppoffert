<div class="container">
<div class="row">
    <h6 style="font-size:13.5px;font-weight:700">Please confirm if you wan to proceed with this action! Kindly note that, {{\App\Http\Controllers\ConfigController::get_value('credit_per_request')}} will be charged from your credit balance.</h6>
</div>
<div class="row flex-btn">

<div class="col-md-6"><a href="{{route('reach_out_to_buyer_action',['id'=>$id,'supplier_id'=>$supplier_id,'buyer_id'=>$buyer_id])}}" target="_blank" class="btn btn-primary btn-dark dark-md" style="background:#0d2453 !important;padding:9px 35px;color:#fff !important;">Yes</a></div>

    <div class="col-md-6"> <a href="#" type="button" class="btn btn-warning" style="padding-top:9px;height:40px;" data-dismiss="modal" aria-label="Close" type="button">No! Don't Proceed</a></div>

</div>

</div>