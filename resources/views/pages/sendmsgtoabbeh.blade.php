<form action="{{route('sendmsg')}}" method="POST">
@csrf
<input type="hidden" name="email__to" value="{{$email}}"/>
<div class="form-group">
<textarea placeholder="Send your message here to Abbeh" name="msgto_send" class="textareaa"></textarea>
</div>
<div class="form-group">
    <button class="btn btn-primary dark_bg">Skicka ett Meddelande</button>
</div>

</form>