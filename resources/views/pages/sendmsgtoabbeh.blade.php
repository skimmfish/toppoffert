<h6 style="font-size:15.5px;font-weight:600;">
Skicka ett Meddelande till {{ \App\Http\Controllers\ConfigController::get_value('contact_person') }} </h6>
<Hr/>
<form action="{{route('sendmsg')}}" method="POST">
@csrf
<div class="row">
<input type="hidden" name="email__to" value="{{$email}}"/>
<div class="form-group col-md-12">
<textarea placeholder="Skicka ditt meddelande här till Abbeh" name="msgto_send" class="form-control textarea"></textarea>
</div>
<div class="form-group col-md-12">
    <button class="btn btn-primary dark_bg">Skicka ett Meddelande</button>
</div>
</div>

</form>