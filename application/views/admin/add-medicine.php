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

				<?php $m="addmedicine"; include('includes/admin/sidebar.php'); ?>

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
						  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/lead">Medicine</a></li>
						  <li class="breadcrumb-item active"> Add Medicine</li>
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
									<h3 class="card-title">Add Medicine</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
									<form action="<?php echo base_url();?>index.php/admin_controller/addmedicinedo" method="POST" enctype="multipart/form-data">
										<div class="card-body">
										
										
											<div class="row">
											
												<div class="col-md-6">
													<div class="form-group">
														<label>Bar Code/QR Code</label>
														<input type="text" class="form-control" id="barcode" name="barcode" placeholder="Bar Code/QR Code" >
													</div>
													<div class="form-group">
														<label>Strength </label>
														<input type="text" class="form-control" id="strength" name="strength" placeholder="Strength" >
													</div>
												</div>
												
												<div class="col-md-6">
													<div class="form-group">
														<label>Medicine Name</label>
														<input type="text" class="form-control" id="medicinename" name="medicinename" placeholder="Medicine Name" >
													</div>
													<div class="form-group">
														<label>Generic Name</label>
														<input type="text" class="form-control" id="genericname" name="genericname" placeholder="Generic Name">
													</div>
												</div>
												
											</div>
											
											
											<div class="row">
											
												<div class="col-md-6">
													<div class="form-group">
														<label>Box Size </label>
														<select class="form-control" name="boxsize" id="boxsize">
														  <option value="">Select Leaf Pattern</option>
														  
														  <?php foreach ($leaf_settings as $leaf_settings){?>
														  <option value="<?=$leaf_settings['leaf_type'],$leaf_settings['total_num'];?>"><?=$leaf_settings['leaf_type'],"(",$leaf_settings['total_num'],")";?></option>
															<?php } ?>
															
														</select>
													</div>
													<div class="form-group">
														<label>Shelf</label>
														<input type="text" class="form-control" id="shelf" name="shelf" placeholder="Shelf">
													</div>
												</div>
												
												<div class="col-md-6">
													<div class="form-group">
														<label>Unit </label>
														<select class="form-control" name="selectunit" id="selectunit">
														  <option value="">Select unit</option>
														  
														  <?php foreach ($Select_unit as $Select_unit){?>
														  <option value="<?=$Select_unit['unit_name'],",",$Select_unit['id']; ?>"><?=$Select_unit['unit_name']; ?></option>
														  <?php } ?>
														  
														</select>
													</div>
													<div class="form-group">
														<label>Medicine Details</label>
														<input type="text" class="form-control" id="medicinedetails" name="medicinedetails" placeholder="Medicine Details">
													</div>
												</div>
												
											</div>
											
											
											<div class="row">
											
												<div class="col-md-6">
													<div class="form-group">
														<label>Category</label>
														<select class="form-control" name="selectcategory" id="selectcategory">
																<option value="">Select Category</option>
																
															<?php foreach ($Select_Category as $Select_Category){?>
																<option value="<?=$Select_Category['category_name']; ?>"><?=$Select_Category['category_name']; ?></option>
															<?php } ?>	
															
														</select>
													</div>
													<div class="form-group">
														<label>Medicine Type</label>
														<select class="form-control" name="selectmedicine" id="selectmedicine">
														  <option value="">Select Type</option>
														  
														  <?php foreach ($Select_medicine as $Select_medicine){?>
																<option value="<?=$Select_medicine['type_name']; ?>"><?=$Select_medicine['type_name']; ?></option>
															<?php } ?>	
															
														</select>
													</div>
												</div>
										
												<div class="col-md-6">
													<div class="form-group">
														<label>Price </label>
														<input type="number" class="form-control" id="price" name="price" placeholder="Price" >
													</div>
													<div>
													   <label> Image</label>
													   <div class="input-group">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="image" name="image">
																<label class="custom-file-label" for="exampleInputFile">Choose file</label>
															</div>
														</div>
													</div>
												</div>
												
											</div>
											
											
											<div class="row">
											
												<div class="col-md-6">
													<div class="form-group">
														<label>Manufacturer</label>
														<select class="form-control" name="selectmanufacturer" id="selectcategory">
														  <option value="">Select Manufacturer</option>
														  
														  <?php foreach ($Select_manufacturer as $Select_manufacturer){?>
																<option value="<?=$Select_manufacturer['manufacturer_name']; ?>"><?=$Select_manufacturer['manufacturer_name']; ?></option>
															<?php } ?>	

														</select>
													</div>
												</div>
												
												<div class="col-md-6">
													<div class="form-group">
														<label>Manufacturer Price </label>
														<input type="number" class="form-control" id="balance" name="balance" placeholder="Manufacturer Price" >
													</div>
												</div>
												
											</div>
											
											
											<div class="row">
											
												<div class="col-md-6">
													<div class="form-group">
														<label>Status:</label>
														<div class="custom-control custom-radio">
															  <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="active" checked>
															  <label for="customRadio1" class="custom-control-label">Active</label>
														</div>
														
														<div class="custom-control custom-radio">
															  <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="inactive">
															  <label for="customRadio2" class="custom-control-label">Inactive</label>
														</div>
													</div>
												</div>
												
											</div>
											
											
										</div>
										<!-- /.card-body -->

										<div class="card-footer">
										  <button type="submit" class="btn btn-primary">Submit</button>
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
