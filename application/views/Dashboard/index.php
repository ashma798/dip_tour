<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Bootstrap -->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- mailbox -->
    <link href="./css/mailbox.css" rel="stylesheet">
    <!-- slimscroll -->
    <link href="./css/jquery.slimscroll.css" rel="stylesheet">
    <!-- Fontes -->
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <link href="./css/simple-line-icons.css" rel="stylesheet">
    <!-- flotCart css -->
    <link href="./css/flotCart.css" rel="stylesheet">
    <!-- all buttons css -->
    <link href="./css/buttons.css" rel="stylesheet">
    <!-- animate css -->
<link href="./css/animate.css" rel="stylesheet">
<!-- adminbag main css -->
    <link href="./css/main.css" rel="stylesheet">
    <!-- media css for responsive  -->
    <link href="./css/main.media.css" rel="stylesheet">
    <!-- eCommerce css -->
    <link href="./css/eCommerce.css" rel="stylesheet">
    <!-- icheck -->
    <link href="./css/skins/all.css" rel="stylesheet">
    <!-- aqua black theme css -->
    <link href="./css/aqua-black.css" rel="stylesheet">
    <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    <!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
</head>
<style type="text/css">
  .card-image {
  min-height: 1px; // 1 
  
  > img {
    border-radius: 3px;
    display: block;
    margin: auto;
    max-width: 100%;
  }
  
  &:not(:first-child):not(:last-child) { 
    border-radius: 0; 
  } 
}

