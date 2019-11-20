<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
                <a class="navbar-brand nav-desk" href="<?php echo base_url();?>">Nigeria's No.1 Tour Management Company</a>
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
                                    <option data-symbol="€" data-placeholder="0.00">ARABIC</option>
                                    <option data-symbol="£" data-placeholder="0.00">HINDI</option>
                                </select>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link"  href="" style="color: white;">|</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/diptourltd" style="color:white;"><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.twitter.com/diptourltd" style="color:white;"><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/diptourltd" style="color:white;"><i class="fa fa-instagram"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/company/dip-tour-ltd" style="color:white;"><i class="fa fa-linkedin"></i> </a>
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
                            <a class="nav-link" href="<?php echo base_url();?>" style="color: black;">HOME<span style="padding-left: 20px;">|</span></a>
                        </li>                      
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: black;">HOTELS <span style="padding-left: 20px;">|</span></a>
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>flight" style="color: black;">FLIGHTS<span style="padding-left: 20px;">|</span></a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>car-rental" style="color: black;">CAR RENTALS <span style="padding-left: 20px;">|</span></a>
                        </li>                   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                TOUR PACKAGES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                VISAS</a>                          
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="search.html">Search</a>
                                <a class="dropdown-item" href="visa_form.html">Visa Booking</a>
                                <a class="dropdown-item" href="#">Dubai UAE</a>                                
                            </div>                              
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav nav-flex-icons">
                    <a href="<?php echo base_url();?>Register/login" class="btn " role="button" style=" margin-left:40px; margin-right:0px; background-color: black; color:white;"><i class="fa fa-lock xs-nav"></i>LOGIN</a>
                    <a href="<?php echo base_url(); ?>Register" class="btn " role="button" style=" margin-left:20px; margin-right:30px; background-color: green; color:white;"><i class="fa fa-user xs-naav"></i>REGISTER</a>
                </ul>
            </nav>
        </section>


        <section>

            <div class="card border-0">
                <div class="container" style="margin-top: 20px; border:5px solid green;">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body bg-white pad-card border-0">
                                <h3 class="font-sm-two">Search For Flights</h3>

                                <hr>
                                <h2><?php echo $this->session->flashdata('item'); ?></h2> 
                                <form action="<?php echo base_url('/flight/add'); ?>" method="post">
                                    <div class="tab">
                                        <ul class="tabs nav-flex-icons" style="padding: 0px">
                                            <li><a href="javascript:void(0)" onclick="setTrip('One-Way');">One-Way</a></li>
                                            <li><a href="javascript:void(0)" onclick="setTrip('Round-Trip');">Round-Trip</a></li>
                                            <li><a href="javascript:void(0)" onclick="setTrip('Multi-City');">Multi-City</a></li>
                                        </ul>
                                        <div style="display:none">
                                            <input type="hidden" name="flight_search_type" id="trip_type" value="One-Way">
                                        </div>
                                         <!-- / tabs -->
                                        <div class="tab_content">
                                            <div class="tabs_item">
                                                <div class="form-row">
                                                    <div class="col-md-6 padding-row-card  font-sm-three">
                                                        <label class="label-form-card" for="">FROM</label>
                                                        <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" name="origin" placeholder="Enter Departure City" required >
                                                    </div>
                                                    <div class="col-md-6 padding-row-card  font-sm-three">
                                                        <label class="label-form-card" for="">TO</label>
                                                        <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" name="destination" placeholder="Enter Destination City" required >
                                                    </div>
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">DEPART DATE</label>
                                                        <div class="input-group date" >
                                                            <input type="text" id="datepick1" class="form-control font-sm-four profile-date" value="<?php echo date('m/d/Y');?>" ng-required="true" placeholder="mm/dd/yyyy" name="departure_date">
                                                            <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-4 col-4 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Adults(11 Yrs)</label>
                                                        <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus adult_minus"><span>-</span></a>
                                                            <input name="adult_count" type="text" class="form-control quantity__input adult_input" value="1">
                                                            <a href="#" class="quantity__plus adult_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-4 padding-row-card font-sm-three" style="white-space:nowrap">
                                                        <label class="label-form-card" for="validationCustom01">Children(2-11 Yrs)</label>
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus children_minus"><span>-</span></a>
                                                            <input name="child_count" type="text" class="form-control quantity__input children_input" value="0">
                                                            <a href="#" class="quantity__plus children_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-4 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Infant(-2yrs)</label>
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus infant_minus"><span>-</span></a>
                                                            <input name="infant_count" type="text" class="form-control quantity__input infant_input" value="0">
                                                            <a href="#" class="quantity__plus infant_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Class</label>
                                                        <select class="form-control form-control-sm" name="class">
                                                            <option>Economy</option>
                                                            <option>First Class</option>
                                                            <option>Business Class</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01"><br></label>
                                                        <select class="form-control form-control-sm" name="airline">
                                                            <option>Select Airline</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- / tabs_item -->
                                            <div class="tabs_item">
                                                <div class="form-row">
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">FROM</label>
                                                        <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" placeholder="Enter Departure City" name="origin_1">                                                             
                                                    </div>
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three ">
                                                        <label class="label-form-card" for="validationCustom01">TO</label>
                                                        <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" placeholder="Enter Destination City" name="destination_1">                                                
                                                    </div>
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">DEPART DATE</label>
                                                        <div class="input-group date" >
                                                            <input type="text" id="datepick" class="form-control font-sm-four profile-date" value="SUNDAY 22 SEP'2019"  ng-required="true" placeholder="mm/dd/yyyy" name="departure_date_1">
                                                            <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">RETURN DATE</label>
                                                        <div class="input-group date" >
                                                            <input type="text" id="datepick2" class="form-control font-sm-four profile-date" ng-required="true" placeholder="mm/dd/yyyy" value="<?php echo date('m/d/Y');?>" name="return_date_1">
                                                            <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Adults(11 Yrs)</label>
                                                        <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus adult_minus"><span>-</span></a>
                                                            <input name="adult_count_1" type="text" class="quantity__input adult_input" value="1">
                                                            <a href="#" class="quantity__plus adult_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Children(2-11 Yrs)</label>
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus children_minus"><span>-</span></a>
                                                            <input name="child_count_1" type="text" class="quantity__input children_input" value="0">
                                                            <a href="#" class="quantity__plus children_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Infant(-2yrs)</label>
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus infant_minus"><span>-</span></a>
                                                            <input name="infant_count_1" type="text" class="quantity__input infant_input" value="0">
                                                            <a href="#" class="quantity__plus infant_plus"><span>+</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01">Class</label>
                                                        <select class="form-control form-control-sm" name="class_1">
                                                            <option>Economy</option>
                                                            <option>First Class</option>
                                                            <option>Business Class</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-12 padding-row-card font-sm-three">
                                                        <label class="label-form-card" for="validationCustom01"><br></label>
                                                        <select class="form-control form-control-sm" name="airline_1">
                                                            <option>Select Airline</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- / tabs_item -->
                                            <div class="tabs_item">
                                                <h4>Tab03</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
                                            </div> <!-- / tabs_item -->
                                        </div> <!-- / tab_content -->
                                    </div> <!-- / tab -->
                                    <hr>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="non_stop_only" value="">&nbsp;Show Direct Flights Only</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="search_time" value="">&nbsp;My dates are flexible(+/- 3 days)</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button class="btn btn-primary float-right searchbtnflight" type="submit">SEARCH FLIGHT</button>
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
                var availableTags = <?php echo json_encode($airport); ?>;
                //console.log(availableTags);
                $( ".inputautocomplete" ).autocomplete({
                        source: availableTags
                    }); 
                $(function () {
                    $("#datepick").datepicker();
                    $("#datepick1").datepicker();
                    $("#datepick2").datepicker();
                });
                 $(document).ready(function(){
                   
                   
                    
                });

                function setTrip(type){        
                        $("#trip_type").val(type);
                }

            </script>
        </section>










        <section>

            <div class="container newsletter-bg-colour" style="margin-top:0px;
                 background-color: #ffffff; border-style: solid; padding-bottom: 20px;padding-top: 20px;">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputEmail4">Keywords</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Keywords">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputPassword4">Category</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Category">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputAddress">Duration</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Duration">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAddress2">Date</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Date">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCity">Min Price</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState">Max Price</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2 ">
                            <a href="contact.html" class="theme-btn btn-2" role="button"  style="background-color: green; text-align: center;"   type="button">SEARCH</a>
                        </div>
                    </div>
                </form>
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
                                <p class="card-text">All in one package, experience a seamless Nigerian-Inbound (Domestic) Travel Process; which includes Meet & Greet, Airport Transfers, Local Flight Schedules, Hotel / Service Apartment Reservations, MICE, Expatriate Quotas, Local Attractions & Tour Activities with our certified Tour Guides</p>
                                <a href="#" class="btn btn-success">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">---TRAVEL DEALS---</h5>
                            <div class="card-body ">

                                <img src="./images/card2.jpg" width="100%">
                                <p class="card-text" style="padding-bottom: 25px;">For every season, get connected and be updated with top travel deals and discounted / promotional fares of different travel products; inclusive of Flight Tickets, Hotels, Tour Packages and other exciting tour services globally</p>
                                <a href="#" class="btn btn-success">GET LATEST UPDATES</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">---TRAVEL SIM CARD---</h5>
                            <div class="card-body ">

                                <img src="./images/card_1.jpg" width="100%">
                                <p class="card-text"  style="padding-bottom: 3px;">Now you can Travel the world including Nigeria with your own mobile number when you purchase our Travel Sim Card. By default, your Sim comes with a free $10 air time credit, and both UK & US telephone numbers. Contact us to request for your own SIM, plus additional Airtime.</p>
                                <a href="#" class="btn btn-success">READ MORE</a>
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
                                <p class="card-text"   style="padding-bottom: 0px;">Request for our tailor-made Tour Packages with excellent deliveries, rewarding relationship and cost reduction, from start to finish to different destinations around the world. Also, Travel to Dubai as a destination inclusive with your Dubai (UAE) Visa for $100 and be left with a memorable travel experience</p>
                                <a href="#" class="btn btn-success">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center; padding-bottom: 35px;">--TRAVEL & HEALTH INSURANCE--</h5>
                            <div class="card-body ">

                                <img src="./images/card6.jpg" width="100%">
                                <p class="card-text"  style="padding-bottom:45px;">Request for your Travel Insurance in minutes with guaranteed covers on emergency medical expenses abroad, travel delays (per night), evacuation & repatriation, loss & delay of baggage, passport theft, escort of beneficiary etc</p>
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
                                <h6 class="card-title">EXCELLENT DELIVERABLES</h6>

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
                                <h6 class="card-title">CAR LEASE DISPLAY</h6>

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
            <div class="card border-0">
                <div class="card-body">
                    <div class="container" style="padding-top: 50px; border: 4px solid green;">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="let_text">Lets get Started ?</h2>
                                <p class="let_des">Whether you are booking a plane ticket,looking for a hotel room,need help with viasas or want to insure your trip</p><p class="help_text">Need Help?</p>                   
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-4 col-6 na-paff">
                                        <div class="col_box">
                                            <img src="./images/c1.png" width="100%"><p>Best Price</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 na-paff">
                                        <div class="col_box">
                                            <img src="./images/c2.png" width="100%"><p>Easy Booking</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 na-paff">
                                        <div class=" col_box">
                                            <img src="./images/c3.png" width="100%"><p>Trust &amp; Safety</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 na-paff">
                                        <div class="col_box">
                                            <img class="img-responsive " src="./images/c4.png"><p>24/7 Customer<br> Support</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 na-paff">
                                        <div class="col_box" style="padding-bottom: 20px">
                                            <img class="img-responsive " src="./images/c2.png"><p>Excellent Deliverables</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 na-paff">
                                        <div class=" col_box" style="padding-bottom: 20px">
                                            <img class="img-responsive " src="./images/c2.png"><p>Car Lease Display</p>
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

                                                <p style="margin-top: 20px;">Thank you for booking the flight for us, you are the best we have seen in the market. </p>

                                                <small>- Elvis</small>
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
                                                <p>"I am happy for all your help to make my tour a success. I will surely come again."</p>
                                                <small>- I am happy</small>
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
                                                <p>"DTLtd is 'ur preferred partner' in flight ticketing, hotels andamp; serviced apartments, worldwide-ful tour packages n affordable car hire/leasing. "</p>
                                                <small>- Sunny Canto.</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="carousel-item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-10 offset-1">
                                                <p>"I like the 'Dip Tour', their representative is a just a call away"
                                                </p>
                                                <small>-Aminat Momoh</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div> 
                                <div class="carousel-item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-1 ">
                                                <img src="./images/test4.jpg" style="margin-right:20px;"></div>
                                            <div class="col-9 offset-2">
                                                <p>"I JUST LOVE THEM"</p>
                                                <small>- Sunny Canto.</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div> 
                                <div class="carousel-item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-10 offset-1">
                                                <p>"Dip Tour does all my travelling processes. From visa arrangement to hotel reservation, just name it. When am ready for my next vacation, I need not to sweat it because Mr Emeka in Dip Tour is just a call away. They are simply the best."
                                                </p>
                                                <small>- Betty</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>  <!-- .item -->

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
                        <div class="col-md-3 col-sm-6">
                            <!--Column1-->
                            <div class="footer-pad">
                                <img class="" src="./images/logo.png">
                                <p>Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum
                                    has been the industry's when an unknown
                                    printer took a galley of type and scrambled it
                                    to make a type specimen book.</p>
                                <ul class="list-unstyled">
                                    <li><a href="#"></a></li>
                                    <li><a href="#">Address</a></li>
                                    <li><a href="#">Phone:</a></li>
                                    <li><a href="#">Email: info@diptourltd.com</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--Column1-->
                            <div class="footer-pad">
                                <h6 ><u style="color:white; padding-left: 100px;">POPULAR LINKS</u></h6>
                                <ul class="list-unstyled" style="margin-top: 25px; margin-right: 20px;">
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">About us</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Services</a></li>

                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Privacy Policy</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Our Network</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Contact</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--Column1-->


                            <ul class="list-unstyled" style="margin-top: 60px; margin-left: 0">
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Press</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">FAQ</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Terms & Conditons</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Reach Us</a></li>

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
                                            <input type="email" class="form-control" placeholder="Enter your email">
                                            <span class="input-group-btn">
                                                <button class="btn" type="submit">Subscribe</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div> <div class="social" style="margin-top: 20px;">
                                <h6 style="padding-left: 70px;"><u style="color:white;" >GET CONNECTED</u></h6>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-youtube"></a>
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-google-plus"></a> 
                                <a href="#" class="fa fa-instagram"></a>  
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
