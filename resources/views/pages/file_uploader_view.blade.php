    <div class="row">
    <h6 class="text-sm spartan" style="font-size:12.5px !important">Ladda upp ditt certifieringsdokument för din valda yrkeskategori</h6><hr/>
    <form method="POST" action="{{route('upload_certification',['uid'=>$s_id])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="supplier_id" value="{{$s_id}}" />
    <div class="form-group">
        <input type="file" name="certificate_uri" placeholder="Välj en fil" class="form-control" />
</div>
<div class="form-group">
    <button class="btn btn-primary btn_dark text-xs" style="font-weight:400;font-family:Spartan;margin:10px 0;height:40px;border-radius:9px;font-size:12px;" name="upload" id="upload">Ladda upp dokument</button>
</div>
    </form>
    </div>