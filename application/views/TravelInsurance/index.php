 <section>

            <div class="card border-0">
                <div class="container" style="margin-top: 20px; border:5px solid green; ">
                    <br>
                    <h2><?php echo $this->session->flashdata('item'); ?></h2> 
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body bg-white pad-card border-0">
                                <h2 class="font-sm-two"><b>Travel Insurance</b></h2>
                                <hr>
                                <form method="post" action="<?php echo base_url();?>TravelInsurance/add">
                                    <div class="row">
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Client Name </label>
                                            <input type="text" name="name" placeholder="Client Name" class=" col-lg-4 form-control">
                                        </div> 
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Proposed Country of Arrival </label>
                                            <select class="form-control col-lg-4" name="proposed_country_of_arrival">
                                                <option>---Country---</option>
                                                <option value="India">India</option>
                                                <option value="USA">USA</option>
                                                <option value="China">China</option>
                                                <option value="Dubai">Dubai</option>
                                            </select>
                                        </div> <br>
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Number of Days for Insurance</label>
                                       <input type="text" name="number_of_days_for_insurance" placeholder="Days" class="form-control col-lg-4">
                                        </div> <br>
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Client Age</label>
                                            <input type="text" name="client_age" placeholder="Age" class=" col-lg-4 form-control">
                                        </div> <br>
                                        
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Full Name</label>
                                                <input type="text" class="form-control col-lg-4" id="full_name" placeholder="Full Name" name="full_name" required>
                                        </div><br>
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4">Email</label>
                                                <input type="email" class="form-control col-lg-4" id="email" placeholder="Email" name="email" minlength=10 required>
                                            </div><br>
                                            <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Phone</label>
                                                <input type="number" class="form-control col-lg-4" id="Phone" placeholder="Phone" name="phone" min='1111111111' required>
                                            </div>
                                        </div>
                                        <br/>
 <br>
                                            <button type="submit" class="btn btn-primary float-right searchbtnflight">SUBMIT</button>
                                        
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