%card-image-side {
  width: 100%; // 1
  
  @media (min-width: 30em) { 
    max-width: 55%; // 2   
  }   
  
  > img {
    height: 100%;
  }  
}</style>
<body class="page-header-fixed">
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="dash1.html"> <img class="logo-default" alt="logo" src="./images/logo.png" style="margin-bottom:20px; "> </a>
            </div>
            <div class="library-menu"> <span class="one">-</span> <span class="two">-</span> <span class="three">-</span> </div>
            <!-- END LOGO -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle count-info"> <i class="fa fa-envelope"></i> <span class="badge badge-info">6</span> </a>
                        <ul class="dropdown-menu dropdown-messages menuBig">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="pull-left" href="#"> <img src="" class="img-circle" alt="image"> </a>
                                    <div class="media-body"> <small class="pull-right">46h ago</small> <strong>Mike Loreipsum</strong> started following <strong>Olivia Wenscombe</strong>.
                                        <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small> </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="pull-left" href="#"> <img src="" class="img-circle" alt="image"> </a>
                                    <div class="media-body "> <small class="pull-right text-navy">5h ago</small> <strong> Alex Smith </strong> started following <strong>Olivia Wenscombe</strong>.
                                        <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small> </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="pull-left" href="#"> <img src="" class="img-circle" alt="image"> </a>
                                    <div class="media-body "> <small class="pull-right">23h ago</small> <strong>Olivia Wenscombe</strong> love <strong>Sophie </strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small> </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="#> <i class="fa fa-envelope"></i> <strong>Read All Messages</strong> </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle count-info"> <i class="fa fa-bell"></i> <span class="badge badge-primary">8</span> </a>
                        <ul class="dropdown-menu dropdown-alerts menuBig">
                            <li>
                                <a href="#">
                                    <div> <i class="fa fa-envelope fa-fw"></i> You have 16 messages <span class="pull-right text-muted small">4 minutes ago</span> </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div> <i class="fa fa-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small">12 minutes ago</span> </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div> <i class="fa fa-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small">4 minutes ago</span> </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="#"> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- START USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user">
                        <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                            <img src="" class="img-circle" alt=""> <span class="username username-hide-on-mobile"> Admin</span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#"> <i class="icon-user"></i> My Profile </a>

                            </li>
                            <li>
                                <a href="#"> <i class="icon-user"></i> Profile-2 </a>
                            </li>
                            <li>
                                <a href="#"> <i class="icon-calendar"></i> My Calendar </a>
                            </li>
                            <li>
                                <a href="#"> <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger"> 3 </span> </a>
                            </li>
                            <li>
                                <a href="dash1.html"> <i class="icon-rocket"></i> My Tasks <span class="badge badge-success"> 7 </span> </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#"> <i class="icon-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('User/logout'); ?>"> <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    
          

    
          
   

          <!-- #/ container -->
              </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
    <div class="page-container">
        <!-- Start page sidebar wrapper -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar">
                <ul class="page-sidebar-menu  page-header-fixed ">
                    <li class="sidebar-search-wrapper">
                        <!-- START RESPONSIVE SEARCH FORM -->
                        <form class="sidebar-search  " action="#" method="POST">
                            <a href="javascript:;" class="remove"> <i class="icon-close"></i> </a>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn"> <a href="javascript:;" class="btn submit"> <i class="icon-magnifier"></i> </a> </span> </div>
                        </form>
                        <!-- END RESPONSIVE SEARCH FORM -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-toggle" href="dash1.html"> <i class="fa fa-th-large"></i> <span class="title">Dashboard</span> <i class="fa fa-chevron-right" aria-hidden="true" style="padding-left: 80px;"></i> </a>
                        
                    </li>
                     <li >
                       <a class="nav-link " href="transfer.html"> <i class="fa fa-th-large"></i> <span class="title">Transfer</span> <span class="arrow"></span> </a>
                         
                    </li>
                   
                    <li >
                       <a class="nav-link " href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Booking List</span> <span class="arrow"></span> </a>
                         
                    </li>
                   
                   <li >
                       <a class="nav-link " href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Hotel</span> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                         
                    </li>
                    <li >
                       <a class="nav-link " href="visa.html"> <i class="fa fa-th-large"></i> <span class="title">Visa</span> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                         
                    </li>
                    <li >
                       <a class="nav-link " href="flight.html"> <i class="fa fa-th-large"></i> <span class="title">Flight</span> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                         
                    </li>
                    
                    <li >
                       <a class="nav-link " href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Report</span> <span class="arrow"></span> </a>
                         
                    </li>
                   
                    <li >
                       <a class="nav-link " href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Accounting</span> <span class="arrow"></span> </a>
                         
                    </li>
                    <li >
                       <a class="nav-link " href="javascript:;"> <i class="fa fa-th-large"></i> <span class="title">Package Management</span> <span class="arrow"></span> </a>
                         
                    </li>
                   
                        </ul>
                    </li>
                   
                   
                </ul>
            </div>
        </div>
        <!-- End page sidebar wrapper -->
        <!-- Start page content wrapper -->
        <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">
             
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>Dashboard <small>Control panel</small></h2>
                        <ol class="breadcrumb">
                            <li> <a href="index.html">Home</a> </li>
                            <li class="active"><a href="dash1.html"> <strong>Dashboard</strong> </a></li>
                        </ol>
                    </div>
                </div>
                <div class="wrapper-content ">

                    <!-- Start Widgets -->

                    <div class="row">
                        <!-- begin col-3 -->
                        <div class="col-md-3 col-sm-6">
                           <div class="wrapper" style="background-color: #D3D3D3; margin-right:20px;
  color: white;
  display: flex;
  flex-flow: row nowrap;
  min-height: 100%;
   border-box;border: 1px solid rgba(0,0,0,.125);border-radius: .25rem;margin-bottom:30px ;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin-top: 30px;">
  <div class="icon"  style="align-self: center;
  background-color: blue;
  color:blue;
 max-height: 100%;
  flex: 1 1 auto;
  font-size: 22px;
 padding-top: 50px; padding-bottom: 50px; padding-left: 30px;">
    <i class="fas fa-plane" style="font-size:30px;color:white;text-shadow:2px 2px 4px #000000;"></i>
  </div>
  <div class="content" style="line-height: normal;  padding-left: 20px;padding-right: 20px;">
    <h5 style="color:black;">FLIGHT BOOKING </h5>
    <p  style="color:black;">0</p>
    <p style="color:blue;">B2C Report</p>
    
  </div>
</div>
                           
                        </div>
                        <!-- end col-3 -->
                        <!-- begin col-3 -->
                        <div class="col-md-3 col-sm-6 mtop15 mright10">
                           <div class="wrapper" style="background-color: #D3D3D3; margin-right:20px;
  color: white;
  display: flex;
  flex-flow: row nowrap;
  min-height: 100%;
 border-box;border: 1px solid rgba(0,0,0,.125);border-radius: .25rem;margin-bottom:30px ;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin-top: 30px;">
  <div class="icon"  style="align-self: center;
  background-color: green;
  color:blue;
 max-height: 100%;
  flex: 1 1 auto;
  font-size: 22px;
 padding-top: 50px; padding-bottom: 50px; padding-left: 30px;">
    <i class="fas fa-bed" style="font-size:30px;color:white;text-shadow:2px 2px 4px #000000;"></i>
  </div>
  <div class="content" style="line-height: normal;  padding-left: 20px;padding-right: 20px;">
    <h5 style="color:black;">HOTEL BOOKING </h5>
    <p  style="color:black;">1</p>
    <p style="color:blue;">B2C Report</p>
    
  </div>
