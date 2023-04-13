@extends('layouts.clientsheader')

@section('content')

@include('layouts.admin_topbar')

@php
$supplierObj = new \App\Models\Suppliers;
@endphp

<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('2be730af9eb7e5d92332', {
      cluster: 'mt1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>

<style>
.mesg_box::-webkit-scrollbar {
  width: 5px;               /* width of the entire scrollbar */
}

.mesg_box::-webkit-scrollbar-track {
  background: #fff; padding:8px;       /* color of the tracking area */
}

.mesg_box::-webkit-scrollbar-thumb {
  background-color: #555;    /* color of the scroll thumb */
  border-radius: 20px;       /* roundness of the scroll thumb */
  border: 2px #ffffff;  /* creates padding around scroll thumb */
}
</style>


<a href="{{url()->previous()}}" class="text-black btn btn-white"><svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> Tillbak
</a>


<h1 class="h1_m_30" style="font-size:30px;">Hej! {{\Auth::user()->f_name}} {{\Auth::user()->l_name }}</h1>
<hr/>


<div class="row" > @if (session('message'))   <div class="alert alert-info text-md" style="font-size:14.5px;">  {{ session('message') }}</div>@endif</div>

<div class="row">

<p><span>Begär information</span>
<h6 style="margin-top:-8px;" class="text-lg">{{$title}}</h6>
</p>



<div class="col-md-11 col-lg-11 col-xl-11 col-sm-11 col-xs-12">
<!--here is a flow of communication between buyer and supplier-->

<div class="row tabs wht-bg" style="grid-template-columns:40% 40%;grid-gap:5px;">
<button href="#" onclick="openCity('messages')">Meddelanden</button>
<button href="#" onclick="openCity('files')">Filer</button>
</div>

<!--the divs for the discussions comes here-->
<div id="messages" class="row city main-container shif-dw">

@if(sizeof($messages)<=0 && $premsg==NULL)

<div class="flex-box">
<span><svg width="60px" height="60px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.2 21.37C12.54 22.25 11.46 22.25 10.8 21.37L9.29999 19.37C9.12999 19.15 8.77 18.97 8.5 18.97H8C4 18.97 2 17.97 2 12.97V7.96997C2 3.96997 4 1.96997 8 1.96997H16C20 1.96997 22 3.96997 22 7.96997V12.97" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.2 21.4C19.9673 21.4 21.4 19.9673 21.4 18.2C21.4 16.4327 19.9673 15 18.2 15C16.4327 15 15 16.4327 15 18.2C15 19.9673 16.4327 21.4 18.2 21.4Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 22L21 21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.9965 11H16.0054" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.9955 11H12.0045" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.99451 11H8.00349" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span>
<span><i>Oj, du har inget meddelande här! 
Medan du väntar på att din köpare ska svara, använd rutan nedan för att skicka ditt bud om du inte har gjort det tidigare.<br/>
Tack!</i>
</span>
</div>


<!--elseif there aer messages for the buyer or supplier-->

@else

<div class="mesg_box" style="background:none;padding:0 12px 5px 12px !important;height:400px;overflow-y:scroll;overflow-x:hidden">

<div class="row premsg" style="background:#fff">

<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2 col-xl-2">

<!--suppliers' avatar-->
@if(!is_null($s_avatar))
<img lazyloading src="{{asset('img/avatar/'.$s_avatar)}}" alt="Supplier" class="img img-responsive-sm grey_bg" style="width:42px !important;height:42px !important;"/>
@else

<svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 21.0001H6.5C5.11929 21.0001 4 19.8808 4 18.5001C4 14.4194 10 14.5001 12 14.5001C14 14.5001 20 14.4194 20 18.5001C20 19.8808 18.8807 21.0001 17.5 21.0001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

@endif
</div>

<div class="col-md-8 col-lg-8 col-xl-8 col-sm-8 col-sm-8" style="font-size:12px;">

{{$premsg}}

</div>
</div>

@foreach($messages as $e)

@php 
$msg = explode("__@_",$e->message);
$whoSendsIt = $msg[1];
$message = $msg[0];
$buyer_id = $e->buyer_id; 
$buyer_img = \App\Models\User::get_data('profile_img',$buyer_id);
$supplier_id = $e->supplier_id; $seller_img = \App\Models\User::get_data('profile_img',$supplier_id);
@endphp

@if($whoSendsIt=='seller_msg')
<div class="row" style="border-radius:10px;background:#fff;padding:0 12px 5px 12px !important;margin:10px 0 9px 0;">

<div class="col-md-2 col-xs-2">

@if(!is_null($s_avatar))
<img src="{{asset('img/avatar/'.$s_avatar)}}" lazyloading class="img-responsive-sm grey_bg"/>
@else

<svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 21.0001H6.5C5.11929 21.0001 4 19.8808 4 18.5001C4 14.4194 10 14.5001 12 14.5001C14 14.5001 20 14.4194 20 18.5001C20 19.8808 18.8807 21.0001 17.5 21.0001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
@endif
</div>

    <div class="col-md-9 col-lg-9 col-xs-9 col-sm-9 col-xl-9 bmsgg">
        <span style="font-size:12px;">{{$message}}</span><hr/>
        <small>Skickad på: {{date('D d, F Y',strtotime($e->created_at))}}</small>
        </div>

        <div class="col-md-1 col-lg-1 col-xs-1 col-sm-1"></div>

<!--./row message_row-->
</div>

@elseif($whoSendsIt=='buyer_msg')

<div class="row msgg" style="border-radius:10px; background:#bce8fa;padding:12px 12px 5px 12px !important;margin:10px 0 9px 0" id="mgsbx">

<div class="col-md-2 col-lg-2 col-xl-2 col-xs-3">

@if(file_exists(public_path('img/avatar/'.$buyer_img)))

<img src="{{asset('img/avatar/'.$buyer_img)}}" lazyloading class="img-responsive-sm grey_bg"/>
@else

<svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 21.0001H6.5C5.11929 21.0001 4 19.8808 4 18.5001C4 14.4194 10 14.5001 12 14.5001C14 14.5001 20 14.4194 20 18.5001C20 19.8808 18.8807 21.0001 17.5 21.0001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
@endif

</div>

<div class="col-md-9 col-lg-9 col-xs-9 col-sm-9 col-xl-9">
<span style="font-size:12px;">{{$message}}</span><hr/>
<small><i>Skickad på: {{date('D d, F Y',strtotime($e->created_at))}}</i></small>
</div>

        <!--message control-->
<div class="col-md-1 col-lg-1 col-xs-1 col-sm-1"></div>

</div>        
@endif
@endforeach

<hr/>

<div class="row">  
<div class="col-md-12" id="buyer_Box" style="width:98%;background:none !important;margin-top:30px;padding:10px 15px;">
    
<div class="row"><span> Skicka din röra</span></div><br/>

    <form action="{{route('marketplace.buyers.sendmsg')}}" method="POST" enctype="multipart/form-data" style="margin-top:-9px !important;margin-bottom:15px;width:100%;">
    {{csrf_field()}}
    <input type="hidden" name="supplier_id" value="{{$supplier_id}}" />
    <input type="hidden" name="request_id" value="{{$id}}" />
    <input type="hidden" name="buyer_id" value="{{$buyer_id}}" />

    <div class="form-group">
        <textarea class="msg_box form-control" name="request_response" style="height:95px !important;border-radius:10px;padding-top:20px" required placeholder="Ange din korrespondens här, köparen återkommer när de ser ditt meddelande!" style="padding-top:7px;"></textarea>
        </div>
        <div class="form-group">
        <label class="form-label">Ladda upp dokument här</label>    
        <input type="file" class="form-control input-control-md" placeholder="Please select a file for your portfolio if you got one" name="filer"/>
        </div>

        <div class="form-group">
            <label class="form-label">Ladda upp dokument här</label>
            <input type="file" class="form-control input-control-md" placeholder="Please select a file for your portfolio if you got one" name="other_filer"/>
        </div>

        <div class="col-md-12 form-group" style="margin-top:14px;">
        <button name="send_msg" class="btn btn-success btn-dark spartan" style="height:37px;color:#fff !important;border-radius:6px !important;background:#0d2453 !important">Skicka Meddelande</button>
        </div>
        <Br/><br/><br/>
    </form>
    </div>
</div>

<!--for files-->
<!-- style="display:none" 
main-container wht-bg shif-dw flex-box-->
<div id="files" class="row city main-container shif-dw">

@php

$files = explode("@__",$allfiles->file_name);

@endphp

@if(is_null($allfiles) || is_null($files[0]))
NULL
<span><svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.0169 7.99175C21.4148 8.55833 20.9405 9.25 20.2482 9.25H3C2.44772 9.25 2 8.80228 2 8.25V6.42C2 3.98 3.98 2 6.42 2H8.74C10.37 2 10.88 2.53 11.53 3.4L12.93 5.26C13.24 5.67 13.28 5.72 13.86 5.72H16.65C18.4546 5.72 20.0516 6.61709 21.0169 7.99175Z" fill="#292D32"/>
<path d="M21.9834 11.7466C21.9815 11.1957 21.5343 10.75 20.9834 10.75L2.99998 10.7503C2.44771 10.7503 2 11.1981 2 11.7503V16.6504C2 19.6004 4.4 22.0004 7.35 22.0004H16.65C19.6 22.0004 22 19.6004 22 16.6504L21.9834 11.7466ZM14.5 16.7504H12.81V18.5004C12.81 18.9104 12.47 19.2504 12.06 19.2504C11.64 19.2504 11.31 18.9104 11.31 18.5004V16.7504H9.5C9.09 16.7504 8.75 16.4104 8.75 16.0004C8.75 15.5904 9.09 15.2504 9.5 15.2504H11.31V13.5004C11.31 13.0904 11.64 12.7504 12.06 12.7504C12.47 12.7504 12.81 13.0904 12.81 13.5004V15.2504H14.5C14.91 15.2504 15.25 15.5904 15.25 16.0004C15.25 16.4104 14.91 16.7504 14.5 16.7504Z" fill="#292D32"/>
</svg></span>
<span>
Dina bifogade filer visas här
</span>
@else




<div class="row">
@php

for($i=0;$i < count($files);$i++){ @endphp

<div class="col-md-3 col-xs-4 col-lg-3 col-sm-4 ims-md" style="margin-bottom:10px;">
<a href="#" data-attr="{{route('view_img',['img_name'=>$files[$i]])}}" data-target="#requestModal" data-toggle="modal" id="viewImage"><img src="{{asset('img/requests/'.$files[$i])}}" class="img-responsive-lg" lazyloading/></a>
</div>




@php } @endphp

@endphp
</div>

@endif

</div>

</div>

<!--./row message_row-->
    </div>
        </div>
            @endif
                </div>

<div class="col-md-1 col-lg-1 col-sm-1 col-xs-12"></div>
</div>

<!--modals-->
		<!-- view modal -->
        <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onClick="closeModal('#requestModal')" data-dismiss="modal" aria-label="Close"style="border-radius:50%;width:35px;height:35px;border:0;color:#0d2453;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection