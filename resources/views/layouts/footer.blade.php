<!-- ========== FOOTER ========== -->
  <footer class="container-fluid content-space-1 content-space-t-lg-1 width-100" style="margin-top:-30px;background:#000;">
    
<div class="row row-reverse-grid-mobile">

<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 col-xl-6 col-xs-12" style="line-height:34px;color:#000;">
  <h6 class="footer_heading">{{config('app.name')}}</h6>
<small class="footer-subtext">
{{config('app.name')}} is one unique crypto stocks & staking portal with access to latest Cryptographic control in the crypto-currency industry.
We pride our offering on the experience of our founders, with the right tools and information, 
we are providing a top-down solution to financial stress and helping our world be a better place.
</small>

<form action="{{ route('mailoptin.store') }}" method="POST">
{{csrf_field()}}
<div class="gridx">
  <div class="form-group">
    <input type="_email" name="_my__email" class="form-control exp-m5" placeholder="Enter your E-mail Address" required/>
      </div>
<div class="form-group">
  <input type="submit" name="send_mail" class=" btn btn-primary sn-btn" value="Send"/></div>
</div>
</form>


<!--mobile apps-->
<!--<div class="row-fluid" style="margin-top:19px;margin-bottom:20px;">
<b class="footer_heading">Get our mobile app</b>
<div class="socials row mobile_grid">
<div class="col-md-6 col-sm-12 col-xs-6"><a href="#" class="gogle"><img src="{{asset('img/gplay.svg')}}" />Google</a></div>
<div class="col-md-6 col-sm-12 col-xs-6"><a href="#" class="gogleapple" style="color:#000;"><img src="{{asset('img/applepng.png')}}" class="img-circle" /> Apple store</a></div>
</div>
</div>-->
<!--end of mobile apps-->

</div>

<!--home -->

<div class="col-md-3 col-xs-12 col-sm-3 col-lg-3 col-xl-3 mob-home">
  <h6 style="font-family:'Space Grotesk' !important;text-transform:capitalize !important;color:#fff;font-size:18px;">Home</h6>

  <ul class="list-unstyled list-py-1" style="line-height:20px !important">
      <li><a class="text-body spartan footer-nav" href="{{ route('index') }}">{{config('app.name')}} Home</a></li>
      <li><a class="text-body spartan footer-nav" href="{{ route('about-us') }}">About Us</a></li>
      <li><a class="text-body spartan footer-nav" href="{{ route('vision-and-mission') }}">Vision & Mission</a></li>
      <li><a class="text-body spartan footer-nav" href="{{ route('vision-and-mission') }}">Road-Map</a></li>
      <li><a class="text-body spartan footer-nav" href="{{ route('faqs') }}">FAQs</a></li>
     </ul>
</div>


<!--privacy policy-->
<div class="col-md-3 col-xs-12 col-sm-3 col-lg-3 col-xl-3">
<ul class="list-unstyled list-py-1">
			<li>	<h6 style="text-transform:capitalize !important;color:#fff;font-size:18px;">Privacy Policy</h6></li>

          <!--<li>
            <a class="text-body" href="" target="_blank">
              Subscriptions
              <i class="bi-box-arrow-up-right small ms-1"></i>
            </a>
          </li>
          <li>
            <a class="text-body spartan" href="/help-topics" target="_blank">
              Help
              <i class="bi-box-arrow-up-right small ms-1"></i>
            </a>
          </li>-->
          <li>
            <a class="text-body spartan footer-nav" href="{{ route('terms-and-conditions') }}" target="_blank">
              Terms &amp; Conditions
             <!-- <i class="bi-box-arrow-up-right small ms-1"></i>-->
            </a>
          </li>
          <li>
            <a class="text-body spartan footer-nav" href="{{ route('privacy-policy') }}" target="_blank">
              Privacy &amp; Policy
              <!--<i class="bi-box-arrow-up-right small ms-1"></i>-->
            </a>
          </li>
        <li>
            <a class="text-body spartan footer-nav" href="{{ route('contact-us') }}" target="_blank">
              Contact Us
             <!-- <i class="bi-box-arrow-up-right small ms-1"></i>-->
            </a>
          </li>
        </ul>
</div>
</div>
<hr/>
    <div class="row align-items-sm-center">
      <div class="col-sm mb-4 mb-sm-0">
        <p class="small" style="color:#fff;font-weight:500 !important;font-size:11px;">&copy; {{config('app.name')}} . {{date('Y')}} . All Rights Reserved.</p>
      </div>
      <!-- End Col -->

      <div class="col-sm-auto">
        <!-- Socials -->
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://facebook.com/balmflow">
              <i class="bi-facebook"></i>
            </a>
          </li>
        
          <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://twitter.com/balmflow">
              <i class="bi-twitter"></i>
            </a>
          </li>
        
          <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://t.me/+eHLehV4P7IAxOTE0">
              <i class="bi-telegram"></i>
            </a>
          </li>
        
          <li class="list-inline-item">
            
          <div class="btn-group">
              <button type="button" class="btn btn-soft-secondary btn-xs dropdown-toggle" id="footerSelectLanguage" data-bs-toggle="dropdown" aria-expanded="false"data-bs-dropdown-animation>
                <span class="d-flex align-items-center">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/us.svg') }}" alt="English (US)" width="16"/>
                  <span>English</span>
                </span>
              </button>

              <div class="dropdown-menu" aria-labelledby="footerSelectLanguage">
                <a class="dropdown-item d-flex align-items-center active" href="{{route('index')}}">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/us.svg')}}" alt="English (UK)" width="16"/>
                  <span>English (US)</span>
                </a>
          <!--
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/de.svg')}}" alt="Deutsch" width="16"/>
                  <span>Deutsch</span>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/es.svg')}}" alt="Espanol" width="16"/>
                  <span>Español</span>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/cn.svg') }}" alt="Chinese" width="16"/>
                  <span>中文 (繁體)</span>
                </a>
