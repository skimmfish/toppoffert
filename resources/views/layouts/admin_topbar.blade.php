@php
$personalNotification = \App\Models\NotificationModel::where(['pub_status'=>1,'read_status'=>false,'receiver_id'=>Auth::user()->id])->orderBy('created_at','DESC')->paginate(5);
$credit =0;


if(\Auth::user()->user_cat=='SUPPLIER'){

$catCount = sizeof(\App\Models\Categories::all());

$creditObj = \App\Http\Controllers\CreditsController::getCredits(\Auth::user()->id);
if(is_null($creditObj)){
    $credits = 0;
}else{
$credit = $creditObj->credits;
}
}
$categories = \App\Http\Controllers\CategoriesController::getcatnames();
@endphp



          <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3 show_sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="https://toppoffert.se/">
              
            <div class="d-flex align-items-center">
             <img src="{{ asset('img/logos/png.png')}}" class="img-responsive-logo" alt="" lazyloading /> 
  
              </div>
            </a>

            <ul class="navbar-nav align-items-center d-none d-lg-block">

            @if(\Auth::user()->user_cat=='SUPPLIER')


<form class="service_search" method="GET" action="{{route('suppliers.search_filters')}}">

<input type="text" class="form-control input-text-sm service_search_box" placeholder="Ange din söktext!"/>
<li class="nav-item dropdown">

<a class="nav-link pe-0 ps-2" id="navbarDropdownSearch" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<svg width="35px" height="35px" class="svgsear" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="m795.904 750.72 124.992 124.928a32 32 0 0 1-45.248 45.248L750.656 795.904a416 416 0 1 1 45.248-45.248zM480 832a352 352 0 1 0 0-704 352 352 0 0 0 0 704z"/></svg>
</a>

<div class="dropdown-menu dropdown-menu-end py-0 custom_m12r" aria-labelledby="navbarDropdownSearch">
    <div class="dropdown-item remove_hover_color">

  <br/><b>Ange sökparametrar här</b><hr/>
    
    <div class="row 1">
    <div class="form-group col-md-6 col-lg-6 col-sm-6 col-xs-12">
      <label>Välj tjänstekategori</label>
      <input id="WhatText" name="catName" maxlength="100" list="cat_name" value="@if(isset($catSelected)) {{$catName}} @else {{old('catName')}} @endif" onChange="fetchCategoriesForSkapa(this.value)" title="Ange uppdragstyp" placeholder="Ange uppdragstyp" onClick="fetchCategoriesForSkapa(this.value)" name="cat_name" class="form-control form-control-lg input-lg flex-input" placeholder="Ange uppdragstyp" required />
        <datalist id="cat_name" onChange="fetchCategoriesForSkapa(catName.value)" onClick="fetchCategoriesForSkapa(catName.value)">
            <option value="">Välj ett alternativ</option>   
              @foreach($categories as $s)
               <option value="{{$s->cat_name}}">{{ ucfirst($s->cat_name) }}</option>  
                   @endforeach
            </datalist>
        </div>

        <div class="form-group col-md-6 col-lg-6 col-xs-12 col-sm-6 col-xl-6">
          <label>Välj en underkategori</label>
          <div id="subcategories_fetcher">Välj tjänstekategori</div>
          </div>
          <!--./row-->
        </div>

<div class="row">
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 col-xl-6 form-group">
                 <label>Välj plats</label>    
<select name="territory" class="flex-input form-control">
<option selected="" value="{{old('territory')}}">Hela Sverige</option>
<option>Blekinge</option>
<option>Dalarna</option>
<option>Gotland</option>
<option>Gävleborg</option>
<option>Göteborg</option>
<option>Halland</option>
<option>Jämtland</option>
<option>Jönköping</option>
<option>Kalmar</option>
<option>Kronoberg</option>
<option>Norrbotten</option>
<option>Skaraborg</option>
<option>Skåne</option>
<option>Stockholm</option>
<option>Södermanland</option>
<option>Uppsala</option>
<option>Värmland</option>
<option>Västerbotten</option>
<option>Västernorrland</option>
<option>Västmanland</option>
<option>Älvsborg</option>
<option>Örebro</option>
<option>Östergötland</option>
</select>
</div>

<div class="form-group col-md-6 col-sm-6 col-xl-6 col-lg-6">
<label>Uppdraget ska utf&#246;ras &#229;t</label>
<select name="executed_for" class="form-control">
                    <option value="1">Bostadsr&#228;ttsf&#246;rening</option>
                        <option value="2">Byggherre/Entrepren&#246;r</option>
                          <option value="3">F&#246;retag</option>
                            <option value="4">Ideell f&#246;rening</option>
                              <option value="5">Kommun/Myndighet</option>
                                <option value="6">Privatperson</option>
                                    <option value="7">Villaf&#246;rening</option>
                                        </select> 

                                      </div>
