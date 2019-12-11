


<section id="" class=""><style type="text/css">#hero {
    position: relative;
    background-size: cover;
    color: #fff;
    width: 100%;
    font-size: 16px;
    display: table;
    z-index: 99;
    text-align: center;
    text-transform: uppercase
}</style> <div class="container padlft0" style="margin-top: 20px; border:5px solid green; padding-left: 150px;">
           
              <div class="row">
                 <div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-8 col-12">
                    <div id="">
                        <h2><?php echo $this->session->flashdata('item'); ?></h2> 
                     <br/>
                       <form action="<?php echo base_url(); ?>Register/add" enctype="multipart/form-data" id="user_register_form" autocomplete="off" onsubmit="return validate_user_register()" method="post" accept-charset="utf-8">
                          <div class="row">
                            <div class="col-md-8 form-group"><style type="text/css">img{
  max-width:180px;
}
input[type=file]{
padding:10px;
background:#2d2d2d;}</style>       <h6>Passport Photo upload:</h6>
                                <input type='file' name="passport_photo" onchange="readURL(this);" />
                            </div>
                            <div class="col-md-2 form-group"><script type="text/javascript">function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }</script>

                            <img id="blah" src="http://placehold.it/180" alt="your image" />
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-3 col-sm-3 col-xs-6 form-group">
                            <label>Salutation</label> 
                            <div class="styled-select-filters selectBox ">
                                <select name="salutation" id="salutation">
<option value="Mr" selected="selected">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Ms">Ms</option>
<option value="Dr">Dr</option>
<option value="Sr">Sr</option>
</select>
                            </div>
                          </div>
                          <div class="col-md-3 form-group">
                             <label for="fname">First Name</label>
                             <input type="text" name="first_name" value="" id="first_name" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize " required="required" autocomplete="off" placeholder="Enter Your First Name" minlength="2" maxlength="24"  />
                          </div>
                          <div class="col-md-3 form-group">
                             <label>Middle Name</label>
                             <input type="text" name="middle_name" value="" id="middle_name" pattern=".{0,24}" title="0 to 24 Characters" class="form-control capitalize" autocomplete="off" placeholder="Enter Your Middle Name" minlength="0" maxlength="24"  />
                          </div>
                          <div class="col-md-3 form-group">
                             <label>Last Name</label>
                             <input type="text" name="last_name" value="" id="last_name" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize" required="required" autocomplete="off" placeholder="Enter Your Last Name" minlength="2" maxlength="24"  />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 error_message"></div>
                          <div class="col-md-6 form-group">
                             <label>Email Address</label>
                             <input type="email" name="login_email" value="" id="login_email" pattern=".{6,64}" title="6 to 64 Characters" class="form-control email" required="required" autocomplete="off" placeholder="Enter Your Registered Email Address" minlength="6" maxlength="64"  />
                          </div>
                          <div class="col-md-6 form-group">
                             <label>Mobile Number</label>
                             <input type="number" name="cell_phone" value="" id="cell_phone" pattern=".{6,12}" title="6 to 12 Characters" class="form-control mobile" required="required" autocomplete="off" placeholder="Enter Your Cell Phone" minlength="6" maxlength="12"  />
                          </div></div>
 <div class="row">                          <div class="col-md-12 error_message" id="email_error_message"></div>
                              
                          <div class="col-md-12 error_message"></div>
                          <div class="col-md-6 form-group">
                             <label>Company Name</label>
                             <input type="text" name="company_name" value="" id="company_name" pattern=".{0,128}" title="0 to 128 Characters" class="form-control" required="required" autocomplete="off" placeholder="Enter Your Company Name" minlength="0" maxlength="128"  />
                          </div>
                          <div class="col-md-6 form-group">
                             <label>Address</label>
                             <input type="text" name="address" value="" id="address" pattern=".{0,128}" title="0 to 128 Characters" class="form-control" required="required" placeholder="Address" autocomplete="off" minlength="0" maxlength="128" min="0" max="128"  />
                             <!-- Hidden Variable as per the Google address Information - Auto Fill Functionality -->
                             <input type="hidden" name="city" value="" id="city" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize" required="required" autocomplete="off" placeholder="Enter Your Last Name" minlength="2" maxlength="24"  />
                             <input type="hidden" name="state" value="" id="state" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize" required="required" autocomplete="off" placeholder="Enter Your Last Name" minlength="2" maxlength="24"  />
                             <input type="hidden" name="country" value="" id="country" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize" required="required" autocomplete="off" placeholder="Enter Your Last Name" minlength="2" maxlength="24"  />
                             <input type="hidden" name="zip_code" value="" id="zip_code" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize" required="required" autocomplete="off" placeholder="Enter Your Last Name" minlength="2" maxlength="24"  />
                          </div>
                      </div>
                      
                          <div class="col-md-12 error_message" id="company_error_message"></div>
                         <div class="row">
                                <div class="col-md-3 form-group"> 

<label for="exampleInputPassword1">Password</label>
<input type="password" placeholder="Password" id="password" name="password" required></div>
<div class="col-md-3 form-group"> 
  <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>

        
    </div>
    
                                <div class="col-md-6 form-group"><div class="row" style="padding-top: 30px"><form method="post" id="subForm">
<script type="text/javascript">
  var password = document.getElementById("password");
  var confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;</script>  

<script type="text/javascript">$(function(){
  $('#subForm').ebcaptcha();
});

       

(function($){

    jQuery.fn.ebcaptcha = function(options){

        var element = this; 
        var input = this.find('#ebcaptchainput'); 
        var label = this.find('#ebcaptchatext'); 
        //$("#submit_form").attr('disabled','disabled'); 

        var randomNr1 = 0; 
        var randomNr2 = 0;
        var totalNr = 0;
         randomNr1 = Math.floor(Math.random()*10);
        randomNr2 = Math.floor(Math.random()*10);
        totalNr = randomNr1 + randomNr2;

        var texti = "What is "+randomNr1+" + "+randomNr2;
        $('#ebcaptchatext').html(texti);
        
    
        $("#ebcaptchainput").keyup(function(){

            var nr = $(this).val();
            if(nr==totalNr)
            {
                 $("#submit_form").removeAttr('disabled');              
            }
            else{

                 alert("Please enter correct value on captcha");
                 $("#ebcaptchainput").focus();
                 $("#submit_form").attr('disabled','disabled');
            }
            
        });

        $(document).keypress(function(e)
        {
            if(e.which==13)
            {
                if($("#submit_form").is(':disabled')==true)
                {
                    e.preventDefault();
                    return false;
                }
            }

        });


    };

})(jQuery);
</script>

  <label id="ebcaptchatext" style="margin-left:21%">What is 4+7</label>
  <input type="number" class="textbox" id="ebcaptchainput" style="margin-left: 20px;" />
  <!--button type="submit">Submit</button-->

                        </div>    </div>
                            
                         </div>
                          <div class="col-lg-12">
                          <hr style="width: 100%;"></div>
                          <div class="col-lg-12 form-group">
                          <div class="row">
                          <div class="col-lg-6 form-group">
                              <input type="checkbox" name="i_agree" value="accept" checked="checked"  />
 By signing up you accept our terms of use and privacy policy
                          </div>
                          
                          <div class="col-lg-6 form-group pull-right">
                            <button type="submit" id="submit_form" class="btn-success" style="background-color: green;opacity: 0.7;" >Create an account</button>
                          </div>
                      </div>
                  </div>
                          <div id="pass-info" class="clearfix"></div>
                       </form>                  </div>
                 </div>
              </div>
           </div>
        </section>

        <br><br><br>
