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
				width: 42px;
			}
			
			.forWidthInputPackBatch
			{
				width: 120px;
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

					<?php $m="addpurchase"; include('includes/admin/sidebar.php'); ?>

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
									  <li class="breadcrumb-item"><a href="#">Purchase</a></li>
									 
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
											<form name="add_name" method="POST" action="<?php echo base_url();?>index.php/add-purchase-do">

											<!-- title row -->
												<div class="row">
												
												  
													<div class="col-sm-6">
														<h4><i class="fas fa-globe"></i> Purchase</h4>
													</div>
													<div class="col-sm-6">
														<!-- <h4><small style="padding-left: 300px;">Date: <input type="text" name="date" id="" class="form-control text-right"  /> </small></h4> -->
														<div class="row forMargin1">
															
														</div>
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
																	<div class="row forMargin"> <b> Purchase Date :</b> </div>
																	<div class="row forMargin"> <b>Receive Date:</b> </div>
																</div>
																<div class="col-sm-9">

																	<div class="row forMargin"> <input type="text" name="purchaseName" id="purchaseName" class="form-control forHeightInput"   /> </div>
																	<div class="row forMargin"> <input type="date" name="purchaseDate" id="purchaseDate" class="form-control forHeightInput"   /> </div>
																	<div class="row forMargin"><input type="date" name="receiveDate" id="receiveDate" class="form-control forHeightInput"   />   </div>

																</div>
															</div>
													  
													</div>
													<!-- /.col -->
													
													<!-- /.col -->
													<div class="col-sm-6 invoice-col">
													  
														<div class="row">
																<div class="col-sm-3">
																
																	<div class="row forMargin"> <b>Entry Number:</b> </div>
																	<div class="row forMargin"> <b>Party Number:</b> </div>
																	<div class="row forMargin"> <b>Type:</b> </div>
																	
																</div>
																<div class="col-sm-9">
																	<div class="row forMargin"> <input type="text" name="entryNum" id="entryNum" class="form-control forHeightInput" readonly /> </div>
																	<div class="row forMargin"> <input type="text" name="partyNum" id="partyNum" class="form-control forHeightInput"  /> </div>
																	<select class="row forMargin" name="type" id="type">
																		<option value="" selected="selected">selected Type</option>
																		<option value="yes">YES</option>
																		<option value="no">NO</option>
																	</select>
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
																	 
																	  <th>Product</th> 
																	  <th>Pack</th> 
																	  <th>Batch No</th>
																	  <th>Expiry Date</th>
																	  <th>Quantity</th>
																	  <th>Free</th>
																	  <th>M.R.P</th>
																	  <th>Purchase Rate</th>
																	  <th>Basic Amount</th>
																	  <th>Discount (%)</th>
																	  <th>Discount Amount</th>
																	  <th>SGST (%)</th>
																	  <th>SGST In Amount</th>
																	  <th>CGST (%)</th>
																	  <th>CGST In Amount</th>
																	  <th>IGST (%)</th>
																	  <th>IGST In Amount</th>
																	  <th>Amount</th>
																	  <th> </th>
																	   
																	</tr>
																</thead>
																<tbody>
																	
																	<tr>  
																		
																		<td style="width: 30%;" class="selectTd">
																			<select class="form-control select2 selectproduct" id="1" name="productName[]" style="width: 100%;" onChange="getDetails($(this).val(),$(this).attr('id'))">
																				
																			</select>	
																		</td>
																		<td><input type="text" name="pack[]" id="pack1"  class="form-control text-right forHeightInput forWidthInputPackBatch" readonly /></td>
																		<td><input type="text" name="batch[]" id="batch1" class="form-control text-right forHeightInput forWidthInputPackBatch" readonly /></td>
																		<td><input type="date" name="exp[]" id="exp1" class="form-control text-right" /></td>
																		<!--<td class="quantityTd"><input type="text" name="quantity[]" id="quantity1" class="form-control text-right forHeightInput" /></td>-->
																		<td><input type="text" name="quantity[]" id="quantity1" onkeyup="getBasicAmount($(this))" class="form-control text-right forHeightInput" /></td>
																		<td><input type="text" name="free[]" id="free1" class="form-control text-right forHeightInput forWidthInputfree" /></td>
																		<td><input type="text" name="mrp[]" id="mrp1" class="form-control text-right forHeightInput forWidthInputfree" readonly /></td>
																	<!--	<td><input type="text" name="purchaseRate[]" id="purchaseRate1" onkeyup="getBasicAmount($(this))" class="form-control text-right forHeightInput " readonly /></td>-->
																		<td><input type="text" name="purchaseRate[]" id="purchaseRate1" class="form-control text-right forHeightInput " readonly /></td>
																		<td><input type="text" name="basicAmount[]" id="basicAmount1" class="form-control text-right forHeightInput " readonly /></td>
																		<td><input type="text" name="discount[]" id="discount1" onkeyup="getDiscountAmount($(this))" class="form-control text-right forHeightInput " /></td>
																		<td><input type="text" name="discountamount[]" id="discountamount1" class="form-control text-right forHeightInput totalDisAmt" readonly /></td>
																		<td><input type="text" name="sgst[]" id="sgst1" class="form-control text-right forHeightInput forWidthInput" readonly /></td>
																		<td><input type="text" name="sgstIA[]" id="sgstIA1" class="form-control text-right forHeightInput totalsgstIAAmt" readonly /></td>
																		<td><input type="text" name="cgst[]" id="cgst1" class="form-control text-right forHeightInput forWidthInput" readonly /></td>
																		<td><input type="text" name="cgstIA[]" id="cgstIA1" class="form-control text-right forHeightInput totalcgstIAAmt" readonly /></td>
																		<td><input type="text" name="igst[]" id="igst1" class="form-control text-right forHeightInput forWidthInput" readonly /></td>
																		<td><input type="text" name="igstIA[]" id="igstIA1" class="form-control text-right forHeightInput totaligstIAAmt" readonly /></td>
																		<td><input type="text" name="amount[]" id="amount1" class="form-control text-right forHeightInput totalAmt" readonly /></td>
																		<td><button type="button" name="add" id="add" class="btn btn-success btn-sm">Add </button></td> 
																		
																	</tr> 
																	
																</tbody>
															</table>
														</div>
															
														<!-- /.row -->
														<div class="row">
															<!-- accepted payments column -->
															<div class="col-8">
															
																<div class="row"style="padding-top: 120px;">
																		<div class="col-3">
																		  <div class="row "><p><b>Final Bill In Word Rs:</b></p> </div>
																		</div>
																		<div class="col-9">
																		 <div class="row "><input type="text" name="inWords" id="inWords" class="form-control forHeightInput" readonly /> </div>
																		</div>
																</div>
															
															</div>
															<!-- /.col -->
															<div class="col-4">
															 
																<div class="table-responsive">
																	<table class="table">
																	  
																	  <tr>
																		<th>Total Discount Amount:</th>
																		<td><input type="text" name="discountamountTotal" id="discountamountTotal" class="form-control text-right forHeightInput" readonly /></td>
																	  </tr>
																	  <tr>
																		<th>Total G.S.T:</th>
																		<td><input type="text" name="gstTotalAmount" id="gstTotalAmount" class="form-control text-right forHeightInput" readonly /></td>
																	  </tr>
																	  <tr>
																		<th>Total I.G.S.T:</th>
																		<td><input type="text" name="igstTotalAmount" id="igstTotalAmount" class="form-control text-right forHeightInput" readonly /></td>
																	  </tr>
																	  <tr>
																		<th>Total Amount:</th>
																		<td><input type="text" name="TotalAmount" id="TotalAmount" class="form-control text-right forHeightInput" readonly /></td>
																	  </tr>
																	  <tr>
																		<th>Total Amount Round Off:</th>
																		<td><input type="text" name="roundOff" id="roundOff" class="form-control text-right forHeightInput" readonly /></td>
																	  </tr>
																		
																	</table>
																</div>
															</div>
															<!-- /.col -->
														</div>
														<!-- /.row -->
														
														<div class="row">
															<div class="col-4">						  
															  
																<div class="row">
																	<div class="col-sm-4">	
																		<div class="row "><p>Prepared By :</p> </div>
																		
																	</div>
																	<div class="col-sm-8">	
																		<div class="row forMargin2"><input type="text" name="preBy" id="preBy" value="<?=$this->session->userdata('username'); ?>"  class="form-control forHeightInput" style="width: 200px;" readonly /></div>

																	</div>
																</div>
															  
															</div>
															<div class="col-8">
																<div class="row">
																	<div class="col-sm-2">		
																		<div class="row "><p>Prepared on:</p> </div>
																		
																	</div>
																	<div class="col-sm-10">																
																		<div class="row forMargin2"><input type="text" name="preDate" id="preDate" class="form-control forHeightInput"  readonly /></div>
																		<!--<div class="row forMargin2"><input type="text" name="time" id="time" class="form-control forHeightInput"  readonly /></div>-->
																	</div>
																</div>
															
															</div>
															
														</div>
														
														<button  class="btn btn-primary float-right"> Submit </button> 		
													<!-- CARD BODY END -->
													</div>
												<!-- CARD END -->	
												</div> 								
																		
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
	
	$(function (){
			//Initialize Select2 Elements
			$('.select2').select2()
		});
		
	function for2ndSelect2(){
		$('.select2').select2();
	}
	
	
	//for date -->
		var today = new Date();
		var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
		document.getElementById("preDate").value = date;
		
	
	
	//for time -->
	/*const formatAMPM = (date) => {
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
	document.getElementById("time").value = formatAMPM(new Date);
	*/
	
	$(document).ready(function(){      
	  var i=1;  


	  $('#add').click(function(){  
		   i++;
		   localStorage.setItem('CurrentSelectID', i);
			//if(i<=5){
		   $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"> <td style="width: 30%;" class="selectTd"> <select class="form-control select2 selectproduct" name="productName[]" id="'+i+'" style="width: 100%;" onChange="getDetails($(this).val(),$(this).attr('+"'id'"+'))"> </select> </td> <td><input type="text" name="pack[]" id="pack'+i+'"  class="form-control text-right forHeightInput forWidthInputPackBatch" readonly/></td> <td><input type="text" name="batch[]" id="batch'+i+'"  class="form-control text-right forHeightInput forWidthInputPackBatch" readonly/></td> <td><input type="date" name="exp[]" id="exp'+i+'" class="form-control text-right" /></td><td><input type="text" name="quantity[]" id="quantity'+i+'" onkeyup="getBasicAmount($(this))" class="form-control form_textfield text-right forHeightInput" /></td> <td><input type="text" name="free[]" id="free'+i+'" class="form-control forHeightInput "  /></td> <td><input type="text" name="mrp[]" id="mrp'+i+'" class="form-control text-right forHeightInput forWidthInputfree" readonly /></td><td><input type="text" name="purchaseRate[]" id="purchaseRate'+i+'" class="form-control text-right forHeightInput" readonly /></td> <td><input type="text" name="basicAmount[]" id="basicAmount'+i+'" class="form-control text-right forHeightInput " readonly /></td> <td><input type="text" name="discount[]" id="discount'+i+'" onkeyup="getDiscountAmount($(this))" class="form-control text-right forHeightInput "  /></td> <td><input type="text" name="discountamount[]" id="discountamount'+i+'" class="form-control text-right forHeightInput totalDisAmt" readonly /></td><td><input type="text" name="sgst[]" id="sgst'+i+'" class="form-control text-right forHeightInput forWidthInput" readonly /></td> <td><input type="text" name="sgstIA[]" id="sgstIA'+i+'" class="form-control text-right forHeightInput totalsgstIAAmt" readonly /></td><td><input type="text" name="cgst[]" id="cgst'+i+'" class="form-control text-right forHeightInput forWidthInput" readonly /></td> <td><input type="text" name="cgstIA[]" id="cgstIA'+i+'" class="form-control text-right forHeightInput totalcgstIAAmt" readonly /></td><td><input type="text" name="igst[]" id="igst'+i+'" class="form-control text-right forHeightInput forWidthInput" readonly /></td> <td><input type="text" name="igstIA[]" id="igstIA'+i+'" class="form-control text-right forHeightInput totaligstIAAmt" readonly /></td><td><input type="text" name="amount[]" id="amount'+i+'" class="form-control forHeightInput  text-right totalAmt" readonly /></td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove btn-sm">X</button></td></tr>');  
		   $('.select2').select2();
		   for2ndSelect2();
		   selectFetchDropdownOptions();
		   
			//}
	  });


	  $(document).on('click', '.btn_remove', function(){  
		   var button_id = $(this).attr("id");   
		   $('#row'+button_id+'').remove();  
		  
		   getTotalDiscountAmount();
		   getTotalGstAmount();
		   getTotalIgstAmount();
		   getTotalAmount();
	  });  


	});  
	
	
		// Fetch All  product in purchase
	$(document).ready(function(){
		localStorage.setItem('CurrentSelectID',1);
		selectFetchDropdownOptions();
	});
		
		
	function selectFetchDropdownOptions(){
		//console.log('CurrentSelectID: ',localStorage.getItem('CurrentSelectID'));
		var selectID = localStorage.getItem('CurrentSelectID');
		$.ajax({
				url: '<?php echo base_url();?>index.php/Admin_controller/getAllproductName',
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
	
	
	

	function getDetails(key,id,){
		
		console.log(id);
		if(key != ""){
			$.ajax({
				url: '<?php echo base_url();?>index.php/Admin_controller/packGetDetails',
				data: {key: key},
				//dataType: 'json',
				method: 'POST',
				success: function(result){
					//console.log(result);
						
						var arr = result.split(',');
						$("#pack"+id).val(arr[0]);
						$("#batch"+id).val(arr[1]);
						$("#purchaseRate"+id).val(arr[2]);
						$("#sgst"+id).val(arr[3]);
						$("#cgst"+id).val(arr[4]);
						$("#igst"+id).val(arr[5]);
						$("#mrp"+id).val(arr[6]);
						
						// for extra calculation on product name change
						
						// for basic amount calculation on product name change
						var quant = $('#quantity'+id).val();
						var purchaseRate = $('#purchaseRate'+id).val();
						$('#basicAmount'+id).val(quant*purchaseRate);
						
						//for discount amount calculation on product name change
						var BasicAmt = $('#basicAmount'+id).val();
						var DicAmt = $('#discount'+id).val();
						$('#discountamount'+id).val(BasicAmt*DicAmt/100);
						
						// for all total amount calculation on product name change
						allCalculation(id);
						getTotalDiscountAmount();
						getTotalGstAmount();
						getTotalIgstAmount();
						getTotalAmount();
				}
			});	
		}else{
			$("#pack"+id).val("");
			$("#batch"+id).val("");
			$("#purchaseRate"+id).val("");
			$("#sgst"+id).val("");
			$("#cgst"+id).val("");
			$("#igst"+id).val("");
		
		}
		
	}



	function getBasicAmount(qnt){
		var ParentSelectID = qnt.parent().parent().find('.selectTd').find('select').attr('id');
		//console.log('ParentSelectID: ', ParentSelectID);
		
		// for Basic Amount calculation
		var purchaseRate = $('#purchaseRate'+ParentSelectID).val();
		$('#basicAmount'+ParentSelectID).val(purchaseRate*qnt.val());
		
		//for discount Amount calculation
		var BasicAmt = $('#basicAmount'+ParentSelectID).val();
		var DicAmt = $('#discount'+ParentSelectID).val();
		$('#discountamount'+ParentSelectID).val(BasicAmt*DicAmt/100);
		
		allCalculation(ParentSelectID);
		getTotalDiscountAmount();
		getTotalGstAmount();
		getTotalIgstAmount();
		getTotalAmount();
		
		
	}
	
	
	
	function getDiscountAmount(disPer){
		var ParentSelectID = disPer.parent().parent().find('.selectTd').find('select').attr('id');
		//console.log('ParentSelectID: ', ParentSelectID);
		
		//for discount calculation
		var BasicAmt = $('#basicAmount'+ParentSelectID).val();
		$('#discountamount'+ParentSelectID).val(BasicAmt*disPer.val()/100);
		
		allCalculation(ParentSelectID);
		getTotalDiscountAmount();
		getTotalAmount();
		//getTotalIgstAmount();
		

	}
	
	
	function allCalculation(ParentSelectID){
		
		var BasicAmt = $('#basicAmount'+ParentSelectID).val();
		//for sgst calculation
		var Sgst = $('#sgst'+ParentSelectID).val();
		$('#sgstIA'+ParentSelectID).val(BasicAmt*Sgst/100);
		
		//for cgst calculation
		var Cgst = $('#cgst'+ParentSelectID).val();
		$('#cgstIA'+ParentSelectID).val(BasicAmt*Cgst/100);
		
		//for igst calculation
		var Igst = $('#igst'+ParentSelectID).val();
		$('#igstIA'+ParentSelectID).val(BasicAmt*Igst/100);
		
		//for amount calculation of single item
		var ansSgst = $('#sgstIA'+ParentSelectID).val();
		var ansCgst = $('#cgstIA'+ParentSelectID).val();
		var ansIgst = $('#igstIA'+ParentSelectID).val();
		var ansDicAmt = $('#discountamount'+ParentSelectID).val();
		$('#amount'+ParentSelectID).val(parseFloat(BasicAmt) + parseFloat(ansSgst) + parseFloat(ansCgst) + parseFloat(ansIgst) - parseFloat(ansDicAmt));
	
	}
	
	
	// Total Discount Amount Calculation
	function getTotalDiscountAmount(){
		var totalDiscountAmount = 0;
		$(".totalDisAmt").each(function() {
			if($(this).val()!=""){
				totalDiscountAmount = parseFloat(totalDiscountAmount) + parseFloat($(this).val());
				//console.log('GA ',$(this).val());
			}
		});
		//console.log('Total Gross Amount', totalGrossAmount);
		
		$("#discountamountTotal").val(totalDiscountAmount.toFixed(2));
		
		
	}
	
	// Total GST Amount
	function getTotalGstAmount(){
		
		var totalSgstIAAmount = 0;
		$(".totalsgstIAAmt").each(function() {
			if($(this).val()!=""){
				totalSgstIAAmount = parseFloat(totalSgstIAAmount) + parseFloat($(this).val());
			}
		});
		
		var totalCgstIAAmount = 0;
		$(".totalcgstIAAmt").each(function() {
			if($(this).val()!=""){
				totalCgstIAAmount = parseFloat(totalCgstIAAmount) + parseFloat($(this).val());
			}
		});
		
		$("#gstTotalAmount").val(parseFloat(totalSgstIAAmount.toFixed(2)) + parseFloat(totalCgstIAAmount.toFixed(2)));
		
		//console.log();

	}
	
	
	// Total I.G.S.T Calculation
	function getTotalIgstAmount(){
		var totalIgstIAAmount = 0;
		$(".totaligstIAAmt").each(function() {
			if($(this).val()!=""){
				totalIgstIAAmount = parseFloat(totalIgstIAAmount) + parseFloat($(this).val());
			}
		});
		
		$("#igstTotalAmount").val(totalIgstIAAmount.toFixed(2));
	}
	
	
	// Total Amount Calculation
	function getTotalAmount(){
		var totalAmount = 0;
		$(".totalAmt").each(function() {
			// N/A
			if($(this).val()!=""){
				totalAmount = parseFloat(totalAmount) + parseFloat($(this).val());
			}
		});
		
		$("#TotalAmount").val(totalAmount.toFixed(2));
		
		//For round off the total amount |this is final amount in bill|
			//$("#roundOff").val(totalAmount.toFixed());
		
		var rndof = totalAmount.toFixed();
		$("#roundOff").val(rndof);
		
		//For total amount in words
		var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
		var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

		function inWords (num) {
			if ((num = num.toString()).length > 9) return 'Overflow';
			n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
			if (!n) return; var str = '';
			str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
			str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
			str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
			str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
			str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
			return str;
		}
		$("#inWords").val(inWords(rndof));

	}
	
		//For unique Entry no script 

	$(document).ready(function(){
		$.ajax({
				url: '<?php echo base_url();?>index.php/Admin_controller/getLastentryNo',
				dataType: 'json',
				//method: 'POST',
				success: function(result){
						
					//console.log(result);
					var e = 0;
					if(result == 0){
						var e = 0;
					}else{
						var e = result;
					}
					//console.log(e);
					var q = (e);
					q++;
					$("#entryNum").val("P_"+q);
				}
			});
	});
	  
	  /*
		var birth_date = new Date(document.getElementById("birth_date").value);
		var birth_date_day = birth_date.getDate();
		var birth_date_month = birth_date.getMonth()
		var birth_date_year = birth_date.getFullYear();
		var today_date = new Date();
		var today_day = today_date.getDate();
		var today_month = today_date.getMonth();
		var today_year = today_date.getFullYear();

		 if (today_month > birth_date_month) calculated_age = today_year - birth_date_year;
		 else if (today_month == birth_date_mon
		 {
		if (today_day >= birth_date_day) calculated_age = today_year - birth_date_year;
					else calculated_age = today_year - birth_date_year - 1;
		}
		else calculated_age = today_year - birth_date_year - 1;

		var output_value = calculated_age;
		document.getElementById("calculated_age").innerHTML = calculated_age;
		*/
	</script>

	</body>
	</html>
				

