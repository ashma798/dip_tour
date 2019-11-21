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
                <a class="navbar-brand nav-desk" href="#">Nigeria's No.1 Tour Management Company</a>
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
                                    <option data-symbol="€" data-placeholder="0.00">FRENCH</option>
                                    <option data-symbol="£" data-placeholder="0.00">SPANISH</option>
                                </select>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link"  href="" style="color: white;">|</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:white;"><i class="fa fa-facebook"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:white;"><i class="fa fa-twitter"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:white;"><i class="fa fa-instagram"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:white;"><i class="fa fa-linkedin"></i> </a>
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
                            <a class="nav-link" href="index.html" style="color: black;">HOME<span style="padding-left: 20px;">|</span></a>
                        </li>                      
                        <li class="nav-item">
                            <a class="nav-link" href="hotelsearch.html" style="color: black;">HOTELS <span style="padding-left: 20px;">|</span></a>
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link" href="flightsearch.html" style="color: black;">FLIGHTS<span style="padding-left: 20px;">|</span></a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="car.html" style="color: black;">CAR RENTALS <span style="padding-left: 20px;">|</span></a>
                        </li>                   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                TOUR PACKAGES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Asia</a>
                                <a class="dropdown-item" href="#">Africa</a>
                                <a class="dropdown-item" href="#">Europe</a>
                            </div>
                        </li>
                        <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                VISAS</a>                          
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="search.html">Search</a>
                                <a class="dropdown-item" href="visa1.html">Visa Booking</a>
                                <a class="dropdown-item" href="#">Dubai UAE</a>                                
                            </div>                              
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav nav-flex-icons">
                    <a href="#" class="btn " role="button" style=" margin-left:40px; margin-right:0px; background-color: black; color:white;"><i class="fa fa-lock xs-nav"></i>LOGIN</a>
                    <a href="register.html" class="btn " role="button" style=" margin-left:20px; margin-right:30px; background-color: green; color:white;"><i class="fa fa-user xs-naav"></i>REGISTER</a>
                </ul>
            </nav>
        </section>
 

    <div class="wpb_revslider_element wpb_content_element"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.6.4 auto mode -->
    <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.4">
<ul>    <!-- SLIDE  -->
    <li data-index="rs-5" data-transition="slideleft" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://www.diptourltd.com/wp-content/uploads/2016/05/Why-travelling-to-Barcelona-is-so-easy-featured-1900x700_c-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="https://www.diptourltd.com/wp-content/uploads/2016/05/Why-travelling-to-Barcelona-is-so-easy-featured-1900x700_c.jpg"  alt="" title="Why-travelling-to-Barcelona-is-so-easy-featured-1900x700_c"  width="1900" height="700" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption restourant_big   tp-resizeme" 
             id="slide-5-layer-2" 
             data-x="center" data-hoffset="-2" 
             data-y="187" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"from":"y:bottom;","speed":300,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":7600,"speed":300,"to":"auto:auto;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 90px; font-weight: 400; color: rgba(255,255,255,1);font-family:Open Sans;">Book your tours today </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption text_white2   tp-resizeme" 
             id="slide-5-layer-3" 
             data-x="center" data-hoffset="9" 
             data-y="280" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"from":"y:50px;opacity:0;","speed":300,"to":"o:1;","delay":1100,"ease":"Power3.easeInOut"},{"delay":7300,"speed":300,"to":"auto:auto;","ease":"nothing"}]'
            data-textAlign="['center','center','center','center']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6; white-space: nowrap; font-size: 15px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);font-family:Open Sans;">Package tours and activities </div>
    </li>
    <!-- SLIDE  -->
    <li data-index="rs-6" data-transition="slideleft" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://www.diptourltd.com/wp-content/uploads/2016/05/travel-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="https://www.diptourltd.com/wp-content/uploads/2016/05/travel.jpg"  alt="" title="travel"  width="4288" height="2082" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <!-- LAYER NR. 3 -->
        <div class="tp-caption restourant_big   tp-resizeme" 
             id="slide-6-layer-2" 
             data-x="center" data-hoffset="-2" 
             data-y="187" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"from":"y:bottom;","speed":300,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":7600,"speed":300,"to":"auto:auto;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 90px; font-weight: 400; color: rgba(255,255,255,1);font-family:Open Sans;">Flight Ticket </div>

        <!-- LAYER NR. 4 -->
        <div class="tp-caption text_white2   tp-resizeme" 
             id="slide-6-layer-3" 
             data-x="center" data-hoffset="9" 
             data-y="280" 
                        data-width="['auto']"
            data-height="['auto']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"from":"y:50px;opacity:0;","speed":300,"to":"o:1;","delay":1100,"ease":"Power3.easeInOut"},{"delay":7300,"speed":300,"to":"auto:auto;","ease":"nothing"}]'
            data-textAlign="['center','center','center','center']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);font-family:Open Sans;">Book  your local and international flight with us  </div>
    </li>
    <!-- SLIDE  -->
    <li data-index="rs-7" data-transition="slideleft" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://www.diptourltd.com/wp-content/uploads/2016/05/Lobby-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="https://www.diptourltd.com/wp-content/uploads/2016/05/Lobby.jpg"  alt="" title="Lobby"  width="1920" height="1200" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->
    </li>
    <!-- SLIDE  -->
    <li data-index="rs-8" data-transition="flyin" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="https://www.diptourltd.com/wp-content/uploads/2016/05/travel-world-memories--100x50.png"  data-rotate="0"  data-saveperformance="off"  data-ssop="true"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="https://www.diptourltd.com/wp-content/uploads/2016/05/travel-world-memories-.png"  alt="" title="travel-world-memories-"  width="4244" height="2043" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->
    </li>
