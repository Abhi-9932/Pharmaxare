	<?php   
	//loop for master table
		
		$purchaseName = "";
		$purchaseDate = "";
		$entryNum = "";
		$partyNum = "";
		$receiveDate = "";
		$type = "";
		$discountamountTotal = "";
		$gstTotalAmount = "";
		$igstTotalAmount = "";
		$TotalAmount = "";
		$roundOff = "";
		$inWords = "";
		$preDate = "";
		$preBy = "";
		
		foreach ($purchase as $master){ 

			$purchaseName = $master['purchaseName'];
			$purchaseDate = $master['purchaseDate'];
			$entryNum = $master['entryNum'];
			$partyNum = $master['partyNum'];
			$receiveDate = $master['receiveDate'];
			$type = $master['type'];
			$discountamountTotal = $master['discountamountTotal'];
			$gstTotalAmount = $master['gstTotalAmount'];
			$igstTotalAmount = $master['igstTotalAmount'];
			$TotalAmount = $master['TotalAmount'];
			$roundOff = $master['roundOff'];
			$inWords = $master['inWords'];
			$preDate = $master['preDate'];
			$preBy = $master['preBy'];
		}
		
		

		
		//loop for Company creation 
		
		$comName = "";
		$phone = "";
		$address1 = "";
		$address2 = "";
		$address3 = "";
		$address4 = "";
		$image = "";
		$webAddress = "";
		$email = "";
		$gstin = "";
		$dl_no = "";
		
		foreach ($companycreation as $company){ 

			$comName = $company['comName'];
			$phone = $company['phone'];
			$address1 = $company['address1'];
			$address2 = $company['address2'];
			$address3 = $company['address3'];
			$address4 = $company['address4'];
			$image = $company['image'];
			$webAddress = $company['webAddress'];
			$email = $company['email'];
			$gstin = $company['gstin'];
			$dl_no = $company['dl_no'];
		}
		
		
	
