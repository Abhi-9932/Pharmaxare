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
	  
	  <style>
	  
		
	  </style>
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">

			<!-- Navbar Start -->

				<?php include('includes/admin/navbar.php'); ?>
				
			<!-- /.navbar End -->

			<!-- Sidebar Start -->

				<?php $m="addinvoice"; include('includes/admin/sidebar.php'); ?>

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
						  <li class="breadcrumb-item active"> Add Invoice</li>
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
									<h3 class="card-title">Add Invoice</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
									<form action="<?php echo base_url();?>index.php/admin_controller/addmedicinedo" method="POST" enctype="multipart/form-data">
										<div class="card-body">
										
										
											
											<div class="row">
											
												<div class="col-md-6">
													<div class="form-group">
														<label>Customer Name:</label>
														<input type="text" class="form-control" id="cusName" name="cusName" placeholder="Customer Name">
													</div>
													<div class="form-group">
														<label>Invoice No :</label>
														<input type="text" class="form-control" id="invoice" name="invoice" placeholder="Invoice No">
													</div>
												</div>
												
												<div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputDate">Date:</label>
														<input type="Date" class="form-control" id="date" name="date" placeholder="Enter Date"  required>
													</div>
													<div class="form-group">
														<label>Details:</label>
														<input type="text" class="form-control" id="Details" name="Details" placeholder="Details">
													</div>
												</div>
												
											</div>
											
											
											<div class="row">
											
												<div class="col-md-6">
													<div class="form-group">
														<label>Payment Type</label>
														<select class="form-control" name="paymenttype" id="paymenttype">
																<option value="">Select Payment Type</option>
														</select>
													</div>
													<div class="form-group">

													</div>
												</div>
										
												<div class="col-md-6">
													<div class="form-group">
														<label>Bank</label>
														<select class="form-control" name="bank" id="bank">
														  <option value="">Select Bank</option>
														</select>
													</div>
													<div>

													</div>
												</div>
											
											</div>
											
							
											<div class="table-responsive">
													<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
														<thead>
															<tr>
															   
															  <th>Medicine Information*</th>
															  <th>Batch</th>
															  <th>Avail Qty</th>
															  <th> Expiry Date*</th>
															  <th>Unit</th>
															  <th>Quantity</th>
															  <th>Box Qty*</th>
															  <th>Price</th>
															  <th>Discount %</th>
															  <th>Total</th>
															  <th>Action</th>

															</tr>
														</thead>
													   
														<tbody>
															<tr>
																<td><input type="text" class="text-right form-control" name="medicinename" placeholder="Medicine Name"></td>
																<td><input type="text" class="text-right form-control" name="batchid" placeholder="Batch Id"></td>
																<td><input type="text" class="text-right form-control" name="availqty" placeholder="0" readonly="readonly"></td>
																<td><input type="Date" class="text-right form-control" name="expirydate" placeholder=""></td>
																<td><input type="text" class="text-right form-control" name="unit" placeholder="" readonly="readonly"></td>
																<td><input type="text" class="text-right form-control" name="quantity" placeholder=""></td>
																<td><input type="text" class="text-right form-control" name="boxqty" placeholder="0.00" readonly="readonly"></td>
																<td><input type="text" class="text-right form-control" name="price" placeholder="0.00"></td>
																<td><input type="text" class="text-right form-control" name="discount" placeholder="0.00"></td>
																<td><input type="text" class="text-right form-control" name="total " placeholder="0.00" readonly="readonly"></td>
																
																<td class="text-right py-0 align-middle">
																  <div class="btn-group btn-group-sm">
																	<a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
																  </div>
																</td>
															</tr>
															
															<tr>
																<td class="text-right" colspan="9"><b>Invoice Discount:</b></td>
																<td class="text-right">
																	<input type="text" id="vat" class="text-right form-control valid_number" name="vat" placeholder="0.00">
																</td>
																<td>
															  
																</td>
															</tr>
															<tr>
																<td class="text-right" colspan="9"><b>Total Discount:</b></td>
																<td class="text-right">
																<input type="text" id="sub_total" class="text-right form-control" name="sub_total" placeholder="0.00" readonly="readonly">
																</td>
																<td></td>
															</tr>
															<tr>
																<td class="text-right" colspan="9"><b>CGST:</b></td>
																<td class="text-right">
																	<input type="text" id="vat" class="text-right form-control valid_number" name="cgst" placeholder="0.00" readonly="readonly">
																</td>
																<td>
															  
																</td>
															</tr>
															<tr>
																<td class="text-right" colspan="9"><b>SGST:</b></td>
																<td class="text-right">
																	<input type="text" id="vat" class="text-right form-control valid_number" name="sgst" placeholder="0.00" readonly="readonly">
																</td>
																<td>
															  
																</td>
															</tr>
															<tr>
																<td class="text-right" colspan="9"><b>IGST:</b></td>
																<td class="text-right">
																	<input type="text" id="vat" class="text-right form-control valid_number" name="igst" placeholder="0.00" readonly="readonly">
																</td>
																<td>
															  
																</td>
															</tr>
															<tr>
															
																<td class="text-right" colspan="9"><b>Total GST:</b></td>
																<td class="text-right">
																	<input type="text" id="discount" class="text-right form-control valid_number" name="discount" placeholder="0.00" readonly="readonly">
																</td>
																<td>
															  
																</td>
															</tr>
															<tr>
																
																<td class="text-right" colspan="9"><b>Grand Total:</b></td>
																<td class="text-right">
																	<input type="text" id="grandTotal" class="text-right form-control" name="grand_total_price" placeholder="0.00" readonly="readonly">
																</td>
																<td>
															   
																</td>
															</tr>
															<tr>
																
																<td class="text-right" colspan="9"><b>Net Total:</b></td>
																<td class="text-right">
																	<input type="text" id="paid_amount" class="text-right form-control valid_number" name="paid_amount" placeholder="0.00" readonly="readonly">
																</td>
																<td>
															   
																</td>
															</tr>
															<tr>
																
																<td class="text-right" colspan="9"><b>Paid Amount:</b></td>
																<td class="text-right">
																	<input type="text" id="due_amount" class="text-right form-control" name="due_amount" placeholder="0.00" >
																</td>
																<td>
															   
																</td>
															</tr>
															<tr>
																
																<td class="text-right" colspan="9"><b>Due Amount:</b></td>
																<td class="text-right">
																	<input type="text" id="due_amount" class="text-right form-control" name="due_amount" placeholder="0.00" readonly="readonly">
																</td>
																<td>
															   
																</td>
															</tr>
														</tbody>
													</table>
											</div>
										</div>
										<!-- /.card-body -->

										<div class="modal-footer">
											<button type="button" class="btn btn-warning float-right">Full Paid</button>
											<button type="button" class="btn btn-primary float-right">Save</button>
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
