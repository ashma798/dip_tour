        <section id="" class="at-widgets acme-contact ">  <style type="text/css">
                @import url('https://fonts.googleapis.com/css?family=Yantramanav:100,300');

                /* ------------- */
                /* GLOBAL STYLES */
                /* ------------- */

                * {
                    box-sizing: border-box;
                }

                body {
                    background:white;
                    color: #485e74;
                    line-height: 1.6;
                    font-family: 'Yantramanav', sans-serif;
                    padding: 1em;
                }

                .container {
                    max-width: 1170px;
                    margin-left: auto;
                    margin-right: auto;
                    padding: 1em;
                }

                ul {
                    list-style: none;
                    padding: 0;
                }

                .brand {
                    text-align: center;
                    font-weight: 300;
                    text-transform: uppercase;
                    letter-spacing: 0.1em;
                }

                .brand span {
                    color: #ffffff;
                }

                .wrapper {
                    box-shadow: 0 0 20px 0 rgba(57, 82, 163, 0.7);
                }

                .wrapper > * {
                    padding: 1em;
                }

                /* ------------------- */
                /* COMPANY INFORMATION */
                /* ------------------- */

                .company-info {
                    background: #77a339;
                    border-top-left-radius: 4px;
                    border-top-right-radius: 4px;
                }

                .company-info h3,
                .company-info ul {
                    text-align: center;
                    margin: 0 0 1rem 0;
                }

                /* ------- */
                /* CONTACT */
                /* ------- */

                .contact {
                    background: #c5dea2;
                    border-bottom-left-radius: 4px;
                    border-bottom-right-radius: 4px;
                }

                /* ---- */
                /* FORM */
                /* ---- */

                .contact form {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    grid-gap: 20px;
                }

                .contact form label {
                    display: block;
                }

                .contact form p {
                    margin: 0;
                }

                .contact form .full {
                    grid-column: 1 / 3;
                }

                .contact form button,
                .contact form input,
                .contact form textarea {
                    width: 100%;
                    padding: 1em;
                    border: solid 1px #627EDC;
                    border-radius: 4px;
                }

                .contact form textarea {
                    resize: none;
                }

                .contact form button {
                    background: #627EDC;
                    border: 0;
                    color: #e4e4e4;
                    text-transform: uppercase;
                    font-size: 14px;
                    font-weight: bold;
                }

                .contact form button:hover,
                .contact form button:focus {
                    background: #3952a3;
                    color: #ffffff;
                    outline: 0;
                    transition: background-color 2s ease-out;
                }

                /* ------------- */
                /* MEDIA QUERIES */
                /* ------------- */
                input[type=checkbox] + label {
                    display: block;
                    margin: 0.2em;
                    cursor: pointer;
                    padding: 0.2em;
                }

                input[type=checkbox] {
                    display: none;
                }

                input[type=checkbox] + label:before {
                    content: "\2714";
                    border: 0.1em solid #000;
                    border-radius: 0.2em;
                    display: inline-block;
                    width: 1em;
                    height: 1em;
                    padding-left: 0.2em;
                    padding-bottom: 0.3em;
                    margin-right: 0.2em;
                    vertical-align: bottom;
                    color: transparent;
                    transition: .2s;
                }



                input[type=checkbox]:checked + label:before {
                    background-color: MediumSeaGreen;
                    border-color: MediumSeaGreen;
                    color: #fff;
                }


                @media only screen and (min-width: 400px) {
                    .wrapper {
                        display: grid;
                        grid-template-columns: 1fr 2fr;
                    }

                    .wrapper > * {
                        padding: 2em;
                    }

                    .company-info {
                        border-radius: 4px 0 0 4px;
                    }

                    .contact {
                        border-radius: 0 4px 4px 0;
                    }

                    .company-info h3,
                    .company-info ul,
                    .brand {
                        text-align: left;
                    }
                }
            </style>
            <section>

                <br>

                <div class="card" style="border:3px solid green;">
                    <div class="container container-adjust">
                        <div class="row">



                            <div class="col-12">
                                <div class="card-body bg-white pad-card border-0">
                                    <h3 style=" font-size: 20px;font-weight: bold;">Search <span style="color:green;">Car</span> For Rent</h3>
                                    <hr>

                                    <h2><?php echo $this->session->flashdata('item'); ?></h2> 
                                    <form action="<?php echo base_url('/car-rental/add'); ?>" method="post">

                                        <div class="form-row">

                                            <div class="col-md-2 padding-row-card  font-sm-three">
                                                <label class="label-form-card" for="">Pick-up City/Airport</label>
                                                <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" placeholder="Airport or City" name="pick_up_city"
                                                       required >
                                            </div>
                                            <div class="col-md-2 padding-row-card  font-sm-three">
                                                <label class="label-form-card" for="">Drop-off City/Airport</label>
                                                <input type="text" class="form-control font-sm-four inputautocomplete" id="validationCustom01" name="drop_off_city" placeholder="Same as pickup location" 
                                                       required >
                                            </div>
                                            <div class="col-md-2 padding-row-card  font-sm-three">
                                                <label class="label-form-card" for="">Pick-up Date</label>
                                                <input type="date" class="form-control font-sm-four" id="validationCustom01" name="pick_up_date" placeholder="Enter Departure City"
                                                       required >
                                            </div>
                                            <div class="col-md-2 padding-row-card  font-sm-three" style="margin-bottom: 0px;">
                                                <label for="sel1" style="font-size: 11px;">Select time:</label>
                                                <select class="form-control" id="sel1" style="    margin-top: -10px;height: 31px;" name="pick_up_time">
                                                    <option>09:00</option>
                                                    <option>10:00</option>
                                                    <option>10:00</option>
                                                    <option>10:00</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 padding-row-card  font-sm-three">
                                                <label class="label-form-card" for="">Drop-off Date</label>
                                                <input type="date" class="form-control font-sm-four" id="validationCustom01" placeholder="Enter Departure City"
                                                       required name="drop_off_date">
                                            </div>
                                            <div class="col-md-2 padding-row-card  font-sm-three" style="margin-bottom: 0px;">
                                                <label for="sel1" style="font-size: 11px;">Select time:</label>
                                                <select class="form-control" id="sel1" style="margin-top: -10px;height: 31px;" name="drop_off_time">
                                                    <option>1:00</option>
                                                    <option>2:00</option>
                                                    <option>3:00</option>
                                                    <option>4:00</option>
                                                </select>



                                            </div>
                                            <!--div class="col-md-2 padding-row-card  font-sm-three">
                                                <button  type="button"  class="btn" style="background-color: #9ACD32; color:white; margin-bottom: 0px; margin-top: 15px; width:100%;">SEARCH</button>
                                            </div-->

                                        </div>
                                        <hr>
                                        <div class="form-row">

                                            <div class="col-md-1 col-12 padding-row-card font-sm-three">
                                                <label for="sel1" style="font-size: 11px;">Vehicle Type</label>
                                                <select class="form-control" id="sel1" style="margin-top: -10px;height: 31px;"  name="vechical_type">
                                                    <option>Select</option>
                                                    <option value = "Hatchback">Hatchback</option>
                                                    <option value = "Sedan">Sedan</option>
                                                    <option value = "MPV">MPV</option>
                                                    <option value = "SUV">SUV</option>
                                                    <option value = "Crossover">Crossover</option>
                                                    <option value = "Volvo">Volvo</option>
                                                    <option value = "Coupe">Coupe</option>
                                                    <option value = "Convertible">Convertible</option>
                                                </select>



                                            </div>

                                            <div class="col-md-1">

                                            </div>
                                            <div class="col-md-2 col-12 padding-row-card font-sm-three">
                                                <label class="label-form-card" for="validationCustom01">Class</label>
                                                <select class="form-control form-control-sm" name="vehicle_class">
                                                    <option>Select</option>
                                                    <option value="First Class">First Class</option>
                                                    <option value="Business Class">Business Class</option>
                                                </select>
                                            </div>
                                            <div class="col-md-1">

                                            </div>
                                            <div class="col-md-2 col-12 padding-row-card font-sm-three">
                                                <label class="label-form-card" for="validationCustom01">Transmission Type</label>
                                                <select class="form-control form-control-sm" name="vehicle_transmission_type">
                                                    <option>Select</option>
                                                    <option value="Automatic Transmission">Automatic Transmission</option>
                                                    <option value="Manual Transmission">Manual Transmission</option>
                                                    <option value="Automated Manual Transmission">Automated Manual Transmission</option>
                                                    <option value="Continuously Variable Transmission">Continuously Variable Transmission</option>
                                                </select>
                                            </div>
                                            <div class="col-md-1">

                                            </div>
                                            <div class="col-md-1 col-12 padding-row-card font-sm-three">
                                                <label class="label-form-card" for="validationCustom01">Has Air Condition</label>
                                                <select class="form-control form-control-sm" name="vehicle_air_conditioning">
                                                    <option>Select</option>
                                                     <option value="Yes">Yes</option>
                                                     <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-1">

                                            </div>
                                            <div class="col-md-2 col-12 padding-row-card font-sm-three">
                                                <label class="label-form-card" for="validationCustom01">Mileage Charge Type</label>
                                                <select class="form-control form-control-sm" name="vehicle_charge_type">
                                                    <option>Select</option>
                                                    <option value="Yes">Yes</option>
                                                     <option value="No">No</option>
                                                </select>
                                            </div>

                                        </div>




                                        <hr>


                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary float-right searchbtnflight">SEARCH CAR FOR RENT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
                </div>
                </div>
            </section>






            <section class="">
                <div class="newsletter" >
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





                        </form>
                    </div>
                </div>
            </section>



        </section>
        <script type="text/javascript">
            var availableTags = <?php echo json_encode($airport); ?>;
                //console.log(availableTags);
                $( ".inputautocomplete" ).autocomplete({
                        source: availableTags
                    }); 
        </script>



















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