<div class="row">
<h6>Skicka gärna en avisering här!</h6>

<form action="{{route('sendmsg_reply')}}" method="POST">
<div class="form-group col-md-12 col-lg-12 col-xs-12">
<input type="email" readonly value="{{$email}}" class="form-control border-input-field" />
</div>
<Br/>
<input type="hidden" name="id" value="{{$id}}"/>

<div class="form-group col-md-12 col-lg-12 col-xs-12">
<input type="text" name="subject" value="{{$subject}}" readonly class="form-control border-input-field"/>
</div>
<br/>
<div class="form-group col-md-12 col-lg-12 col-xs-12">
<textarea name="msg" class="form-control border-input-field" placeholder="Skriv ditt meddelande här" style="height:180px !important;" resize="none" required></textarea>
</div>
<br/>
<div class="form-group col-md-12 col-xs-12 col-lg-12">
<button class="btn btn-primary" name="send_notification"><span class="text-white text-sm">Skicka Meddelande</span></button>
</div>
</form>

</div>