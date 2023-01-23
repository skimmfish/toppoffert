@extends('layouts.suppliers_header')
@section('content')

<div class="row bevel_border_q" style="background:none;height:auto !important;">

<div class="col-md-10 col-lg-10 col-sm-10 col-xs-11" id="ratingBox">
<h2>{{ number_format($ratings,1) }}</h2>
<div class="ratings_box">

@if(!empty($ratings))
       <div class="rated">
          @for($i=0; $i<$ratings;$i++)                                                   
               <label class="star-rating-complete" title="text">{{$i}} stars</label>
                  @endfor
                    </div>
                      @endif

<!--./end ratings_box-->
</div>
<p style="margin-top:-40px;">
    <b>Baserat på {{$review_count}} omdömen</b>
        <br/>
</p>

</div>

<!--right_wing-->
<div class="col-md-2 col-lg-2 col-xs-1 col-sm-2 view">
<a href="" onClick="disableView('ratingBos)" class="hide_link">
<svg data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 611.34 453.78" class="svg-icon svg-icon--size-small svg-icon--inherit-stroke fill-current-color" data-v-7401c504=""><path d="M599.78 197.18c-5.75-6.77-12.17-13.62-20.22-21.55-40.75-40.15-81.85-70.67-125.62-93.29-32.47-16.75-64.92-28.16-96.44-33.76a289.59 289.59 0 00-51.49-4.32c-19.79 0-36.48 1.38-52.5 4.33-31.83 5.86-64.27 17.23-96.4 33.77-43.09 22.2-85.36 53.59-125.63 93.3-8.31 8.19-14.74 15-20.23 21.56a44.74 44.74 0 000 59.33c15.8 18.79 37 38.67 64.71 60.78 28.62 22.79 57.31 41.64 85.28 56 28.17 14.5 56.42 24.87 84 30.85 18.76 4 38.65 6 60.81 6a283.15 283.15 0 0059.82-6c27.93-6 56.38-16.39 84.57-30.82s56.84-33.26 85.34-56.07c26.73-21.4 48.29-41.85 64.06-60.78 15.35-18.43 15.34-41.17-.06-59.33zm-35.3 29.68c-13.23 16.2-32.16 34-57.84 54.54-52.48 41.91-101.68 67.22-150.39 77.4a245.78 245.78 0 01-50.24 5.12h-1a238.69 238.69 0 01-49.59-5.12c-48.8-10.4-99.62-36.44-151-77.4-24.21-19.22-43.44-37.58-57.21-54.52a95.05 95.05 0 018-9.25c4.32-4.48 7.17-7.5 8.89-9.53 36.63-36 75-64.18 114.16-83.82 31.77-16 59.08-25.74 83.49-29.91a264.34 264.34 0 0144.22-3.85 252.85 252.85 0 0143.87 3.84c24.6 4.3 52.69 14.36 83.51 29.91 39.77 20.07 78 48.32 113.65 84 8.26 8.18 14.13 14.46 17.48 18.62z"></path><path d="M351.78 116.06a118.31 118.31 0 00-45.77-8.78c-33.23 0-61.89 11.81-85.17 35.1s-35.09 51.8-35.09 84.8a114.42 114.42 0 0035.11 84.53c23.22 23.06 51.87 34.76 85.15 34.76A118.08 118.08 0 00425.3 227.18c0-32.83-11.81-61.37-35.09-84.82a118.85 118.85 0 00-38.43-26.3zm27.27 111.12c0 20.29-7.2 37.78-21.4 52-14.39 14.39-31.28 21.39-51.64 21.39s-37.89-7.31-52.3-21.72-21.72-31.78-21.72-51.67c0-20.35 7.1-37.35 21.72-52 14.41-14.41 32-21.72 52.3-21.72s37.18 7.1 51.62 21.7 21.42 31.63 21.42 52.02z"></path><path fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="40" d="M102.41 20l406.22 413.78"></path><circle cx="305.52" cy="226.89" r="24.1"></circle></svg> Göm omdömen
</a>
</div>

