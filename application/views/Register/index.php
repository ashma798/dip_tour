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
}</style> <div class="container" style="margin-top: 20px; border:5px solid green; padding-left: 150px;">
           
              <div class="row">
                 <div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-8">
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
                             <input type="text" name="cell_phone" value="" id="cell_phone" pattern=".{6,12}" title="6 to 12 Characters" class="form-control mobile" required="required" autocomplete="off" placeholder="Enter Your Cell Phone" minlength="6" maxlength="12"  />
                          </div></div>
 <div class="row">                          <div class="col-md-12 error_message" id="email_error_message"></div>
                              
                          <div class="col-md-12 error_message"></div>
                          <div class="col-md-6 form-group">
                             <label>Company Name</label>
                             <input type="text" name="company_name" value="" id="company_name" pattern=".{0,128}" title="0 to 128 Characters" class="form-control" required="required" autocomplete="off" placeholder="Enter Your Company Name" minlength="0" maxlength="128"  />
                          </div>
                          <div class="col-md-6 form-group">
                             <label>Address</label>
                             <input type="text" name="address" value="" onkeypress="googleAddressWithAutoFill(this.id)" id="address" pattern=".{0,128}" title="0 to 128 Characters" class="form-control" required="required" placeholder="Address" autocomplete="off" minlength="0" maxlength="128" min="0" max="128"  />
                             <!-- Hidden Variable as per the Google address Information - Auto Fill Functionality -->
                             <input type="hidden" name="city" value="" id="city" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize" required="required" autocomplete="off" placeholder="Enter Your Last Name" minlength="2" maxlength="24"  />
                             <input type="hidden" name="state" value="" id="state" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize" required="required" autocomplete="off" placeholder="Enter Your Last Name" minlength="2" maxlength="24"  />
                             <input type="hidden" name="country" value="" id="country" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize" required="required" autocomplete="off" placeholder="Enter Your Last Name" minlength="2" maxlength="24"  />
                             <input type="hidden" name="zip_code" value="" id="zip_code" pattern=".{2,24}" title="2 to 24 Characters" class="form-control capitalize" required="required" autocomplete="off" placeholder="Enter Your Last Name" minlength="2" maxlength="24"  />
                          </div>
                      </div>
                      
                          <div class="col-md-12 error_message" id="company_error_message"></div>
                         <div class="row">
                                <div class="col-md-3 form-group"> <script type="text/javascript">var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;</script>  <label for="exampleInputPassword1">Password</label><input type="password" placeholder="Password" id="password" name="password" required></div>
<div class="col-md-3 form-group"> <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>

        
    </div>
    
                                <div class="col-md-6 form-group"><div class="row" style="padding-top: 30px"><form method="post" id="subForm"><script type="text/javascript">$(function(){
  $('#subForm').ebcaptcha();
});

