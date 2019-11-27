<style>
            .vapo_loader {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999999;
                background: no-repeat rgb(249,249,249);
            }
            .vc-page-loader-overlay-center{
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%)
            }
        </style>

        <style type="text/css">
            *{
                box-sizing: border-box;
            }
            .navbar-custom {


                margin-top:0px;

            }

           

            /* equal card height */



            .slideshow-container {
                position: relative;
                background:black;
            }

            /* Slides */








            /* Add a background color to the active dot/circle */


            /* Add an italic font style to all quotes */
            q {font-style: italic;}

            /* Add a blue color to the author */
            .author {color: cornflowerblue;}

            /*FOOTER*/

            footer {
                background: black;

                color: white;

            }

            footer a {
                color: #fff;
                font-size: 14px;
                transition-duration: 0.2s;
            }

            footer a:hover {
                color: #4CBB17;
                text-decoration: none;
            }

            .copy {
                font-size: 12px;
                padding: 10px;
                border-top: 1px solid #FFFFFF;
            }

            .footer-middle {
                padding-top: 2em;
                color: white;
            }


            /*SOCİAL İCONS*/



            /* footer social icons */





            .top {
                font-family: 'Comfortaa', cursive;
            }

            #myCarousel {
                padding: 0 10px 30px 10px;
                margin-top: 30px;
            }

            .carousel-item blockquote {
                border-left: none; 
                margin: 0;
            } 

            .title{
                font-family: 'Comfortaa', cursive;

                a{
                    color:darkorange;
                    transition: all .2s;

                    a:hover {
                        text-decoration: none;
                        color: orange;
                    } } }


            /* Small devices (tablets, 768px and up) */
            @media (min-width: 768px) { 
                #quote-carousel 
                {
                    margin-bottom: 0;
                    padding: 0 40px 30px 40px;
                }

            }

            .off_div {
                top: 0;
                background: #452f91;
                color: #fff;
                padding: 4px 10px;
                font-size: 12px;
                font-weight: 500;
            }
            .off_div {
                position: absolute;
                right: 0;
            }
            .off_div:after {
                height: 0;
                border-left: 15px solid transparent;
                border-right: 15px solid transparent;
                border-top: 18px solid #452f91;
                position: absolute;
                left: -24px;
                top: 6px;
                transform: rotate(90deg);
            }
            .off_div:after {
                content: "";
            }

            .col_box {
                border: 1px solid #025ecb;
                box-shadow: 1px 2px 3px rgba(2,2,2,.37);
                padding: auto;
                color: white;
                font-weight: 500;
                font-size: 14px;
                margin: 0 0 35px;
                width: 150px;
                background-color: green;
                text-align: center;
            }

            .col_box img {
                max-width: 55px;
                margin: 8px auto;
                max-height: 50px;
                min-height: 50px;
                object-fit: contain;
            }
            .topnav {
                overflow: hidden;

            }





            .topnav-right {
                float: right;
                color:black;
                padding-right: 50px;
            }

            .new{
                padding:  0;
                background: black;
            }

            .new .content {
                max-width:850px;
                margin: 0 auto;
                text-align: center;
                position: relative;
                z-index: 2; }

            .new .content .form-control {
                height: 50px;
                border-color: #ffffff;
                border-radius:0;
                padding-left: 40px;
            }
            .new .content.form-control:focus {
                box-shadow: none;
                border: 2px solid #243c4f;
            }
            .new .content .btn {
                min-height: 50px; 
                border-radius:0;
                background: #9ACD32;
                color: #fff;
                font-weight:600;
            }

            .social .fa {
                padding: 7px;
                font-size: 18px;
                width: 33px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
            }

            .social .fa:hover {
                opacity: 0.7;
            }

            .social .fa-facebook {
                background: black;
                color: white;
                border:2px solid white;
            }
            .social .fa-twitter {
                background: black;
                color: white;
                border:2px solid white;
            }
            .social .fa-youtube {
                background: black;
                color: white;
                border:2px solid white;
            }
            .social .fa-google-plus {
                background: black;
                color: white;
                border:2px solid white;
            }
            .social .fa-linkedin {
                background: black;
                color: white;
                border:2px solid white;
            }
            .social .fa-instagram {
                background: black;
                color: white;
                border:2px solid white;
            }


        </style>