<!--./row-->
</div>


<div class="row pre_heading">
   <div class="col-md-10 col-lg-10 col-sm-10 col-xs-9">
    <span>
        <b class="alert alert-warning" style="border-radius:5px;padding:5px 2px !important;margin-bottom:6px;">{{$review_count}} obesvarade</b><br/><br/>
            <b>Svara alltid på omdömen, det ser bra ut för dina kunder!</b>
                 </span>
                </div>

            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-3">
                    <a href="#" class="dropdown"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="4.5" class="svg-icon svg-icon--size-small fill-current-color" data-v-7401c504=""><path d="M23.909 10.286l1.965-5.075a4.571 4.571 0 014.252-2.925h3.748a4.571 4.571 0 014.252 2.925l1.965 5.075 6.675 3.84 5.394-.823a4.571 4.571 0 014.571 2.24l1.829 3.2a4.571 4.571 0 01-.366 5.166l-3.337 4.251v7.68l3.429 4.251a4.571 4.571 0 01.365 5.166l-1.828 3.2a4.571 4.571 0 01-4.572 2.24l-5.394-.823-6.674 3.84-1.966 5.075a4.571 4.571 0 01-4.251 2.925h-3.84a4.571 4.571 0 01-4.252-2.925l-1.965-5.075-6.675-3.84-5.394.823a4.571 4.571 0 01-4.571-2.24l-1.829-3.2a4.571 4.571 0 01.366-5.166l3.337-4.251v-7.68l-3.429-4.251a4.571 4.571 0 01-.365-5.166l1.828-3.2a4.571 4.571 0 014.572-2.24l5.394.823zM22.857 32A9.143 9.143 0 1032 22.857 9.143 9.143 0 0022.857 32z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
                        </div>
</div>


<!--testimonial sections-->
<div class="row pre_heading" style="margin-top:15px;">
@if($review_count>0)

@foreach($testimonials as $x)

    <div class="row testimonial_sender">
    <div class="col-md-1 col-lg-1 col-xs-2 box_rd">
        <B>{{\Illuminate\Support\Str::limit(\App\Models\User::get_data('f_name',$x->buyer_id),1)}}</B><br/>
        <!--the rating goes here-->                
                </div>
    
    <div class="col-md-9 col-lg-9 col-sm-10 col-xs-9 title_rating">
            <b>{{ \App\Models\User::get_data('f_name',$x->buyer_id) }}</b><Br/>
            <div>{{\App\Http\Controllers\ServiceRequestsController::get_request_metadata('request_title',$x->request_id)}}</div>
          <!--rating stars goea here-->
            @if(!empty($x->rating))
            <div class="rated pull_right">
          @for($i=0; $i<$x->rating;$i++)                                                   
               <label class="star-rating-complete" title="text">{{$i}} stars</label>
                  @endfor
                    </div>
                      @endif
                        </div>

            <div class="date col-md-2 col-lg-2 col-sm-1 col-xs-1">
                    {{date('d M Y', strtotime($x->created_at))}}
                    </div>

                    <!--.end of testimonial_Sender-->
                </div>

        <div class="row testimonial_view">
            <div class="text-lg">{{$x->testimonial}}</div>
                <div class="flex">
                    <a href="" class="btn btn-primary btn-round">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="svg-icon svg-icon--inherit-stroke fill-current-color button-icon reply-icon" data-v-79954007=""><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"><path d="M4 1.714L.571 5.143 4 8.57" stroke-width="1.14286"></path><path d="M.571 5.143h10.286a4.571 4.571 0 010 9.143H5.143" stroke-width="1.14286"></path></g></svg>  <span>Svara</span></a>
                    <a href="" class="btn btn-primary btn-round btn-empty">Behöver inte svar</a>
                            </div>

                </div>

<hr/>

@endforeach
</div>
@endif

<!-- ./row-->
</div>




@endsection