</ul>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                        if(htmlDiv) {
                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                        }else{
                            var htmlDiv = document.createElement("div");
                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                        }
                    </script>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                if(htmlDiv) {
                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                }else{
                    var htmlDiv = document.createElement("div");
                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                }
            </script>
        <script type="text/javascript">
setREVStartSize({c: jQuery('#rev_slider_2_1'), gridwidth: [960], gridheight: [400], sliderLayout: 'auto'});
            
var revapi2,
    tpj=jQuery;
tpj.noConflict();           
tpj(document).ready(function() {
    if(tpj("#rev_slider_2_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_2_1");
    }else{
        revapi2 = tpj("#rev_slider_2_1").show().revolution({
            sliderType:"standard",
            jsFileLocation:"//www.diptourltd.com/wp-content/plugins/revslider/public/assets/js/",
            sliderLayout:"auto",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                            mouseScrollReverse:"default",
                onHoverStop:"on",
                touch:{
                    touchenabled:"on",
                    touchOnDesktop:"off",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
                ,
                arrows: {
                    style:"legenda-navigation",
                    enable:true,
                    hide_onmobile:false,
                    hide_onleave:false,
                    tmp:'<div class="tp-arr-allwrapper"></div>',
                    left: {
                        h_align:"left",
                        v_align:"center",
                        h_offset:20,
                        v_offset:0
                    },
                    right: {
                        h_align:"right",
                        v_align:"center",
                        h_offset:20,
                        v_offset:0
                    }
                }
                ,
                bullets: {
                    enable:true,
                    hide_onmobile:false,
                    style:"legenda-navigation",
                    hide_onleave:false,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:20,
                    space:5,
                    tmp:'<span class="tp-bullet-title"></span>'
                }
            },
            visibilityLevels:[1240,1024,778,480],
            gridwidth:960,
            gridheight:400,
            lazyType:"none",
            shadow:0,
            spinner:"spinner0",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }
        });
    }
    
}); /*ready*/
</script>
        <script>
                    var htmlDivCss = unescape(".legenda-navigation.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.5%29%3B%0A%09width%3A%2065px%3B%0A%20%20%20%20height%3A%2090px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A100%3B%0A%7D%0A%0A.legenda-navigation.tparrows%3Abefore%20%7B%0A%09display%3Ablock%3B%0A%09text-align%3A%20center%3B%0A%20%20%09transition%3A%20background%200.3s%2C%20color%200.3s%3B%0A%20%20%09font-family%3A%20%22arrows%22%3B%0A%20%20%20%20font-size%3A%2060px%3B%0A%20%20%20%20opacity%3A%201%3B%0A%20%20%20%20line-height%3A%2090px%3B%0A%20%20%20%20display%3A%20block%3B%0A%20%20%20%20text-indent%3A%200%3B%0A%20%20%20%20color%3A%20%23b8b8b8%3B%0A%7D%0A.legenda-navigation.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce602%22%3B%0A%7D%0A.legenda-navigation.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce603%22%3B%0A%7D%0A%0A.legenda-navigation.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20color%3A%23aaa%3B%0A%20%20%20background%3A%23fff%3B%0A%20%20%20background%3Argba%28255%2C255%2C255%2C0.7%29%3B%0A%20%7D%0A.legenda-navigation%20.tp-arr-iwrapper%20%7B%0A%7D%0A.legenda-navigation%20.tp-arr-imgholder%20%7B%0A%20%20background-size%3Acover%3B%0A%20%20position%3Aabsolute%3B%0A%20%20top%3A0px%3Bleft%3A0px%3B%0A%20%20width%3A100%25%3Bheight%3A100%25%3B%0A%7D%0A.legenda-navigation%20.tp-arr-titleholder%20%7B%0A%7D%0A.legenda-navigation%20.tp-arr-subtitleholder%20%7B%0A%7D%0A.legenda-navigation.tp-bullets%20%7B%0A%7D%0A.legenda-navigation.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.legenda-navigation%20.tp-bullet%20%7B%0A%09width%3A10px%3B%0A%09height%3A10px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23e5e5e5%3B%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.legenda-navigation%20.tp-bullet%3Ahover%2C%0A.legenda-navigation%20.tp-bullet.selected%20%7B%0A%09background%3A%23fff%3B%0A%7D%0A");
                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                    if(htmlDiv) {
                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                    }
                    else{
                        var htmlDiv = document.createElement('div');
                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                    }
                  </script>
                </div><!-- END REVOLUTION SLIDER --></div>

