<div class="container">
<div class="row">
    <h6 style="font-size:13.5px;font-weight:700">
    Är du säker på att du vill godkänna denna begäran?
</h6>
</div>
<div class="row flex-btn">

<div class="col-md-6">
<a href="{{route('sadmin_approve_request',['request_id'=>$request_id,'buyer_id'=>$buyer_id])}}" target="_blank" class="btn btn-primary btn-dark dark-md" style="background:#0d2453 !important;padding:9px 35px;color:#fff !important;font-family:'Spartan','GD Sherpa Regular';">Ja Fortsätt</a></div>
    <div class="col-md-6"> <a href="#" type="button" class="btn btn-warning" style="padding-top:9px;height:40px;" data-dismiss="modal" aria-label="Close" type="button">Nej! Fortsätt inte</a></div>

</div>
</div>