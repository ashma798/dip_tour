<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>Diptour</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="<?php echo base_url();?>js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <!--      <script type="text/javascript" src="<?php echo base_url();?>js/mdb.min.js"></script>-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>js/menu-scripts.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/flight-scripts.js"></script>
        <script src="<?php echo base_url();?>js/jquery-ui.js"></script>


        <!--link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet"-->
        <!-- Material Design Bootstrap -->


        <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/flightex.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/newstyle.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/flight-style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css">
          <style>

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */

.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  align-items: center;
  border: 3px solid #f1f1f1;
  z-index: 9;
  width: 100%;
  padding-top: 0 auto;
  align-content: center;

}

/* Add styles to the form container */
.form-container {
  max-width: 400px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
    </head>

    <body>

        <section>
            <nav class="navbar navbar-expand-sm   sticky-top justify-content-between" style="background-color: black;">
                <a class="navbar-brand nav-desk" href="#">Nigeria's No.1 Tour Management Company</a>
                <form class="form-inline my-1">
                    <ul class="navbar-nav  ml-auto nav-desk-two nav-flex-icons">
                        <li class="nav-item ">
                            <form class="form-inline" style="height: 50%;">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-addon currency-symbol" style="margin-right: 5px; margin-top:5px; color:white;">₦</div>
                                    <input type="text" class="form-control currency-amount" id="inlineFormInputGroup" placeholder="0.00" size="8">
                                    <div class="input-group-addon currency-addon" >
                                        <select class="currency-selector" style="color: white; background-color: black; margin-top: 10px; ">
                                            <option  class="opt" data-symbol="₦" data-placeholder="0.00" selected >NGN </option>
                                            <option data-symbol="€" data-placeholder="0.00">EUR</option>
                                            <option data-symbol="£" data-placeholder="0.00">GBP</option>
                                            <option data-symbol="¥" data-placeholder="0">JPY</option>
                                            <option data-symbol="$" data-placeholder="0.00">CAD</option>
                                            <option data-symbol="$" data-placeholder="0.00">AUD</option>
                                            <option data-symbol="$" data-placeholder="0.00">USD</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript">
                                function updateSymbol(e) {
                                    var selected = $(".currency-selector option:selected");
                                    $(".currency-symbol").text(selected.data("symbol"))
                                    $(".currency-amount").prop("placeholder", selected.data("placeholder"))
                                    $('.currency-addon-fixed').text(selected.text())
                                }

                                $(".currency-selector").on("change", updateSymbol)

                                updateSymbol()
                            </script>
                        </li>
                        <li class="nav-item"> 
                            <div class="input-group-addon currency-addon" >
                                <select class="currency-selector" style="color: white; background-color: black; margin-top: 10px; ">
                                    <option  class="opt" data-symbol="₦" data-placeholder="0.00" selected >ENG</option>
                                    <option data-symbol="€" data-placeholder="0.00">FRENCH</option>
                                    <option data-symbol="£" data-placeholder="0.00">SPANISH</option>
                                </select>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link"  href="" style="color: white;">|</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:white;"><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:white;"><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:white;"><i class="fa fa-instagram"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:white;"><i class="fa fa-linkedin"></i> </a>
                        </li>
                    </ul>
                </form>
            </nav>
        </section>

        <div class="topnav">
            <div class="row">
                <div class="col-lg-4 col-6 ">
                    <a href="<?php echo base_url(); ?>"><img class="nav-img" src="<?php echo base_url();?>images/logo.png" alt=""/></a>
                </div>
                <div class="offset-lg-5 col-lg-3 col-6">
                    <ul style="list-style-type: none; margin-top: 30px; font-weight: bold;">
                        <li>Contact Us</li>
                        <li><?php  echo $contact_info[0]['phone_no_1']; ?></li>
                        <li><?php  echo $contact_info[0]['phone_no_2']; ?>{24/7,WHATSAPP}</li>
                        <li><?php  echo $contact_info[0]['phone_no_3']; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <section>
            <nav class="navbar navbar-expand-sm navbar-ch navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarCustom">
                    <span class="rounded-bottom"></span>
                    <ul class="navbar-nav" style=" padding-left: 60px;">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url();?>" style="color: black;">HOME<span style="padding-left: 20px;">|</span></a>
                        </li>                      
                        <li class="nav-item">
                        <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" style="color: black;">HOTELS <span style="padding-left: 20px;">|</span></a>
                        <?php } else{ ?>
                             <a class="nav-link" style="color: black;"  href="<?php echo base_url(); ?>Register/login">HOTELS<span style="padding-left: 20px;">|</span></a>
                        <?php } ?>
                        </li>                    
                        <li class="nav-item">
                            <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" style="color: black;">FLIGHTS<span style="padding-left: 20px;">|</span></a>
                            <?php } else{ ?>
                              <a class="nav-link" style="color: black;"  href="<?php echo base_url(); ?>Register/login">FLIGHTS <span style="padding-left: 20px;">|</span></a>
                        <?php } ?>
                        </li>                        
                        <li class="nav-item">
                            <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>car-rental" style="color: black;">CAR RENTALS <span style="padding-left: 20px;">|</span></a>
                            <?php } else{ ?>
                             <a class="nav-link" style="color: black;"  href="<?php echo base_url(); ?>Register/login">CAR RENTALS<span style="padding-left: 20px;">|</span></a>
                        <?php } ?>
                        </li>                   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                TOUR PACKAGES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="<?php echo base_url();?>TourPackageEnquiry">Asia</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>TourPackageEnquiry">Africa</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>TourPackageEnquiry">Europe</a>
                            </div>
                        </li>
                        <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                VISAS</a>                          
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php if(isset($_SESSION['feusername'])){?>
                                <a class="dropdown-item" href="<?php echo base_url();?>Visa/visa_search">Search</a>
                                <?php } else{ ?>
                             <a class="dropdown-item" href="<?php echo base_url(); ?>Register/login">Search</a>
                        <?php } ?>
                         <?php if(isset($_SESSION['feusername'])){?>
                                <a class="dropdown-item" href="<?php echo base_url();?>Visa/visaquery">Visa Booking</a>
                         <?php } else{ ?>
                             <a class="dropdown-item" href="<?php echo base_url(); ?>Register/login">Visa Booking</a>
                        <?php } ?>    
                        <a class="dropdown-item" href="<?php echo base_url();?>Visa/DubaiUAE">Dubai - UAE</a>                          
                            </div>                              
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav nav-flex-icons">
                    <?php if(isset($_SESSION['feusername'])){?>
                           <li> Welcome, <?php echo $_SESSION['fename']; ?>
                           <p> <a href="<?php echo base_url();?>Register/logout"> Logout </a>
                           </p>
                           </li>
                    <?php }else{?>
                    <a class="btn " role="button" style=" margin-left:40px; margin-right:0px; background-color: black; color:white;" href="<?php echo base_url(); ?>Register/login"><i class="fa fa-lock xs-nav"></i>LOGIN</a>
                    <a href="<?php echo base_url(); ?>Register" class="btn " role="button" style=" margin-left:20px; margin-right:30px; background-color: green; color:white;"><i class="fa fa-user xs-naav"></i>REGISTER</a>
                <?php }?>
                </ul>
            </nav>
        </section>
 <section style="margin: 0 auto;">
    

    <div class="form-popup" id="myForm">
   <form action="<?php echo base_url();?>Register/login" id="user_login_form" autocomplete="off" onsubmit="return validate_user_login()" method="post" accept-charset="utf-8" class="form-container">
    <h1>Login</h1>

    <label for="email">Enter Your Registered Email Address</label>
    <input type="text" name="username" placeholder="Enter Your Registered Email Address" name="email" required>

    <label for="psw">Password</label>
    <input type="password" name="password" placeholder="Enter Password" name="psw" required>
    
    <div class="form-group">
<p class=""><input type="checkbox" name="remember" value="accept" checked="checked"  />
 Remember me 
 <a href="#" class="forgotPwd" style="float: right; ">Forgot Password?</a></p>
 </div> 
    <button type="submit" class="btn" style="background-color: orange; color: black;"><h5>Sign In</h5></button>
    <a href="<?php echo base_url(); ?>Register" class="btn" style="background-color: #fff; color: black; border: 1px solid orange;">REGISTER</a>
    
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


</section>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>