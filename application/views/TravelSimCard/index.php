 <section>

            <div class="card border-0">
                <div class="container" style="margin-top: 20px; border:5px solid green; ">
                    <br>
                                <h2><?php echo $this->session->flashdata('item'); ?></h2> 

                    <div class="row">
                        <div class="col-12">
                            <div class="card-body bg-white pad-card border-0">
                                <h3 class="font-sm-two"><b>Travel Sim Card </b></h3>
                                <hr>
                                <form method="post" action="<?php echo base_url();?>TravelSimCard/add">
                                    <div class="row">
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Client Name </label>
                                            <input type="text" name="name" placeholder="Client Name" class=" col-lg-4 form-control" required>
                                        </div> 
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Address </label>
                                            <textarea rows="2" cols="35" name="address" required>  </textarea>
                                        </div> <br>
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Email Address</label>
                                       <input type="email" name="email" placeholder="Email" class="form-control col-lg-4" required>
                                        </div> <br>
                                        <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Contact Number</label>
                                            <input type="text" name="contact_number" placeholder="Number" class=" col-lg-4 form-control" required min='1111111111'>
                                        </div> <br>
                                         <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                            <label class="col-lg-4"> Country of Usage</label>
                                            <input type="text" name="country_of_usage" placeholder="Country" class=" col-lg-4 form-control" required>
                                        </div> 
                                         <div class="col-lg-12 row" style="padding-bottom: 20px;">
                                        <label class="col-lg-4"> Collection Type </label> 
                                        <select class="form-control col-lg-4" name="collection_type">
                                            <option value="Pick_from_office">Pickup From Office </option>
                                            <option value="Pick_from_delivery">Pickup From delivery  </option>
                                        </select>
                                        </div>
                                    
                                    
 <br>
                                            <button type="submit" class="btn btn-primary float-left searchbtnflight">SUBMIT</button>
                                        
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