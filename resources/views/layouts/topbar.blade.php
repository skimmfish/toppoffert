
<div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3 show_sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="https://balmflow.com/">
              
            <div class="d-flex align-items-center">
            
           <!-- <span style="color:#0d2453;font-size:16px;font-family:GD Sherpa Regular">I</span><span style="color:#0d2453;font-size:18px;">I</span><span style="color:#0d2453;font-family:GD Sherpa Regular;font-size:19px">I</span><span style="color:#f5ca99;font-family:Ink Free !important;font-size:60%;color:#0099cc">SyncMarkets</span>-->
            <img class="me-2" src="{{ asset('img/logos/site_logo.png') }}" alt="" width="40" />

            <!--<span class="font-sans-serif">{{ config('app.name') }}</span>-->

              
              </div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">

            <!--
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
				            <input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" style="font-size:14px;font-weight:400"/>
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                  <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
                    <div class="btn-close-falcon" aria-label="Close"></div>
                  </div>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1 title">Most popular products</div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Emma Watson</h6>
                            <p class="fs--2 mb-0 d-flex">Google</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="text-center mt-n3">
                      <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div>
              </li>
-->
</ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
      
            <div class="theme-control-toggle fa-icon-wait px-2">
				<input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
				<label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" style="margin-top:-1px !important" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" style="margin-top:-1px !important" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
      </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                      <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                      
                        @if(isset($personalNotification))
                        @if(count($personalNotification)<=0)
                      <h6 class="card-header-title mb-0" style="font-size:11px">No unread notifications</h6>
                    @else

                    @foreach($personalNotification as $notes)
                    <div class="notification_bar">
                      <div class="avatar avatar-2xl me-3">
                         <img class="rounded-circle" src="{{ asset('img/160x160/'.\App\Models\Profile::get_profile_data($notes->sender_id,'profile_img')) }}" alt="{{\App\Models\Profile::get_profile_data($notes->sender_id,'username')}}" />
                           </div>
 
                    <div class="subject">
                      <a class="text-black subj mb-1" href="{{route('admin.dashboard.notifications',['id'=>$notes->id]) }}"><b>{{$notes->subject}}</b></a>
                      
                      <div class="notification-body">
                            <span class="notification-time text-tiny" style="font-size:10px;color:#afafaf"><span class="me-2" role="img" aria-label="Emoji"><i class="fa fa-clock"></i></span>{{ date('d, F Y h:i:s A' , strtotime($notes->created_at)) }}</span>
                          </div>
                    
                        </div>
                      </div>
                      <hr/>
                      @endforeach
                      @endif
                      
                      <a href=""><small>View All Notifications</small></a>

                      @endif
                      </div>
                </li>
              
              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                  @if(\Auth::user()->profile_img!=NULL)
                    <img class="rounded-circle" src="{{ asset('img/avatar/'.\Auth::user()->profile_img) }}" alt="{{ \Auth::user()->username }}" />
                  @else
                    <img class="rounded-circle" src="{{ asset('img/160x160/img1.jpg') }}" alt="{{ \Auth::user()->username }}" />
                      @endif
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">

                  @if(\Auth::user()->is_admin==true)
				
          <a class="dropdown-item" href="{{ route('switch_to_maintenance') }}">Maintenance</a>				  
        
          @endif
                    <a class="dropdown-item" href="">Profile &amp; settings</a>

                   

                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
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
		  