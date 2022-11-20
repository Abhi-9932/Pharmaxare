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
						  <li class="breadcrumb-item active"> Add Inventory</li>
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
									<h3 class="card-title">Add Inventory</h3>
								  </div>
								  <!-- /.card-header -->
								  <!-- form start -->
									<form action="<?php echo base_url();?>index.php/admin_controller/inventorydo" method="POST">
										<div class="card-body">
										
											<div class="row">
												<div class="col-4">
														<label>Status :</label>
														<select class="form-control" name="status" style="width: 100%;">
															<option value="" selected="selected">selected Status</option>
															<option>Continue</option>
															<option>Close</option>
														</select>
												</div>
												<div class="col-4">
														<label>Type :</label>
														<select class="form-control" name="type" style="width: 100%;">
															<option value="" selected="selected">selected Type</option>
															<option>Normal</option>
															<option>Prohibited</option>
														</select>
												</div>
												<div class="col-4">
														<label>Hide :</label>
														<select class="form-control" name="hide" style="width: 100%;">
															<option value="" selected="selected">selected Hide</option>
															<option>No</option>
															<option>Yes</option>
														</select>
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-4">
													<label>Product :</label>
													<input type="text" class="form-control" Name="product" placeholder="Product">
												</div>
												<div class="col-4">
													<label>Packing :</label>
													<input type="text" class="form-control" Name="packing" placeholder="Packing">
												</div>
												<div class="col-4">
														<label>Ask Dose :</label>
														<select class="form-control" name="askdose" style="width: 100%;">
															<option value="" selected="selected">selected Dose</option>
															<option>No</option>
															<option>Medicine</option>
															<option>Opticale</option>
															<option>Remarks</option>
														</select>
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-4">
													<label>Unit 1st :</label>
													<input type="text" class="form-control" Name="unit1" placeholder="unit1st">
												</div>
												<div class="col-4">
													<label>Unit 2nd :</label>
													<input type="text" class="form-control" Name="unit2" placeholder="unit2nd">
												</div>
												<div class="col-4">
													<label>Decimal :</label>
													<select class="form-control" name="decimal1" style="width: 100%;">
														<option value="" selected="selected">selected decimal</option>
														<option>No</option>
														<option>Yes</option>
													</select>
												</div>
											</div>
											
											<br>
											
											
											<div class="row">
												<div class="col-6">
													<label>Color Type :</label>
													<select class="form-control" name="colortype" style="width: 100%;">
														<option value="" selected="selected">selected Color</option>
														<option>Normal</option>
														<option>Red</option>
														<option>Blue</option>
														<option>Green</option>
														<option>Purple</option>
													</select>
												</div>
												<div class="col-6">
													<label>Item Type :</label>
													<select class="form-control" name="itemtype" style="width: 100%;">
														<option value="" selected="selected">selected item</option>
														<option>Normal1</option>
														<option>Normal2</option>
													</select>
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
													<label>Company :</label>
													<a href="" class="btn btn-success for-addbtn" data-toggle="modal" data-target="#companyAdd">Add</a>
													<select class="form-control select2" id="selectListCmpny" name="company" style="width: 100%;">
														<option selected="selected">selected company</option>
													</select>
												</div>
												<div class="col-6">
													<label>Salt :</label>
													<a href="" class="btn btn-success for-addbtn" data-toggle="modal" data-target="#saltAdd">Add</a>
													<select class="form-control select2" id="selectListSalt" name="salt" style="width: 100%;">
														<option selected="selected">selected item</option>
														
													</select>
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-6">
													<label>Category :</label>
													<a href="" class="btn btn-success for-addbtn" data-toggle="modal" data-target="#categoryAdd">Add</a>
													<select class="form-control select2" id="selectListCategory" name="category" style="width: 100%;">
														<option selected="selected">selected category</option>

													</select>
												</div>
												<div class="col-6">
													<label>HSN/SAC :</label>
													<a href="" class="btn btn-success for-addbtn" data-toggle="modal" data-target="#hsnAdd">Add</a>
													<select class="form-control select2" id="selectListHsn" name="hsn/sac" style="width: 100%;">
														<option selected="selected">selected item</option>
														
													</select>
												</div>
											</div>
											
											<br><hr><br>
											
											<div class="row">
												<div class="col-4">
														<label>Local :</label>
														<select class="form-control" name="local" style="width: 100%;">
															<option value="" selected="selected">selected Local</option>
															<option>Taxable</option>
															<option>Close</option>
														</select>
												</div>
												<div class="col-4">
														<label>SGST :</label>
														<input type="text" class="form-control" Name="sgst" placeholder="0.00">
												</div>
												<div class="col-4">
														<label>CGST :</label>
														<input type="text" class="form-control" Name="cgst" placeholder="0.00">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-4">
														<label>Central :</label>
														<select class="form-control" name="central" style="width: 100%;">
															<option value="" selected="selected">selected central</option>
															<option>Taxable</option>
															<option>Close</option>
														</select>
												</div>
												<div class="col-4">
														<label>IGST :</label>
														<input type="text" class="form-control" Name="igst" placeholder="0.00">
												</div>
												<div class="col-4">
														<label>C.G.R :</label>
														<input type="text" class="form-control" Name="cgr" placeholder="0.00">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-4">
														<label>M.R.P :</label>
														<input type="text" class="form-control" Name="mrp" placeholder="0.00">
												</div>
												<div class="col-4">
														<label>P.RATE :</label>
														<input type="text" class="form-control" Name="prate" placeholder="0.00">
												</div>
												<div class="col-4">
														<label>COST/INJ :</label>
														<input type="text" class="form-control" Name="cost" placeholder="0.00">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-4">
														<label>Rate-A :</label>
														<input type="text" class="form-control" Name="ratea" placeholder="0.00">
												</div>
												<div class="col-4">
														<label>Rate-B :</label>
														<input type="text" class="form-control" Name="rateb" placeholder="0.00">
												</div>
												<div class="col-4">
														<label>Rate-C :</label>
														<input type="text" class="form-control" Name="ratec" placeholder="0.00">
												</div>
											</div>
											
											<br>
											
											<div class="row">
												<div class="col-4">
														<label>CONV.INJ :</label>
														<input type="text" class="form-control" Name="convinj" placeholder="0.00">
												</div>
												<div class="col-4">
														<label>CONV.CAS :</label>
														<input type="text" class="form-control" Name="convcas" placeholder="0.00">
												</div>
												<div class="col-4">
														<label>NEGATIVE :</label>
														<select class="form-control" name="negative" style="width: 100%;">
															<option value="" selected="selected">selecte</option>
															<option>No</option>
															<option>Yes</option>
														</select>
												</div>
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
				 
			<!-- Modal Start for company-->
									
					<div class="modal fade" id="companyAdd">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class=" btn-primary modal-header">
								  <h4 class="modal-title">Add Company</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								</div>
								
								<div class="modal-body">
									
										<form  id="addCompany">
											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Company Name</label>
															<input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company Name" >
														</div>
														<div class="form-group">
															<label>Prefrences</label>
															<input type="text" class="form-control" id="prefrences" name="prefrences" placeholder="Prefrences">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Invoice Printing </label>
															<input type="text" class="form-control" id="invPrint" name="invPrint" placeholder="Invoice Printing">
														</div>
														<div class="form-group">
															<label>Order Form</label>
															<input type="text" class="form-control" id="order1" name="order1" placeholder="Order Form">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Dump Days</label>
															<input type="text" class="form-control" id="dumpDay" name="dumpDay" placeholder="0" >
														</div>
														<div class="form-group">
															<label>Minimum Margin</label>
															<input type="text" class="form-control" id="minMargin" name="minMargin" placeholder="0.00" >
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Expiry Receive Upto</label>
															<input type="tel" class="form-control" id="receive" name="receive" placeholder="0" >
														</div>
														<div class="form-group">
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Sales Tax %</label>
															<input type="text" class="form-control" id="salesTax" name="salesTax" placeholder="0.00" >
														</div>
														<div class="form-group">
															<label>Purchase Tax %</label>
															<input type="text" class="form-control" id="purchaseTax" name="purchaseTax" placeholder="0.00">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>CESS</label>
															<input type="text" class="form-control" id="cess1" name="cess1" placeholder="0.00">
														</div>
														<div class="form-group">
															<label>CESS</label>
															<input type="text" class="form-control" id="cess2" name="cess2" placeholder="0.00">
														</div>
													</div>
												</div>
												<button type="submit" id="send" class="btn btn-primary">Submit</button>
											</div>
											<!-- /.card-body -->
										</form>
										<div class="modal-footer">
											<button type="button" id="cmpnyCloseModalBtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Modal End for company-->
				
				
		<!-- Modal Start for Category-->
									
					<div class="modal fade" id="categoryAdd">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class=" btn-primary modal-header">
								  <h4 class="modal-title">Add Category</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form  id="addcategory">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>Category Name</label>
														<input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category Name" >
													</div>
													<div class="form-group">
														<label>Minimum Margin</label>
														<input type="text" class="form-control" id="minMargin" name="minMargin" placeholder="0.00">
													</div>
												</div>
											</div>
											<button type="submit" id="send" class="btn btn-primary">Submit</button>
										</div>
										<!-- /.card-body -->
									</form>
									<div class="modal-footer">
										<button type="button" id="categoryCloseModalBtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Modal End for Category-->
				
				
				<!-- Modal Start for salt-->
					<div class="modal fade" id="saltAdd" tabindex="-1" role="dialog" aria-labelledby="saltAddTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="saltAddTitle">Add Salt</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form  id="addsalt">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label>New Salt</label>
														<input type="text" class="form-control" id="newSalt" name="newSalt" placeholder="New Salt" >
													</div>
												</div>
											</div>
											<button type="submit" id="send" class="btn btn-primary">Submit</button>
										</div>
										<!-- /.card-body -->
									</form>
									<div class="modal-footer">
										<button type="button" id="saltCloseModalBtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Modal End for salt-->
				
				
				<!-- Modal Start for HSN/SAC-->
							
			<div class="modal fade" id="hsnAdd">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class=" btn-primary modal-header">
						  <h4 class="modal-title">Add HSN/SAC</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
				
							<form  id="addhsn">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>HSN/SAC</label>
												<input type="text" class="form-control" id="hac" name="hac" placeholder="" >
											</div>
											<div class="form-group">
												<label>Short Name</label>
												<input type="text" class="form-control" id="shortName" name="shortName" placeholder="Short Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>SGST % </label>
												<input type="text" class="form-control" id="sgst" name="sgst" placeholder="0.00">
											</div>
											<div class="form-group">
												<label>CGST %</label>
												<input type="text" class="form-control" id="cgst" name="cgst" placeholder="0.00">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>IGST %</label>
												<input type="text" class="form-control" id="igst" name="igst" placeholder="0.00" >
											</div>
											<div class="form-group">
												<label>Type</label>
												<input type="text" class="form-control" id="type" name="type" placeholder="Type" >
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>UNIT</label>
												<input type="tel" class="form-control" id="unit" name="unit" placeholder="" >
											</div>
											<div class="form-group">
												<label>CESS</label>
												<input type="text" class="form-control" id="cess" name="cess" placeholder="0.00" >
											</div>
										</div>
									</div>

									<button type="submit" id="send" class="btn btn-primary">Submit</button>
								</div>
								<!-- /.card-body -->
							</form>
							<div class="modal-footer">
								<button type="button" id="hsnCloseModalBtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal End for HSN/SAC-->
				
				
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
	

		
	<script type="text/javascript">
		$(function(){
			$('.select2').select2()
		});
		
			// Fetch All Company
		$(document).ready(function(){
			$.ajax({
				url: '<?php echo base_url();?>index.php/admin_controller/getAllCmpny',
				dataType: 'json',
				//method: 'POST',
				success: function(result){
					result.forEach(function(key, value){
						//console.log(key);
						var o = new Option(key, key);
						$(o).html(key);
						$("#selectListCmpny").append(o);
					})	
				}
			});
		});
		
			//submit add Company
		$(document).ready(function(){
			
			$('#addCompany').submit(function(e){
				e.preventDefault();
				var user = $('#addCompany').serialize();
					$.ajax({
						method: 'POST',
						url: "<?php echo base_url();?>index.php/admin_controller/companydo",
						data: user,
						success:function(result){
							//console.log(result);
							$('#cmpnyCloseModalBtn').trigger('click');
							$('#selectListCmpny').append($("<option selected></option>").attr("value", result).text(result)); 
						}
					});
			});

		});
		
			// Fetch All category
		$(document).ready(function(){
			$.ajax({
				url: '<?php echo base_url();?>index.php/admin_controller/getAllcategory',
				dataType: 'json',
				//method: 'POST',
				success: function(result){
					result.forEach(function(key, value){
						//console.log(key);
						var o = new Option(key, key);
						$(o).html(key);
						$("#selectListCategory").append(o);
					})	
				}
			});
		});
		
			//submit add category
		$(document).ready(function(){
			
			
			$('#addcategory').submit(function(e){
				e.preventDefault();
				var user = $('#addcategory').serialize();
					$.ajax({
						method: 'POST',
						url: "<?php echo base_url();?>index.php/admin_controller/categorydo",
						data: user,
						success:function(result){
							//console.log(result);
							$('#categoryCloseModalBtn').trigger('click');
							$('#selectListCategory').append($("<option selected></option>").attr("value", result).text(result)); 
						}
					});
			});

		});
		
			// Fetch All Salt
		$(document).ready(function(){
			$.ajax({
				url: '<?php echo base_url();?>index.php/admin_controller/getAllsalt',
				dataType: 'json',
				//method: 'POST',
				success: function(result){
					result.forEach(function(key, value){
						//console.log(key);
						var o = new Option(key, key);
						$(o).html(key);
						$("#selectListSalt").append(o);
					})	
				}
			});
		});
		
			//submit add Salt
		$(document).ready(function(){
			
			
			$('#addsalt').submit(function(e){
				e.preventDefault();
				var user = $('#addsalt').serialize();
					$.ajax({
						method: 'POST',
						url: "<?php echo base_url();?>index.php/admin_controller/saltdo",
						data: user,
						success:function(result){
							//console.log(result);
							$('#saltCloseModalBtn').trigger('click');
							$('#selectListSalt').append($("<option selected></option>").attr("value", result).text(result)); 
						}
					});
			});

		});
		
			// Fetch All HSN/SAC
		$(document).ready(function(){
			$.ajax({
				url: '<?php echo base_url();?>index.php/admin_controller/getAllhsn',
				dataType: 'json',
				//method: 'POST',
				success: function(result){
					result.forEach(function(key, value){
						//console.log(key);
						var o = new Option(key, key);
						$(o).html(key);
						$("#selectListHsn").append(o);
					})	
				}
			});
		});
		
			//submit add HSN/SAC
		$(document).ready(function(){
			
			
			$('#addhsn').submit(function(e){
				e.preventDefault();
				var user = $('#addhsn').serialize();
					$.ajax({
						method: 'POST',
						url: "<?php echo base_url();?>index.php/admin_controller/hsndo",
						data: user,
						success:function(result){
							//console.log(result);
							$('#hsnCloseModalBtn').trigger('click');
							$('#selectListHsn').append($("<option selected></option>").attr("value", result).text(result)); 
						}
					});
			});

		});
		
	</script>

	</body>
	</html>
