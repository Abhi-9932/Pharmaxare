	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!--<title>AdminLTE 3 | General Form Elements</title>-->
	  <title>Edit Manufacturer</title>
	  <link rel=icon href="<?php echo base_url();?>/tools/dist/img/LargeLogo.png" sizes="20x20" type="image/png">
	  <!-- Google Font: Source Sans Pro -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/fontawesome-free/css/all.min.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/dist/css/adminlte.min.css">
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">

			<!-- Navbar Start -->

				<?php include('includes/admin/navbar.php'); ?>
				
			<!-- /.navbar End -->

			<!-- Sidebar Start -->

				<?php $m="manufacturerlist"; include('includes/admin/sidebar.php'); ?>

			<!-- Sidebar End  -->

		  <!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
				  <div class="container-fluid">
					<div class="row mb-2">
					  <div class="col-sm-6">
						
					  </div>
					  <div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
						  <li class="breadcrumb-item active"> Edit Manufacturer</li>
						</ol>
					  </div>
					</div>
				  </div>
				</section>

			<!-- Main content -->
				<section class="content">
					<div class="container-fluid">
						<div class="row">
						  <!-- left column -->
							<div class="col-md-12">
								<!-- general form elements -->
								<div class="card card-primary">
								  <div class="card-header">
									<h3 class="card-title">Edit Manufacturer</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
									<form action="<?php echo base_url();?>index.php/admin_controller/addcustomerdo" method="POST">
										<div class="card-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Manufacturer Name</label>
														<input type="text" class="form-control" id="customername" name="customername" placeholder="Customer Name" required>
													</div>
													<div class="form-group">
														<label>Email Address1</label>
														<input type="email" class="form-control" id="email1" name="email1" placeholder="Email Address1" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Mobile No </label>
														<input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile No" required>
													</div>
													<div class="form-group">
														<label>Email Address2</label>
														<input type="email" class="form-control" id="email2" name="email2" placeholder="Email Address2">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone</label>
														<input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" >
													</div>
													<div class="form-group">
														<label>Address 1</label>
														<textarea type="text" class="form-control" id="address1" name="address1" placeholder="Address 1" required></textarea>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Contact</label>
														<input type="tel" class="form-control" id="Contact" name="Contact" placeholder="Contact" >
													</div>
													<div class="form-group">
														<label>Address 2</label>
														<textarea type="text" class="form-control" id="address2" name="address2" placeholder="Address 2"></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Fax</label>
														<input type="text" class="form-control" id="fax" name="fax" placeholder="Fax" >
													</div>
													<div class="form-group">
														<label>State</label>
														<input type="text" class="form-control" id="state" name="state" placeholder="state" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>City</label>
														<input type="text" class="form-control" id="city" name="city" placeholder="City" required>
													</div>
													<div class="form-group">
														<label>Zip</label>
														<input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Country</label>
														<input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
													</div>
												</div>
												<!--	<div class="col-md-6">
													<div class="form-group">
														<label>Previous Balance</label>
														<input type="text" class="form-control" id="balance" name="balance" placeholder="Previous Balance" >
													</div>
												</div> -->
											</div>
										</div>
										<!-- /.card-body -->

										<div class="card-footer">
										  <button type="submit" class="btn btn-info float-right">Submit</button>
										</div>
									</form>
								</div>
								<!-- /.card -->
							</div>
						  <!--/.col (left) -->
						</div>
						<!-- /.row -->
					</div><!-- /.container-fluid -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
	  
		  
			<!-- Footer Start -->

			<?php include('includes/admin/footer.php'); ?>

			<!-- Footer End -->
			
			<!-- Control Sidebar -->
		  <aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		  </aside>
			<!-- /.control-sidebar -->
		</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>tools/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url();?>tools/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- bs-custom-file-input -->
	<script src="<?php echo base_url();?>tools/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	<!-- AdminLTE App -->
	<script  src="<?php echo base_url();?>tools/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<!--<script  src="<?php echo base_url();?>tools/dist/js/demo.js"></script> -->
	<!-- Page specific script -->
	
	</body>
	</html>
