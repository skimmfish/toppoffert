@php
$personalNotification = \App\Models\NotificationModel::where(['pub_status'=>1,'read_status'=>false,'receiver_id'=>Auth::user()->id])->orderBy('created_at','DESC')->paginate(5);
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

</ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
      
            <div class="theme-control-toggle fa-icon-wait px-2">
				<input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
				
      </div>
              </li>
              
          @if(\Auth::user()->user_cat=='SUPPLIER')    <li class="nav-item dropdown">
              <div class="credit_box">{{$credit}} Kreditas</div>
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
              
              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                  @if(\Auth::user()->profile_img!=NULL)
                    <img class="rounded-circle" src="{{ asset('img/avatar/'.\Auth::user()->profile_img) }}" alt="{{ \Auth::user()->username }}" lazyloading/>
                  @else
                    <img class="rounded-circle" src="{{ asset('img/avatar/img1.jpg') }}" alt="{{ \Auth::user()->username }}" lazyloading />
                      @endif
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
				  @if((\Auth::user()->is_admin==true && \Auth::user()->administrative_level>2))
				
          <a class="dropdown-item" href="{{route('switch_to_maintenance')}}">Underhåll</a>				  
        
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


