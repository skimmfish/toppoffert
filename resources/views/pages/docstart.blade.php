@extends('layouts.plain_header')
@section('content')


<div class="row preview_board">
    <div class="cover_div">
        <div class="circl_img">
            <img src="{{asset('img/delivery_man2.jpg')}}" class="img-responsive img-rounded" />
                </div>

        <p class="texts">Dokument</p>

<div class="btn_layer">
<a href="{{route('see_agreement_documents',['hash'=>$docHash])}}" class="btn btn-success btn_proceed">Visa detaljer 

<svg width="30px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g id="icomoon-ignore"></g><path d="M19.159 16.767l0.754-0.754-6.035-6.035-0.754 0.754 5.281 5.281-5.256 5.256 0.754 0.754 3.013-3.013z" fill="#ffffff">
</path></svg></a>

</div>

</div>
</div>

@endsection