(function($){

    jQuery.fn.ebcaptcha = function(options){

        var element = this; 
        var input = this.find('#ebcaptchainput'); 
        var label = this.find('#ebcaptchatext'); 
                $(element).find('button[type=submit]').attr('disabled','disabled'); 

        var randomNr1 = 0; 
        var randomNr2 = 0;
        var totalNr = 0;


        randomNr1 = Math.floor(Math.random()*10);
        randomNr2 = Math.floor(Math.random()*10);
        totalNr = randomNr1 + randomNr2;
        var texti = "What is "+randomNr1+" + "+randomNr2;
        $(label).text(texti);
        
    
        $(input).keyup(function(){

            var nr = $(this).val();
            if(nr==totalNr)
            {
                $(element).find('button[type=submit]').removeAttr('disabled');              
            }
            else{
                $(element).find('button[type=submit]').attr('disabled','disabled');
            }
            
        });

        $(document).keypress(function(e)
        {
            if(e.which==13)
            {
                if((element).find('button[type=submit]').is(':disabled')==true)
                {
                    e.preventDefault();
                    return false;
                }
            }

        });

    };

})(jQuery);</script>

  <label id="ebcaptchatext">What is 4+7</label>
  <input type="text" class="textbox" id="ebcaptchainput" style="margin-left: 20px;" />
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
                            <button type="submit" class="btn-success" style="background-color: green;opacity: 0.7;" >Create an account</button>
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


         <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 style="text-align: center;white-space: nowrap; ">W E L C O M E T O D I P T O U R T R A V E L</h6>
                        <h1 style="text-align: center;">SPECIAL <span style="color:green;">TOUR</span> PACKAGE</h1>
                        <p style="text-align: center;">Hot offers for the most amazing tours around world</p>
                    </div>
                </div>
            </div>
        </section>






        <section> 
            <div class="container">
                <h3 class="text-center">TOP TRAVEL PRODUCTS</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">--INBOUND TRAVEL PROCESS--</h5>
                            <div class="card-body ">

                                <img src="./images/card1.jpg" width="100%">
                                <p class="card-text">Have the best of experience with seamless Nigerian-Inbound (Domestic) Travel Process - all in one package with inclusion on Nigerian Visa Facilitation / Visa Extension, Meet & Greet Services, Airport Transfers / Ground Transportation, Local Flight Schedules between Nigerian Cities, Hotel Accommodation, Nigerian Attractions & Tour Activities with Dip Tour certified and experience travel experts.</p>
                                <a href="#" class="btn btn-success">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">---TRAVEL DEALS---</h5>
                            <div class="card-body ">

                                <img src="./images/card2.jpg" width="100%">
                                <p class="card-text" style="padding-bottom: 25px;">Get your Local and International Flight Tickets seamlessly with best price guarantee on flight deals, promotional fares with easy ticket upgrade and real time flight change.</p>
                                <a href="#" class="btn btn-success" style="margin-top: 95px;">GET LATEST UPDATES</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">---TRAVEL SIM CARD---</h5>
                            <div class="card-body ">

                                <img src="./images/card_1.jpg" width="100%">
                                <p class="card-text"  style="padding-bottom: 3px;">Travel the world anytime having your own mobile number with you to connect with family, friends & Business associates. Sim Card possess $10 air time credit, UK & US telephone numbers. </p>
                                <a href="#" class="btn btn-success" style="margin-top: 115px;">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:80px;">
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">--EDUCATIONAL, MEDICAL & SPORT TOURISM--</h5>
                            <div class="card-body ">

                                <img src="./images/card4.jpg" width="100%">
                                <p class="card-text"> Explore other cultures & values of different environments along the pathway of career development. – Connect to take advantage of Standby Medical Tourism Facilitators, to coordinate a seamless medical trip for prospective patients.Â  – Engage with our Sport Tourism Facilitators as an Observer, Host or Participant.</p>
                                <a href="#" class="btn btn-success">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center; padding-bottom: 35px;">---TOUR PACKAGES---</h5>
                            <div class="card-body ">

                                <img src="./images/card5.jpg" width="100%">
                                <p class="card-text"   style="padding-bottom: 0px;">Get the best Ready or Custom Made Tour Package to your Preferred Destination at any given season inclusive of Flight + Hotel + Visa + Attractions/Activities + Ground Transportation + Dubai (UAE) Package + Many More suitable for Solo, Business and Group Travelers.</p>
                                <a href="#" class="btn btn-success" style="margin-top: 25px;">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center; padding-bottom: 12px;">--TRAVEL & HEALTH INSURANCE--</h5>
                            <div class="card-body ">

                                <img src="./images/card6.jpg" width="100%">
                                <p class="card-text"  style="padding-bottom:45px;">In minutes, get your Travel Insurance which guarantee covers for emergency medical expenses abroad, travel delays, evacuation & repatriation, loss or delayed baggage, passport theft, free escort of beneficiary + many more.</p>
                                <a href="#" class="btn btn-success">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="container p-t-3">
            <div class="row" style="margin-top:50px; margin-bottom: 50px;">
                <div class="col-lg-12">
                    <h3 style="text-align: center;">Recent Travel Packages

                    </h3>
                </div>
            </div>
        </section>

        <section>
            <div class="container" >
                <div class="row" >
                    <div class="col-lg-4 col-6" style="padding-top: 20px;">
                        <div class="card">
                            <img src="./images/par1.jpg">
                            <div class="off_div">2N / 3D</div>
                            <div class="card-block">
                                <h6 class="card-title">Ultimate Louvre: Skip-the-Line Guided Tour</h6>

                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <p class="card-text" style="margin-left:0; margin-top:5px;">18266 Reviews</p>                                 
                                        </div>
                                        <div class="col-md-6" >
                                            <small class="text-muted" style="float: right;">From </small><br/>
                                            <span style="float: right;">₹&nbsp; 5,154</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6" style="padding-top: 20px;">
                        <div class="card">
                            <img  src="./images/par2.jpg">
                            <div class="off_div">2N / 3D</div>
                            <div class="card-block">
                                <h6 class="card-title">This almost brought the Internet to its knees</h6>

                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <p class="card-text" style="margin-left:0; margin-top:5px;">18266 Reviews</p>                                 
                                        </div>
                                        <div class="col-md-6" >
                                            <small class="text-muted" style="float: right;">From </small><br/>
                                            <span style="float: right;">₹&nbsp; 5,154</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6" style="padding-top: 20px;">
                        <div class="card">
                            <img  src="./images/par3.jpg">
                            <div class="off_div">2N / 3D</div>
                            <div class="card-block">
                                <h6 class="card-title">This almost brought the Internet to its knees</h6>

                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <p class="card-text" style="margin-left:0; margin-top:5px;">18266 Reviews</p>                                 
                                        </div>
                                        <div class="col-md-6" >
                                            <small class="text-muted" style="float: right;">From </small><br/>
                                            <span style="float: right;">₹&nbsp; 5,154</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6" style="padding-top: 20px;">
                        <div class="card">
                            <img src="./images/par1.jpg">
                            <div class="off_div">2N / 3D</div>
                            <div class="card-block">
                                <h6 class="card-title">Ultimate Louvre: Skip-the-Line Guided Tour</h6>

                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <p class="card-text" style="margin-left:0; margin-top:5px;">18266 Reviews</p>                                 
                                        </div>
                                        <div class="col-md-6" >
                                            <small class="text-muted" style="float: right;">From </small><br/>
                                            <span style="float: right;">₹&nbsp; 5,154</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6" style="padding-top: 20px;">
                        <div class="card">
                            <img  src="./images/par2.jpg">
                            <div class="off_div">2N / 3D</div>
                            <div class="card-block">
                                <h6 class="card-title">This almost brought the Internet to its knees</h6>

                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <p class="card-text" style="margin-left:0; margin-top:5px;">18266 Reviews</p>                                 
                                        </div>
                                        <div class="col-md-6" >
                                            <small class="text-muted" style="float: right;">From </small><br/>
                                            <span style="float: right;">₹&nbsp; 5,154</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6" style="padding-top: 20px;">
                        <div class="card">
                            <img  src="./images/par3.jpg">
                            <div class="off_div">2N / 3D</div>
                            <div class="card-block">
                                <h6 class="card-title">This almost brought the Internet to its knees</h6>

                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:#D3D3D3;"></i>
                                            <p class="card-text" style="margin-left:0; margin-top:5px;">18266 Reviews</p>                                 
                                        </div>
                                        <div class="col-md-6" >
                                            <small class="text-muted" style="float: right;">From </small><br/>
                                            <span style="float: right;">₹&nbsp; 5,154</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section>
            <div class="container-fluid" style="background-color: white; margin-top: 30px; border: 2px solid green;">
                <div class="row">
                    <div class="col-md-11">

                        <h2 style="  padding-top: 30px; padding-bottom: 30px; margin-left: 20px;">Cheap Flights from Nigeria</h2>

                        <div class="row">
                            <div class="col-md-3"> 
                                <ul  >
                                    <h5><b>Asian Flights</b></h5>   
                                    <li><a href="#">Flights to Dubai</a></li>                                     
                                    <li><a href="#">Flights to Abu Dhabi</a></li>
                                    <li><a href="#">Flights to New Delhi</a></li>


                                </ul> 
                            </div>
                            <div class="col-md-3"> 
                                <ul>
                                    <h5><b>North American Flights</b></h5>   
                                    <li><a href="#">Flights to Atlanta</a></li>                                     
                                    <li><a href="#">Flights to Toronto</a></li>                   
                                    <li><a href="#">Flights to Houston</a></li>
                                    <li><a href="#">Flights to New York</a></li>

                                </ul>
                            </div>

                            <div class="col-md-3"> 
                                <ul >
                                    <h5><b>African Flights</b></h5>


                                    <li><a href="#">Flights to Accra</a></li>                                                                               
                                    <li><a href="#">Flights to Nairobi</a></li>                                      <li><a href="#">Flights to Cape Town</a></li>                                       <li><a href="#">Flights to Johannesburg</a></li>                  
                                </ul>
                            </div>
                            <div class="col-md-3"> 
                                <ul >
                                    <h5><b>European Flights</b></h5>
                                    <li><a href="#">Flights to London</a></li>                                                                               
                                    <li><a href="#">Flights to Istanbul</a></li>   
                                    <li><a href="#">Flights to Frankfurt</a></li>      
                                    <li><a href="#">Flights to Paris</a></li>                                                                              



                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">

                        <h4 style="  padding-top: 30px; padding-bottom: 30px; margin-left: 20px;">Cheap hotels in popular destinations</h4>

                        <div class="row">
                            <div class="col-md-3"> 
                                <ul  >
                                    <h5><b>Asian Hotels</b></h5>   
                                    <li><a href="#">Hotels in Dubai</a></li>                                     
                                    <li><a href="#">Hotels in Abu Dhabi</a></li>
                                    <li><a href="#">Hotels in New Delhi</a></li>


                                </ul> 
                            </div>
                            <div class="col-md-3"> 
                                <ul>
                                    <h5><b>North American Hotels</b></h5>   
                                    <li><a href="#">Hotels in Atlanta</a></li>                                     
                                    <li><a href="#">Hotels in Toronto</a></li>                   
                                    <li><a href="#">Hotels in Houston</a></li>
                                    <li><a href="#">Hotels in New York</a></li>

                                </ul>
                            </div>

                            <div class="col-md-3"> 
                                <ul >
                                    <h5><b>African Hotels</b></h5>


                                    <li><a href="#">Hotels in Accra</a></li>                                                                               
                                    <li><a href="#">Hotels in Nairobi</a></li>            
                                    <li><a href="#">Hotels in Cape Town</a></li>            
                                    <li><a href="#">Hotels in Johannesburg</a></li>                  
                                </ul>
                            </div>
                            <div class="col-md-3"> 
                                <ul >
                                    <h5><b>European Hotels</b></h5>
                                    <li><a href="#">Hotels in London</a></li>                                                                               
                                    <li><a href="#">Hotels in Istanbul</a></li>                  
                                    <li><a href="#">Hotels in Frankfurt</a></li>             
                                    <li><a href="#">Hotels in Paris</a></li>                                                                              



                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </section>



        <section class="container p-t-3">
            <div class="row" style="margin-top:50px; margin-bottom: 50px;">
                <div class="col-lg-12">
                    <h5 style="text-align: center;">DIPTOUR TRAVEL FEATURES
                        <h1 style="text-align: center;">WHY <span style="color:green;">CHOSE</span> DIPTOUR</h1>

                        <p style="text-align: center;">Hot offers for the most amazing tours around world</p>
                    </h5>
                </div>
            </div>
        </section>






        <section>
            <div class="container">
                <div class="row" >
                    <div class="col-md-4">
                        <div class="card" style="background-color: #D3D3D3;">
                            <div class="text-center">
                                <img class="card-img-top" src="./images/logo1.png" alt="Card image top" style="height: 73px; width: 100px;  padding-top: 20px;" >
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">24/7 CUSTOMER SUPPORT</h6>

                                <p class="card-text" style="font-size: 11px;">Get assistance 24/7 on any kind of travel related
                                    query. We are happy to assist you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="background-color: #D3D3D3">
                            <div class="text-center">
                                <img class="card-img-top" src="./images/logo1.png" alt="Card image top" style="height: 73px; width: 100px;  padding-top: 20px;">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">ONTIME & EXCELLENT DELIVERIES</h6>

                                <p class="card-text" style="font-size: 11px;">Get assistance 24/7 on any kind of travel related
                                    query. We are happy to assist you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="background-color: #D3D3D3;">
                            <div class="text-center">
                                <img class="card-img-top" src="./images/logo1.png" alt="Card image top" style="height: 73px; width: 100px;  padding-top: 20px;">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">BEST PRICE & VALUE FOR MONEY</h6>

                                <p class="card-text" style="font-size: 11px;">Get assistance 24/7 on any kind of travel related
                                    query. We are happy to assist you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br><br>









        <section>
            <div class="container">
                <div class="top text-center">

                </div>
            </div>
            <hr />
            <br />
            <div class="container">
                <div class="text-area text-center">
                    <h1 style="color:green;">Our Customers Are Seeing Big Results</h1>
                </div>

                <div class='row'>
                    <div class='col-md-8 offset-lg-2'>

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">

                                <!-- Quote 1 -->
                                <div class="carousel-item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-1 ">
                                                <img src="./images/test1.jpg" style="margin-right:20px;"></div>
                                            <div class="col-9 offset-2">

                                                <p style="margin-top: 20px;">''These guys are cool with time management when it comes to complex travel arrangement. I do recommend their service to any corporate.''</p>

                                                <small>- Bakare Joseph - Google Map Nigeria</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>

                                <div class="carousel-item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-1 ">
                                                <img src="./images/test2.jpg" style="margin-right:20px;"></div>
                                            <div class="col-9 offset-2">
                                                <p>''Dip Tour coordinates all our traveling plans from successful visa entry, flight, accommodation, ground transportation and other travel amenities, just name it. We really have never sweat it. Chris or Frida are always a call away''</p>
                                                <small>- Jude Iyhobhebhe - COO, Meridian Energy </small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>

                                <div class="carousel-item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-1 ">
                                                <img src="./images/test3.png" style="margin-right:20px;"></div>
                                            <div class="col-9 offset-2">
                                                <p>"Oh yes, all the way from Europe, i and my team toured Nigeria in about 2 to 3 weeks touching many attractions at same time. Thanks to the Dip Tour team for such a remarkable & well detailed arrangement towards making history. "</p>
                                                <small>- Elvis & John Adeba - Cloveebiz Limited</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="carousel-item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-10 offset-1">
                                                <p>"Their passion in contributing their quota to the promotion of tourism is quite huge. Their team are professionals who knows their opinions."
                                                </p>
                                                <small>- Amao Nurudeen - Deputy Leader, Eti Osa Local Government</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div> 

                                <div class="carousel-item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-10 offset-1">
                                                <p>"I really recommend you guys for the credible and unprecedented attention you accorded my request. You guided i and family to a successful Canadian visa application process, flight, accommodation, tour activities and even a travel sim to keep me in constant communication with my friends in Nigeria. The best part was it was within my budget."
                                                </p>
                                                <small>- Elvis & John Adeba - Cloveebiz Limited</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div> 
                                <!-- .item -->

                            </div> <!-- .carousel-inner -->
                        </div>  <!-- #my-carousel -->
                    </div>
                </div>
            </div>


            <hr style="border:2px solid green;">


            <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
            <script>$('#myCarousel').carousel({
                                    interval: 3000
                                });

                                window.sr = ScrollReveal({reset: true});

                                sr.reveal('.company-stuff', {duration: 700});</script>
        </section>
