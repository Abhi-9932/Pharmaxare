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

				<?php $m="companylist"; include('includes/admin/sidebar.php'); ?>

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
						  <li class="breadcrumb-item active"> Edit Company</li>
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
									<h3 class="card-title">Edit Company</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
									<form action="<?php echo base_url();?>index.php/admin_controller/edit_company_do" method="POST">
										<?php foreach($edit_company as $r){?>
								
											<input type="hidden" class="form-control form-control-user" id="id" name="id" value="<?=$r['id'];?>">
											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Company Name</label>
															<input type="text" class="form-control" id="companyName" name="companyName" value="<?=$r['cname'];?>">
														</div>
														<div class="form-group">
															<label>Prefrences</label>
															<input type="text" class="form-control" id="prefrences" name="prefrences" value="<?=$r['prefrences'];?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Invoice Printing </label>
															<input type="text" class="form-control" id="invPrint" name="invPrint" value="<?=$r['invprint'];?>">
														</div>
														<div class="form-group">
															<label>Order Form</label>
															<input type="text" class="form-control" id="order1" name="order1" value="<?=$r['order1'];?>">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Dump Days</label>
															<input type="text" class="form-control" id="dumpDay" name="dumpDay" value="<?=$r['dumpDay'];?>">
														</div>
														<div class="form-group">
															<label>Minimum Margin</label>
															<input type="text" class="form-control" id="minMargin" name="minMargin" value="<?=$r['minMargin'];?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Expiry Receive Upto</label>
															<input type="tel" class="form-control" id="receive" name="receive" value="<?=$r['receive'];?>">
														</div>
														<div class="form-group">
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Sales Tax %</label>
															<input type="text" class="form-control" id="salesTax" name="salesTax" value="<?=$r['salesTax'];?>">
														</div>
														<div class="form-group">
															<label>Purchase Tax %</label>
															<input type="text" class="form-control" id="purchaseTax" name="purchaseTax" value="<?=$r['purchaseTax'];?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>CESS</label>
															<input type="text" class="form-control" id="cess1" name="cess1" value="<?=$r['cess1'];?>">
														</div>
														<div class="form-group">
															<label>CESS</label>
															<input type="text" class="form-control" id="cess2" name="cess2" value="<?=$r['cess2'];?>">
														</div>
													</div>
												</div>
												<?php } ?>
												<button type="submit" class="btn btn-primary">Edit</button>
											</div>
										<!-- /.card-body -->
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


		<script>
			//for date -->
		var today = new Date();
		var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
		document.getElementById("currentDate").value = date;
		
		
		//for time -->
		const formatAMPM = (date) => {
			var hours = date.getHours();
			var minutes = date.getMinutes();
			var ampm = hours >= 12 ? 'pm' : 'am';
			hours = hours % 12;
			hours = hours ? hours : 12; // the hour '0' should be '12'
			hours = hours < 10 ? '0'+hours : hours;
			minutes = minutes < 10 ? '0'+minutes : minutes;
			var strTime = hours + ':' + minutes + ' ' + ampm;
			return strTime;
		}
		//console.log(formatAMPM(new Date));
		document.getElementById("currentTime").value = formatAMPM(new Date);
		
		</script>

	</body>
	</html>
