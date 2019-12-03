                       <link href="<?php echo base_url();?>visa_css/select2.css" rel="stylesheet" type="text/css">
                <link href="<?php echo base_url();?>visa_css/select2-bootstrap.css" rel="stylesheet" type="text/css">
                <link href="<?php echo base_url();?>visa_css/bootstrap-datepicker.min.css" rel="stylesheet">

                <!-- X-editable css -->
                <link type="text/css" href="<?php echo base_url();?>visa_css/bootstrap-editable.css" rel="stylesheet">
        <link href="<?php echo base_url();?>visa_css/loader_ripple.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>visa_css/custombox.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>visa_css/sweet-alert.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url();?>visa_css/core.css" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo base_url();?>visa_css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>visa_css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>visa_css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>visa_css/menu.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>visa_css/animate.min.css">
        <link href="<?php echo base_url();?>visa_css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>css/newstyle.css" rel="stylesheet">
       
<div class="wrapper">
            <div class="container" >





                <style>
                    html,body { width:100% !important ;overflow-x:hidden !important;}
                    .mySlides {display:none;}
                </style>


                <style>

                    .overflowcontent{
                        overflow-x : hidden;
                        overflow-y : auto;
                        height: 250px;
                    }
                    .overflowcontent::-webkit-scrollbar{
                        width: 6px;
                    }
                    .overflowcontent::-webkit-scrollbar-track{
                        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                    }
                    .overflowcontent::-webkit-scrollbar-thumb{
                        background-color: darkgrey;
                        outline: 1px solid slategrey;
                    }

                    .vc_info_result_in{
                        background-color: rgba(255,255,255,0.7);
                        padding: 10px;
                        margin:0 0 15px 0;
                    }
                    .thetextrow{
                        border-bottom:#E0E0DD 1px dotted;
                        padding-bottom: 5px;
                    }
                </style>
                <!-- Page-Title
                <div class="row">
                    <div class="col-sm-12">
                
                        <h4 class="page-title"><img src="assets/images/vqguide.png"> Visa Information</h4>
                    </div>
                </div>  -->



                <div class="wrapper">
            <div class="container" >


                <link href="<?php echo base_url();?>visa_css/select2.css" rel="stylesheet" type="text/css">
                <link href="<?php echo base_url();?>visa_css/select2-bootstrap.css" rel="stylesheet" type="text/css">
                <link href="<?php echo base_url();?>visa_css/bootstrap-datepicker.min.css" rel="stylesheet">

                <!-- X-editable css -->
                <!-- <link type="text/css" href="<?php echo base_url();?>visa_css/bootstrap-editable.css" rel="stylesheet"> -->


              


                <div class="row parentToDelegate vqgsearch">

                    <div class="col-md-12">
                        <h4 class="vqgtitle"><img src="<?php echo base_url();?>images/vqguide.png">&nbsp; Quick Visa Guide</h4>

                        <input name="csrf_token" id="csrf_token" type="hidden" value="" size="100">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="vqguide2">Nationality</div>
                                    <div class="vqguide">
                                        <select id="nationality" class="editable editable-click"  style="color: rgb(152, 166, 173);width: 100%;border:none;">
                                        <option>Select Country</option> 
                                        <?php foreach($nationality as $v){?>
                                            <option value="<?php echo $v['nationality'];?>"><?php echo $v['nationality'];?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="vqguide2">Destination</div>
                                <div class="vqguide">
                                    <select id="destination" class="editable editable-click"  style="color: rgb(152, 166, 173);width: 100%;border:none;" required>
                                    <option>Select Country</option>
                                    <?php foreach($destination as $v){?>
                                            <option value="<?php echo $v['destination'];?>"><?php echo $v['destination'];?> </option>
                                    <?php } ?>
                               </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="vqguide2">Country of Resident</div>
                                 <div class="vqguide">
                                    <select id="country_of_resident" class="editable editable-click"  style="color: rgb(152, 166, 173);width: 100%;border:none;" required>                                        
                                        <option>Select Country</option> 
                                        <?php foreach($country_of_resident as $v){?>
                                            <option value="<?php echo $v['country_of_resident'];?>"><?php echo $v['country_of_resident'];?> </option>
                                    <?php } ?>
                                    </select>
                                 </div>
                            </div>

                            <div class="col-md-3">
                                <div class="vqguide2">Purpose of Travel</div>
                                <div class="vqguide">
                                    <select id="purpose_of_travel" cclass="editable editable-click"  style="color: rgb(152, 166, 173);width: 100%;border:none;" required>
                                        <option>Select Visa Category</option> 
                                        <?php foreach($purpose_of_travel as $v){?>
                                            <option value="<?php echo $v['purpose_of_travel'];?>"><?php echo $v['purpose_of_travel'];?> </option>
                                    <?php } ?>  
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="vqgbut">
                            <button id="search_visa_information" class="btn btn-success waves-effect waves-light search_visa_information btn-rounded">Show Visa Information</button>
                        </div>
                    </div><!--end of col-md-12-->


                    <div class="col-md-12 visa_info_application_right_container">





                        <div class="card-box no_subscription_message" style="display: none;" >
                            <div class="alert alert-warning" role="alert">
                                <strong>Oops!</strong> You have exhausted your Quick Guide priviledges. Perform any of the following operation:
                                <ul>
                                    <li>Buy Subscription</li>
                                    <li>Add a New Client</li>
                                    <li>Add a New Visa Application</li>
                                </ul> to renew your priviledges and to make use of this tool.
                            </div>
                        </div>
                    </div>  <!--end of col-md-12 visa_info_application_right_container-->
                </div><!--end of row parentToDelegate vqgsearch-->
                <!-- end row -->

                <div class="row m-t-15">


                    <div class="col-md-12 col-sm-12 vc-visafree" style="display: none;">

                    </div>

                    <div class="vc-loader-overlay visa_checklist_loader" style="display: none;">
                        <div class="vc-loader-overlay-center">
                            <div class='uil-ripple-css' style='transform:scale(0.65);'>
                            <div>
                                
                            </div>
                            <div>
                                
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="show_info_here" style="display:none">
                    <div class="col-md-6 col-sm-6 vc_info_result">
                        <div class="vc_info_result_in">

                            <h2 class="m-t-0 text-info"><i class="ti-info-alt m-r-5"></i> Application Info/Policy</h2>

                            <div class="overflowcontent">
                                <div id="applicationinfo_container"><p>No Policy information available at this time. Please try again later.</p><div class="col-md-12"><div class="list-group m-b-0"><div class="lead m-t-0 m-b-0 thetextrow">Visa Fee:  </div>
                                            <div class="lead m-t-0 m-b-0 thetextrow"> <a href="visa_2.html">Application Link:</a> </div>
                                            <div class="lead m-t-0 m-b-0 thetextrow">Processing Time: </div>
                                        </div></div></div>

                            </div>
                            <div id="applicationinfo_container">

                            </div>

                        </div><!--end of vc_info_result_in-->

                    </div><!--end of col-md-6 col-sm-6 vc_info_result-->

                    
                        <div class="col-md-6 col-sm-6 vc_info_result">
                            <div class="vc_info_result_in">

                                <h2 class=" m-t-0 text-custom"><i class="ti-check-box m-r-5"></i> Visa Checklist <a href="#" target="_blank"><span class="buytemplate">Buy letter Template</span></a></h2>
                                <div class="overflowcontent">
                                    <div id="visa_checklist_container">                    <ul class="list-group m-b-0 user-list"><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Application Form (s)">
                                                <a href="javascript:;" class="user-list-item">
                                                    <div class="avatar text-center">
                                                        <i class="zmdi zmdi-circle text-danger"></i>
                                                    </div>
                                                    <div class="user-desc">
                                                        <span class="name"><a href="visa_2.html"> Application Form (s)</a></span>
                                                        <span class="desc">Visa Application Form</span>
                                                    </div>
                                                </a>
                                            </li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Bank Statement (6 months)">
                                                <a href="javascript:;" class="user-list-item">
                                                    <div class="avatar text-center">
                                                        <i class="zmdi zmdi-circle text-danger"></i>
                                                    </div>
                                                    <div class="user-desc">
                                                        <span class="name">Bank Statement (6 months)</span>
                                                        <span class="desc">Bank Statement</span>
                                                    </div>
                                                </a>
                                            </li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Hotel Reservation ">
                                                <a href="javascript:;" class="user-list-item">
                                                    <div class="avatar text-center">
                                                        <i class="zmdi zmdi-circle text-danger"></i>
                                                    </div>
                                                    <div class="user-desc">
                                                        <span class="name">Hotel Reservation </span>
                                                        <span class="desc">Proof of Accommodation</span>
                                                    </div>
                                                </a>
                                            </li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: International Passport">
                                                <a href="javascript:;" class="user-list-item">
                                                    <div class="avatar text-center">
                                                        <i class="zmdi zmdi-circle text-danger"></i>
                                                    </div>
                                                    <div class="user-desc">
                                                        <span class="name">International Passport</span>
                                                        <span class="desc">At least 6 months validity</span>
                                                    </div>
                                                </a>
                                            </li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Letter of Introduction">
                                                <a href="javascript:;" class="user-list-item">
                                                    <div class="avatar text-center">
                                                        <i class="zmdi zmdi-circle text-danger"></i>
                                                    </div>
                                                    <div class="user-desc">
                                                        <span class="name">Letter of Introduction</span>
                                                        <span class="desc">Original</span>
                                                    </div>
                                                </a>
                                            </li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Optional: Letter of Invitation">
                                                <a href="javascript:;" class="user-list-item">
                                                    <div class="avatar text-center">
                                                        <i class="zmdi zmdi-circle text-primary"></i>
                                                    </div>
                                                    <div class="user-desc">
                                                        <span class="name">Letter of Invitation</span>
                                                        <span class="desc">If applicable</span>
                                                    </div>
                                                </a>
                                            </li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Optional: Other documents">
                                                <a href="javascript:;" class="user-list-item">
                                                    <div class="avatar text-center">
                                                        <i class="zmdi zmdi-circle text-primary"></i>
                                                    </div>
                                                    <div class="user-desc">
                                                        <span class="name">Other documents</span>
                                                        <span class="desc">If Applicable</span>
                                                    </div>
                                                </a>
                                            </li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Passport photographs">
                                                <a href="javascript:;" class="user-list-item">
                                                    <div class="avatar text-center">
                                                        <i class="zmdi zmdi-circle text-danger"></i>
                                                    </div>
                                                    <div class="user-desc">
                                                        <span class="name">Passport photographs</span>
                                                        <span class="desc">White Background</span>
                                                    </div>
                                                </a>
                                            </li>                                </ul> </div>
                                    <div id="visa_checklist_container">

                                    </div>
                                </div>
                            </div>
                        </div>


                    <div class="col-md-6 col-sm-6 vc_info_result">
                        <div class="vc_info_result_in">

                            <h2 class=" m-t-0 text-primary"><i class="ti-layout-column3-alt m-r-5"></i> Visa Application Center</h2>
                            <div class="overflowcontent">

                                <div id="visa_application_center_container">
                                    <div id="visa_application_center_container"><div class="list-group m-b-0"><div class="alert alert-info"><strong>Note!</strong> No VAC present in the resident country. This is a Close Address.</div>
                                            <div class="thetextrow m-b-15">
                                                <p class="lead m-t-0">Consulate-General of the Republic of Nauru Queensland </p>
                                                <address>
                                                    <abbr title="Telephone">T:</abbr> (07) 3220 3040 <br>
                                                    <abbr title="Email">E:</abbr> nauru.consulate@brisbane.gov.nr<br>
                                                    <abbr title="Address">A:</abbr> Level 3, 99 Creek Street Qld 4000<br>
                                                    Brisbane <br>Queensland  <br>
                                                    <abbr title="Payment Detail">P:</abbr> <br>
                                                </address>
                                                <blockquote>
                                                    Hours of Business: Monday - Friday 9.00<br>
                                                    am - 5.00 p.m.
                                                </blockquote>

                                            </div></div></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 vc_info_result">
                        <div class="vc_info_result_in">

                            <h2 class=" m-t-0 text-success"><i class="ti-layout-column2-alt m-r-5"></i> Embassy</h2>
                            <div class="overflowcontent">

                                <div id="embassy_container"><div class="list-group m-b-0"><div class="alert alert-info"><strong>Note!</strong> No Embassy present in the resident country. This is a Close Address.</div>
                                        <div class="thetextrow m-b-15">
                                            <p class="lead m-t-0">Zimbabwean Embassy Abuja</p>
                                            <address>
                                                <abbr title="Telephone">T:</abbr> (+234) 9-461 1322<br>
                                                <abbr title="Email">E:</abbr> zimabuja@infoweb.abs.net<br>
                                                <abbr title="Website">W:</abbr> <br>
                                                <abbr title="Address">A:</abbr> 60, Parakou Crescent, Off Aminu Kano Crescent<br>
                                                Wuse II<br>Abuja<br>
                                            </address>
                                            <blockquote>
                                                60, Parakou Crescent, Off Aminu Kano<br>
                                                Crescent
                                            </blockquote>

                                        </div>
                                        <div class="alert alert-info"><strong>Note!</strong> No Embassy present in the resident country. This is a Close Address.</div>
                                        <div class="thetextrow m-b-15">
                                            <p class="lead m-t-0">United States</p>
                                            <address>
                                                <abbr title="Telephone">T:</abbr> +25321453000<br>
                                                <abbr title="Email">E:</abbr> <br>
                                                <abbr title="Website">W:</abbr> <br>
                                                <abbr title="Address">A:</abbr> Lot number 350-B Harmous<br>
                                                <br>Tripoli<br>
                                            </address>
                                            <blockquote>

                                            </blockquote>

                                        </div>
                                        <div class="alert alert-info"><strong>Note!</strong> No Embassy present in the resident country. This is a Close Address.</div>
                                        <div class="thetextrow m-b-15">
                                            <p class="lead m-t-0">Consulate-General of the Republic of Nauru Queensland </p>
                                            <address>
                                                <abbr title="Telephone">T:</abbr> (07) 3220 3040 <br>
                                                <abbr title="Email">E:</abbr> nauru.consulate@brisbane.gov.nr<br>
                                                <abbr title="Website">W:</abbr> http://www.naurugov.nr/<br>
                                                <abbr title="Address">A:</abbr> Level 3, 99 Creek Street Qld 4000<br>
                                                Brisbane <br>Queensland  <br>
                                            </address>
                                            <blockquote>

                                            </blockquote>

                                        </div>
                                        <div class="alert alert-info"><strong>Note!</strong> No Embassy present in the resident country. This is a Close Address.</div>
                                        <div class="thetextrow m-b-15">
                                            <p class="lead m-t-0"></p>
                                            <address>
                                                <abbr title="Telephone">T:</abbr> +264612958500<br>
                                                <abbr title="Email">E:</abbr> <br>
                                                <abbr title="Website">W:</abbr> <br>
                                                <abbr title="Address">A:</abbr> 97, Nelson Mandela Ave<br>
                                                Windhoek<br>Windhoek<br>
                                            </address>
                                            <blockquote>

                                            </blockquote>

                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>

                    </div>


                    <style>
                        .vc-visafree {
                            background-color: rgba(255,255,255,0.7);
                            padding: 10px;
                            margin:0 0 15px 0;
                        }
                        .vc-loader-overlay {
                            position: absolute;
                            left: 5%;
                            right: 5%;
                            //top: 0;
                            //bottom: 0;
                            height: 75%;
                            background-color: #fff;
                            //Cross-browser opacity below
                            -moz-opacity:.90;
                            filter:alpha(opacity=90);
                            opacity:.90;
                            z-index: 10000000;
                        }
                        .vc-loader-overlay {
                            z-index: 10;
                        }
                        .vc-loader-overlay-center{
                            margin: 0;
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            margin-right: -50%;
                            transform: translate(-50%, -50%)
                        }
                    </style>



                <!-- end row -->

                <!-- Begin Ads -->
                <div style="padding: 50px 0px;">
                    <img class="mySlides" src="<?php echo base_url();?>images/mobileads.jpg" style="width:100%">
                    <a href="#" target="_blank"><img class="mySlides" src="<?php echo base_url();?>images/letter-template.jpg" style="width:100%"></a>
                    <a href="#" target="_blank"><img class="mySlides" src="<?php echo base_url();?>images/visa-process.jpg" style="width:100%"></a>
                </div>

                <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        myIndex++;
                        if (myIndex > x.length) {
                            myIndex = 1
                        }
                        x[myIndex - 1].style.display = "block";
                        setTimeout(carousel, 5000); // Change image every 2 seconds
                    }
                </script>
                <!-- End Ads -->

                <script type="text/javascript" src="<?php echo base_url();?>visa_js/jquery.multi-select.js"></script>
                <script type="text/javascript" src="<?php echo base_url();?>visa_js/jquery.quicksearch.js"></script>
                <script src="<?php echo base_url();?>visa_js/select2.min.js" type="text/javascript"></script>
                <script>
                    $(window).on('load', function(){ $(".vapo_loader").fadeOut("slow"); });

                    $(document).ready(function () {
                        
                        $(".editable-click").click(function(e) {
                            e.preventDefault();        
                            $(this).parents('.vqguide').find(".togglemenu").toggle();
                        }); 
           
                        $(".togglemenu li ").click(function(e){
                            e.preventDefault();
                            var selText = $(this).text();
                            $(this).parents('.vqguide').find('.dropdown-toggle').val(selText);
                        });


                        $("#search_visa_information").click(function(e){
                            var nationality = $("#nationality").val();
                            var destination = $("#destination").val();
                            var country_of_resident = $("#country_of_resident").val();
                            var purpose_of_travel = $("#purpose_of_travel").val();
                            var postUrl = "<?php echo base_url();?>"+'/visa/getDataByAjax';
                            if( nationality && destination && country_of_resident && purpose_of_travel){
                                $.ajax({
                                    type: 'POST',
                                    url: postUrl,
                                    data: { 'nationality' : nationality, 'destination' : destination, 'country_of_resident' : country_of_resident, 'purpose_of_travel' : purpose_of_travel },
                                    beforeSend: function(){
                                        $('#visa_checklist_loader').show();
                                    },
                                    success: function(resultData) { 
                                        var obj = jQuery.parseJSON( resultData );
                                        var html_output = '' ;
                                        if(obj.show_application_info == 'Yes'){
                                            html_output +=  '<div class="row"><div class="col-md-6 col-sm-6 vc_info_result"><div class="vc_info_result_in"><h2 class="m-t-0 text-info"><i class="ti-info-alt m-r-5"></i> Application Info/Policy</h2><div class="overflowcontent"><div id="applicationinfo_container"><div class="col-md-12"><div class="list-group m-b-0"><div class="lead m-t-0 m-b-0 thetextrow">Visa Fee:  ';
                                                if(obj.visa_fee){
                                                    html_output += obj.visa_fee;
                                                }else{
                                                    html_output += 'Not applicable';
                                                }
                                            html_output += '</div><div class="lead m-t-0 m-b-0 thetextrow"> <a href="visa_2.html">Application Link: ';
                                                if(obj.application_link){
                                                    html_output += obj.application_link;
                                                }else{
                                                    html_output += ' Not applicable';
                                                }
                                            html_output += '</a> </div><div class="lead m-t-0 m-b-0 thetextrow">Processing Time: ';
                                                if(obj.processing_time){
                                                    html_output += obj.processing_time;
                                                }else{
                                                    html_output += 'Not applicable';
                                                }

                                            html_output +=' </div></div></div></div></div><div id="applicationinfo_container"></div></div><!--end of vc_info_result_in--></div>'
                                        }else{
                                            html_output +=  '<div class="col-md-6 col-sm-6 vc_info_result"><div class="vc_info_result_in"><h2 class="m-t-0 text-info"><i class="ti-info-alt m-r-5"></i> Application Info/Policy</h2><div class="overflowcontent"><div id="applicationinfo_container"><p>No Policy information available at this time. Please try again later.</p></div><div id="applicationinfo_container"></div></div><!--end of vc_info_result_in--></div>'
                                        }

                                        if(obj.show_application_info == 'Yes'){
                                            html_output +='<div class="col-md-6 col-sm-6 vc_info_result"><div class="vc_info_result_in"><h2 class=" m-t-0 text-custom"><i class="ti-check-box m-r-5"></i> Visa Checklist <a href="#" target="_blank"><span class="buytemplate">Buy letter Template</span></a></h2><div class="overflowcontent"><div id="visa_checklist_container"><ul class="list-group m-b-0 user-list"><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Application Form (s)"><a href="javascript:;" class="user-list-item"><div class="avatar text-center"><i class="zmdi zmdi-circle text-danger"></i></div><div class="user-desc"><span class="name"><a href="#"> Application Form (s)</a></span><span class="desc">';

                                                if(obj.application_form){

                                                    html_output += obj.application_form;
                                                }else{
                                                    html_output += 'Not Applicable';
                                                }

                                            html_output += '</span></div></a></li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Bank Statement (6 months)"><a href="javascript:;" class="user-list-item"><div class="avatar text-center"><i class="zmdi zmdi-circle text-danger"></i></div><div class="user-desc"><span class="name">';

                                                if(obj.bank_statement){

                                                    html_output += obj.bank_statement;
                                                }else{
                                                    html_output += 'Not Applicable';
                                                }

                                            html_output += '</span><span class="desc">Bank Statement</span></div></a></li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Hotel Reservation "><a href="javascript:;" class="user-list-item"><div class="avatar text-center"><i class="zmdi zmdi-circle text-danger"></i></div><div class="user-desc"><span class="name">';

                                                if(obj.proof_of_accommodation){

                                                    html_output += obj.proof_of_accommodation;
                                                }else{
                                                    html_output += 'Not Applicable';
                                                }

                                           html_output += '</span><span class="desc">Proof of Accommodation</span></div></a></li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: International Passport"><a href="javascript:;" class="user-list-item"><div class="avatar text-center"><i class="zmdi zmdi-circle text-danger"></i></div><div class="user-desc"><span class="name">';

                                                if(obj.passport_and_validity){

                                                    html_output += 'International Passport</span><span class="desc">' + obj.passport_and_validity + '</span>';
                                                }else{
                                                    html_output += 'Not Applicable';
                                                }

                                                html_output += '</div></a></li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Letter of Introduction"><a href="javascript:;" class="user-list-item"><div class="avatar text-center"><i class="zmdi zmdi-circle text-danger"></i></div><div class="user-desc"><span class="name">Letter of Introduction</span><span class="desc">';

                                                if(obj.letter_of_introduction){

                                                    html_output +=  obj.letter_of_introduction;
                                                }else{
                                                    html_output += 'Not Applicable';
                                                }

                                                html_output += '</div></a></li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Optional: Letter of Invitation"><a href="javascript:;" class="user-list-item"><div class="avatar text-center"><i class="zmdi zmdi-circle text-primary"></i></div><div class="user-desc"><span class="name">Letter of Invitation</span><span class="desc">';

                                                if(obj.letter_of_invitation){
                                                    html_output +=  obj.letter_of_invitation;
                                                }else{
                                                    html_output += 'Not Applicable';
                                                }

                                                html_output += '</span></div></a></li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Optional: Other documents"><a href="javascript:;" class="user-list-item"><div class="avatar text-center"><i class="zmdi zmdi-circle text-primary"></i></div><div class="user-desc"><span class="name">Other documents</span><span class="desc">';
                                                if(obj.other_documents){
                                                    html_output +=  obj.other_documents;
                                                }else{
                                                    html_output += 'Not Applicable';
                                                }

                                                html_output += '</span></div></a></li><li class="list-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mandatory: Passport photographs"><a href="javascript:;" class="user-list-item"><div class="avatar text-center"><i class="zmdi zmdi-circle text-danger"></i></div><div class="user-desc"><span class="name">Passport photographs</span><span class="desc">';
                                                
                                                if(obj.passport_photograph){
                                                    html_output +=  obj.passport_photograph;
                                                }else{
                                                    html_output += 'Not Applicable';
                                                }

                                                html_output += '</span></div></a></li></ul> </div><div id="visa_checklist_container"></div></div></div></div></div>';
                                        }else{
                                            html_output +='<div class="col-md-6 col-sm-6 vc_info_result"><div class="vc_info_result_in"><h2 class=" m-t-0 text-custom"><i class="ti-check-box m-r-5"></i> Visa Checklist </h2><div class="overflowcontent"><div id="visa_checklist_container"> No information avaliable</div></div>'; 
                                        }

                                        if(obj.visa_application_center){
                                            html_output += ' <div class="row"><div class="col-md-6 col-sm-6 vc_info_result"><div class="vc_info_result_in"><h2 class=" m-t-0 text-primary"><i class="ti-layout-column3-alt m-r-5"></i> Visa Application Center</h2><div class="overflowcontent"><div id="visa_application_center_container"><div id="visa_application_center_container"><div class="list-group m-b-0"><div class="thetextrow m-b-15">' + obj.visa_application_center + '</div></div></div></div></div></div></div>'
                                        }else{
                                            html_output += '<div class="col-md-6 col-sm-6 vc_info_result"><div class="vc_info_result_in"><h2 class=" m-t-0 text-primary"><i class="ti-layout-column3-alt m-r-5"></i> Visa Application Center</h2><div class="overflowcontent"><div id="visa_application_center_container"><div id="visa_application_center_container"><div class="list-group m-b-0"><div class="alert alert-info"><strong>Note!</strong> No VAC present in the resident country.</div></div></div></div></div></div></div>'
                                        }
                                        console.log(obj.embassy);
                                        if(obj.embassy){
                                            html_output += '<div class="col-md-6 col-sm-6 vc_info_result"><div class="vc_info_result_in"><h2 class=" m-t-0 text-success"><i class="ti-layout-column2-alt m-r-5"></i> Embassy</h2><div class="overflowcontent"><div id="embassy_container"><div class="list-group m-b-0">'+obj.embassy +'</div></div></div></div></div>';
                                        }else{
                                            html_output += '<div class="col-md-6 col-sm-6 vc_info_result"><div class="vc_info_result_in"><h2 class=" m-t-0 text-success"><i class="ti-layout-column2-alt m-r-5"></i> Embassy</h2><div class="overflowcontent"><div id="embassy_container"><div class="list-group m-b-0"><div class="alert alert-info"><strong>Note!</strong> No Embassy present in the resident country.</div></div></div></div></div></div></div>'
                                        }
                                        
                                        $('#show_info_here').html(html_output).show();
                                    },
                                    complete: function(){
                                        $('#visa_checklist_loader').hide();
                                    }   
                                });
                            }else{
                                alert("please enter correct values");
                            }
                        });
                    });
                </script>

                <script src="<?php echo base_url();?>form_js/visainformation.js"></script>

                <!-- Footer -->

                <!-- End Footer -->

            </div>
            <!-- end container -->



            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">You do not have any notification!</li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>




        <!-- script src="<?php echo base_url();?>visa_js/bootstrap.min.js"></script -->
        <script src="<?php echo base_url();?>visa_js/detect.js"></script>
        <script src="<?php echo base_url();?>visa_js/fastclick.js"></script>

        <script src="<?php echo base_url();?>visa_js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>visa_js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>visa_js/waves.js"></script>
        <script src="<?php echo base_url();?>visa_js/wow.min.js"></script>
        <script src="<?php echo base_url();?>visa_js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>visa_js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>visa_js/jquery.knob.js"></script>

        <script src="<?php echo base_url();?>visa_js/APP.js"></script>
        <script src="<?php echo base_url();?>visa_js/toword.js"></script>



        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="<?php echo base_url();?>visa_js/parsley.min.js"></script>

        <!-- Sweet Alert js -->
        <script src="<?php echo base_url();?>visa_js/sweet-alert.min.js"></script>
        <script src="<?php echo base_url();?>visa_js/jquery.sweet-alert.init.js"></script>


        <!-- Modal-Effect -->
        <script src="<?php echo base_url();?>visa_js/custombox.min.js"></script>
        <script src="<?php echo base_url();?>visa_js/legacy.min.js"></script>

        <script src="<?php echo base_url();?>visa_js/animatedModal.min.js"></script>


        <!-- Counter Up  -->
        <script src="<?php echo base_url();?>visa_js/jquery.waypoints.js"></script>
        <script src="<?php echo base_url();?>visa_js/jquery.counterup.min.js"></script>

        <!-- XEditable Plugin -->
        <script src="<?php echo base_url();?>visa_js/moment.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>visa_js/bootstrap-editable.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>visa_js/jquery.core.js"></script>
        <script src="<?php echo base_url();?>visa_js/jquery.app.js"></script>

        <!--
        <script type="text/javascript" src="/chat/external.php?type=djs" charset="utf-8"></script>
        <script type="text/javascript" src="/chat/external.php?type=js" charset="utf-8"></script> -->

        <!--Start of Zopim Live Chat Script
        <script type="text/javascript">
            window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
                d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
            _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
                $.src="//v2.zopim.com/?3UpjWdwlINRbNGtAC8Qqfiezv21AdiTh";z.t=+new Date;$.
                    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
        </script>
        <script>
            $zopim(function() {
                $zopim.livechat.window.hide();
            });
        </script>
        End of Zopim Live Chat Script-->

        <input name="csrf_token_right" id="csrf_token_right" type="hidden" value="" size="100">

        <script>
                    (function (i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];a.async = 1;a.src = g;m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

                    ga('create', 'UA-80655855-1', 'auto');
                    ga('send', 'pageview');

        </script>