<div class="wrapper">
            <div class="container" >


                <link href="<?php echo base_url();?>visa_css/select2.css" rel="stylesheet" type="text/css">
                <link href="<?php echo base_url();?>visa_css/select2-bootstrap.css" rel="stylesheet" type="text/css">
                <link href="<?php echo base_url();?>visa_css/bootstrap-datepicker.min.css" rel="stylesheet">

                <!-- X-editable css -->
                <link type="text/css" href="<?php echo base_url();?>visa_css/bootstrap-editable.css" rel="stylesheet">


                <style>
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



                <div class="row parentToDelegate vqgsearch">

                    <div class="col-md-12">
                        <h4 class="vqgtitle"><img src="<?php echo base_url();?>images/vqguide.png">&nbsp; Quick Visa Guide</h4>

                        <input name="csrf_token" id="csrf_token" type="hidden" value="" size="100">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="vqguide2">Nationality</div>
                                <div class="vqguide"><a href="#" id="vc_rightbar_checklist_nationality" data-type="select" data-pk="1" data-value="" data-title="Select Country" class="editable editable-click" data-original-title="" title="" style="color: rgb(152, 166, 173);">Select Country</a> <span style="font-size: 16px;"><i class="fa fa-angle-down m-r-5"></i></span></div>

                            </div>

                            <div class="col-md-3">
                                <div class="vqguide2">Destination</div>
                                <div class="vqguide"><a href="#" id="vc_rightbar_checklist_visacountry" data-type="select" data-pk="1" data-value="" data-title="Select Country"></a> <span style="font-size: 16px;"><i class="fa fa-angle-down"></i></span></div>
                            </div>

                            <div class="col-md-3">
                                <div class="vqguide2">Country of Resident</div>
                                <div class="vqguide"><a href="#" id="vc_rightbar_checklist_residentcountry" data-type="select" data-pk="1" data-value="" data-title="Select Country"></a> <span style="font-size: 16px;"><i class="fa fa-angle-down"></i></span></div>
                            </div>

                            <div class="col-md-3">
                                <div class="vqguide2">Purpose of Travel</div>
                                <div class="vqguide"><a href="#" id="visacategoryid" data-type="select" data-pk="1" data-value="" data-title="Select Visa Category"></a> <span style="font-size: 16px;"><i class="fa fa-angle-down"></i></span></div>
                            </div>
                        </div>
                        <div class="vqgbut">
                            <a href="javascript:;" class="btn btn-success waves-effect waves-light search_visa_information btn-rounded">Show Visa Information&nbsp; <i class="fa fa-paper-plane m-r-5"></i></a>
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
                            <div class='uil-ripple-css' style='transform:scale(0.65);'><div></div><div></div></div>
                        </div>
                    </div>

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

                    $(function () {

                        //modify buttons style
                        $.fn.editableform.buttons =
                                '<button type="submit" class="btn btn-primary editable-submit btn-sm waves-effect waves-light"><i class="zmdi zmdi-check"></i></button>' +
                                '<button type="button" class="btn editable-cancel btn-sm waves-effect"><i class="zmdi zmdi-close"></i></button>';

                        //inline




                        $('#vc_rightbar_checklist_nationality').editable({
                            showbuttons: false,
                            prepend: "Select Country",
                            inputclass: 'vc_rightbar_checklist_nationality-select',
                            source: [{"value": "2", "text": "Afghanistan"}, {"value": "3", "text": "Albania"}, {"value": "4", "text": "Algeria"}, {"value": "5", "text": "American Samoa"}, {"value": "6", "text": "Andorra"}, {"value": "7", "text": "Angola"}, {"value": "8", "text": "Anguilla"}, {"value": "9", "text": "Antarctica"}, {"value": "10", "text": "Antigua and Barbuda"}, {"value": "11", "text": "Argentina"}, {"value": "12", "text": "Armenia"}, {"value": "13", "text": "Aruba"}, {"value": "14", "text": "Australia"}, {"value": "15", "text": "Austria"}, {"value": "16", "text": "Azerbaijan"}, {"value": "17", "text": "Bahamas"}, {"value": "18", "text": "Bahrain"}, {"value": "19", "text": "Bangladesh"}, {"value": "20", "text": "Barbados"}, {"value": "21", "text": "Belarus"}, {"value": "22", "text": "Belgium"}, {"value": "23", "text": "Belize"}, {"value": "24", "text": "Benin"}, {"value": "25", "text": "Bermuda"}, {"value": "26", "text": "Bhutan"}, {"value": "27", "text": "Bolivia"}, {"value": "28", "text": "Bosnia and Herzegovina"}, {"value": "29", "text": "Botswana"}, {"value": "30", "text": "Bouvet Island"}, {"value": "31", "text": "Brazil"}, {"value": "32", "text": "British Indian Ocean Territory"}, {"value": "33", "text": "Brunei Darussalam"}, {"value": "34", "text": "Bulgaria"}, {"value": "35", "text": "Burkina Faso"}, {"value": "36", "text": "Burundi"}, {"value": "37", "text": "Cambodia"}, {"value": "38", "text": "Cameroon"}, {"value": "39", "text": "Canada"}, {"value": "40", "text": "Cape Verde"}, {"value": "41", "text": "Cayman Islands"}, {"value": "42", "text": "Central African Republic"}, {"value": "43", "text": "Chad"}, {"value": "44", "text": "Chile"}, {"value": "45", "text": "China"}, {"value": "46", "text": "Christmas Island"}, {"value": "47", "text": "Cocos (Keeling) Islands"}, {"value": "48", "text": "Colombia"}, {"value": "49", "text": "Comoros"}, {"value": "50", "text": "Congo"}, {"value": "51", "text": "Congo, the Democratic Republic of the"}, {"value": "52", "text": "Cook Islands"}, {"value": "53", "text": "Costa Rica"}, {"value": "54", "text": "Cote D'Ivoire"}, {"value": "55", "text": "Croatia"}, {"value": "56", "text": "Cuba"}, {"value": "57", "text": "Cyprus"}, {"value": "58", "text": "Czech Republic"}, {"value": "59", "text": "Denmark"}, {"value": "60", "text": "Djibouti"}, {"value": "61", "text": "Dominica"}, {"value": "62", "text": "Dominican Republic"}, {"value": "63", "text": "Ecuador"}, {"value": "64", "text": "Egypt"}, {"value": "65", "text": "El Salvador"}, {"value": "66", "text": "Equatorial Guinea"}, {"value": "67", "text": "Eritrea"}, {"value": "68", "text": "Estonia"}, {"value": "69", "text": "Ethiopia"}, {"value": "70", "text": "Falkland Islands (Malvinas)"}, {"value": "71", "text": "Faroe Islands"}, {"value": "72", "text": "Fiji"}, {"value": "73", "text": "Finland"}, {"value": "74", "text": "France"}, {"value": "75", "text": "French Guiana"}, {"value": "76", "text": "French Polynesia"}, {"value": "77", "text": "French Southern Territories"}, {"value": "78", "text": "Gabon"}, {"value": "79", "text": "Gambia"}, {"value": "80", "text": "Georgia"}, {"value": "81", "text": "Germany"}, {"value": "82", "text": "Ghana"}, {"value": "83", "text": "Gibraltar"}, {"value": "84", "text": "Greece"}, {"value": "85", "text": "Greenland"}, {"value": "86", "text": "Grenada"}, {"value": "87", "text": "Guadeloupe"}, {"value": "88", "text": "Guam"}, {"value": "89", "text": "Guatemala"}, {"value": "90", "text": "Guinea"}, {"value": "91", "text": "Guinea-Bissau"}, {"value": "92", "text": "Guyana"}, {"value": "93", "text": "Haiti"}, {"value": "94", "text": "Heard Island and Mcdonald Islands"}, {"value": "95", "text": "Holy See (Vatican City State)"}, {"value": "96", "text": "Honduras"}, {"value": "97", "text": "Hong Kong"}, {"value": "98", "text": "Hungary"}, {"value": "99", "text": "Iceland"}, {"value": "100", "text": "India"}, {"value": "101", "text": "Indonesia"}, {"value": "102", "text": "Iran, Islamic Republic of"}, {"value": "103", "text": "Iraq"}, {"value": "104", "text": "Ireland"}, {"value": "105", "text": "Israel"}, {"value": "106", "text": "Italy"}, {"value": "107", "text": "Jamaica"}, {"value": "108", "text": "Japan"}, {"value": "109", "text": "Jordan"}, {"value": "110", "text": "Kazakhstan"}, {"value": "111", "text": "Kenya"}, {"value": "112", "text": "Kiribati"}, {"value": "113", "text": "Korea, Democratic People's Republic of"}, {"value": "114", "text": "Korea, Republic of"}, {"value": "241", "text": "Kosovo"}, {"value": "115", "text": "Kuwait"}, {"value": "116", "text": "Kyrgyzstan"}, {"value": "117", "text": "Lao People's Democratic Republic"}, {"value": "118", "text": "Latvia"}, {"value": "119", "text": "Lebanon"}, {"value": "120", "text": "Lesotho"}, {"value": "121", "text": "Liberia"}, {"value": "122", "text": "Libyan Arab Jamahiriya"}, {"value": "123", "text": "Liechtenstein"}, {"value": "124", "text": "Lithuania"}, {"value": "125", "text": "Luxembourg"}, {"value": "126", "text": "Macau"}, {"value": "127", "text": "Macedonia, the Former Yugoslav Republic of"}, {"value": "128", "text": "Madagascar"}, {"value": "129", "text": "Malawi"}, {"value": "130", "text": "Malaysia"}, {"value": "131", "text": "Maldives"}, {"value": "132", "text": "Mali"}, {"value": "133", "text": "Malta"}, {"value": "134", "text": "Marshall Islands"}, {"value": "135", "text": "Martinique"}, {"value": "136", "text": "Mauritania"}, {"value": "137", "text": "Mauritius"}, {"value": "138", "text": "Mayotte"}, {"value": "139", "text": "Mexico"}, {"value": "140", "text": "Micronesia, Federated States of"}, {"value": "141", "text": "Moldova, Republic of"}, {"value": "142", "text": "Monaco"}, {"value": "143", "text": "Mongolia"}, {"value": "242", "text": "Montenegro"}, {"value": "144", "text": "Montserrat"}, {"value": "145", "text": "Morocco"}, {"value": "146", "text": "Mozambique"}, {"value": "147", "text": "Myanmar"}, {"value": "148", "text": "Namibia"}, {"value": "149", "text": "Nauru"}, {"value": "150", "text": "Nepal"}, {"value": "151", "text": "Netherlands"}, {"value": "152", "text": "Netherlands Antilles"}, {"value": "153", "text": "New Caledonia"}, {"value": "154", "text": "New Zealand"}, {"value": "155", "text": "Nicaragua"}, {"value": "156", "text": "Niger"}, {"value": "1", "text": "Nigeria"}, {"value": "157", "text": "Niue"}, {"value": "158", "text": "Norfolk Island"}, {"value": "159", "text": "Northern Mariana Islands"}, {"value": "160", "text": "Norway"}, {"value": "161", "text": "Oman"}, {"value": "162", "text": "Pakistan"}, {"value": "163", "text": "Palau"}, {"value": "164", "text": "Palestinian Territory, Occupied"}, {"value": "165", "text": "Panama"}, {"value": "166", "text": "Papua New Guinea"}, {"value": "167", "text": "Paraguay"}, {"value": "168", "text": "Peru"}, {"value": "169", "text": "Philippines"}, {"value": "170", "text": "Pitcairn"}, {"value": "171", "text": "Poland"}, {"value": "172", "text": "Portugal"}, {"value": "173", "text": "Puerto Rico"}, {"value": "174", "text": "Qatar"}, {"value": "175", "text": "Reunion"}, {"value": "176", "text": "Romania"}, {"value": "177", "text": "Russian Federation"}, {"value": "178", "text": "Rwanda"}, {"value": "179", "text": "Saint Helena"}, {"value": "180", "text": "Saint Kitts and Nevis"}, {"value": "181", "text": "Saint Lucia"}, {"value": "182", "text": "Saint Pierre and Miquelon"}, {"value": "183", "text": "Saint Vincent and the Grenadines"}, {"value": "184", "text": "Samoa"}, {"value": "185", "text": "San Marino"}, {"value": "186", "text": "Sao Tome and Principe"}, {"value": "187", "text": "Saudi Arabia"}, {"value": "188", "text": "Senegal"}, {"value": "189", "text": "Serbia"}, {"value": "190", "text": "Seychelles"}, {"value": "191", "text": "Sierra Leone"}, {"value": "192", "text": "Singapore"}, {"value": "193", "text": "Slovakia"}, {"value": "194", "text": "Slovenia"}, {"value": "195", "text": "Solomon Islands"}, {"value": "196", "text": "Somalia"}, {"value": "197", "text": "South Africa"}, {"value": "198", "text": "South Georgia and the South Sandwich Islands"}, {"value": "240", "text": "South Sudan"}, {"value": "199", "text": "Spain"}, {"value": "200", "text": "Sri Lanka"}, {"value": "201", "text": "Sudan"}, {"value": "202", "text": "Suriname"}, {"value": "203", "text": "Svalbard and Jan Mayen"}, {"value": "204", "text": "Swaziland\/eSwatini"}, {"value": "205", "text": "Sweden"}, {"value": "206", "text": "Switzerland"}, {"value": "207", "text": "Syrian Arab Republic"}, {"value": "208", "text": "Taiwan, Province of China"}, {"value": "209", "text": "Tajikistan"}, {"value": "210", "text": "Tanzania, United Republic of"}, {"value": "211", "text": "Thailand"}, {"value": "212", "text": "Timor-Leste"}, {"value": "213", "text": "Togo"}, {"value": "214", "text": "Tokelau"}, {"value": "215", "text": "Tonga"}, {"value": "216", "text": "Trinidad and Tobago"}, {"value": "217", "text": "Tunisia"}, {"value": "218", "text": "Turkey"}, {"value": "219", "text": "Turkmenistan"}, {"value": "220", "text": "Turks and Caicos Islands"}, {"value": "221", "text": "Tuvalu"}, {"value": "222", "text": "Uganda"}, {"value": "223", "text": "Ukraine"}, {"value": "224", "text": "United Arab Emirates"}, {"value": "225", "text": "United Kingdom"}, {"value": "226", "text": "United States"}, {"value": "227", "text": "United States Minor Outlying Islands"}, {"value": "228", "text": "Uruguay"}, {"value": "229", "text": "Uzbekistan"}, {"value": "230", "text": "Vanuatu"}, {"value": "231", "text": "Venezuela"}, {"value": "232", "text": "Vietnam"}, {"value": "233", "text": "Virgin Islands, British"}, {"value": "234", "text": "Virgin Islands, U.S"}, {"value": "235", "text": "Wallis and Futuna"}, {"value": "236", "text": "Western Sahara"}, {"value": "237", "text": "Yemen"}, {"value": "238", "text": "Zambia"}, {"value": "239", "text": "Zimbabwe"}],
                            display: function (value, sourceData) {
                                var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
                                elem = $.grep(sourceData, function (o) {
                                    return o.value == value;
                                });

                                if (elem.length) {
                                    $(this).text(elem[0].text).css("color", colors[value]);
                                } else {
                                    $(this).empty();
                                }
                            },
                            name: 'vc_rightbar_checklist_nationality',
                        });


                        $(function () {
                            $('.parentToDelegate').on('change keyup blur', ".vc_rightbar_checklist_nationality-select", function () {
                                $('#vc_rightbar_checklist_nationality').attr('data-value', $('.vc_rightbar_checklist_nationality-select').val())
                            }).blur();

                            $('.parentToDelegate').on('change keyup blur', ".vc_rightbar_checklist_visacountry-select", function () {
                                $('#vc_rightbar_checklist_visacountry').attr('data-value', $('.vc_rightbar_checklist_visacountry-select').val())
                            }).blur();

                            $('.parentToDelegate').on('change keyup blur', ".vc_rightbar_checklist_residentcountry-select", function () {
                                $('#vc_rightbar_checklist_residentcountry').attr('data-value', $('.vc_rightbar_checklist_residentcountry-select').val())
                            }).blur();

                            $('.parentToDelegate').on('change keyup blur', ".visacategoryid-select", function () {
                                $('#visacategoryid').attr('data-value', $('.visacategoryid-select').val())
                            }).blur();
                        });


                        $('#vc_rightbar_checklist_visacountry').editable({
                            showbuttons: false,
                            prepend: "Select Country",
                            inputclass: 'vc_rightbar_checklist_visacountry-select',
                            source: [{"value": "2", "text": "Afghanistan"}, {"value": "3", "text": "Albania"}, {"value": "4", "text": "Algeria"}, {"value": "5", "text": "American Samoa"}, {"value": "6", "text": "Andorra"}, {"value": "7", "text": "Angola"}, {"value": "8", "text": "Anguilla"}, {"value": "9", "text": "Antarctica"}, {"value": "10", "text": "Antigua and Barbuda"}, {"value": "11", "text": "Argentina"}, {"value": "12", "text": "Armenia"}, {"value": "13", "text": "Aruba"}, {"value": "14", "text": "Australia"}, {"value": "15", "text": "Austria"}, {"value": "16", "text": "Azerbaijan"}, {"value": "17", "text": "Bahamas"}, {"value": "18", "text": "Bahrain"}, {"value": "19", "text": "Bangladesh"}, {"value": "20", "text": "Barbados"}, {"value": "21", "text": "Belarus"}, {"value": "22", "text": "Belgium"}, {"value": "23", "text": "Belize"}, {"value": "24", "text": "Benin"}, {"value": "25", "text": "Bermuda"}, {"value": "26", "text": "Bhutan"}, {"value": "27", "text": "Bolivia"}, {"value": "28", "text": "Bosnia and Herzegovina"}, {"value": "29", "text": "Botswana"}, {"value": "30", "text": "Bouvet Island"}, {"value": "31", "text": "Brazil"}, {"value": "32", "text": "British Indian Ocean Territory"}, {"value": "33", "text": "Brunei Darussalam"}, {"value": "34", "text": "Bulgaria"}, {"value": "35", "text": "Burkina Faso"}, {"value": "36", "text": "Burundi"}, {"value": "37", "text": "Cambodia"}, {"value": "38", "text": "Cameroon"}, {"value": "39", "text": "Canada"}, {"value": "40", "text": "Cape Verde"}, {"value": "41", "text": "Cayman Islands"}, {"value": "42", "text": "Central African Republic"}, {"value": "43", "text": "Chad"}, {"value": "44", "text": "Chile"}, {"value": "45", "text": "China"}, {"value": "46", "text": "Christmas Island"}, {"value": "47", "text": "Cocos (Keeling) Islands"}, {"value": "48", "text": "Colombia"}, {"value": "49", "text": "Comoros"}, {"value": "50", "text": "Congo"}, {"value": "51", "text": "Congo, the Democratic Republic of the"}, {"value": "52", "text": "Cook Islands"}, {"value": "53", "text": "Costa Rica"}, {"value": "54", "text": "Cote D'Ivoire"}, {"value": "55", "text": "Croatia"}, {"value": "56", "text": "Cuba"}, {"value": "57", "text": "Cyprus"}, {"value": "58", "text": "Czech Republic"}, {"value": "59", "text": "Denmark"}, {"value": "60", "text": "Djibouti"}, {"value": "61", "text": "Dominica"}, {"value": "62", "text": "Dominican Republic"}, {"value": "63", "text": "Ecuador"}, {"value": "64", "text": "Egypt"}, {"value": "65", "text": "El Salvador"}, {"value": "66", "text": "Equatorial Guinea"}, {"value": "67", "text": "Eritrea"}, {"value": "68", "text": "Estonia"}, {"value": "69", "text": "Ethiopia"}, {"value": "70", "text": "Falkland Islands (Malvinas)"}, {"value": "71", "text": "Faroe Islands"}, {"value": "72", "text": "Fiji"}, {"value": "73", "text": "Finland"}, {"value": "74", "text": "France"}, {"value": "75", "text": "French Guiana"}, {"value": "76", "text": "French Polynesia"}, {"value": "77", "text": "French Southern Territories"}, {"value": "78", "text": "Gabon"}, {"value": "79", "text": "Gambia"}, {"value": "80", "text": "Georgia"}, {"value": "81", "text": "Germany"}, {"value": "82", "text": "Ghana"}, {"value": "83", "text": "Gibraltar"}, {"value": "84", "text": "Greece"}, {"value": "85", "text": "Greenland"}, {"value": "86", "text": "Grenada"}, {"value": "87", "text": "Guadeloupe"}, {"value": "88", "text": "Guam"}, {"value": "89", "text": "Guatemala"}, {"value": "90", "text": "Guinea"}, {"value": "91", "text": "Guinea-Bissau"}, {"value": "92", "text": "Guyana"}, {"value": "93", "text": "Haiti"}, {"value": "94", "text": "Heard Island and Mcdonald Islands"}, {"value": "95", "text": "Holy See (Vatican City State)"}, {"value": "96", "text": "Honduras"}, {"value": "97", "text": "Hong Kong"}, {"value": "98", "text": "Hungary"}, {"value": "99", "text": "Iceland"}, {"value": "100", "text": "India"}, {"value": "101", "text": "Indonesia"}, {"value": "102", "text": "Iran, Islamic Republic of"}, {"value": "103", "text": "Iraq"}, {"value": "104", "text": "Ireland"}, {"value": "105", "text": "Israel"}, {"value": "106", "text": "Italy"}, {"value": "107", "text": "Jamaica"}, {"value": "108", "text": "Japan"}, {"value": "109", "text": "Jordan"}, {"value": "110", "text": "Kazakhstan"}, {"value": "111", "text": "Kenya"}, {"value": "112", "text": "Kiribati"}, {"value": "113", "text": "Korea, Democratic People's Republic of"}, {"value": "114", "text": "Korea, Republic of"}, {"value": "241", "text": "Kosovo"}, {"value": "115", "text": "Kuwait"}, {"value": "116", "text": "Kyrgyzstan"}, {"value": "117", "text": "Lao People's Democratic Republic"}, {"value": "118", "text": "Latvia"}, {"value": "119", "text": "Lebanon"}, {"value": "120", "text": "Lesotho"}, {"value": "121", "text": "Liberia"}, {"value": "122", "text": "Libyan Arab Jamahiriya"}, {"value": "123", "text": "Liechtenstein"}, {"value": "124", "text": "Lithuania"}, {"value": "125", "text": "Luxembourg"}, {"value": "126", "text": "Macau"}, {"value": "127", "text": "Macedonia, the Former Yugoslav Republic of"}, {"value": "128", "text": "Madagascar"}, {"value": "129", "text": "Malawi"}, {"value": "130", "text": "Malaysia"}, {"value": "131", "text": "Maldives"}, {"value": "132", "text": "Mali"}, {"value": "133", "text": "Malta"}, {"value": "134", "text": "Marshall Islands"}, {"value": "135", "text": "Martinique"}, {"value": "136", "text": "Mauritania"}, {"value": "137", "text": "Mauritius"}, {"value": "138", "text": "Mayotte"}, {"value": "139", "text": "Mexico"}, {"value": "140", "text": "Micronesia, Federated States of"}, {"value": "141", "text": "Moldova, Republic of"}, {"value": "142", "text": "Monaco"}, {"value": "143", "text": "Mongolia"}, {"value": "242", "text": "Montenegro"}, {"value": "144", "text": "Montserrat"}, {"value": "145", "text": "Morocco"}, {"value": "146", "text": "Mozambique"}, {"value": "147", "text": "Myanmar"}, {"value": "148", "text": "Namibia"}, {"value": "149", "text": "Nauru"}, {"value": "150", "text": "Nepal"}, {"value": "151", "text": "Netherlands"}, {"value": "152", "text": "Netherlands Antilles"}, {"value": "153", "text": "New Caledonia"}, {"value": "154", "text": "New Zealand"}, {"value": "155", "text": "Nicaragua"}, {"value": "156", "text": "Niger"}, {"value": "1", "text": "Nigeria"}, {"value": "157", "text": "Niue"}, {"value": "158", "text": "Norfolk Island"}, {"value": "159", "text": "Northern Mariana Islands"}, {"value": "160", "text": "Norway"}, {"value": "161", "text": "Oman"}, {"value": "162", "text": "Pakistan"}, {"value": "163", "text": "Palau"}, {"value": "164", "text": "Palestinian Territory, Occupied"}, {"value": "165", "text": "Panama"}, {"value": "166", "text": "Papua New Guinea"}, {"value": "167", "text": "Paraguay"}, {"value": "168", "text": "Peru"}, {"value": "169", "text": "Philippines"}, {"value": "170", "text": "Pitcairn"}, {"value": "171", "text": "Poland"}, {"value": "172", "text": "Portugal"}, {"value": "173", "text": "Puerto Rico"}, {"value": "174", "text": "Qatar"}, {"value": "175", "text": "Reunion"}, {"value": "176", "text": "Romania"}, {"value": "177", "text": "Russian Federation"}, {"value": "178", "text": "Rwanda"}, {"value": "179", "text": "Saint Helena"}, {"value": "180", "text": "Saint Kitts and Nevis"}, {"value": "181", "text": "Saint Lucia"}, {"value": "182", "text": "Saint Pierre and Miquelon"}, {"value": "183", "text": "Saint Vincent and the Grenadines"}, {"value": "184", "text": "Samoa"}, {"value": "185", "text": "San Marino"}, {"value": "186", "text": "Sao Tome and Principe"}, {"value": "187", "text": "Saudi Arabia"}, {"value": "188", "text": "Senegal"}, {"value": "189", "text": "Serbia"}, {"value": "190", "text": "Seychelles"}, {"value": "191", "text": "Sierra Leone"}, {"value": "192", "text": "Singapore"}, {"value": "193", "text": "Slovakia"}, {"value": "194", "text": "Slovenia"}, {"value": "195", "text": "Solomon Islands"}, {"value": "196", "text": "Somalia"}, {"value": "197", "text": "South Africa"}, {"value": "198", "text": "South Georgia and the South Sandwich Islands"}, {"value": "240", "text": "South Sudan"}, {"value": "199", "text": "Spain"}, {"value": "200", "text": "Sri Lanka"}, {"value": "201", "text": "Sudan"}, {"value": "202", "text": "Suriname"}, {"value": "203", "text": "Svalbard and Jan Mayen"}, {"value": "204", "text": "Swaziland\/eSwatini"}, {"value": "205", "text": "Sweden"}, {"value": "206", "text": "Switzerland"}, {"value": "207", "text": "Syrian Arab Republic"}, {"value": "208", "text": "Taiwan, Province of China"}, {"value": "209", "text": "Tajikistan"}, {"value": "210", "text": "Tanzania, United Republic of"}, {"value": "211", "text": "Thailand"}, {"value": "212", "text": "Timor-Leste"}, {"value": "213", "text": "Togo"}, {"value": "214", "text": "Tokelau"}, {"value": "215", "text": "Tonga"}, {"value": "216", "text": "Trinidad and Tobago"}, {"value": "217", "text": "Tunisia"}, {"value": "218", "text": "Turkey"}, {"value": "219", "text": "Turkmenistan"}, {"value": "220", "text": "Turks and Caicos Islands"}, {"value": "221", "text": "Tuvalu"}, {"value": "222", "text": "Uganda"}, {"value": "223", "text": "Ukraine"}, {"value": "224", "text": "United Arab Emirates"}, {"value": "225", "text": "United Kingdom"}, {"value": "226", "text": "United States"}, {"value": "227", "text": "United States Minor Outlying Islands"}, {"value": "228", "text": "Uruguay"}, {"value": "229", "text": "Uzbekistan"}, {"value": "230", "text": "Vanuatu"}, {"value": "231", "text": "Venezuela"}, {"value": "232", "text": "Vietnam"}, {"value": "233", "text": "Virgin Islands, British"}, {"value": "234", "text": "Virgin Islands, U.S"}, {"value": "235", "text": "Wallis and Futuna"}, {"value": "236", "text": "Western Sahara"}, {"value": "237", "text": "Yemen"}, {"value": "238", "text": "Zambia"}, {"value": "239", "text": "Zimbabwe"}],
                            display: function (value, sourceData) {
                                var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
                                elem = $.grep(sourceData, function (o) {
                                    return o.value == value;
                                });

                                if (elem.length) {
                                    $(this).text(elem[0].text).css("color", colors[value]);
                                } else {
                                    $(this).empty();
                                }
                            },
                            name: 'vc_rightbar_checklist_visacountry',
                        });


                        $('#vc_rightbar_checklist_residentcountry').editable({
                            showbuttons: false,
                            prepend: "Select Country",
                            inputclass: 'vc_rightbar_checklist_residentcountry-select',
                            source: [{"value": "2", "text": "Afghanistan"}, {"value": "3", "text": "Albania"}, {"value": "4", "text": "Algeria"}, {"value": "5", "text": "American Samoa"}, {"value": "6", "text": "Andorra"}, {"value": "7", "text": "Angola"}, {"value": "8", "text": "Anguilla"}, {"value": "9", "text": "Antarctica"}, {"value": "10", "text": "Antigua and Barbuda"}, {"value": "11", "text": "Argentina"}, {"value": "12", "text": "Armenia"}, {"value": "13", "text": "Aruba"}, {"value": "14", "text": "Australia"}, {"value": "15", "text": "Austria"}, {"value": "16", "text": "Azerbaijan"}, {"value": "17", "text": "Bahamas"}, {"value": "18", "text": "Bahrain"}, {"value": "19", "text": "Bangladesh"}, {"value": "20", "text": "Barbados"}, {"value": "21", "text": "Belarus"}, {"value": "22", "text": "Belgium"}, {"value": "23", "text": "Belize"}, {"value": "24", "text": "Benin"}, {"value": "25", "text": "Bermuda"}, {"value": "26", "text": "Bhutan"}, {"value": "27", "text": "Bolivia"}, {"value": "28", "text": "Bosnia and Herzegovina"}, {"value": "29", "text": "Botswana"}, {"value": "30", "text": "Bouvet Island"}, {"value": "31", "text": "Brazil"}, {"value": "32", "text": "British Indian Ocean Territory"}, {"value": "33", "text": "Brunei Darussalam"}, {"value": "34", "text": "Bulgaria"}, {"value": "35", "text": "Burkina Faso"}, {"value": "36", "text": "Burundi"}, {"value": "37", "text": "Cambodia"}, {"value": "38", "text": "Cameroon"}, {"value": "39", "text": "Canada"}, {"value": "40", "text": "Cape Verde"}, {"value": "41", "text": "Cayman Islands"}, {"value": "42", "text": "Central African Republic"}, {"value": "43", "text": "Chad"}, {"value": "44", "text": "Chile"}, {"value": "45", "text": "China"}, {"value": "46", "text": "Christmas Island"}, {"value": "47", "text": "Cocos (Keeling) Islands"}, {"value": "48", "text": "Colombia"}, {"value": "49", "text": "Comoros"}, {"value": "50", "text": "Congo"}, {"value": "51", "text": "Congo, the Democratic Republic of the"}, {"value": "52", "text": "Cook Islands"}, {"value": "53", "text": "Costa Rica"}, {"value": "54", "text": "Cote D'Ivoire"}, {"value": "55", "text": "Croatia"}, {"value": "56", "text": "Cuba"}, {"value": "57", "text": "Cyprus"}, {"value": "58", "text": "Czech Republic"}, {"value": "59", "text": "Denmark"}, {"value": "60", "text": "Djibouti"}, {"value": "61", "text": "Dominica"}, {"value": "62", "text": "Dominican Republic"}, {"value": "63", "text": "Ecuador"}, {"value": "64", "text": "Egypt"}, {"value": "65", "text": "El Salvador"}, {"value": "66", "text": "Equatorial Guinea"}, {"value": "67", "text": "Eritrea"}, {"value": "68", "text": "Estonia"}, {"value": "69", "text": "Ethiopia"}, {"value": "70", "text": "Falkland Islands (Malvinas)"}, {"value": "71", "text": "Faroe Islands"}, {"value": "72", "text": "Fiji"}, {"value": "73", "text": "Finland"}, {"value": "74", "text": "France"}, {"value": "75", "text": "French Guiana"}, {"value": "76", "text": "French Polynesia"}, {"value": "77", "text": "French Southern Territories"}, {"value": "78", "text": "Gabon"}, {"value": "79", "text": "Gambia"}, {"value": "80", "text": "Georgia"}, {"value": "81", "text": "Germany"}, {"value": "82", "text": "Ghana"}, {"value": "83", "text": "Gibraltar"}, {"value": "84", "text": "Greece"}, {"value": "85", "text": "Greenland"}, {"value": "86", "text": "Grenada"}, {"value": "87", "text": "Guadeloupe"}, {"value": "88", "text": "Guam"}, {"value": "89", "text": "Guatemala"}, {"value": "90", "text": "Guinea"}, {"value": "91", "text": "Guinea-Bissau"}, {"value": "92", "text": "Guyana"}, {"value": "93", "text": "Haiti"}, {"value": "94", "text": "Heard Island and Mcdonald Islands"}, {"value": "95", "text": "Holy See (Vatican City State)"}, {"value": "96", "text": "Honduras"}, {"value": "97", "text": "Hong Kong"}, {"value": "98", "text": "Hungary"}, {"value": "99", "text": "Iceland"}, {"value": "100", "text": "India"}, {"value": "101", "text": "Indonesia"}, {"value": "102", "text": "Iran, Islamic Republic of"}, {"value": "103", "text": "Iraq"}, {"value": "104", "text": "Ireland"}, {"value": "105", "text": "Israel"}, {"value": "106", "text": "Italy"}, {"value": "107", "text": "Jamaica"}, {"value": "108", "text": "Japan"}, {"value": "109", "text": "Jordan"}, {"value": "110", "text": "Kazakhstan"}, {"value": "111", "text": "Kenya"}, {"value": "112", "text": "Kiribati"}, {"value": "113", "text": "Korea, Democratic People's Republic of"}, {"value": "114", "text": "Korea, Republic of"}, {"value": "241", "text": "Kosovo"}, {"value": "115", "text": "Kuwait"}, {"value": "116", "text": "Kyrgyzstan"}, {"value": "117", "text": "Lao People's Democratic Republic"}, {"value": "118", "text": "Latvia"}, {"value": "119", "text": "Lebanon"}, {"value": "120", "text": "Lesotho"}, {"value": "121", "text": "Liberia"}, {"value": "122", "text": "Libyan Arab Jamahiriya"}, {"value": "123", "text": "Liechtenstein"}, {"value": "124", "text": "Lithuania"}, {"value": "125", "text": "Luxembourg"}, {"value": "126", "text": "Macau"}, {"value": "127", "text": "Macedonia, the Former Yugoslav Republic of"}, {"value": "128", "text": "Madagascar"}, {"value": "129", "text": "Malawi"}, {"value": "130", "text": "Malaysia"}, {"value": "131", "text": "Maldives"}, {"value": "132", "text": "Mali"}, {"value": "133", "text": "Malta"}, {"value": "134", "text": "Marshall Islands"}, {"value": "135", "text": "Martinique"}, {"value": "136", "text": "Mauritania"}, {"value": "137", "text": "Mauritius"}, {"value": "138", "text": "Mayotte"}, {"value": "139", "text": "Mexico"}, {"value": "140", "text": "Micronesia, Federated States of"}, {"value": "141", "text": "Moldova, Republic of"}, {"value": "142", "text": "Monaco"}, {"value": "143", "text": "Mongolia"}, {"value": "242", "text": "Montenegro"}, {"value": "144", "text": "Montserrat"}, {"value": "145", "text": "Morocco"}, {"value": "146", "text": "Mozambique"}, {"value": "147", "text": "Myanmar"}, {"value": "148", "text": "Namibia"}, {"value": "149", "text": "Nauru"}, {"value": "150", "text": "Nepal"}, {"value": "151", "text": "Netherlands"}, {"value": "152", "text": "Netherlands Antilles"}, {"value": "153", "text": "New Caledonia"}, {"value": "154", "text": "New Zealand"}, {"value": "155", "text": "Nicaragua"}, {"value": "156", "text": "Niger"}, {"value": "1", "text": "Nigeria"}, {"value": "157", "text": "Niue"}, {"value": "158", "text": "Norfolk Island"}, {"value": "159", "text": "Northern Mariana Islands"}, {"value": "160", "text": "Norway"}, {"value": "161", "text": "Oman"}, {"value": "162", "text": "Pakistan"}, {"value": "163", "text": "Palau"}, {"value": "164", "text": "Palestinian Territory, Occupied"}, {"value": "165", "text": "Panama"}, {"value": "166", "text": "Papua New Guinea"}, {"value": "167", "text": "Paraguay"}, {"value": "168", "text": "Peru"}, {"value": "169", "text": "Philippines"}, {"value": "170", "text": "Pitcairn"}, {"value": "171", "text": "Poland"}, {"value": "172", "text": "Portugal"}, {"value": "173", "text": "Puerto Rico"}, {"value": "174", "text": "Qatar"}, {"value": "175", "text": "Reunion"}, {"value": "176", "text": "Romania"}, {"value": "177", "text": "Russian Federation"}, {"value": "178", "text": "Rwanda"}, {"value": "179", "text": "Saint Helena"}, {"value": "180", "text": "Saint Kitts and Nevis"}, {"value": "181", "text": "Saint Lucia"}, {"value": "182", "text": "Saint Pierre and Miquelon"}, {"value": "183", "text": "Saint Vincent and the Grenadines"}, {"value": "184", "text": "Samoa"}, {"value": "185", "text": "San Marino"}, {"value": "186", "text": "Sao Tome and Principe"}, {"value": "187", "text": "Saudi Arabia"}, {"value": "188", "text": "Senegal"}, {"value": "189", "text": "Serbia"}, {"value": "190", "text": "Seychelles"}, {"value": "191", "text": "Sierra Leone"}, {"value": "192", "text": "Singapore"}, {"value": "193", "text": "Slovakia"}, {"value": "194", "text": "Slovenia"}, {"value": "195", "text": "Solomon Islands"}, {"value": "196", "text": "Somalia"}, {"value": "197", "text": "South Africa"}, {"value": "198", "text": "South Georgia and the South Sandwich Islands"}, {"value": "240", "text": "South Sudan"}, {"value": "199", "text": "Spain"}, {"value": "200", "text": "Sri Lanka"}, {"value": "201", "text": "Sudan"}, {"value": "202", "text": "Suriname"}, {"value": "203", "text": "Svalbard and Jan Mayen"}, {"value": "204", "text": "Swaziland\/eSwatini"}, {"value": "205", "text": "Sweden"}, {"value": "206", "text": "Switzerland"}, {"value": "207", "text": "Syrian Arab Republic"}, {"value": "208", "text": "Taiwan, Province of China"}, {"value": "209", "text": "Tajikistan"}, {"value": "210", "text": "Tanzania, United Republic of"}, {"value": "211", "text": "Thailand"}, {"value": "212", "text": "Timor-Leste"}, {"value": "213", "text": "Togo"}, {"value": "214", "text": "Tokelau"}, {"value": "215", "text": "Tonga"}, {"value": "216", "text": "Trinidad and Tobago"}, {"value": "217", "text": "Tunisia"}, {"value": "218", "text": "Turkey"}, {"value": "219", "text": "Turkmenistan"}, {"value": "220", "text": "Turks and Caicos Islands"}, {"value": "221", "text": "Tuvalu"}, {"value": "222", "text": "Uganda"}, {"value": "223", "text": "Ukraine"}, {"value": "224", "text": "United Arab Emirates"}, {"value": "225", "text": "United Kingdom"}, {"value": "226", "text": "United States"}, {"value": "227", "text": "United States Minor Outlying Islands"}, {"value": "228", "text": "Uruguay"}, {"value": "229", "text": "Uzbekistan"}, {"value": "230", "text": "Vanuatu"}, {"value": "231", "text": "Venezuela"}, {"value": "232", "text": "Vietnam"}, {"value": "233", "text": "Virgin Islands, British"}, {"value": "234", "text": "Virgin Islands, U.S"}, {"value": "235", "text": "Wallis and Futuna"}, {"value": "236", "text": "Western Sahara"}, {"value": "237", "text": "Yemen"}, {"value": "238", "text": "Zambia"}, {"value": "239", "text": "Zimbabwe"}],
                            display: function (value, sourceData) {
                                var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
                                elem = $.grep(sourceData, function (o) {
                                    return o.value == value;
                                });

                                if (elem.length) {
                                    $(this).text(elem[0].text).css("color", colors[value]);
                                } else {
                                    $(this).empty();
                                }
                            },
                            name: 'vc_rightbar_checklist_residentcountry',
                        });


                        $('#visacategoryid').editable({
                            showbuttons: false,
                            prepend: "Select Visa Category",
                            inputclass: 'visacategoryid-select',
                            source: [{"value": "15", "text": "Business\/Training\/Conference"}, {"value": "10", "text": "Crew Member"}, {"value": "11", "text": "Diplomat\/Foreign Government Official"}, {"value": "12", "text": "Domestic Employee\/Nanny"}, {"value": "38", "text": "Employment\/Work Permit"}, {"value": "14", "text": "Exchange Visitor"}, {"value": "19", "text": "Media\/Journalist"}, {"value": "18", "text": "Medical Treatment Visitor "}, {"value": "20", "text": "Performing Athlete\/Artist\/Entertainer"}, {"value": "22", "text": "Religious Work"}, {"value": "35", "text": "Settlement\/Fiance"}, {"value": "25", "text": "Student\/Academic\/Vocational\/Study"}, {"value": "27", "text": "Tourism\/Vacation\/Pleasure visitor"}, {"value": "30", "text": "Transit"}],
                            display: function (value, sourceData) {
                                var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
                                elem = $.grep(sourceData, function (o) {
                                    return o.value == value;
                                });

                                if (elem.length) {
                                    $(this).text(elem[0].text).css("color", colors[value]);
                                } else {
                                    $(this).empty();
                                }
                            },
                            name: 'visacategoryid'
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