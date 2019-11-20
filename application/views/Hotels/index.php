<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Diptour</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
        <script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="./js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <!--      <script type="text/javascript" src="./js/mdb.min.js"></script>-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

        <script type="text/javascript" src="./js/menu-scripts.js"></script>
        <script type="text/javascript" src="./js/flight-scripts.js"></script>
        <script src="./js/jquery-ui.js"></script>


        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->


        <link href="./css/style.css" rel="stylesheet">
        <link href="./css/flightex.css" rel="stylesheet">
        <link href="./css/newstyle.css" rel="stylesheet">
        <link href="./css/flight-style.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/jquery-ui.css">
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
                <div class="col-lg-4 col-5 ">
                    <img class="nav-img" src="./images/logo.png" alt=""/>
                </div>
                <div class="offset-lg-4 col-lg-4 col-7">
                    <ul style="list-style-type: none; margin-top: 30px; font-weight: bold;">
                        <li>Contact Us</li>
                        <li>+2347046226590</li>
                        <li>+2348170592433 {24/7,WHATSAPP}</li>
                        <li>INFO@DIPTOURLTD.COM</li>
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
                            <a class="nav-link" href="index.html" style="color: black;">HOME<span style="padding-left: 20px;">|</span></a>
                        </li>                      
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Hotels" style="color: black;">HOTELS <span style="padding-left: 20px;">|</span></a>
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link" href="flightsearch.html" style="color: black;">FLIGHTS<span style="padding-left: 20px;">|</span></a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="car.html" style="color: black;">CAR RENTALS <span style="padding-left: 20px;">|</span></a>
                        </li>                   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                TOUR PACKAGES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Asia</a>
                                <a class="dropdown-item" href="#">Africa</a>
                                <a class="dropdown-item" href="#">Europe</a>
                            </div>
                        </li>
                        <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                VISAS</a>                          
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="search.html">Search</a>
                                <a class="dropdown-item" href="visa1.html">Visa Booking</a>
                                <a class="dropdown-item" href="#">Dubai UAE</a>                                
                            </div>                              
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav nav-flex-icons">
                    <a href="<??>" class="btn " role="button" style=" margin-left:40px; margin-right:0px; background-color: black; color:white;"><i class="fa fa-lock xs-nav"></i>LOGIN</a>
                    <a href="register.html" class="btn " role="button" style=" margin-left:20px; margin-right:30px; background-color: green; color:white;"><i class="fa fa-user xs-naav"></i>REGISTER</a>
                </ul>
            </nav>
        </section>


        <section>

            <div class="card border-0">
                <div class="container" style="margin-top: 20px; border:5px solid green;">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body bg-white pad-card border-0">
                                <h3 class="font-sm-two">Search Hotels</h3>
                                <hr>
                                <h2><?php echo $this->session->flashdata('item'); ?></h2> 
                                <form action="<?php echo base_url()?>Hotels/add" method="post">
                                <div class="checkboxes">
                                <label class="pl-4">CATEGORY</label>
                               <label for="x"><input class="check" type="checkbox" id="x" name="category_1"/> <span>2</span></label>
                              <label for="y"><input class="check" type="checkbox" id="y" name="category_2"/> <span>3</span></label>
                               <label for="z"><input class="check" type="checkbox" id="z" name="category_3"/> <span>4</span></label>
                               <label for="y"><input class="check" type="checkbox" id="y" name="category_4"/> <span>5</span></label>
                               <label for="z"><input  class="all" type="checkbox" id="z" name="category_5"/> <span>All</span></label>
                               
                               </div>
                                <div class="tab_content mt-4">

                                    <div class="tabs_item">
                                        <div class="form-row">
                                            <div  class="col-lg-12">
                                                <div class="row">
                                            <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                               
                                                <input type="text" class="form-control font-sm-four" id="validationCustom01" placeholder="Select Destination" name="destination"
                                                       required>
                                            </div>
                                            
                                            <span  class="ordiv">
                                            OR
                                            </span>
                                            
                                            
                                            <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                               
                                                <input type="text" class="form-control font-sm-four" id="validationCustom01" placeholder="Enter Hotel Name" name="hotel_name"
                                                       required>
                                            </div>
                                     </div></div>
                                     <div  class="col-lg-12">
                                                <div class="row">
                                            <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                                <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">CHECK IN DATE</label>


                                                 <div class="input-group date" >
                                            
                                             <input type="text" id="datepick" class="form-control font-sm-four profile-date" value="SUNDAY 22 SEP'2019"  ng-required="true" placeholder="mm/dd/yyyy" name="check_in_date">
                                                     <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>

                                            </div>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                             <div class="col-md-5 col-12 padding-row-card font-sm-three">
                                                <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold; margin-left: 20px;" >CHECK OUT DATE</label>


                                                 <div class="input-group date" >
                                             <input type="text" id="datepick1" class="form-control font-sm-four profile-date" value="SUNDAY 22 SEP'2019"  ng-required="true" placeholder="mm/dd/yyyy"  name="check_out_date">
                                                            <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>

                                            </div>

                                          </div>
                                      </div>
                                             <div  class="col-lg-12">
                                                <div class="row">
                                            <div class="col-md-5 col-12 padding-row-card font-sm-three" >
                                                <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">ROOMS</label>

                                                <input type="text" class="form-control font-sm-four" id="select_room" placeholder="1 Room 2 Person" name="no_of_rooms"
                                                       required>
                                                       </div>
                                        </div>
                                    </div>
                                        <div class="col-12 user-details pl-0 pr-0">
                                        <div id="divRoom1" class="form-row user_data">
                                          <div class="col-md-2  col-3 roomdiv">
                                            ROOM 1
                                            </div>
                                          
                                            <div class="col-md-2 col-4 padding-row-card font-sm-three ">
                                                <label class="label-form-card" for="validationCustom01">Adults(>11 Yrs)</label>
                                                <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->


                                                <div class="quantity">
                                                    
                                                     <input id="room1AdultMinus" class="quantity__minus adult_minus" type="button" value="-" style="color:#ffffff;">
                                                    <input  type="text" class="form-control quantity__input adult_input" value="2" data-val="true" data-val-number="The field NoOfAdults must be a number." data-val-required="The NoOfAdults field is required." id="room1Adult" name="no_of_adults">
                                                    
                                                    <input id="room1AdultPlus" class="quantity__plus adult_plus" type="button" value="+" style="color:#ffffff;">
                                                </div>



                                            </div>
                                            <div class="col-md-2  col-4 padding-row-card font-sm-three ml-4" style="white-space:nowrap">
                                                <label class="label-form-card" for="validationCustom01">Children(2-11 Yrs)</label>
                                                <div class="quantity">
                                                    <input id="room1ChildMinus" class="quantity__minus children_minus" type="button" value="-" style="color:#ffffff;">
                                                    <input  type="text" class="form-control quantity__input children_input" data-val="true" data-val-number="The field NoOfChildren must be a number." data-val-required="The NoOfChildren field is required." id="room1Child" name="no_of_children" type="text" value="0">
                                                   <input id="room1ChildPlus" class="quantity__plus children_plus" type="button" value="+" style="color:#ffffff;">
                                                </div>
                                            </div>
                                           

                                        </div>
                                        </div>
                                    </div> <!-- / tabs_item -->

                                </div> <!-- / tab_content -->
                            </div> <!-- / tab -->



                            <hr>
                           

                            <div class="row">
                                <div class="col-lg-12 col-12"><a href="hotellist.html"></a>
                                    <button class="btn float-right" style="background-color: #28a745; color: #ffffff; width: 340px; font-size: 15px;"><b>SEARCH HOTEL</b></button>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <br><br><br>
            <!-- SCRIPTS -->
            <script>
                $(function () {
                    $("#datepick").datepicker();
                    $("#datepick1").datepicker();
                    $("#datepick2").datepicker();
                });
            </script>
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






        <section  style="margin-top: 50px;"> 
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


        <footer class="mainfooter" role="contentinfo" style="margin-top: 0px;">
            <div class="footer-middle">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <!--Column1-->
                            <div class="footer-pad">
                                <img class="" src="./images/l2.png">
                                <p>Dip Tour with recorded success and continuous accomplishment is today reckoned as the preferred One Stop Travel Shop and one of the Leading Global Travel Management Company / with a focus on Promotion of Tourism Worldwide through its network and alliance. </p><br/>

                                <p>It has grown into a company having multiple years of global working experience and sound understanding of domestic and international travel markets and protocols that guarantees effective & on time deliveries, value for money, and customers' satisfaction focus on the 5A'S of Tourism  - Accessibility, Accommodation, Activities, Amenities and Attractions.
                                </p>
                                <ul class="list-unstyled">
                                    <li><a href="#"></a></li>
                                    <li>Address: Suite 7, Block 1, Bar Beach Towers, Bishop Oluwole &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Street Victoria Island, Lagos (LandMark: Eko Atlantic)</li>
                                    <li>Phone: +234 8122820856 <br/>  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;+234 8170592433</li>
                                    <li><a href="#">Email: info@diptourltd.com</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <!--Column1-->
                            <div class="footer-pad">
                                <h6 ><u style="color:white; ">COMPANY INFO</u></h6>
                                <ul class="list-unstyled" style="margin-top: 25px; margin-right: 20px;">
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">About us</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Services</a></li>

                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Privacy Policy</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Our Network</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Contact</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <!--Column1-->

                            <h6 ><u style="color:white; ">POPULAR LINKS</u></h6>
                            <ul class="list-unstyled" style="margin-top: 30px; margin-left: 0">
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Blog</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">FAQ</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Terms & Conditons</a></li>

                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-3">
                            <h6 ><u style="color:white; padding-left: 100px;">NEWSLETTER</u></h6>
                            <div class="new">
                                <div class="row">

                                    <div class="content">
                                        <p>You can get latest update from us by subscribing to
                                            our newsletter.</p>  <div class="input-group">

                                            <input type="email" class="form-control" placeholder="Name/Telephone">
                                            <span class="input-group-btn">
                                                <button class="btn" type="submit">Subscribe</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div> <div class="social" style="margin-top: 20px;">
                                <h6 style="padding-left: 70px;"><u style="color:white;" >GET CONNECTED</u></h6>
                                <a href="https://www.facebook.com/diptourltd" class="fa fa-facebook"></a>
                                <a href="https://www.twitter.com/diptourltd" class="fa fa-twitter"></a>
                                <a href="https://www.youtube.com/user/diptourltd" class="fa fa-youtube"></a>
                                <a href="https://www.linkedin.com/company/dip-tour-ltd" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-google-plus"></a> 
                                <a href="https://www.instagram.com/diptourltd" class="fa fa-instagram"></a>  
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 copy">
                            <p class="text-center">&copy; Copyright 2019 - DIPTOUR  All rights reserved.</p>
                        </div>
                    </div>


                </div>
            </div>
        </footer>




    </body>
</html>
