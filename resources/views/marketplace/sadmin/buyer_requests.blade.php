@extends('layouts.admin_app_elite')
@section('content')
@include('layouts.admin_topbar')

<div class="row m-3">

<div class="notify_div">
@if (session('message')) 
 <div class="alert alert-info text-md">  {{ session('message') }} </div>
              @elseif(session('error'))
              <div class="alert alert-danger text-md">  {{ session('error') }}   </div>  
                      @endif 
                    <!--./notify-->
                    </div>


<div class="row" style="margin-bottom:30px;">
    <a href="{{url()->previous()}}" 
class="text-black btn btn-white btn_r_circle" style="border-radius:40px;">
<svg width="16px" height="16px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#231f20;}</style></defs><g data-name="arrow left" id="arrow_left">
<path class="cls-1" d="M22,29.73a1,1,0,0,1-.71-.29L9.93,18.12a3,3,0,0,1,0-4.24L21.24,2.56A1,1,0,1,1,22.66,4L11.34,15.29a1,1,0,0,0,0,1.42L22.66,28a1,1,0,0,1,0,1.42A1,1,0,0,1,22,29.73Z"/></g></svg> Tillbaka
</a>
</div>


<h1>Hej! {{\Auth::user()->f_name}}</h1>
 <p class="line-height-auto">Här är en lista över {{$title}}! <Br/><small class="text-primary">Alla förfrågningar i grönt har verkställts</small></p>

 <div class="container mb-3 btn-reveal-trigger">

    @if(sizeof($allrequest)>0)
    @foreach($allrequest as $x)
        <div class="row position-relative rq_info pad-top @if($x->project_execution_status==1) {{'div-success'}} @elseif($x->project_execution_status==0) {{ 'div-pending' }} @endif">

             <div class="col-md-4 col-lg-4 col-xs-6 col-sm-4 info_board">
                 <h6><a href="{{route('sa_preview_request_sa',['hash'=>$x->request_hash])}}" style="font-size:16px;color:#000;" class="underline">{{$x->request_title}}</a></h6>
                   <b>
                    <!--<img src="{{asset('img/user_icon.png')}}" lazyloading class="img-responsive-sm" title="Avrättad för"/>-->
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-medium svg-icon--spacing-right-tiny fill-current-color"><path d="M12 15.75c-3.308 0-6-2.692-6-6s2.692-6 6-6 6 2.692 6 6-2.692 6-6 6zm0-10.5c-2.481 0-4.5 2.019-4.5 4.5s2.019 4.5 4.5 4.5 4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5z"></path><path d="M12 24c-2.677 0-5.211-.868-7.332-2.51a.507.507 0 01-.126-.099C1.655 19.094 0 15.674 0 12 0 5.383 5.383 0 12 0s12 5.383 12 12c0 3.674-1.655 7.094-4.543 9.391l-.015.016c-.043.043-.087.069-.112.084A11.868 11.868 0 0112 24zm-5.716-3.199A10.408 10.408 0 0012 22.5a10.41 10.41 0 005.717-1.699 8.966 8.966 0 00-5.716-2.045 8.965 8.965 0 00-5.717 2.045zM12 1.5C6.21 1.5 1.5 6.21 1.5 12c0 3.023 1.294 5.875 3.562 7.874A10.449 10.449 0 0112 17.257c2.573 0 5.023.927 6.938 2.616 2.268-2 3.562-4.851 3.562-7.874C22.5 6.21 17.79 1.5 12 1.5z"></path></svg>
        
                   {{ \App\Models\BuyerType::where('id',$x->executed_for)->first()->buyers_type_name}}
                
                </b><br/>

                     <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color svg-icon svg-icon--spacing-right-small" data-v-40d54a8c=""><path d="M.8 2.4h14.4v12.8H.8V2.4zM4 .8V4M12 .8V4M.8 7.2h14.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> <span>{{$x->when_to}}</span>
                        <Br/>
                        <img src="{{asset('img/product-item-transaction-svgrepo-com.svg')}}" class="img-responsive-sm" lazyloading /><span>{{$x->request_type}}</span>
                           </div>

                           <div class="col-md-3 col-lg-3 col-xs-6 col-sm-3 price_quote">
                           <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--size-small fill-current-color svg-icon svg-icon--spacing-right-small" data-v-40d54a8c=""><path d="M5.6 9.6c0 .636.506 1.247 1.406 1.697.9.45 2.12.703 3.394.703 1.273 0 2.494-.253 3.394-.703.9-.45 1.406-1.06 1.406-1.697s-.506-1.247-1.406-1.697c-.9-.45-2.121-.703-3.394-.703-1.273 0-2.494.253-3.394.703-.9.45-1.406 1.06-1.406 1.697z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.6 9.6v3.2c0 1.325 2.149 2.4 4.8 2.4s4.8-1.075 4.8-2.4V9.6M.8 3.2c0 .315.124.627.365.918.242.292.595.556 1.04.78.447.222.976.399 1.558.52.582.12 1.207.182 1.837.182.63 0 1.255-.062 1.837-.183a6.42 6.42 0 001.557-.52c.446-.223.8-.487 1.04-.779.242-.29.366-.603.366-.918 0-.315-.124-.627-.365-.918-.242-.292-.595-.556-1.04-.779a6.42 6.42 0 00-1.558-.52A9.125 9.125 0 005.6.8c-.63 0-1.255.062-1.837.183a6.419 6.419 0 00-1.557.52c-.446.223-.8.487-1.04.779C.923 2.572.8 2.885.8 3.2z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M.8 3.2v8c0 .71.618 1.349 1.6 1.789M.8 7.2c0 .71.618 1.349 1.6 1.789" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> <span>Uppskattat värde:&nbsp; : 0 - {{$x->assignment_value}} kr</span>
                               <br/>
                             <div class="mission_type pad-top">
                             <span><img src="{{asset('img/audio-description2-svgrepo-com.svg')}}" class="img-responsive-sm" lazyloading /></span><span>{{$x->mission_type}}</span>
                               </div>
                                  </div>

                                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-8 pad-top">
                                   <div class="pad-top">
                                            <span> <img src="{{asset('img/calendar-edit-svgrepo-com.svg')}}" class="img-responsive-sm" lazyloading /></span>
                                            <span>{{date('d, M Y',strtotime($x->date_from)) }} - {{ date('d, M Y',strtotime($x->date_to))}}
                                            </div>

                                            <div class="pad-top">         
                                            <span><img src="{{asset('img/service-territory-policy-svgrepo-com.svg')}}" class="img-responsive-sm" style="border-radius:0;" lazyloading/></span>
                                            <span>{{$x->territory}}</span>    
                                            </div>
                                        </div>
                            

        <div class="col-xs-1 col-sm-1 col-lg-1 col-md-1">
            <a href="#" data-toggle="modal" data-attr="{{route('sadmin_confirm_resources',['action_type'=>'delete','id'=>$x->id,'resource'=>'buyer_requests'])}}" class="btn btn-grey-bg" id="deleteRequest" data-target="#requestModal">
             
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-icon svg-icon--size-small fill-current-color" data-v-467c38da=""><path d="M6.631 23.25a2.263 2.263 0 01-2.242-2.064L3.06 5.25H1.5a.75.75 0 010-1.5h6V3A2.252 2.252 0 019.75.75h4.5A2.252 2.252 0 0116.5 3v.75h6a.75.75 0 010 1.5h-1.56l-1.328 15.937a2.262 2.262 0 01-2.242 2.063H6.631zm-.748-2.188c.032.386.36.688.748.688H17.37a.753.753 0 00.747-.688L19.435 5.25H4.565l1.318 15.812zM15 3.75V3a.75.75 0 00-.75-.75h-4.5A.75.75 0 009 3v.75h6z"></path><path d="M9.75 18a.75.75 0 01-.75-.75v-7.5a.75.75 0 011.5 0v7.5a.75.75 0 01-.75.75zM14.25 18a.75.75 0 01-.75-.75v-7.5a.75.75 0 011.5 0v7.5a.75.75 0 01-.75.75z"></path></svg>
                      </a>

                      <br/><Br/>
                    
                    @if($x->publish_status==0)
                    <a href="#" data-toggle="modal" class="btn btn-grey-bg" data-attr="{{route('sadmin_approve_request_confirm',['request_id'=>$x->id,'buyer_id'=>$x->customer_id])}}" data-target="#requestModal" id="approveRequest">
                    <svg fill="none" width="21px" height="21px" class="svgg" viewBox="0 0 270.92 270.92" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Layer_x0020_1">
                    <path class="fil0" d="M218.45 48.17l-166.76 0c-4.38,0 -7.93,3.55 -7.93,7.93 0,4.38 3.55,7.93 7.93,7.93l166.76 0c11.12,0 20.18,9.05 20.18,20.19l0 0.75 -186.94 0c-4.38,0 -7.93,3.55 -7.93,7.93 0,4.4 3.55,7.94 7.93,7.94l186.94 0 0 85.87c0,11.12 -9.06,20.17 -20.18,20.17l-165.97 0c-11.12,0 -20.18,-9.05 -20.18,-20.17l0 -103.27c0,-4.39 -3.56,-7.95 -7.95,-7.95 -4.37,0 -7.92,3.56 -7.92,7.95l0 103.27c0,19.87 16.17,36.03 36.05,36.03l165.97 0c19.88,0 36.05,-16.16 36.05,-36.03l0 -102.49c0,-19.89 -16.17,-36.05 -36.05,-36.05zm-103.96 132.85c1.54,0 3.09,-0.45 4.45,-1.36l69.65 -47.31c3.63,-2.46 4.57,-7.41 2.11,-11.03 -2.45,-3.62 -7.39,-4.57 -11.02,-2.09l-63.9 43.38 -23.07 -25.88c-2.92,-3.28 -7.94,-3.58 -11.2,-0.64 -3.27,2.91 -3.56,7.93 -0.63,11.2l27.68 31.07c1.56,1.75 3.73,2.66 5.93,2.66z"/>
                    </g>
                    </svg>
                      </a>
                      @endif
                        </div>


                    </div>
                    @endforeach
                        @endif

                        <div class="pagination">
                        {!! $allrequest->links('vendor.pagination.bootstrap-4') !!}
                        </div>
                </div>


            <!--modals-->
  			<!-- view modal -->
           <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
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


            </div>

@endsection
