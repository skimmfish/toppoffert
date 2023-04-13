@extends('layouts.supplierheader')
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
 

<!--send message box to buyers showing interest-->

<a href="{{url()->previous()}}" class="text-black btn btn-white"><svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> back
</a>


<h1 class="h1_m_30" style="font-size:30px;">Hej! {{\Auth::user()->f_name}} {{\Auth::user()->l_name }}</h1>
<h3 class="redc_grey" style="font-size:14px !important; ">{{$supplierObj->where('supplier_id',\Auth::user()->id)->first()->supplier_corp_name}}. {{\Auth::user()->phone_no}}
</h3>

<div class="row">
<div class="row" > @if (session('message'))   <div class="alert alert-info text-md" style="font-size:14.5px;">  {{ session('message') }}</div>@endif</div>

<hr/>
<p><span>Begär information</span>
<h6 style="margin-top:-8px;" class="text-lg">{{$request_title}}</h6>
</p>

<div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
<!--here is a flow of communication between buyer and supplier-->

<div class="row tabs wht-bg" style="grid-template-columns:35% 35%;grid-gap:5px;">
<button href="#" onclick="openCity('messages')">Meddelanden</button>
<button href="#" onclick="openCity('files')">Filer</button>
</div>

<!--the divs for the discussions comes here-->
<div id="messages" class="row city main-container wht-bg shif-dw" style="background:none">

@if(sizeof($messages)<=0)

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
@else

<div class="mesg_box" style="overflow-y:scroll;height:400px;">
@foreach($messages as $e)

@php 
$msg = explode("__@_",$e->message);
$whoSendsIt = $msg[1];
$message = $msg[0];
$buyer_id = $e->buyer_id; $buyer_img = \App\Models\User::get_data('profile_img',$buyer_id);
$supplier_id = $supplier_id; $seller_img = \App\Models\User::get_data('profile_img',$supplier_id);
@endphp

@if($whoSendsIt=='seller_msg')
<div class="row" style="border-radius:10px;padding-top:9px;margin:7px 0 7px 0; background-color:#f9f9f9;border:0;box-shadow:3px 3px 3px 3px #efefef">
<div class="col-md-2 col-xs-3">
    <img src="@if(!is_null($avatar)) {{asset('img/avatar/'.$avatar)}} @else {{asset('img/avatar/empty_avatar.png')}} @endif" lazyloading class="img-responsive-sm grey_bg" style="width:40px;height:40px;"/>
</div>

    <div class="col-md-9 col-lg-9 col-xs-8 col-sm-9 bmsgg">
        <span class="premsg" style="background:none !important;font-style:italic">{{$message}}</span><hr/>
        <b><small>Skickad på: {{date('D d, F Y',strtotime($e->created_at))}}</small></b>
        </div>

        <!--message control-->
        <div class="col-md-1 col-lg-1 col-xs-1 col-sm-1"></div>

<!--./row message_row-->
    </div>
@elseif($whoSendsIt=='buyer_msg')

<div class="row" style="border-radius:10px; background:#fff;margin-left:0;padding-top:9px;">
<div class="col-md-2 col-lg-2 col-xs-3">
    <img src="{{asset('img/avatar/'.$buyer_img)}}" lazyloading class="img-responsive-sm grey_bg"/>
</div>

    <div class="col-md-10 col-lg-10 col-xs-8 col-sm-10 msgg">
        <span class="premsg" style="background:none !important;">{{$message}}</span><hr/>
        <small><i>Skickad på: {{date('D d, F Y',strtotime($e->created_at))}}</i></small>
        </div>

        <!--message control-->
        <div class="col-md-1 col-lg-1 col-xs-1 col-sm-1"></div>

<!--./row message_row-->
    </div>

@endif
@endforeach
</div>
@endif
</div>

<!--for files-->
<div id="files" class="row city main-container wht-bg shif-dw flex-box" style="display:none">

@if(is_null($allfiles))
<span><svg width="60px" height="60px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.0169 7.99175C21.4148 8.55833 20.9405 9.25 20.2482 9.25H3C2.44772 9.25 2 8.80228 2 8.25V6.42C2 3.98 3.98 2 6.42 2H8.74C10.37 2 10.88 2.53 11.53 3.4L12.93 5.26C13.24 5.67 13.28 5.72 13.86 5.72H16.65C18.4546 5.72 20.0516 6.61709 21.0169 7.99175Z" fill="#292D32"/>
<path d="M21.9834 11.7466C21.9815 11.1957 21.5343 10.75 20.9834 10.75L2.99998 10.7503C2.44771 10.7503 2 11.1981 2 11.7503V16.6504C2 19.6004 4.4 22.0004 7.35 22.0004H16.65C19.6 22.0004 22 19.6004 22 16.6504L21.9834 11.7466ZM14.5 16.7504H12.81V18.5004C12.81 18.9104 12.47 19.2504 12.06 19.2504C11.64 19.2504 11.31 18.9104 11.31 18.5004V16.7504H9.5C9.09 16.7504 8.75 16.4104 8.75 16.0004C8.75 15.5904 9.09 15.2504 9.5 15.2504H11.31V13.5004C11.31 13.0904 11.64 12.7504 12.06 12.7504C12.47 12.7504 12.81 13.0904 12.81 13.5004V15.2504H14.5C14.91 15.2504 15.25 15.5904 15.25 16.0004C15.25 16.4104 14.91 16.7504 14.5 16.7504Z" fill="#292D32"/>
</svg></span>
<span>
Dina bifogade filer visas här
</span>

