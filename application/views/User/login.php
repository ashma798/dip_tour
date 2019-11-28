<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://demo.tkies.com/kurdian_demo/public/images/user2-160x160.jpg">
 
    <title>DIPTOUR</title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	  <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css');?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('/css/master_style.css');?>">
        <!-- Bootstrap extend-->
        <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap-extend.css');?>">

        <!-- daterange picker -->	
        <link rel="stylesheet" href="<?php echo base_url('/css/daterangepicker.css');?>">

        <!-- bootstrap datepicker -->	
        <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap-datepicker.min.css');?>">

        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="<?php echo base_url('/css/all.css');?>">

        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap-colorpicker.min.css');?>">

        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap-timepicker.min.css');?>">
   

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url('/css/select2.min.css');?>">

 <!--<link rel="stylesheet" href="http://demo.tkies.com/kurdian_demo/public/css/flight-styles.css">-->

<link rel="stylesheet" href="<?php echo base_url('/css/ionicons.css');?>">
        
    <!-- Lion_admin skins -->
    <link rel="stylesheet" href="<?php echo base_url('/css/_all-skins.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	


	

</head>
<body class="hold-transition bg-img" style= "background-image: url()" data-overlay="4">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100" style=" padding-top: 140px; padding-left: 140px; width: 120%;">
			
			<div class="col-lg-8 col-md-11 col-12">
				<div class="row align-items-center justify-content-md-center h-p100" data-overlay-light="9">
					<div class="col-lg-5 col-md-6 col-12">
						<div class="p-40 text-center content-bottom">
							<img src="<?php echo base_url();?>images/logo.png" class="rounded-circle1 b-2 p-10 border-dark" alt="" style=" width: 50%;"/>
							<div class="text-center">
							  <p class="mt-20">Login With</p>
							  <p class="gap-items-2 mb-0">
								  <a class="btn btn-social-icon btn-outline btn-circle btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-circle btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-circle btn-google" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-circle btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
								</p>	
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 col-12">
					<form action="<?php echo base_url('/User/login'); ?>" method="post">
					
						<div class="p-20 content-bottom">
							<div class="content-top-agile">
								<h2>ADMIN LOGIN</h2>
								<p class="text-fade">Sign in to start your session</p>
							</div>
							<div style='color:red;' id="msg">
							<?php
                                if (!empty($response['status'])) {
                                    echo $response['ErrorDesc'];                                     
                                }
                            ?>
							</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<input type="text" class="form-control" name = "username" placeholder="Username" style="flex: 1 1 auto; width: 230%;">
										<div class="input-group-prepend">
											<span class="input-group-text bg-danger border-danger"><i class="ti-user"></i></span>
										</div>
									
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<input type="password" class="form-control" name="password" placeholder="Password" style="flex: 1 1 auto; width: 230%;">
										<div class="input-group-prepend">
											<span class="input-group-text bg-danger border-danger"><i class="ti-lock"></i></span>
										</div>
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox">
										<input type="checkbox" id="basic_checkbox_1" >
										<label for="basic_checkbox_1"  style="margin-left: 20px;">Remember Me</label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd text-right" >
										<a href="javascript:void(0)" id="forgot_password"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">

									<button type="submit" class="btn btn-danger btn-block margin-top-10" >SIGN IN</button>
									 
									</div>
									<!-- /.col -->
								  </div>		

						</div>
						</form>					</div>
				</div>
				
				
			</div>
			
			
		</div>
	</div>
	

<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="http://demo.tkies.com/kurdian_demo/public/assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="http://demo.tkies.com/kurdian_demo/public/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="http://demo.tkies.com/kurdian_demo/public/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Custom Script-->
<script>
	 $(document).ready(function(){
	 	$('#forgot_password').click(function(){
	 		$.ajax({
	 			url: "<?php echo base_url('User/forgotPassword');?>", 
	 			success: function(result){
	 				var obj = jQuery.parseJSON(result);
                    if(obj.status == 'success'){
    					$('#msg').html("Mail has been sent to your registered Email.");
    				}else{
    					$('#msg').html("Error sending mail to your registered Email.");
    				}
  				}
  			});
	 		
	 	});

	 });
</script>
</body>
</html>