-->
              </div>
			  
            </div>
           </li>

          </ul>
        <!-- End Socials -->
      </div>
          <!-- End Col -->
    </div>
    <!-- End Row -->
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <!-- Log in -->
        <!-- Log in -->
          <div id="signupModalFormLogin" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-2">
             <!-- <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="{{ asset('svg/brands/google-icon.svg') }}" alt="Image Description">
                  Log in with Google
                </span>
              </a>-->

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormLoginWithEmail",
                       "groupName": "idForm"
                     }'>Log in with Username</a>
            </div>
          </div>
          <!-- End Log in -->

          <!-- Log in with Modal -->
          <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

           <form class="" novalidate method="POST" action="{{route('login') }}">
			                        {{ csrf_field() }}

              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormLoginUsername">Your username</label>
                <input type="username" class="form-control form-control-lg" name="username" id="signupModalFormLoginUsername" VALUE="{{old('username') }}" placeholder="Your username" aria-label="Username" required>
                <span class="invalid-feedback">Please enter your username.</span>
              
			   @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                           
			  
			  </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot Password?</a>
                </div>

                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormLoginPassword" VALUE="{{old('password') }}" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                <span class="invalid-feedback">Please enter a valid password.</span>
                   
				   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          
			  
			  </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Log in</button>
              </div>
            </form>
          </div>
          <!-- End Log in with Modal -->

          <!-- Sign up -->
          <div id="signupModalFormSignup">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-3">
              <!--<a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="{{asset('svg/brands/google-icon.svg') }}" alt="Signup with Google">
                  Sign up with Google
                </span>
              </a>-->

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormSignupWithEmail",
                       "groupName": "idForm"
                     }'>Sign up with Email</a>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="{{ route('terms-and-conditions') }}" target="_blank">Terms and Conditions</a></p>
              </div>
            </div>
          </div>
          <!-- End Sign up -->

          <!-- Sign up with Modal -->
          <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

           
            <form method="POST" action="{{route('register') }}">
			 {{ csrf_field() }}

              <!-- Form -->
              <div class="mb-3 form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupName">Your username</label>
                <input type="text" class="form-control form-control-md" name="email" id="signupModalFormSignupName" value="{{ old('username') }}" placeholder="Your preferred username" aria-label="username" required />
                <span class="invalid-feedback">Please enter a valid username.</span>
              
			  @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                           
			  
			  </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                <input type="email" class="form-control form-control-md" name="email" id="signupModalFormSignupEmail" placeholder="Your e-mail" aria-label="your e-mail" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              
			  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
			  
			  </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                <input type="password" class="form-control form-control-md" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                   
				   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          
			  
			  </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" data-hs-validation-validate-class>
                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
                <input type="password" class="form-control form-control-md" id="signupModalFormSignupConfirmPassword" name="password_confirmation" placeholder="8+ characters required" aria-label="8+ characters required" required
                       data-hs-validation-equal-field="#signupModalFormSignupPassword">
                <span class="invalid-feedback">Password does not match the confirm password.</span>
              </div>


              <div class="mb-3 form-group{{ $errors->has('personal_aff_code') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupAffcode">Referral Code (Optional)</label>
                <input type="text" class="form-control form-control-lg shrink_form_control" name="personal_aff_code" value="@if(isset($personal_aff_code)) {{$personal_aff_code}} @endif" id="signupModalFormSignupAffcode" style="height:30px;"  placeholder="Your referrer's affiliate code" aria-label="Affiliate Code" />
                <span class="invalid-feedback">Please enter a valid referral code.</span>
              
                @if(isset($errorMsg))<span class="text-danger" style="font-size:11.5px">

                  {{$errorMsg}}

                </span> @endif

		          	  @if ($errors->has('personal_aff_code'))
                                    <span class="help-block text-tiny">
                                        <strong>{{ $errors->first('personal_aff_code') }}</strong>
                                    </span>
                                @endif
			                        </div>
        


              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Sign up</button>
              </div>

              <div class="text-center">
                <p class="small mb-0">By clicking the 'Sign up' button you agree to our <a href="{{ route('terms-and-conditions') }}">Terms and Conditions</a></p>
              </div>
            </form>
          
          </div>
          <!-- End Sign up with Modal -->

          <!-- Reset Password -->
          <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Forgot password?</h2>
              <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
            </div>
            <!-- En dHeading -->


            <form class="js-validate need-validate" novalidate method="POST" action="{{route('password.request') }}">
              <div class="mb-3">
                <!-- Form -->
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>
                    <i class="bi-chevron-left small"></i> Back to Log in
                  </a>
                </div>

                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
                <!-- End Form -->
              </div>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-primary form-control-lg">Submit</button>
              </div>
            </form>
          
           
		   </div>
          <!-- End Reset Password -->
        </div>
        <!-- End Body -->

        
      </div>
    </div>
  </div>

  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>
 