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
									<form>
										<?php foreach($com_creation as $r){?>
										<div class="card-body" >
										
											<div class="row" style="padding-bottom: 52px;">
												<div class="col-4">
												
													<div class="row">
														<div class="col-4">
															<b> <img src="<?php echo base_url();?>tools/upload/<?=$r['image'];?>" style="height: 150px;" alt=""></b>
															
														</div>
														<div class="col-4">
															
															
														</div>
													</div>
													
												</div>

											</div>
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-4">
															<label>Company Name :</label>
															
														</div>
														<div class="col-8">
															
															<b><?=$r['comName'];?></b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label>  Address 1:</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['address1'];?> </b>
														</div>
													</div>
													
												</div>
											</div>
											
											<br>
											
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-2">
															<label>Phone No:</label>
															
														</div>
														<div class="col-10">
															
															<b><?=$r['phone'];?> </b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label> Address 2:</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['address2'];?> </b>
														</div>
													</div>
													
												</div>
											</div>
											
											<br>
											
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-2">
															<label>Email:</label>
															
														</div>
														<div class="col-10">
															
															<b><?=$r['email'];?> </b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label> Address 3:</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['address3'];?> </b>
														</div>
													</div>
													
												</div>
											</div>
											
											
											<br>
											
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-4">
															<label>Website Address:</label>
															
														</div>
														<div class="col-8">
															
															<b><?=$r['webAddress'];?> </b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label> Address 4:</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['address4'];?> </b>
														</div>
													</div>
													
												</div>
											</div>
											
											<br>
											
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-2">
															<label>GST IN:</label>
															
														</div>
														<div class="col-10">
															
															<b><?=$r['gstin'];?> </b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label> Date:</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['date'];?> </b>
														</div>
													</div>
													
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-2">
															<label>D.L No:</label>
															
														</div>
														<div class="col-10">
															
															<b><?=$r['dl_no'];?> </b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label> Expiry Date:</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['exp1'];?> </b>
														</div>
													</div>
													
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-2">
															<label>Mfg.Lic.No :</label>
															
														</div>
														<div class="col-10">
															
															<b><?=$r['mfg_lic_no'];?> </b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label> Expiry Date:</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['exp2'];?> </b>
														</div>
													</div>
													
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-2">
															<label>Service Tax :</label>
															
														</div>
														<div class="col-10">
															
															<b><?=$r['service_tax'];?> </b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label>Expiry Date:</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['exp3'];?> </b>
														</div>
													</div>
													
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-2">
															<label>Jurisdiction :</label>
															
														</div>
														<div class="col-10">
															
															<b><?=$r['Jurisdiction'];?></b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label>Country :</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['country'];?></b>
														</div>
													</div>
													
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
												
													<div class="row">
														<div class="col-4">
															<label>Business Type :</label>
															
														</div>
														<div class="col-8">
															
															<b><?=$r['business_type'];?></b>
														</div>
													</div>
													
												</div>
												
												<div class="col-6">

													<div class="row">
														<div class="col-3">
															<label>Financial Year :</label>
															
														</div>
														<div class="col-9">
															
															<b><?=$r['financial_year'];?></b>
														</div>
													</div>
													
												</div>
											</div>
						
										</div>
										<!-- /.card-body -->
										
										<div class="modal-footer">
											
											<a href="<?php echo base_url()?>index.php/admin_controller/edit_company_creation/<?=$r['id'];?>" class="btn btn-success float-right">Edit</a>  
											<!--   <button type="submit" class="btn btn-primary float-right">Edit</button> -->
											<?php } ?>
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
