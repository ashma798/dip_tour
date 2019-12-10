    <br><br><br>
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

                                <img src="<?php echo base_url();?>images/card1.jpg" width="100%">
                                <p class="card-text">Have the best of experience with seamless Nigerian-Inbound (Domestic) Travel Process - all in one package with inclusion on Nigerian Visa Facilitation / Visa Extension, Meet & Greet Services, Airport Transfers / Ground Transportation, Local Flight Schedules between Nigerian Cities, Hotel Accommodation, Nigerian Attractions & Tour Activities with Dip Tour certified and experience travel experts.</p>
                                <a href="https://www.diptourltd.com/contact-us" class="btn btn-success">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">---TRAVEL DEALS---</h5>
                            <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card2.jpg" width="100%">
                                <p class="card-text" style="padding-bottom: 25px;">Get your Local and International Flight Tickets seamlessly with best price guarantee on flight deals, promotional fares with easy ticket upgrade and real time flight change.</p>
                                <a href="<?php echo base_url('flight');?>" class="btn btn-success" style="margin-top: 95px;">GET LATEST UPDATES</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">---TRAVEL SIM CARD---</h5>
                            <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card_1.jpg" width="100%">
                                <p class="card-text"  style="padding-bottom: 3px;">Travel the world anytime having your own mobile number with you to connect with family, friends & Business associates. Sim Card possess $10 air time credit, UK & US telephone numbers. </p>
                                <?php if(isset($_SESSION['feusername'])){?>
                                <a class="btn btn-success" href="<?php echo base_url('TravelSimCard');?>" style="margin-top: 110px;">READ MORE</a>
                            <?php } else{ ?>
                                <div class="btn btn-success" onclick="openForm();">Visa Booking</div>
                            <?php } ?> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:80px;">
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center;">--EDUCATIONAL, MEDICAL & SPORT TOURISM--</h5>
                            <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card4.jpg" width="100%">
                                <p class="card-text">
                                    <ul>
                                        <li>
                                    Study Abroad Today at your preferred academic institutions for skills improvement along the pathway of career development. <a href="https://www.diptourltd.com/educational-tourism/">BOOK NOW </a>
                                    </li>
                                    <li> Lets facilitate your medical trip to your preferred medical centre globally. Package are inclusive of admission into preferred hospitals + visa consultation + trip coordination. <a href="https://www.diptourltd.com/medical-tourism/">BOOK NOW </a>
                                    </li>
                                    <li>
                                    Become a Host, Participant or Observer through our sport tourism facilitator at any sporting event. <a href="https://www.diptourltd.com/sport-tourism/">BOOK NOW </a>
                                    </li>
                                   </ul>
                                </p>
                                <!--a href="#" class="btn btn-success">BOOK NOW</a-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center; padding-bottom: 35px;">---TOUR PACKAGES---</h5>
                            <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card5.jpg" width="100%">
                                <p class="card-text"   style="padding-bottom: 0px;">Get the best Ready or Custom Made Tour Package to your Preferred Destination at any given season inclusive of Flight + Hotel + Visa + Attractions/Activities + Ground Transportation + Dubai (UAE) Package + Many More suitable for Solo, Business and Group Travelers.</p>
                                <a href="<?php echo base_url();?>TourPackageEnquiry" class="btn btn-success" style="margin-top: 25px;">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success mb-3">
                            <h5 class="card-header bg-success text-white" style="text-align: center; padding-bottom: 12px;">--TRAVEL & HEALTH INSURANCE--</h5>
                            <div class="card-body ">

                                <img src="<?php echo base_url();?>images/card6.jpg" width="100%">
                                <p class="card-text"  style="padding-bottom:45px;">In minutes, get your Travel Insurance which guarantee covers for emergency medical expenses abroad, travel delays, evacuation & repatriation, loss or delayed baggage, passport theft, free escort of beneficiary + many more.</p>
                                <?php if(isset($_SESSION['feusername'])){?>
                                <a class="btn btn-success" href="<?php echo base_url('TravelInsurance');?>" style="margin-top: 110px;">CONTACT US</a>
                            <?php } else{ ?>
                                <div class="btn btn-success" onclick="openForm();">Visa Booking</div>
                            <?php } ?> 
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
                <?php foreach($tour_packages as $k => $v){ 
            if($k == 0 OR  ($k % 3 == 0)){
            ?>
            <div class="container" >
                <div class="card-columns" >
            <?php                
                }
            ?>
                <a href="<?php echo  base_url();?>/TourPackageEnquiry" ><div class="card" style="width:300px;">
                    <img src="<?php echo base_url().$v['tour_image']; ?>">
                    <div class="off_div"><?php echo $v['duration']; ?></div>
                    <div class="card-block">
                        <h6 class="card-title"><?php echo $v['title'];?></h6>

                        <div class="container-fluid">
                            <div class="row ">
                                <div class="col-md-6">
                                    <i class="fa fa-star" aria-hidden="true" 
                                    style="<?php if($v['rating'] >=1 ){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <i class="fa fa-star" aria-hidden="true" style="<?php if($v['rating'] >=2 ){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <i class="fa fa-star" aria-hidden="true" style="<?php if($v['rating'] >=3){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <i class="fa fa-star" aria-hidden="true" style="<?php if($v['rating'] >=4 ){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <i class="fa fa-star" aria-hidden="true" style="<?php if($v['rating'] >=5){
                                        echo 'color:orange;';
                                    }else{
                                        echo 'color:#D3D3D3;';
                                    }?> "></i>
                                    <p class="card-text" style="margin-left:0; margin-top:5px;"><?php echo $v['no_of_reviews'];?> Reviews</p>                                 
                                </div>
                                <div class="col-md-6" >
                                    <small class="text-muted" style="float: right;">From </small><br/>
                                    <span style="float: right;">₹&nbsp; <?php echo $v['cost_per_head'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></a><!--end of card-->

                <?php 
                    if($k == 2 OR  $k == 5 OR $k == 8 OR $k == 11){
                    ?>
                    </div>
                        </div>
                    <?php                
                        }
                    }
                    ?>


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
                                <li> <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Dubai</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Dubai</a>
                        <?php } ?></li>                                     
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Abu Dhabi</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Abu Dhabi</a>
                        <?php } ?></li>
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to New Delhi</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to New Delhi</a>
                        <?php } ?></li>


                            </ul> 
                        </div>
                        <div class="col-md-3"> 
                            <ul>
                                <h5><b>North American Flights</b></h5>
                                <li> <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Atlanta</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Atlanta</a>
                        <?php } ?></li>                                     
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Toronto</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Toronto</a>
                        <?php } ?></li>
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Houston</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Houston</a>
                        <?php } ?> </li> 
                        <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to New York</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to New York</a>
                        <?php } ?> </li> 

                            </ul>
                        </div>

                        <div class="col-md-3"> 
                            <ul >
                                <h5><b>African Flights</b></h5>
                                <li> <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Accra</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Accra</a>
                        <?php } ?></li>                                     
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Nairobi</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Nairobi</a>
                        <?php } ?></li>
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Cape Town</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Cape Town</a>
                        <?php } ?> </li> 
                        <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Johannesburg</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Johannesburg</a>
                        <?php } ?> </li>             
                            </ul>
                        </div>
                        <div class="col-md-3"> 
                            <ul >
                                <h5><b>European Flights</b></h5>
                                <li> <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to London</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to London</a>
                        <?php } ?></li>                                     
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Istanbul</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Istanbul</a>
                        <?php } ?></li>
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Frankfurt</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Frankfurt</a>
                        <?php } ?> </li> 
                        <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>flight" >Flights to Paris</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Flights to Paris</a>
                        <?php } ?> </li>                                                                               
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
                                <li> <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Dubai</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Dubai</a>
                        <?php } ?></li>                                     
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Abu Dhabi</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Abu Dhabi</a>
                        <?php } ?></li>
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in New Delhi</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in New Delhi</a>
                        <?php } ?></li>


                            </ul> 
                        </div>
                        <div class="col-md-3"> 
                            <ul>
                                <h5><b>North American Hotels</b></h5>   
                                <li> <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Atlanta</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Atlanta</a>
                        <?php } ?></li>                                     
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Toronto</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Toronto</a>
                        <?php } ?></li>
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Houston</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Houston</a>
                        <?php } ?> </li> 
                        <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in New York</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in New York</a>
                        <?php } ?> </li> 

                            </ul>
                        </div>

                        <div class="col-md-3"> 
                            <ul >
                                <h5><b>African Hotels</b></h5>
                              <li> <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Accra</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Accra</a>
                        <?php } ?></li>                                     
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Nairobi</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Nairobi</a>
                        <?php } ?></li>
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Cape Town</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Cape Town</a>
                        <?php } ?> </li> 
                        <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Johannesburg</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Johannesburg</a>
                        <?php } ?> </li>                  
                            </ul>
                        </div>
                        <div class="col-md-3"> 
                            <ul >
                                <h5><b>European Hotels</b></h5>
                                                                <li> <?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in London</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in London</a>
                        <?php } ?></li>                                     
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Istanbul</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Istanbul</a>
                        <?php } ?></li>
                                <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Frankfurt</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Frankfurt</a>
                        <?php } ?> </li> 
                        <li><?php if(isset($_SESSION['feusername'])){?>
                            <a class="nav-link" href="<?php echo base_url();?>hotels" >Hotels in Paris</a>
                            <?php } else{ ?>
                              <a class="nav-link" href="<?php echo base_url(); ?>Register/login">Hotels in Paris</a>
                        <?php } ?> </li>  
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
                                <img class="card-img-top" src="<?php echo base_url();?>images/logo1.png" alt="Card image top" style="height: 73px; width: 100px;  padding-top: 20px;" >
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
                                <img class="card-img-top" src="<?php echo base_url();?>images/logo1.png" alt="Card image top" style="height: 73px; width: 100px;  padding-top: 20px;">
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
                                <img class="card-img-top" src="<?php echo base_url();?>images/logo1.png" alt="Card image top" style="height: 73px; width: 100px;  padding-top: 20px;">
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
                                                <img src="<?php echo base_url();?>images/test1.jpg" style="margin-right:20px;"></div>
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
                                                <img src="<?php echo base_url();?>images/test2.jpg" style="margin-right:20px;"></div>
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
                                                <img src="<?php echo base_url();?>images/test3.png" style="margin-right:20px;"></div>
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

                                sr.reveal('.company-stuff', {duration: 700});

            </script>
        </section>