</div>
                            
                        </div>
                        <!-- end col-3 -->
                        <!-- begin col-3 -->
                        <div class="col-md-3 col-sm-6 mtop15">
                           <div class="wrapper" style="background-color: #D3D3D3; margin-right:20px;
  color: white;
  display: flex;
  flex-flow: row nowrap;
  min-height: 100%;
   border-box;border: 1px solid rgba(0,0,0,.125);border-radius: .25rem;margin-bottom:30px ;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin-top: 30px;">
  <div class="icon"  style="align-self: center;
  background-color: green;
  color:blue;
 max-height: 100%;
  flex: 1 1 auto;
  font-size: 22px;
 padding-top: 50px; padding-bottom: 50px; padding-left: 30px;">
    <i class="fas fa-bed" style="font-size:30px;color:white;text-shadow:2px 2px 4px #000000;"></i>
  </div>
  <div class="content" style="line-height: normal;  padding-left: 20px;padding-right: 20px;">
    <h5 style="color:black;">VILLA BOOKING </h5>
    <p  style="color:black;">0</p>
    <p style="color:blue;">B2C Report</p>
    
  </div>
</div>
                          
                        </div>
                        <!-- end col-3 -->
                        <!-- begin col-3 -->
                        <div class="col-md-3 col-sm-6 mtop15">
                           <div class="wrapper" style="background-color: #D3D3D3; margin-right:20px;
  color: white;
  display: flex;
  flex-flow: row nowrap;
  min-height: 100%;
  border-box;border: 1px solid rgba(0,0,0,.125);border-radius: .25rem;margin-bottom:30px ;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin-top: 30px;">
  <div class="icon"  style="align-self: center;
  background-color: red;
  color:blue;
 max-height: 100%;
  flex: 1 1 auto;
  font-size: 22px;
 padding-top: 50px; padding-bottom: 50px; padding-left: 30px;">
    <i class="fas fa-bus" style="font-size:30px;color:white;text-shadow:2px 2px 4px #000000;"></i>
  </div>
  <div class="content" style="line-height: normal;  padding-left: 20px;padding-right: 20px;">
    <h5 style="color:black;">BUS BOOKING </h5>
    <p  style="color:black;">0</p>
    <p style="color:blue;">B2C Report</p>
    
  </div>
</div>
                           
                        </div>
                        <!-- end col-3 -->

                        <!-- begin col-3 -->
                       
                       
                                              
                    </div>


                   
                   

                   
                    </div>
                   
                    <!-- End Widgets -->

                </div>
                <!-- /wrapper-content -->

                <!-- start footer -->
                <div class="footer">
                    <div class="pull-right">
                        <ul class="list-inline">
                            <li><a title="" href="dash1.html">Dashboard</a></li>
                            <li><a title="" href="#"> Inbox </a></li>
                            <li><a title="" href="#">Blog</a></li>
                            <li><a title="" href="#">Contacts</a></li>
                        </ul>
                    </div>
                    <div> <strong>Copyright</strong> Diptour &copy; 2019 </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Go top -->
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    <!-- Go top -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="./js/bootstrap.min.js"></script>

<!-- Flot -->
  <script src="./js/flotCart/jquery.flot.js"></script>
  <script src="./js/flotCart/jquery.flot.tooltip.min.js"></script>
  <script src="./js/flotCart/jquery.flot.resize.js"></script>


    <!-- icheck -->
    <script src="./js/icheck.js"></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="./js/jquery.slimscroll.js"></script>
    <!-- pace js -->
<script src="./js/pace.min.js"></script>
<!-- main js -->
    <script src="./js/main.js"></script>
    <script>
        $(document).ready(function(){
            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#3391ad'},
                { label: "Data 2", data: d2, color: '#0e83a5' }
            ];
            $.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data2 = [
                { label: "Data 1", data: d1, color: '#19a0a1'}
            ];
            $.plot($("#flot-chart2"), data2, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data3 = [
                { label: "Data 1", data: d1, color: '#fbbe7b'},
                { label: "Data 2", data: d2, color: '#f8ac59' }
            ];
            $.plot($("#flot-chart3"), data3, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
            });



        });
    </script>

</body>

</html>
