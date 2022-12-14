<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--  <title>AdminLTE 3 | DataTables</title>-->
<title></title>
<link rel=icon href="<?php echo base_url();?>/tools/dist/img/LargeLogo.png" sizes="20x20" type="image/png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
						<!--<h1><b>Customer List</b></h1>-->
					  </div>
					  <div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
						  <li class="breadcrumb-item active">Company list</li>
						</ol>
					  </div>
					</div>
					
					 <?php if($this->session->flashdata('success')): ?>
					  <div class="col-md-12">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
							  <h4><i class="icon fa fa-check"></i> Success!</h4>
							  <?php echo $this->session->flashdata('success'); ?>
						</div>
					  </div>
					<?php elseif($this->session->flashdata('error')):?>
					<div class="col-md-12">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
							  <h4><i class="icon fas fa-times"></i> Failed!</h4>
							  <?php echo $this->session->flashdata('error'); ?>
							  
						</div>
					  </div>
					<?php endif;?>
					
					
					<?php if($this->session->flashdata('success_edit')): ?>
					  <div class="col-md-12">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
							  <h5><i class="icon fas fa-info"></i> Success!</h5>
							  <?php echo $this->session->flashdata('success_edit'); ?>
						</div>
					  </div>
					 
					<?php endif;?>
					
					<?php if($this->session->flashdata('success_delete')): ?>
					  <div class="col-md-12">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
							   <h5><i class="icon fas fa-info"></i> Success!</h5>
							  <?php echo $this->session->flashdata('success_delete'); ?>
						</div>
					  </div>
					
					<?php endif;?>
					
					<?php if($this->session->flashdata('leadError')): ?>
					  <div class="col-md-12">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
							  <h4><i class="icon fas fa-times"></i> Failed!</h4>
							  <?php echo $this->session->flashdata('leadError'); ?>
							  
						</div>
					  </div>
					
					<?php endif;?>
					
					
					
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">
			    <div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<div class="row">
									
										<div class="col-md-4">
											<h3 class="card-title"><b>Company List</b></h3><br>
										</div>
										<div class="col-sm-2">
											<!--<a class="btn btn-block btn-danger btn-sm" href="<?php echo base_url();?>index.php/add_customer">
											 Add Customer
											</a> -->
										</div>
										<div class="col-sm-2">
											<!--<a class="btn btn-block btn-danger btn-sm" href="<?php echo base_url();?>index.php/add_customer">
											 Add Customer
											</a>-->
										</div>
										<div class="col-sm-2">
											<!--<a class="btn btn-block btn-primary btn-sm" href="<?php echo base_url();?>index.php/credit_customer">
												 Credit Customer
											</a>-->
										</div>
										<div class="col-sm-2">
											<a class="btn btn-block btn-success btn-sm" data-toggle="modal" data-target="#companyAdd">
												Add Company
											</a>
										</div>
									</div>
										
								</div>
							
							  <!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>Serial No</th>
													<th>Company Name</th>	
													<th>Prefrences</th>
													<th>Invoice Printing</th>
													<th>Order Form</th>
													<th>Dump Days</th>	
													<th>Minimum Margin</th>
													<th>Expiry Receive Upto</th>
													<th>Sales Tax </th>
													<th>Purchase Tax </th>
													<!--<th>CESS1 </th>-->
													<!--<th>CESS2</th>-->
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
													
													<?php $i=1; foreach ($company as $r){?>
												<tr>
													<td><?=$i;?></td>
													<td><?=$r['cname'];?></td>
													<td><?=$r['prefrences'];?></td>
													<td><?=$r['invprint'];?></td>
													<td><?=$r['order1'];?></td>
													<td><?=$r['dumpDay'];?></td>
													<td><?=$r['minMargin'];?></td>
													<td><?=$r['receive'];?></td>
													<td><?=$r['salesTax'];?></td>
													<td><?=$r['purchaseTax'];?></td>
													<!--<td><?=$r['cess1'];?></td>-->
													<!--<td><?=$r['cess2'];?></td>-->
													<td class="project-actions">
													
														<a href="<?php echo base_url()?>index.php/admin_controller/edit_company/<?=$r['id'];?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
														<!--	<a class="btn btn-danger delete_data" id="<?=$r['id'];?>"><i class="fas fa-trash"></i></a> -->
															
														<!--	<a class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" id="<?=$r['id'];?>"><i class="fas fa-trash"></i></a> -->
														
														<button class="btn btn-danger btn-sm delete" data-id="<?=$r['id'];?>"><i class="fas fa-trash"></i></button>
													
													</td>
													
													
												<!--	<td class="text-right py-0 align-middle">
													  <div class="btn-group btn-group-sm">
														<a href="<?php echo base_url()?>index.php/admin_controller/edit_manufacturer_list" class="btn btn-info"><i class="fas fa-edit"></i></a>&nbsp;
														<a class="btn btn-danger delete_data" id="<?=$r['id'];?>"><i class="fas fa-trash"></i></a>
													  </div>
													</td> -->
												</tr>
													<?php $i+=1;} ?>
											</tbody>
							
									</table>
								</div>
							  <!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
					  <!-- /.col -->
					</div>
					<!-- /.row -->
			    </div>
			  <!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
			
		<!-- /.delte modal start-->	
		<div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content bg-danger">
				<div class="modal-header">
				  <h4 class="modal-title">Confirm Delete</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  <p>Do you really want to delete this record?</p>
				</div>
				<div class="modal-footer justify-content-between">
				  <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
				<!--  <button type="button" class="btn btn-outline-light" id="delete_data">Yes</button> -->
				  <button type="button" id="delid" class="btn btn-outline-light">Yes</button>
				</div>
			  </div>
			  <!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		  <!-- /.delte modal End -->
			
			
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
				
		<!--Edit Modal Start for company-->
							
	<!--	<div class="modal fade" id="companyEdit">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class=" btn-primary modal-header">
					  <h4 class="modal-title">Edit Company</h4>
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
									<button type="submit" id="send" class="btn btn-primary">Edit</button>
								</div>
							
							</form>
							<div class="modal-footer">
								<button type="button" id="cmpnyCloseModalBtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
					</div>
				</div>
			</div>
		</div>-->
		<!-- Edit Modal End for company-->
			
			

		<!-- Footer Start -->

		<?php include('includes/admin/footer.php'); ?>

		<!-- Footer End -->

	</div>
		<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>tools/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>tools/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url();?>tools/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>tools/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "csv", "excel",  "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
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
						window.location.replace("<?php echo base_url()?>index.php/admin_controller/company_list");
					}
				});
		});

	});
	
/*	
	  //Delete confirm
  $(".delete_data").click(function(){
    var choice = confirm('Do you really want to delete this record?');
        if(choice === true) {
            var del_id = $(this).attr('id');
			//console.log(del_id);
			
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>index.php/admin_controller/delete_company_list',
                data: 'delete_id='+del_id,
                success: function(data){
					
                   
					if(!data){
                        window.location.replace("<?php echo base_url()?>index.php/admin_controller/company_list");
                    }
                    else{
                        alert('failed');
                    }
					
                }
            });
			
        }else{
            return false;
        }
});
  */
  
  	 //Delete confirm
	$(document).on('click', '.delete', function(){
		var id = $(this).data('id');
		//console.log(id);
		$('#delid').val(id);
		$('#delmodal').modal('show');
	});
	
	$('#delid').click(function(){
		var id = $(this).val();
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url()?>index.php/admin_controller/delete_company_list',
			data: {id: id},
			success:function(){
				$('#delmodal').modal('hide');
				window.location.replace("<?php echo base_url()?>index.php/admin_controller/company_list");
			}
		});
	});
	
	
</script>
</body>
</html>
