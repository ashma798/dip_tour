    <script>
    // JAVASCRIPT CONSTANT
     var IMAGE_SIZE                 = '0.5';                    var ALT_IMAGE_SIZE              = '0.5'; 
     var THUMB_IMAGE_MIN_HEIGHT     = '50';     var THUMB_IMAGE_MAX_HEIGHT      = '200';
     var THUMB_IMAGE_MIN_WIDTH      = '50';     var THUMB_IMAGE_MAX_WIDTH       = '200';
     var GALLERY_IMAGE_MIN_HEIGHT   = '300';    var GALLERY_IMAGE_MAX_HEIGHT    = '500';
     var GALLERY_IMAGE_MIN_WIDTH    = '300';        var GALLERY_IMAGE_MAX_WIDTH     = '900';     
     var PROFILE_IMAGE_MIN_HEIGHT   = '50';     var PROFILE_IMAGE_MAX_HEIGHT    = '300';
     var PROFILE_IMAGE_MIN_WIDTH    = '50';     var PROFILE_IMAGE_MAX_WIDTH     = '400';
     var COVER_IMAGE_MIN_HEIGHT     = '350';        var COVER_IMAGE_MAX_HEIGHT      = '450';
     var COVER_IMAGE_MIN_WIDTH      = '1250';       var COVER_IMAGE_MAX_WIDTH       = '1400';
     var IMAGE_SIZE_VALIDATION      = '1';
    </script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134257188-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-134257188-1');
    </script><!-- Global site tag (gtag.js) - Google Ads: 976379426 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-976379426"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-976379426');
    </script><!-- Start Alexa Certify Javascript -->
    <script type="text/javascript">
    _atrk_opts = { atrk_acct:"almdt1ah9W20em", domain:"flyingroups.com",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>
    
    </head>

    <style type="text/css">
        #login {
    margin-left: 170px 0 120px;
    color: #333;
    text-align: left;
    align-items: center;
    background-color: #fff;
    -moz-box-shadow: 0 0 5px rgba(0, 0, 0, .4);
    -webkit-box-shadow: 0 0 5 rgba(0, 0, 0, .4);
    box-shadow: 0 0 5px rgba(0, 0, 0, .4);
    padding: 30px;
}

a.btn_full_outline {
    border: none;
    font-family: inherit;
    font-size: inherit;
    color: #f36f21;
    background: 0 0;
    border: 2px solid #f36f21;
    cursor: pointer;
    padding: 10px 20px 20px 20px;
    display: inline-block;
    outline: 0;
    font-size: 12px;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-transform: uppercase;
    font-weight: 700;
    display: block;
    text-align: center;
}
    </style>
        <section id="hero" class="login" style="align-items: center; align-content: center;">
           <div class="container" >
              <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3"></div>
                 <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" style="margin-top: 150px; margin-bottom: 150px;">
                  <h6> Please login in order to continue your search for FLights / Hotels / Car Transfer / Visa /Tour Packages </h6>  
                    <div id="login">

                        <div class="login_module" >
                           <div class="text-center" id="logo_home">
                    <h1 style="margin-top: -20px; margin-right: 100px;"><a> <img class="nav-img" src="<?php echo base_url();?>images/logo.png" alt=""/> </a></h1>
                </div>
                           <hr>
                           <form action="<?php echo base_url();?>Register/login" id="user_login_form" autocomplete="off" onsubmit="return validate_user_login()" method="post" accept-charset="utf-8">
                    
                      <div class="form-group">
                                 <label>Enter Your Registered Email Address</label>
                                 <input type="email" name="username" value="" id="user_name" pattern=".{6,64}" title="6 to 64 Characters" class="form-control email" required="required" autocomplete="off" placeholder="Enter Your Registered Email Address" minlength="6" maxlength="64" min="6" max="64"  />
                                 <input type="hidden" name="user_type_id" value="IjIi" id="user_type_id" class="form-control" required="required"  />
                              </div>
                              <div class="form-group">
                                 <label>Password</label>
                                 <input type="password" name="password" value="" id="user_password" pattern=".{6,64}" title="6 to 64 Characters" class="form-control password" required="required" placeholder="Password" autocomplete="off" minlength="6" maxlength="64" min="6" max="64"  />
                              </div>
                              <div class="form-group">
                                    <p class=""><input type="checkbox" name="remember" value="accept" checked="checked"  />
 Remember me
                                    <a href="#" class="forgotPwd" style="float: right; ">Forgot Password?</a></p>
                              </div> 
                              <button type="submit" class=" btn btn_full col-lg-12" style="background-color: orange; " >Sign in</button>
                              <br/><br/>
                              <a href="<?php echo base_url(); ?>Register" class="btn_full_outline">Register</a>
                        
                                
                           </form>                      </div>
                        <div id="forgot_pwd" class="forgot_password_module" style="display: none;">
                           <div class="text-center"><img src="<?php echo base_url();?>images/logo_sticky.png" alt="Image" data-retina="true" ></div>
                           <hr>
                           <form action="https://www.flyingroups.com/forgot_password" id="user_frgpwd_form" autocomplete="off" onsubmit="return validate_user_forgot_pwd()" method="post" accept-charset="utf-8">
                    
                              <div class="col-md-12 error_message"></div>
                              <div class="form-group">
                                 <label>Enter Your Registered Email Address</label>
                                 <input type="email" name="" value="" id="pwd_email_address" pattern=".{6,64}" title="6 to 64 Characters" class="form-control email" required="required" autocomplete="off" placeholder="Username" minlength="6" maxlength="64" min="6" max="64"  />
                              </div>
                              <input type="submit" name="submit" value="Send Reset Link" class="btn_full"  />
                              <p class="small">Suddenly remember password?<a href="#" class="signIn"> Sign in</a></p>
                           </form>                      </div>
                    </div>
                 
                 </div>
              </div>
           </div>
        </section>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <script>
            //$('input').iCheck({ checkboxClass: 'icheckbox_square-grey', radioClass: 'iradio_square-grey' });
            $(window).load(function() {
                $("#forgot_pwd").hide(500);
                $('.forgotPwd').click(function(){ $('.login_module').fadeOut(500, function(){ $('.forgot_password_module').fadeIn(500); });});
                $('.signIn').click(function(){ $('.forgot_password_module').fadeOut(500, function(){ $('.login_module').fadeIn(500); }); });
            });
            $('#pwd_email_address').keyup(function(){
                var login_email = validate_email_without_focus('pwd_email_address');
                if(login_email){ 
                    $.ajax({ 
                        type        : "POST",
                        url         : "https://www.flyingroups.com/common/account/check_user_email_exist",
                        data        : { eamil_address : $('#pwd_email_address').val() },
                        success: function (data){ 
                            if($.trim(data) == 'YES'){  registeredEmail =  true;  } else { registeredEmail = false;  } 
                        }
                    }); 
                }
            });
        </script>