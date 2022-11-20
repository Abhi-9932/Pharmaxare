<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<title>AdminLTE 3 | General Form Elements</title>-->
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

		<?php $m="purchaselist"; include('includes/admin/sidebar.php'); ?>

	<!-- Sidebar End  -->

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <div class="container-fluid">
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1><b></b></h1>
			  </div>
			  <div class="col-sm-6">
				  <ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
				  <li class="breadcrumb-item active"> Purchase List</li>
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
							<h3 class="card-title">Purchase List</h3>
						  </div>
						  <!-- /.card-header -->
							
								<div class="card-body">
								
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												
												<th>Serial No</th>
												<th>Company Name</th>
												<th>Entry Number</th>
												<th>Date Of Purchase</th>
												<th>Total Purchase Amount</th>
												<th>Type</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
								
											<?php $i=1; foreach ($purchase_list as $purchase_list){?>
											<tr>
												<td><?=$i;?></td>
												<td><?=$purchase_list['purchaseName'];?></td>
												<td>P_<?=$purchase_list['entryNum'];?></td>
												<td><?=$purchase_list['purchaseDate'];?></td>
												<td><?=$purchase_list['roundOff'];?></td>
												<td><?=$purchase_list['type'];?></td>
												<td class="project-actions">
													
													<a href="<?php echo base_url()?>index.php/admin_controller/purchase_view/?entryNum=<?=$purchase_list['entryNum'];?>" class="btn btn-success btn-sm" ><i class="fas fa-eye"></i></a>
													<a href="<?php echo base_url()?>index.php/admin_controller/edit_purchase" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
											
												</td>
											</tr>
												<?php $i+=1;} ?>
										
										</tbody>
									</table>
		
								</div>
								<!-- /.card-body -->
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

<!-- Page specific script -->
<script>
 /* $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "csv", "excel",  "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
  */
</script>
</body>
</html>