@else


<div class="row">

@foreach($allfiles as $x)
@php
$files = explode("@__",$allfiles->file_name);
for($i=0;$i< sizeof($files)-1;$i++){ 
@endphp
<div class="col-md-3 col-xs-4 col-lg-3 col-sm-4 ims-md" style="margin-bottom:10px;">
<a href="#" data-attr="{{route('view_img',['img_name'=>$files[$i]])}}" data-target="#requestModal" data-toggle="modal" id="viewImage"><img src="{{asset('img/requests/'.$files[$i])}}" class="img-responsive-lg" lazyloading/></a>
</div>
@php } @endphp

@endforeach
</div>
@endif

</div>



</div>

<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12" style="padding:4px 10px;">
<div class="buyers_info">
<h6 class="h6 text-lg">kundinformation</h6>
<hr/>
<!--details-->
<p class="info_item">
<span>Name:</span>
<span>{{\App\Models\User::get_data('f_name',$buyer_id).' '.\App\Models\User::get_data('l_name',$buyer_id)}}</span>
</p>

<p class="info_item">
<span>Telefonnummer:</span>
<span><a href="tel:{{\App\Models\User::get_data('phone_no',$buyer_id)}}" class="">{{\App\Models\User::get_data('phone_no',$buyer_id)}}</a></span>
</p>

<p class="info_item">
<span>Alt. Telefonnummer:</span>
<span><a href="tel:{{\App\Models\User::get_data('telephone',$buyer_id)}}" class="">{{\App\Models\User::get_data('telephone',$buyer_id)}}</a>
</span>
</p>

<p class="info_item">
<span>E-postadress:</span>
<span><a href="tel:{{\App\Models\User::get_data('email',$buyer_id)}}" class="">{{\App\Models\User::get_data('email',$buyer_id)}}</a></span>
</p>
</div>


