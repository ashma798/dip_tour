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

                                        <br/>
                            <div class="row">
                                <div class="col-4">
                                    <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">Full Name</label>
                                    <input type="text" class="form-control font-sm-four" id="full_name" placeholder="Full Name" name="full_name" required>
                                </div>
                                <div class="col-4">
                                    <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">Email</label>
                                    <input type="email" class="form-control font-sm-four" id="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="col-4">
                                    <label class="label-form-card" for="validationcustom01" style="font-size:12px;font-weight:bold;">Phone</label>
                                    <input type="number" class="form-control font-sm-four" id="phone" placeholder="phone" name="phone" required>
                                </div>
                            </div>
                            <br/>


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