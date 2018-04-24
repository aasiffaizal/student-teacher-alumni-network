
<!DOCTYPE html>
<!-- BEGIN CSS FRAMEWORK -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
	<!-- END CSS FRAMEWORK -->
	
	<!-- BEGIN CSS PLUGIN -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-minimal.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck/skins/square/blue.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-slider/css/slider.css">
	<!-- END CSS PLUGIN -->
	
	<!-- BEGIN CSS TEMPLATE -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins.css">
	<!-- END CSS TEMPLATE -->

<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Kertas &ndash; Register</title>
	
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- BEGIN CSS FRAMEWORK -->
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
	<!-- END CSS FRAMEWORK -->
	
	<!-- BEGIN CSS PLUGIN -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-minimal.css">
	<!-- END CSS PLUGIN -->
	
	<!-- BEGIN CSS TEMPLATE -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<!-- END CSS TEMPLATE -->
</head>

<body class="login">
	<div class="outer">
		<div class="middle">
			<div class="inner">
				<div class="row">
					<!-- BEGIN BOX REGISTER -->
					<div class="col-lg-12">
						<div class="text-center"><h1> <strong>STAN</strong></h1><h4>Student Teacher Alumni Network</h4> </div>
						
						<div class="account-wall">
							<!-- BEGIN REGISTER FORM -->
							<form name="signupForm" action="<?php echo base_url();?>index.php/signup" class="form-login" role="form" method="post">
								<input type="text" name="Name" class="form-control" placeholder="Name" autofocus>
								<select class="form-control" name="Gender" placeholder="Gender">
											<option value="" disabled selected>Gender</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>

								<input type="email" name="email" class="form-control" placeholder="Email" >
								<input type="text" name="username" class="form-control" placeholder="username" >
								<input type="password" name="password" class="form-control" placeholder="Password">
									<label class="col-sm-3 control-label">Date of Birth</label>
										<div class="col-sm-3">
											<div class="input-group date form_date"  data-date-format="dd-mm-yyyy" data-link-field="dtp_input3">
												<input type="text" class="form-control">
												<span class="input-group-addon"><i class="fa fa-th"></i></span>
											</div>
											<input type="hidden" name="dob" id="dtp_input3" value="" />
										</div>
								<input type="number" min="1995" name="YearofJoining" class="form-control" placeholder="Year of Joining">
								<select class="form-control" name="Type" placeholder="Type">
											<option value="" disabled selected>Select your Option</option>
												<option value="Student">Student</option>
												<option value="Teacher">Teacher</option>
												<option value="Alumni">Alumni</option>
											</select>



								<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
								<div  style="color:red"><?php echo validation_errors(); ?></div>
								<label class="pull-left"></label>
								
								
							</form>
							<!-- END REGISTER FORM -->
						</div>
						<a href="http://localhost/stan/index.php/login" class="text-center new-account">Already have an account?</a>
					</div>
					<!-- END BOX REGISTER -->
					

				</div>
			</div>
		</div>
	</div>

	<!-- BEGIN JS FRAMEWORK -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-totemticker/jquery.totemticker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-resize/jquery.ba-resize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockUI.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/icheck/icheck.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/validation.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-slider/js/bootstrap-slider.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/form.js"></script>



	<!-- END JS FRAMEWORK -->
	
	<!-- BEGIN JS PLUGIN -->
	<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
	<!-- END JS PLUGIN -->

		<!-- BEGIN JS FRAMEWORK -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- END JS FRAMEWORK -->
	
	<!-- BEGIN JS PLUGIN -->
	<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-totemticker/jquery.totemticker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-resize/jquery.ba-resize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockUI.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/icheck/icheck.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-slider/js/bootstrap-slider.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/form.js"></script>
	<!-- END JS PLUGIN -->

	<!-- BEGIN JS TEMPLATE -->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/skin-selector.js"></script>
	<!-- END JS TEMPLATE -->

</body>
</html>