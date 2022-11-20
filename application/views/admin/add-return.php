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
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">

			<!-- Navbar Start -->

				<?php include('includes/admin/navbar.php'); ?>
				
			<!-- /.navbar End -->

			<!-- Sidebar Start -->

				<?php $m="addreturn"; include('includes/admin/sidebar.php'); ?>

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
						  <li class="breadcrumb-item active"> Add Return</li>
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
							<div class="col-md-6">
								<!-- /.card -->
								<!-- Horizontal Form -->
								<div class="card card-info">
								  <div class="card-header">
									<h3 class="card-title">Return From Customer</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
								  <form class="form-horizontal">
									<div class="card-body">
									  <div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Invoice No </label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="invoiceno" placeholder="Invoice No ">
										</div>
									  </div>
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
									  <button type="submit" class="btn btn-info float-right">Search</button>
									</div>
									<!-- /.card-footer -->
								  </form>
								</div>
								<!-- /.card -->
							</div>
						  <!--/.col (left) -->
						  <!-- right column -->
							<div class="col-md-6">
								<div class="card card-info">
								  <div class="card-header">
									<h3 class="card-title">Return To Manufacturer</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
								  <form class="form-horizontal">
									<div class="card-body">
									  <div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Purchase Id</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="purchaseid" placeholder="Purchase Id">
										</div>
									  </div>
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
									  <button type="submit" class="btn btn-info float-right">Search</button>
									</div>
									<!-- /.card-footer -->
								  </form>
								</div>
							</div>
						  <!--/.col (right) -->
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
