	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!--<title>AdminLTE 3 | General Form Elements</title>-->
	  <title>Add Customer</title>
	  <link rel=icon href="<?php echo base_url();?>/tools/dist/img/LargeLogo.png" sizes="20x20" type="image/png">
	  <!-- Google Font: Source Sans Pro -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/fontawesome-free/css/all.min.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/dist/css/adminlte.min.css">
	  <!-- Select2 -->
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/select2/css/select2.min.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	 
	  
	  <style>
		.for-addbtn{
			height: 25px;
			padding-top: 0px;
			margin-left: 10px;
		}
	  </style>
	  
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">

			<!-- Navbar Start -->

				<?php include('includes/admin/navbar.php'); ?>
				
			<!-- /.navbar End -->

			<!-- Sidebar Start -->

				<?php $m="companycreation"; include('includes/admin/sidebar.php'); ?>

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
						  <li class="breadcrumb-item active"> Company creation</li>
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
									<h3 class="card-title">Company creation</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
									<form action="<?php echo base_url();?>index.php/admin_controller/edit_company_creation_do" method="POST" enctype="multipart/form-data">
										<?php foreach($edit_creation as $r){?>
								
											<input type="hidden" class="form-control form-control-user" id="id" name="id" value="<?=$r['id'];?>">
										<div class="card-body">
										
											<div class="row">
												<div class="col-6">
													<label>Company Name :</label>
													<input type="text" class="form-control" id="comName" name="comName" value="<?=$r['comName'];?>">
												</div>
												<div class="col-6">
													<label>Phone No :</label>
													<input type="tel" class="form-control" id="phno" name="phno" value="<?=$r['phone'];?>">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-4">
													<label>Address 1 :</label>
													<textarea type="text" class="form-control" id="address1" name="address1"><?=$r['address1'];?></textarea>
												</div>
												<div class="col-4">
													<label>Address 2 :</label>
													<textarea type="text" class="form-control" id="address2" name="address2"><?=$r['address2'];?></textarea>
												</div>
												<div class="col-4">
													<label>Address 3 :</label>
													<textarea type="text" class="form-control" id="address3" name="address3"><?=$r['address3'];?></textarea>
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
													<label>Address 4 :</label>
													<textarea type="text" class="form-control" id="address4" name="address4"><?=$r['address4'];?></textarea>
												</div>
												<div class="col-6">
													<label>Upload Pharma Logo :</label>
													<div class="input-group">
														<div class="custom-file">
														<input type="file" class="custom-file-input" id="image" name="image" value="<?=$r['image'];?>">
														<label class="custom-file-label">Choose file</label>
														</div>
													</div>												
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-3">
													<label>Branch Code :</label>
													<input type="text" class="form-control" id="branchcode" name="branchcode" value="<?=$r['branchCode'];?>">
												</div>
												<div class="col-3">
													<label>Fax No :</label>
													<input type="text" class="form-control" id="fax" name="fax" value="<?=$r['faxNo'];?>">
												</div>
												<div class="col-3">
													<label>Website Address :</label>
													<input type="text" class="form-control"  id="webadd" name="webadd" value="<?=$r['webAddress'];?>">
												</div>
												<div class="col-3">
													<label>Email :</label>
													<input type="email" class="form-control" id="email" name="email" value="<?=$r['email'];?>">
												</div>
											</div>
											
											<br>
											
											
											<div class="row">
												<div class="col-6">
													<label>GST IN :</label>
													<input type="text" class="form-control" id="gst" name="gst" value="<?=$r['gstin'];?>">
												</div>
												<div class="col-6">
													<label>Date :</label>
													<input type="date" class="form-control" id="date" name="date" value="<?=$r['date'];?>">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
													<label>D.L No :</label>
													<input type="text" class="form-control" id="dlno" name="dlno" value="<?=$r['dl_no'];?>">
												</div>
												<div class="col-6">
													<label>Expiry Date :</label>
													<input type="date" class="form-control" id="expDate1" name="expDate1" value="<?=$r['exp1'];?>">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
													<label>Mfg.Lic.No :</label>
													<input type="text" class="form-control" id="mfg" name="mfg" value="<?=$r['mfg_lic_no'];?>">
												</div>
												<div class="col-6">
													<label>Expiry Date :</label>
													<input type="date" class="form-control" id="expDate2" name="expDate2" value="<?=$r['exp2'];?>">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
													<label>Service Tax :</label>
													<input type="text" class="form-control" name="service" name="service" value="<?=$r['service_tax'];?>">
												</div>
												<div class="col-6">
													<label>Expiry Date :</label>
													<input type="date" class="form-control" id="expDate3" name="expDate3" value="<?=$r['exp3'];?>">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
													<label>Food Lic.No :</label>
													<input type="text" class="form-control" id="foodLic" name="foodLic" value="<?=$r['food_lic_no'];?>">
												</div>
												<div class="col-6">
													<label>Expiry Date :</label>
													<input type="date" class="form-control" id="expDate4" name="expDate4" value="<?=$r['exp4'];?>">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
													<label>Jurisdiction :</label>
													<input type="text" class="form-control" id="Jurisdiction" name="Jurisdiction" value="<?=$r['Jurisdiction'];?>">
												</div>
												<div class="col-6">
													<label>Country :</label>
													<input type="text" class="form-control" id="country" name="country" value="<?=$r['country'];?>">
												</div>
											</div>
											
											<br>
									
											<div class="row">
												<div class="col-6">
													<label>Business Type :</label>
													<input type="text" class="form-control" id="business" name="business" value="<?=$r['business_type'];?>">
												</div>
												<div class="col-6">
													<label>Financial Year :</label>
													<input type="text" class="form-control" id="financial" name="financial" value="<?=$r['financial_year'];?>">
												</div>
											</div>
											
											
											
										</div>
										<!-- /.card-body -->
										<?php } ?>
										<div class="card-footer">
										  <button type="submit" class="btn btn-primary float-right">Save</button>
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
	<!-- Select2 -->
	<script src="<?php echo base_url();?>tools/plugins/select2/js/select2.full.min.js"></script>
	<!-- Page specific script -->
	

	</body>
	</html>
