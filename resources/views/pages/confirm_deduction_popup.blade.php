<div class="container">
<div class="row">
    <h6 style="font-size:12.5px !important;font-weight:700">
    Bekräfta om du vill fortsätta med den här åtgärden! Vänligen notera att, {{\App\Http\Controllers\ConfigController::get_value('credit_per_request')}} kommer att debiteras från ditt saldo om det inte har dragits tidigare.</h6>
</div>
<div class="row flex-btn">

<div class="col-md-6"><a href="{{route('reach_out_to_buyer_action',['id'=>$id,'supplier_id'=>$supplier_id,'buyer_id'=>$buyer_id])}}" target="_blank" class="btn btn-primary btn-dark dark-md" style="background:#0d2453 !important;padding:9px 35px;color:#fff !important;font-family:'Spartan','GD Sherpa Regular';">Ja Fortsätt</a></div>

    <div class="col-md-6"> <a href="#" type="button" class="btn btn-warning" style="padding-top:9px;height:40px;" data-dismiss="modal" aria-label="Close" type="button">Nej! Fortsätt inte</a></div>

</div>

</div>