<div class="container">
    <div class="page-content sidebar-position-right responsive-sidebar-bottom">
        <div class="row-fluid">
                        
            <div class="content span8">
                                    
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1469737654486 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner">
                        <div class="wpb_wrapper" style="padding-top: 25px;">
    <div class="wpb_text_column wpb_content_element " >
        <div class="wpb_wrapper">
            <?php echo $services;?>
        </div>
    </div>
</div></div></div></div>
<div class="hatom-extra" style="display:none;visibility:hidden;"> was last modified: <span class="updated"> March 23rd, 2019</span> </div>
                    <div class="post-navigation">
                                            </div>
                    
                    
                
            </div>

                      <!--      <div class="span4 sidebar sidebar-right">
                        
    <div class="sidebar-widget">
        <h4 class="widget-title">Search</h4>
        
<form method="get" id="searchform" class="hide-input" action="https://www.diptourltd.com/">
    <input type="text" name="s" placeholder="Search..." />
    <input type="hidden" name="post_type" value="post" />
    <input type="submit" value="Go" class="button" />
    <div class="clear"></div>
</form> </div>

                    </div> ---->
                    </div><!-- end row-fluid -->

    </div>
</div><!-- end container -->
    
        
        
    

        <footer class="mainfooter" role="contentinfo" style="margin-top: 0px;">
            <div class="footer-middle">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <!--Column1-->
                            <div class="footer-pad">
                                <img class="" src="./images/l2.png">
                                <p>Dip Tour with recorded success and continuous accomplishment is today reckoned as the preferred One Stop Travel Shop and one of the Leading Global Travel Management Company / with a focus on Promotion of Tourism Worldwide through its network and alliance. </p><br/>

                                <p>It has grown into a company having multiple years of global working experience and sound understanding of domestic and international travel markets and protocols that guarantees effective & on time deliveries, value for money, and customers' satisfaction focus on the 5A'S of Tourism  - Accessibility, Accommodation, Activities, Amenities and Attractions.
                                </p>
                                <ul class="list-unstyled">
                                    <li><a href="#"></a></li>
                                    <li>Address: Suite 7, Block 1, Bar Beach Towers, Bishop Oluwole &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Street Victoria Island, Lagos (LandMark: Eko Atlantic)</li>
                                    <li>Phone: +234 8122820856 <br/>  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;+234 8170592433</li>
                                    <li><a href="#">Email: info@diptourltd.com</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <!--Column1-->
                            <div class="footer-pad">
                                <h6 ><u style="color:white; ">COMPANY INFO</u></h6>
                                <ul class="list-unstyled" style="margin-top: 25px; margin-right: 20px;">
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">About us</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Services</a></li>

                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Privacy Policy</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Our Network</a></li>
                                    <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Contact</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <!--Column1-->

                            <h6 ><u style="color:white; ">POPULAR LINKS</u></h6>
                            <ul class="list-unstyled" style="margin-top: 30px; margin-left: 0">
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Blog</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">FAQ</a></li>
                                <li><i class="fa fa-caret-right" style="margin-right: 10px;"></i><a href="#">Terms & Conditons</a></li>

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

                                            <input type="email" class="form-control" placeholder="Name/Telephone">
                                            <span class="input-group-btn">
                                                <button class="btn" type="submit">Subscribe</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div> <div class="social" style="margin-top: 20px;">
                                <h6 style="padding-left: 70px;"><u style="color:white;" >GET CONNECTED</u></h6>
                                <a href="https://www.facebook.com/diptourltd" class="fa fa-facebook"></a>
                                <a href="https://www.twitter.com/diptourltd" class="fa fa-twitter"></a>
                                <a href="https://www.youtube.com/user/diptourltd" class="fa fa-youtube"></a>
                                <a href="https://www.linkedin.com/company/dip-tour-ltd" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-google-plus"></a> 
                                <a href="https://www.instagram.com/diptourltd" class="fa fa-instagram"></a>  
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
