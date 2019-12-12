<style type="text/css">
        /*media all*/
        .sidebar-widget .widget-title {
            padding: 20px 0;
            margin-bottom: 20px;
            border-top: 1px solid #ebebeb;
            border-bottom: 1px solid #ebebeb;
        }
        /*media all*/
        .footer-top .container {
            border-top: 1px solid #dbdbdb;
            padding-top: 2px;
        }
        /*media all*/
        .copyright.copyright-3, .copyright.copyright-2 {
            background: #343434;
            border-top: 1px solid #333536;
            color: #8b8b8b;
        }
        /*media all*/
        .back-to-top.btt-shown {
            bottom: 50px;
        }
        /*media all*/
        .back-to-top::before {
            content: "\e601";
            font-family: "arrows";
            font-size: 14px;
            opacity: 1;
            display: block;
            text-indent: 0px;
            line-height: 48px;
            color: #fff;
            height: 50px;
            text-align: center;
            width: 50px;
            background: rgba(0, 0, 0, 0.2);
            -webkit-transition: 0.3s all ease-in-out;
            -moz-transition: 0.3s all ease-in-out;
            -ms-transition: 0.3s all ease-in-out;
            -o-transition: 0.3s all ease-in-out;
            transition: 0.3s all ease-in-out;
        }
        /*media all*/
        #searchModal {
            display: inline-block;
            width: 90%;
            opacity: 1;
            max-width: 410px;
            left: 50%;
            margin-left: 0px;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            position: relative;
            background-color: #fff;
            text-align: center;
        }
        /*media all*/
        .vc_column_container > .vc_column-inner {
            box-sizing: border-box;
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
        }
        /*media all*/
        .vc_column-inner::after {
            clear: both;
        }
        /*media all*/
        .footer-top .container {
            border-top: 1px solid #dbdbdb;
            padding-top: 2px;
        }
        /*media all*/
        .footer-top .container .double-border {
            padding: 30px 0;
        }
        /*media all*/
        .vc_row {
            margin-left: -15px;
            margin-right: -15px;
        }
        /*@media all and (min-width:768px)*/
        .vc_col-sm-3 {
            width: 25%;
        }
        /*media all*/
        .vc_column_container {
            padding-left: 0px;
            padding-right: 0px;
        }
        /*media all*/
        .vc_column_container > .vc_column-inner {
            box-sizing: border-box;
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
        }
        /*media all*/
        .vc_col-has-fill > .vc_column-inner, .vc_row-has-fill + .vc_row-full-width + .vc_row > .vc_column_container > .vc_column-inner, .vc_row-has-fill + .vc_row > .vc_column_container > .vc_column-inner, .vc_row-has-fill > .vc_column_container > .vc_column-inner {
            padding-top: 35px;
        }
        /*media all*/
        .vc_column_container > .vc_column-inner {
            box-sizing: border-box;
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
        }

        .cont_or span {
            width: 20px;
            height: 20px;
            border: 1px solid #ccc;
            border-radius: 50%;
            padding: 7px 8px;
            position: relative;
            background: #fff;
            font-size: 13px
        }

        .cont_or {
            display: block;
            width: 100%;
            float: left;
            margin-bottom: 16px;
            position: relative
        }

        .cont_or::before {
            content: "";
            width: 100%;
            height: 1px;
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            background: #ccc
        }


        .button {
            padding: 2px;
            cursor: pointer;
            background: grey;
            color: white;
            width: 25px;
            height: 29px;
            text-align: center;
            display: inline-block
        }

        .button:hover {
            background: black;
        }




    </style>