?>

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
									  <!-- title row -->
										<div class="row" style="padding-bottom: 35px; border-style: groove;">

											<div class="col-2" >
											
												<div class="row forMargin" ><img src="<?php echo base_url();?>tools/upload/<?=$image;?>" style="height: 150px; border-radius: 50%;" alt=""></div> 
											  
											</div>
											
											
											<div class="col-8">
												<div class="row forMargin" >
													<div class="col-12"  style="text-align: center;">
													  <h1><b style=" font-size: 40px; "><?=$comName;?> </b> </h1>
													</div>
												</div>
												
												<div class="row forMargin">
													<div class="col-12" style="text-align: center; font-size: 19px;">
														<div> <?=$address1;?> </div>
														<div> <?=$address2;?> </div>
														<div> <?=$address3;?> </div>
														<div> <?=$address4;?> </div>

													</div>
												</div>
												
												<div class="row forMargin">
													<div class="col-12" style="text-align: center;font-size: 19px;">
														<div style="text-align: center; font-size: 14px;"><b>Contact No:  </b> <?=$phone;?>&nbsp; <b>Email:  </b> <?=$email;?> &nbsp;<b>Website:  </b> <?=$webAddress;?> </div>
												
													</div>
												</div>

											</div>
											
									<!--	    <div class="row forMargin">
												<div class="col-12" style="text-align: center;font-size: 19px;">
													<div style="text-align: center; font-size: 14px;"><b>DL No :  </b> <?=$dl_no;?>&nbsp; <b>GST IN :  </b> <?=$gstin;?></div>
													

												</div>
										    </div>-->
											
											<div class="col-2">
												
												
												<div class="row forMargin"><b>DL No : </b> <?=$dl_no;?> </div>
												<div class="row forMargin"><b>GST IN : </b><?=$gstin;?> </div>
												 
											</div>
											<!-- /.col -->
										</div>
										
										<br><br>
									  <!-- info row -->
										<div class="row invoice-info" style="padding-bottom: 84px;">
											<div class="col-sm-6 invoice-col">
											  
												<div class="row" style="padding-inline: 16px;">
													<div class="col-sm-3">
														<div class="row forMargin"> <b>Name:</b></div>
														<div class="row forMargin"> <b>Purchase Date:</b></div>
														<div class="row forMargin"> <b>Receive Date:</b></div>
													</div>
													
													
													 
													<div class="col-sm-9">
														<div class="row forMargin"><?=$purchaseName;?>  </div>
														<div class="row forMargin"> <?=$purchaseDate;?> </div>
														<div class="row forMargin"> <?=$receiveDate;?> </div>
													</div>
													
												</div>
											  
											</div>
											<!-- /.col -->
												
											<!-- /.col -->
											<div class="col-sm-6 invoice-col">
											  
												<div class="row">
													<div class="col-sm-3">
												
														<div class="row forMargin"><b>Entry Number:</b></div>
														<div class="row forMargin"><b>Party Number:</b></div>
														<div class="row forMargin"><b>Type:</b></div>
														
													</div>
													<div class="col-sm-9">
														<div class="row forMargin">P_<?=$entryNum;?> </div>							
														<div class="row forMargin"> <?=$partyNum;?> </div>
														<div class="row forMargin"><?=$type;?> </div>
													</div>
												</div>
											  
											</div>
												<!-- /.col -->
										</div>
									  <!-- /.row -->

										  <!-- Table row -->
										<div class="row">
											<div class="col-12  table-responsive">
												<table class="table table-bordered">
													<thead style="background-color: lightgray; border-style: groove;">
														<tr >
																										 
														  <th>Product</th> 
														  <th>Pack</th> 
														  <th>Batch No</th>
														  <th>Expiry</th>
														  <th>Quantity</th>
														  <th>Free</th>
														  <th>Purchase Rate</th>
														  <th>Basic Amount</th>
														  <th>Discount (%)</th>
														<!-- <th>Discount Amount</th>-->
													      <th>SGST (%)</th>
														<!--  <th>SGST In Amount</th>-->
														  <th>CGST (%)</th>
														<!--  <th>CGST In Amount</th>-->
														  <th>IGST (%)</th>
														<!--  <th>IGST In Amount</th>-->
														  <th>Amount</th>
														  
														   
														</tr>
													</thead>
													<tbody>
													<?php	foreach ($productpurchase as $product){ ?> 
														<tr>
															 <td><?=$product['productName'];?> </td> 
															 <td><?=$product['pack'];?> </td> 
															 <td><?=$product['batch'];?> </td> 
															 <td><?=$product['exp'];?> </td>
															 <td><?=$product['quantity'];?> </td> 
															 <td><?=$product['free'];?> </td> 
															 <td><?=$product['purchaseRate'];?> </td> 
															 <td><?=$product['basicAmount'];?> </td> 
															 <td><?=$product['discount'];?> </td> 
															<!-- <td><?//=$product['discountamount'];?> </td>-->
															 <td><?=$product['sgst'];?> </td>
															<!--<td><?//=$product['sgstIA'];?> </td> -->
															 <td><?=$product['cgst'];?> </td>
															<!-- <td><?//=$product['cgstIA'];?> </td> -->
															 <td><?=$product['igst'];?> </td> 
															<!-- <td><?//=$product['igstIA'];?> </td> -->
															 <td><?=$product['amount'];?> </td> 
														 
														</tr>
														
														 
													<?php } ?>
													</tbody>
												</table>
												<div style="font-size: 21px;"> <b>Final Bill In Words:  </b> <?=$inWords;?> </div>
											</div>
											<!-- /.col -->
										</div>
										  <!-- /.row -->
									  
									  

										<div class="row">
											<!-- accepted payments column -->
											<div class="col-8">
											 

											 
											</div>
											<!-- /.col -->
											<div class="col-4">
											  

												<div class="table-responsive" >
													<table class="table table-striped">						
														
													  <tr>
														<th style="width:50%">Total Discount Amount</th>
														<td><b>:</b></td>
														<td class=" text-right "><?=$discountamountTotal;?></td>
													  </tr>
													   <tr>
														<th style="width:50%">Total G.S.T</th>
														<td><b>:</b></td>
														<td  class=" text-right "><?=$gstTotalAmount;?></td>
													  </tr>
													  <tr>
														<th>Total I.G.S.T</th>
														<td><b>:</b></td>
														<td  class=" text-right "><?=$igstTotalAmount;?></td>
													  </tr>
													  <tr>
														<th>Total Amount</th>
														<td><b>:</b></td>
														<td  class=" text-right "><?=$TotalAmount;?></td>
													  </tr>
													  <tr>
														<th>Total Amount Round Off</th>
														<td><b>:</b></td>
														<td  class=" text-right "><?=$roundOff;?></td>
													  </tr>

													</table>
												</div>
											</div>
											<!-- /.col -->
										</div>
										  <!-- /.row -->
										<div class="row"> 
										  
											<div class="col-4"> 
												<div class="row forMargin"> <b>Prepared By:</b>&nbsp;&nbsp;<b><?=$preBy;?></b> </div>
											</div>
											<div class="col-8"> 
												<div class="row forMargin"> <b>Date:</b>&nbsp;&nbsp;<b><?=$preDate;?></b> </div>
											</div>
											 
											<div class="col-4">
												<div class="row forMargin"> <b>Printed By:&nbsp;&nbsp;<?=$this->session->userdata('username'); ?></b> </div>
											</div>
											<div class="col-8"> 
												<div class="row forMargin"> <b>Date:</b>&nbsp;&nbsp;<p></p><b>Time:</b> </div>
											</div>
											
											  
										</div>
										  <!-- this row will not appear when printing -->
										<div class="row no-print">
											<div class="col-12">
											  <!--<a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>  -->
											  <button onclick="window.print()" target="_blank" class="btn btn-primary float-right"> <i class="fas fa-print"></i>Print</button>
											 
											  
											</div>
										</div>
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
	document.getElementById("printTime").value = formatAMPM(new Date);

	</script>

	</body>
	</html>
