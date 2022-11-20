	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!--<title>AdminLTE 3 | General Form Elements</title>-->
	  <title>Edit HSN/SAC</title>
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

				<?php $m="hsnlist"; include('includes/admin/sidebar.php'); ?>

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
						  <li class="breadcrumb-item active"> Edit HSN/SAC</li>
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
									<h3 class="card-title">Edit HSN/SAC</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
									<form action="<?php echo base_url();?>index.php/admin_controller/edit_hsn_do" method="POST">
										<?php foreach($edit_hsn as $r){?>
								
											<input type="hidden" class="form-control form-control-user" id="id" name="id" value="<?=$r['id'];?>">
										<div class="card-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>HSN/SAC</label>
														<input type="text" class="form-control" id="hac" name="hac" value="<?=$r['hac'];?>">
													</div>
													<div class="form-group">
														<label>Short Name</label>
														<input type="text" class="form-control" id="shortName" name="shortName" value="<?=$r['shortName'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>SGST % </label>
														<input type="text" class="form-control" id="sgst" name="sgst" value="<?=$r['sgst'];?>">
													</div>
													<div class="form-group">
														<label>CGST %</label>
														<input type="text" class="form-control" id="cgst" name="cgst" value="<?=$r['cgst'];?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>IGST %</label>
														<input type="text" class="form-control" id="igst" name="igst" value="<?=$r['igst'];?>">
													</div>
													<div class="form-group">
														<label>Type</label>
														<input type="text" class="form-control" id="type" name="type" value="<?=$r['type'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>UNIT</label>
														<input type="tel" class="form-control" id="unit" name="unit" value="<?=$r['unit'];?>">
													</div>
													<div class="form-group">
														<label>CESS</label>
														<input type="text" class="form-control" id="cess" name="cess" value="<?=$r['cess'];?>">
													</div>
												</div>
											</div>
											<?php } ?>
											<button type="submit" id="send" class="btn btn-primary">Edit</button>
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
