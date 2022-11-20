	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!--<title>AdminLTE 3 | General Form Elements</title>-->
	  <title>Contra Voucher</title>
	  <link rel=icon href="<?php echo base_url();?>/tools/dist/img/LargeLogo.png" sizes="20x20" type="image/png">
	  <!-- Google Font: Source Sans Pro -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/fontawesome-free/css/all.min.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/dist/css/adminlte.min.css">
	  
	  <style>
	  
		
	  </style>
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">

			<!-- Navbar Start -->

				<?php include('includes/admin/navbar.php'); ?>
				
			<!-- /.navbar End -->

			<!-- Sidebar Start -->

				<?php $m="contravoucher"; include('includes/admin/sidebar.php'); ?>

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
						  <li class="breadcrumb-item active">Contra Voucher</li>
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
									<h3 class="card-title">Contra Voucher</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
									<form action="<?php echo base_url();?>index.php/admin_controller/addmedicinedo" method="POST" enctype="multipart/form-data">
										<div class="card-body">
										
										
											
											<div class="row">
												<div class="col-6">
													<label>Voucher No :</label>
													<input type="text" class="form-control" Name="voucherno" readonly>
												</div>
												<div class="col-6">
													<label for="exampleInputDate">Date</label>
														<input type="Date" class="form-control" id="exampleInputDate" name="date" placeholder="Enter Date"  required>
												</div>
											</div>
											<br>
											
											<div class="row">
												<div class="col-6">
													<label>Remark :</label>
													<textarea type="text" class="form-control" id="remark" name="remark" placeholder="remark" required=""></textarea>									
												</div>
											</div>

											<br>
											
							
											<div class="table-responsive">
												<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
													<thead>
														<tr>
														   
														  <th>Account Name</th>
														  <th>Code</th>
														  <th>Debit</th>
														  <th>Credit</th>
														  <th>Action</th>

														</tr>
													</thead>
												   
													<tbody>
														<tr>
															<td>
																<select class="form-control" name="leaftype" id="leaftype">
																<option value="">select one</option>
																</select>
															</td>
															<td><input type="text" class="text-right form-control" name="code" placeholder="" readonly="readonly"></td>
															<td><input type="text" class="text-right form-control" name="debit" placeholder="0.00" ></td>
															<td><input type="text" class="text-right form-control" name="cfredit" placeholder="0.00" ></td>
															<td class="text-left">
																<div class="btn-group btn-group-sm">
																	<a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-right" colspan="2"><b>Total:</b></td>
															<td class="text-right">
															<input type="text" id="sub_total" class="text-right form-control" name="sub_total" placeholder="0.00" readonly="readonly">
															</td>
															<td class="text-right">
															<input type="text" id="sub_total" class="text-right form-control" name="sub_total" placeholder="0.00" readonly="readonly">
															</td>
															<td></td>
															
														</tr>
														
															
													</tbody>
												</table>
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
