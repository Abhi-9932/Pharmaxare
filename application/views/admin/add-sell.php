	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>AdminLTE 3 | Invoice</title>

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
			.forHeightInput
			{
				height: 24px;
			}
			
			.forWidthInput
			{
				width: 80px;
			}
			
			.forWidthInputfree
			{
				width: 50px;
			}
			
			.forMarginInputAndLabel
			{
				margin-top: 7px;
			}
			.forMargin
			{
				margin-bottom: 5px;
				
				width: 450px;

			}
			
			
			.forMargin1
			{
				
				
				width: 618px;

			}
			
			.forMargin2
			{
				
				margin-bottom: 14px;
				width: 150px;

			}
			
			
		</style>
	  
	</head>
	<body class="hold-transition sidebar-mini">
			<div class="wrapper">
				<!-- Navbar Start -->

					<?php include('includes/admin/navbar.php'); ?>
					
				<!-- /.navbar End -->

				<!-- Sidebar Start -->

					<?php $m="addsell"; include('includes/admin/sidebar.php'); ?>

				<!-- Sidebar End  -->

				  <!-- Content Wrapper. Contains page content -->
				<div class="content-wrapper">
					<!-- Content Header (Page header) -->
					<section class="content-header">
						<div class="container-fluid">
							<div class="row mb-2">
								<div class="col-sm-6">
									<h1> </h1>
								</div>
								<div class="col-sm-6">
									<ol class="breadcrumb float-sm-right">
									  <li class="breadcrumb-item"><a href="#">Home</a></li>
									  <li class="breadcrumb-item"><a href="#">Sell</a></li>
									 
									</ol>
								</div>
							</div>
						</div><!-- /.container-fluid -->
					</section>

					<section class="content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">            
									<!-- Main content -->
									<div class="invoice p-3 mb-3">
									
										<div class="form-group">
											<form name="add_name" method="POST" action="<?php echo base_url();?>index.php/Super_admin/testPayment">

											<!-- title row -->
												<div class="row">
													
												  
													<div class="col-sm-6">
														<h4><i class="fas fa-globe"></i> SELL</h4>
													</div>
													<div class="col-sm-6">

													</div>
												  
												
													<!-- /.row -->
												</div>
											  <br>
											  <!-- info row -->
												<div class="row invoice-info">
													<div class="col-sm-6 invoice-col">
													  
														<div class="row">
															<div class="col-sm-3">
																<div class="row forMargin"> <b>Name:</b> </div>
																<div class="row forMargin"> <b>Address:</b> </div>
																<div class="row forMargin"> <b>Invoice No:</b> </div>
															</div>
															<div class="col-sm-9">
																<div class="row forMargin"> <input type="text" name="patName" id="patName" class="form-control forHeightInput" /> </div>
																<div class="row forMargin"> <input type="text" name="patAddress" id="patAddress" class="form-control forHeightInput" /> </div>
																<div class="row forMargin"> <input type="text" name="patMob" id="patMob" class="form-control forHeightInput" /> </div>
															</div>
														</div>
													  
													</div>
													<!-- /.col -->
													
													<!-- /.col -->
													<div class="col-sm-6 invoice-col">
													  
														<div class="row">
															<div class="col-sm-3">
																<div class="row forMargin"><b>Doctor Name:</b> </div>
																<div class="row forMargin"><b>Mob No:</b></div>
																<div class="row forMargin"><b>Invoice Date:</b></div>
																
															</div>
															<div class="col-sm-9">
																<div class="row forMargin"> <input type="text" name="doctorName" id="doctorName" class="form-control forHeightInput" /> </div>
																<div class="row forMargin"> <input type="text" name="invoiceNo" id="invoiceNo" class="form-control forHeightInput" readonly /> </div>
																<div class="row forMargin"> <input type="text" name="date" id="date" class="form-control forHeightInput" readonly /> </div>
																
															</div>
														</div>
													  
													</div>
													<!-- /.col -->
												</div>
											  <!-- /.row -->
										<hr>
												<div class="card card-primary">
													<div class="card-header">
													
													</div>
													<div class="card-body">
																
														<!-- TABLE FOR TESTS REPORT [TABLE 1] -->
															<div class="table-responsive">  
																<table class="table table-bordered" id="dynamic_field" width="100%" cellspacing="0">  
																	<thead>						
																		<tr>
																		 
																		  <th>Sn</th> 
																		  <th>Medicine Name</th>
																		  <th>B.No</th>
																		  <th>Available</th>
																		  <th>EXP</th>
																		  <th>Qty</th>
																		  <th>Free</th>
																		  <th>M.R.P</th>
																		  <th>Rate</th>
																		  <th>Total</th>
																		  <th>Dist%</th>
																		  <th>Taxable</th>
																		  <th>SGST%</th>
																		  <th>CGST%</th>
																		  <th>Amount</th>
																		  <th> </th>
																		   
																		</tr>
																	</thead>
																	<tbody>
																		<tr> 
																			<td><input type="text" name="slNo[]" id="slNo1" class="form-control text-right forHeightInput" /></td>
																			<td style="width: 20%;" class="selectTd">
																				<select class="form-control select2 selectMed" id="1" style="width:100%;" name="medName[]"  onChange="getDetailsBatch($(this).val(),$(this).attr('id'))"  >
																					
																				</select>	
																			</td>
																			<td style="width: 10%;">
																				<select class="form-control select2" name="batchno[]" id= "batchno1" style="width:80%;" onChange="getDetailsBatchNo($(this).val())">
												
																				</select>
																			</td>
																			<td><input type="text" name="avl[]" id="avl1" class="form-control text-right forHeightInput " readonly /></td>
																			<td><input type="text" name="exp[]" id="exp1" class="form-control text-right forHeightInput forWidthInput" readonly /></td>
																			<td><input type="text" name="qty[]" id="qty1"  class="form-control text-right forHeightInput" /></td>
																			<td><input type="text" name="free[]" id="free1" class="form-control text-right forHeightInput" /></td>
																			<td><input type="text" name="mrp[]" id="mrp1" class="form-control text-right forHeightInput forWidthInputfree" readonly /></td>
																			<td><input type="text" name="rate[]" id="rate1" class="form-control text-right forHeightInput"  /></td>
																			<td><input type="text" name="total[]" id="total1" class="form-control text-right forHeightInput" /></td>
																			<td><input type="text" name="discount[]" id="discount1" class="form-control text-right forHeightInput" /></td>
																			<td><input type="text" name="tax[]" id="tax1" class="form-control text-right forHeightInput" /></td>
																			<td><input type="text" name="sgst[]" id="sgst1" class="form-control text-right forHeightInput" readonly /></td>
																			<td><input type="text" name="cgst[]" id="cgst1" class="form-control text-right forHeightInput" readonly /></td>
																			<td><input type="text" name="amount[]" id="amount1" class="form-control text-right forHeightInput" readonly /></td>
																			<td><button type="button" name="add" id="add" class="btn btn-success btn-sm">Add </button></td>  
																		</tr> 
																	</tbody>
																</table>
															</div>
															

															<!-- /.row -->
															<div class="row">
																<!-- accepted payments column -->
																<div class="col-8">
																	
																		
																</div>
																<!-- /.col -->
																<div class="col-4">
																	<div class="table-responsive">
																		<table class="table">
																		  <tr>
																			<th style="width:50%">Total Amount:</th>
																			<td><input type="text" name="totalAmt" id="totalAmt" class="form-control text-right forHeightInput" /></td>
																		  </tr>
																		  <tr>
																			<th>Deposite Amount:</th>
																			<td><input type="text" name="deposite" class="form-control text-right forHeightInput" /></td>
																		  </tr>
																		  <tr>
																			<th>Due Amount:</th>
																			<td><input type="text" name="due" class="form-control text-right forHeightInput" /></td>
																		  </tr>
																		</table>
																	</div>
																</div>
																<!-- /.col -->
															</div>
															<!-- /.row -->
															  
															<button  class="btn btn-success float-right"> Submit </button>

													<!-- CARD BODY END -->
													</div>
												<!-- CARD END -->	
												</div> 								
											<!--	<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->								
											</form>  
										<!-- FORM GROUP END -->
										</div> 
									  <!-- /.invoice -->
									</div>
								  <!-- /.col -->
								</div>
							<!-- /.row -->
							</div>
					  <!-- /.container-fluid -->
						</div>
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
		<!-- Select2 -->
		<script src="<?php echo base_url();?>tools/plugins/select2/js/select2.full.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?php echo base_url();?>tools/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url();?>tools/dist/js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<!--<script src="<?php echo base_url();?>tools/dist/js/demo.js"></script>  -->



		<script type="text/javascript">
		
		 $(function () {
			//Initialize Select2 Elements
			$('.select2').select2()
		  }); 
			
			function for2ndSelect2(){
				$('.select2').select2();
			}


			$(document).ready(function(){      
			  var i=1;  


			  $('#add').click(function(){  
				   i++;
				   localStorage.setItem('CurrentSelectID', i);
					//if(i<=2){
				   $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added "><td><input type="text" name="slNo[]" id="slNo'+i+'" class="form-control text-right forHeightInput"  /></td> <td style="width: 20%;" class="selectTd"> <select class="form-control select2 selectMed" id="'+i+'" style="width: 100%;" name="medName[]" onChange="getDetailsBatch($(this).val(),$(this).attr('+"'id'"+'))"> </select> </td> <td style="width: 10%;"><select class="form-control select2" name="batchno[]" id="batchno'+i+'" style="width: 80%;" onChange="getDetailsBatchNo($(this).val())" ></select></td> <td><input type="text" name="avl[]" id="avl'+i+'" class="form-control text-right forHeightInput" readonly /></td> <td><input type="text" name="exp[]" id="exp'+i+'"  class="form-control forHeightInput text-right" readonly /></td> <td><input type="text" name="qty[]" id="qty'+i+'" class="form-control forHeightInput text-right" /></td> <td><input type="text" name="free[]" id="free'+i+'" class="form-control forHeightInput text-right" /></td> <td><input type="text" name="total[]" id="total'+i+'" class="form-control forHeightInput text-right" /></td> <td><input type="text" name="mrp[]" id="mrp'+i+'" class="form-control text-right forHeightInput" readonly /></td> <td><input type="text" name="rate[]" id="rate'+i+'" class="form-control forHeightInput  text-right" /></td> <td><input type="text" name="discount[]" id="discount'+i+'" class="form-control forHeightInput text-right" /></td> <td><input type="text" name="tax[]" id="tax'+i+'" class="form-control text-right forHeightInput" /></td><td><input type="text" name="sgst[]" id="sgst'+i+'" class="form-control forHeightInput text-right" readonly /></td> <td><input type="text" name="cgst[]" id="cgst'+i+'" class="form-control forHeightInput text-right" readonly /></td> <td><input type="text" name="amount[]" id="amount'+i+'" class="form-control forHeightInput text-right" readonly /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove btn-sm">X</button></td></tr>');  
				   $('.select2').select2();
				   for2ndSelect2();
				   selectsellFetchDropdownOptions();
				   
			  });


			  $(document).on('click', '.btn_remove', function(){  
				   var button_id = $(this).attr("id");   
				   $('#row'+button_id+'').remove(); 
					
					
			  });  


			});  


			// Fetch All  product in purchase
			$(document).ready(function(){
				localStorage.setItem('CurrentSelectID',1);
				selectsellFetchDropdownOptions();
			});
			
			function selectsellFetchDropdownOptions(){
				//console.log('CurrentSelectID: ',localStorage.getItem('CurrentSelectID'));
				var selectID = localStorage.getItem('CurrentSelectID');
				$.ajax({
						url: '<?php echo base_url();?>index.php/Admin_controller/getAllsellproductName',
						dataType: 'json',
						//method: 'POST',
						success: function(result){
								
							var optn = new Option('Select', '');
							$("#"+selectID).append(optn);
							result.forEach(function(key, value){
								//console.log(key);
								var o = new Option(key, key);
								$(o).html(key);
								//console.log(o);
								$("#"+selectID).append(o);
							});
							//}
							
							//console.log(optn);
							
						}
					});
			}
			
		function getDetailsBatch(key,id){
			//console.log(id);
			//var selectID = localStorage.getItem('CurrentSelectID');
			
			$.ajax({
				url: '<?php echo base_url();?>index.php/admin_controller/salesGetDetails',
				data: {key: key},
				//dataType: 'json',
				method: 'POST',
				success: function(result){
					console.log(result);
					 
						//$('.selectBatchNoOption').find('option').remove().end();
						$("#batchno"+id).find('option').remove().end();
						
						var arr = result.split(',');
						//$("#batchno").val(arr[0]);
						//console.log(arr);
						
						var optn = new Option('Select','');
						$("#batchno"+id).append(optn);
						
						arr.forEach(function(key,value){
							console.log(key);
							var o = new Option(key,key);
							$(o).html(key);
							//console.log(o);
							$("#batchno"+id).append(o);
								
						});
						
				}
			});	
			
		}
				
		
		function getDetailsBatchNo(keyBatch){
			
			//console.log(id);
				var selectID = localStorage.getItem('CurrentSelectID');
				console.log(selectID);
				$.ajax({
					url: '<?php echo base_url();?>index.php/Admin_controller/batchNoGetDetails',
					data: {keyBatch: keyBatch},
					method: 'POST',
					success: function(result){
						//console.log(result);
						
						var arr = result.split(',');
						$("#mrp"+selectID).val(arr[0]);
						$("#sgst"+selectID).val(arr[1]); 
						$("#exp"+selectID).val(arr[2]);
							
					}
				});	

			
		}
			
		</script>


	</body>
	</html>
