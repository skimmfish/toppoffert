<div class="row">
<h6 class="text-md spartan">Ladda upp ditt certifieringsdokument för din valda yrkeskategori</h6>
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<input type="hidden" name="supplier_id" value="{{$s_id}}" />
    <input type="file" name="certificate_uri" placeholder="Välj en fil" class="form-control" />
    <button class="btn btn-primary">Ladda upp dokument</button>
</form>

</div>