<!--tis window has a floating chat widget at the footer of the page-->
<a href="#" onClick="openChatWindow('divv_msg_box')" title="Open Chat Box" class="btn" style="display:none" id="displayOnDivClose">
<svg width="17.5px" height="17.5px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C10.5937 3 9.2995 3.05598 8.14453 3.14113C6.41589 3.26859 5.80434 3.32966 5.0751 3.73C4.42984 4.08423 3.66741 4.90494 3.36159 5.5745C3.01922 6.32408 3.00002 7.07231 3.00002 9.13826V10.8156C3.00002 11.9615 3.00437 12.3963 3.06904 12.7399C3.37386 14.3594 4.64066 15.6262 6.26012 15.931C6.60374 15.9957 7.03847 16 8.18442 16C8.1948 16 8.20546 16 8.21637 16C8.33199 15.9998 8.47571 15.9996 8.61593 16.019C9.21331 16.1021 9.74133 16.4502 10.053 16.9666C10.1261 17.0878 10.1825 17.22 10.2279 17.3264C10.2322 17.3364 10.2364 17.3462 10.2404 17.3557L10.6994 18.4267C11.0609 19.2701 11.3055 19.8382 11.518 20.2317C11.6905 20.5511 11.7828 20.6364 11.794 20.6477C11.9249 20.7069 12.0751 20.7069 12.2061 20.6477C12.2172 20.6364 12.3095 20.5511 12.482 20.2317C12.6946 19.8382 12.9392 19.2701 13.3006 18.4267L13.7596 17.3557C13.7637 17.3462 13.7679 17.3364 13.7721 17.3264C13.8175 17.22 13.8739 17.0878 13.9471 16.9666C14.2587 16.4502 14.7867 16.1021 15.3841 16.019C15.5243 15.9996 15.668 15.9998 15.7837 16C15.7946 16 15.8052 16 15.8156 16C16.9616 16 17.3963 15.9957 17.7399 15.931C19.3594 15.6262 20.6262 14.3594 20.931 12.7399C20.9957 12.3963 21 11.9615 21 10.8156V9.13826C21 7.07231 20.9808 6.32408 20.6384 5.5745C20.3326 4.90494 19.5702 4.08423 18.9249 3.73C18.1957 3.32966 17.5841 3.26859 15.8555 3.14113C14.7005 3.05598 13.4064 3 12 3ZM7.99746 1.14655C9.19742 1.05807 10.5408 1 12 1C13.4593 1 14.8026 1.05807 16.0026 1.14655C16.0472 1.14984 16.0913 1.15308 16.1351 1.1563C17.6971 1.27104 18.7416 1.34777 19.8874 1.97681C20.9101 2.53823 21.973 3.68239 22.4577 4.74356C23.001 5.93322 23.0007 7.13737 23.0001 8.95396C23 9.0147 23 9.07613 23 9.13826V10.8156C23 10.8555 23 10.8949 23 10.9337C23.0002 11.921 23.0003 12.5583 22.8965 13.1098C22.4392 15.539 20.5391 17.4392 18.1099 17.8965C17.5583 18.0003 16.9211 18.0002 15.9337 18C15.8949 18 15.8555 18 15.8156 18C15.7355 18 15.6941 18.0001 15.6638 18.0009C15.6625 18.0009 15.6612 18.0009 15.66 18.001C15.6596 18.002 15.659 18.0032 15.6585 18.0044C15.6458 18.0319 15.6294 18.07 15.5979 18.1436L15.1192 19.2604C14.7825 20.0462 14.5027 20.6992 14.2417 21.1823C13.9898 21.6486 13.6509 22.1678 13.098 22.4381C12.4052 22.7768 11.5948 22.7768 10.902 22.4381C10.3491 22.1678 10.0103 21.6486 9.75836 21.1823C9.49738 20.6992 9.21753 20.0462 8.88079 19.2604L8.40215 18.1436C8.3706 18.07 8.35421 18.0319 8.34157 18.0044C8.34101 18.0032 8.34048 18.002 8.33998 18.001C8.33881 18.0009 8.33755 18.0009 8.33621 18.0009C8.30594 18.0001 8.26451 18 8.18442 18C8.14451 18 8.10515 18 8.06633 18C7.07897 18.0002 6.44169 18.0003 5.89017 17.8965C3.46098 17.4392 1.56079 15.539 1.10356 13.1098C0.999748 12.5583 0.999849 11.921 1.00001 10.9337C1.00001 10.8949 1.00002 10.8555 1.00002 10.8156V9.13826C1.00002 9.07613 0.999998 9.0147 0.999978 8.95396C0.999383 7.13737 0.998989 5.93322 1.54238 4.74356C2.02707 3.68239 3.08998 2.53823 4.11264 1.97681C5.25848 1.34777 6.30294 1.27104 7.86493 1.1563C7.9087 1.15308 7.95287 1.14984 7.99746 1.14655Z" fill="#ffffff"/>
</svg><span style="font-size:10px !important;">Öppna Chatt</span>
</a>

<div class="message_footer" id="divv_msg_box" style="background:none !important;">
    <a href="#" onClick="closeDiv('divv_msg_box')" title="close" class="btn-svg">
    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM15.36 14.3C15.65 14.59 15.65 15.07 15.36 15.36C15.21 15.51 15.02 15.58 14.83 15.58C14.64 15.58 14.45 15.51 14.3 15.36L12 13.06L9.7 15.36C9.55 15.51 9.36 15.58 9.17 15.58C8.98 15.58 8.79 15.51 8.64 15.36C8.35 15.07 8.35 14.59 8.64 14.3L10.94 12L8.64 9.7C8.35 9.41 8.35 8.93 8.64 8.64C8.93 8.35 9.41 8.35 9.7 8.64L12 10.94L14.3 8.64C14.59 8.35 15.07 8.35 15.36 8.64C15.65 8.93 15.65 9.41 15.36 9.7L13.06 12L15.36 14.3Z" fill="#0d2453"/>
    </svg>
    </a>
    
    <form action="{{route('marketplace.supplier.sendbid')}}" method="POST" enctype="multipart/form-data" sstyle="margin-bottom:15px;">
    {{csrf_field()}}
    <input type="hidden" name="supplier_id" value="{{$supplier_id}}" />
    <input type="hidden" name="request_id" value="{{$id}}" />
    <input type="hidden" name="buyer_id" value="{{$buyer_id}}" />
    <div class="form-group">
        <textarea class="msg_box form-control" name="request_response" required placeholder="Ange din korrespondens här, köparen återkommer när de ser ditt meddelande!" style="padding-top:15px;"></textarea>
        </div>
        <div class="form-group">
        <label class="form-label">Ladda upp dokument här</label>    
        <input type="file" class="form-control input-control-md" placeholder="Please select a file for your portfolio if you got one" name="filer"/>
        </div>

        <div class="form-group">
            <label class="form-label">Offertfil om någon!</label>
            <input type="file" class="form-control input-control-md" placeholder="Please select a file for your portfolio if you got one" name="other_filer"/>
        </div>

        <div class="col-md-12 form-group" style="margin-top:5px;">
        <button name="send_msg" class="btn btn-success btn-dark" style="height:37px;">Skicka Meddelande</button>
        </div>
        <Br/><br/><br/>
    </form>
    </div>
</div>
<br/><br/><br/>


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