<br/>
<br/>
<h2><?php echo $this->session->flashdata('item'); ?></h2> 
<form action="<?php echo base_url('TourPackageEnquiry/add'); ?>" method="post">
<div class="card border-0">
            <div class="container border border-success">
                <div class="card-header">
                    <h5 class="card-title text-center" id="exampleModalPreviewLabel">Get the Best Holiday Planned by Experts!</h5>                   
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="<?php echo base_url();?>img/smartphone.png"><label style="font-size: 30px;color: #796868;"><?php  echo $contact_info[0]['phone_no_1']; ?></label>
                        <div class="cont_or">
                            <span>OR</span>
                        </div>
                        <h6 style="font-size: 12px">Enter your contact details and we will plan the best holiday suiting all your requirements.</h6>
                    </div>


                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Going to</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Going to" name="going_to" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Leaving from</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="Leaving from" required name="leaving_from">
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="validationCustom04">Full Name</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="Full Name" name="name"required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Email</label>
                            <input type="email" class="form-control" id="validationCustom03" placeholder="Email" name="email" required>
                            <div class="invalid-feedback">
                                Please provide a valid mail id.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Phone</label>
                            <input type="number" class="form-control" id="validationCustom04" name="phone" placeholder="Enter Phone Number" required min="1111111111">
                            <div class="invalid-feedback">
                                Please provide a valid Phone Number.
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="validationCustom03">Date</label>
                            <input type="date" class="form-control" id="validationCustom03" name="date" placeholder="date" required>

                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Adult Count</label>

                            <br>
                            <span class=" plus button">
                                +
                            </span>
                            <input class="text-center" type="number" name="adult_qty" id="qty" maxlength="8" style="width: 30%" required/>
                            <span class="min button">
                                -
                            </span>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Child Count</label>

                            <br>
                            <span class=" plus button">
                                +
                            </span>
                            <input class="text-center" type="number" name="child_qty" id="qty1" maxlength="8" style="width: 30%"/>
                            <span class="min button">
                                -
                            </span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Infant Count</label>

                            <br>
                            <span class=" plus button">
                                +
                            </span>
                            <input class="text-center" type="number" name="infant_qty" id="qty3" maxlength="8" style="width: 30%"/>
                            <span class="min button">
                                -
                            </span>
                        </div>


                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Instruction/Queries</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="query" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    <br><br>
                </div>
            </div>

        </div>
</form>






        <br><br>

        <script>
            jQuery(function () {
                var j = jQuery; //Just a variable for using jQuery without conflicts
                var addInput = "#qty"; //This is the id of the input you are changing
                var n = 1; //n is equal to 1

                //Set default value to n (n = 1)
                j(addInput).val(n);

                //On click add 1 to n
                j(".plus").on("click", function () {
                    j(addInput).val(++n);
                });

                j(".min").on("click", function () {
                    //If n is bigger or equal to 1 subtract 1 from n
                    if (n >= 1) {
                        j(addInput).val(--n);
                    } else {
                        //Otherwise do nothing
                    }
                });
            });
            jQuery(function () {
                var j = jQuery; //Just a variable for using jQuery without conflicts
                var addInput = "#qty1"; //This is the id of the input you are changing
                var n = 1; //n is equal to 1

                //Set default value to n (n = 1)
                j(addInput).val(n);

                //On click add 1 to n
                j(".plus").on("click", function () {
                    j(addInput).val(++n);
                });

                j(".min").on("click", function () {
                    //If n is bigger or equal to 1 subtract 1 from n
                    if (n >= 1) {
                        j(addInput).val(--n);
                    } else {
                        //Otherwise do nothing
                    }
                });
            });
            jQuery(function () {
                var j = jQuery; //Just a variable for using jQuery without conflicts
                var addInput = "#qty3"; //This is the id of the input you are changing
                var n = 1; //n is equal to 1

                //Set default value to n (n = 1)
                j(addInput).val(n);

                //On click add 1 to n
                j(".plus").on("click", function () {
                    j(addInput).val(++n);
                });

                j(".min").on("click", function () {
                    //If n is bigger or equal to 1 subtract 1 from n
                    if (n >= 1) {
                        j(addInput).val(--n);
                    } else {
                        //Otherwise do nothing
                    }
                });
            });
        </script>