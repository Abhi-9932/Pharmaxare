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

			<?php $m="medicinelist"; include('includes/admin/sidebar.php'); ?>

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
						  <li class="breadcrumb-item active">Medicine list</li>
						</ol>
					  </div>
					</div>
					
					 <?php if($this->session->flashdata('success')): ?>
					  <div class="col-md-12">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							  <h4><i class="icon fa fa-check"></i> Success!</h4>
							  <?php echo $this->session->flashdata('success'); ?>
						</div>
					  </div>
					<?php elseif($this->session->flashdata('error')):?>
					<div class="col-md-12">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							  <h4><i class="icon fas fa-times"></i> Failed!</h4>
							  <?php echo $this->session->flashdata('error'); ?>
							  
						</div>
					  </div>
					<?php endif;?>
					
					
					<?php if($this->session->flashdata('success_edit')): ?>
					  <div class="col-md-12">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							  <h5><i class="icon fas fa-info"></i> Success!</h5>
							  <?php echo $this->session->flashdata('success_edit'); ?>
						</div>
					  </div>
					 
					<?php endif;?>
					
					<?php if($this->session->flashdata('success_delete')): ?>
					  <div class="col-md-12">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							   <h5><i class="icon fas fa-info"></i> Success!</h5>
							  <?php echo $this->session->flashdata('success_delete'); ?>
						</div>
					  </div>
					
					<?php endif;?>
					
					<?php if($this->session->flashdata('leadError')): ?>
					  <div class="col-md-12">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
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
											<h3 class="card-title"><b>Medicine List</b></h3><br>
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
											<a class="btn btn-block btn-success btn-sm" href="<?php echo base_url();?>index.php/add_medicine">
												Add Medicine
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
												<!--<th>Bar Code</th>-->	
													<th>Strength</th>
													<th>Medicine Name</th>
													<th>Generic Name</th>
												<!--<th>Box Size </th>-->	
													<th>Shelf</th>
												<!--	<th>Unit</th>-->
												<!--	<th>Medicine Details</th>-->
													<th>Category</th>
												<!--	<th>Medicine Type</th>-->
													<th>Price</th>
													<th>Image</th>
													<th>Manufacturer</th>
													<th>Manufacturer Price </th>
												<!--	<th>Status</th>-->
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												
											</tbody>
										<!-- <tfoot>
										<tr>
											<th colspan="9" class="text-right">total:</th>
												
												   <th></th>
										</tr>
												
											</tfoot>-->
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
</script>
</body>
</html>