<!--./row-->
</div>

<div class="row">

<div class="form-group col-md-12 col-sm-12 col-xl-12 col-lg-12 col-xs-12">
  <label>När ska uppdraget påbörjas</label>
  <select name="when_to" class="form-control">
                    <option value="Så snart som möjligt">Snarast m&#246;jligt</option>
                    <option value="Inom 1 månad">Inom 1 m&#229;nad</option>
                    <option value="Inom 3 månader">Inom 3 m&#229;nader</option> 
                    <option value="Inom 6 månader">Inom 6 m&#229;nader</option>
                    <option value="Inom 12 månader">Inom 12 m&#229;nader</option>
                    <option value="Timing är mindre viktigt">Tidpunkt mindre viktig</option>                    
                    </select>
                    </div>
                    </div>

<!--./row-->
<div class="row">
  <button class="btn btn-primary dark_btn">Sök förfrågningar 
  <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 14.866 14.866 18 11 18C7.13401 18 4 14.866 4 11ZM11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C13.125 20 15.078 19.2635 16.6177 18.0319L20.2929 21.7071C20.6834 22.0976 21.3166 22.0976 21.7071 21.7071C22.0976 21.3166 22.0976 20.6834 21.7071 20.2929L18.0319 16.6177C19.2635 15.078 20 13.125 20 11C20 6.02944 15.9706 2 11 2Z" fill="#FFFFFF"/>
</svg>
  </button>
</div>

  </li>
</form>
 @endif
 </ul>

 <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center move_rf_20" >
              <li class="nav-item">
      
            <div class="theme-control-toggle fa-icon-wait px-2">
				<input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
				
      </div>
              </li>
              
          @if(\Auth::user()->user_cat=='SUPPLIER')    <li class="nav-item dropdown">
              <div class="credit_box">{{$credit}} Krediter</div>
                </li>
                @endif

                <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                      <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                        
                        @if(count($personalNotification)<=0)
                      <h6 class="card-header-title mb-0" style="font-size:11px">No unread notifications</h6>
                    @else

                    @foreach($personalNotification as $notes)
                    <div class="notification_bar">
                      <div class="avatar avatar-2xl me-3">
                         
                      <img class="rounded-circle" lazylaoding src="{{ asset('img/avatar/'.\App\Models\User::get_profile_data($notes->sender_id,'profile_img')) }}" alt="{{\App\Models\User::get_profile_data($notes->sender_id,'username')}}" />
                           </div>
 
                    <div class="subject">
                      <a class="text-black subj mb-1" href="{{route('marketplace.suppliers.messages',['note_id'=>$notes->subject])}}"><b>{{$notes->subject}}</b></a>
                      
                      <div class="notification-body">
                            <span class="notification-time text-tiny" style="font-size:10px;color:#afafaf"><span class="me-2" role="img" aria-label="Emoji"><i class="fa fa-clock"></i></span>{{ date('d, F Y h:i:s A' , strtotime($notes->created_at)) }}</span>
                          </div>
                    
                        </div>
                      </div>
                      <hr/>
                      @endforeach

                      <a href="{{route('marketplace.suppliers.message_board')}}"><small>View All Notifications</small></a>

                      @endif
                      </div>
                </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                  @if(\Auth::user()->profile_img!=NULL)
                    <img class="rounded-circle" src="{{ asset('img/avatar/'.\Auth::user()->profile_img) }}" alt="{{ \Auth::user()->username }}" lazyloading/>
                  @else
                    
                  <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.5 21.0001H6.5C5.11929 21.0001 4 19.8808 4 18.5001C4 14.4194 10 14.5001 12 14.5001C14 14.5001 20 14.4194 20 18.5001C20 19.8808 18.8807 21.0001 17.5 21.0001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>

                    @endif
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
				  @if((\Auth::user()->is_admin==true && \Auth::user()->administrative_level>=3))
				
          <a class="dropdown-item" href="{{route('switch_to_maintenance')}}">Byt till underhåll</a>				  
        
          @endif
                    <a class="dropdown-item" href="{{route('contact-information')}}">Profil &amp; Inställningar</a>

                    <a class="dropdown-item" href="{{route('logout')}}">Logga ut</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
        
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>

<!--this function fetches all the associated sub_Cat_names-->
<script type="text/javascript">
function fetchCategoriesForSkapa(category){
    if(category){
    $.ajax({
    type: 'GET',
    url: "{{ route('categories_for_page') }}",
   
    data: {
    cat_name: category,
    },
    success: function (response) {
     // We get the element having id of display_info and put the response inside it
     $( '#subcategories_fetcher' ).html(response);
    }
    });
   }else
   {
    $( '#subcategories_fetcher' ).html("<small class='text-danger'>Kontrollera Ditt Val</small>");
   }
} //end of fetchServersList() function
</script>


