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

			<?php $m="customerlist"; include('includes/admin/sidebar.php'); ?>

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
						  <li class="breadcrumb-item active">Customer</li>
						  <li class="breadcrumb-item active">Customer list</li>
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
							  <h4><i class="icon fa fa-check"></i> Success!</h4>
							  <?php echo $this->session->flashdata('success_edit'); ?>
						</div>
					  </div>
					
					<?php endif;?>
					
					<?php if($this->session->flashdata('success_delete')): ?>
					  <div class="col-md-12">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							  <h4><i class="icon fa fa-check"></i> Success!</h4>
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
								<!--	<div class="card-header">-->
									<div class="row">
									
										<div class="col-md-4 card-header">
											<h3 class="card-title"><b>Customer List</b></h3><br>
										</div>
										<div class="col-sm-2 card-header">
											<!--<a class="btn btn-block btn-danger btn-sm" href="<?php echo base_url();?>index.php/add_customer">
											 Add Customer
											</a> -->
										</div>
										<div class="col-sm-2 card-header">
											<a class="btn btn-block btn-danger btn-sm" href="<?php echo base_url();?>index.php/add_customer">
											 Add Customer
											</a>
										</div>
										<div class="col-sm-2 card-header">
											<a class="btn btn-block btn-primary btn-sm" href="<?php echo base_url();?>index.php/credit_customer">
												 Credit Customer
											</a>
										</div>
										<div class="col-sm-2 card-header">
											<a class="btn btn-block btn-warning btn-sm" href="<?php echo base_url();?>index.php/paid_customer">
												Paid Customer
											</a>
										</div>
									</div>
										
								<!--	</div>-->
							
							  <!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
										  <tr>
											<th>Serial No</th>
											<th>Customer Name</th>									    
											<th>Email</th>
											<th>Mobile No</th>
										<!--	<th>Email Address2</th>-->
										<!--	<th>Phone</th>-->
											<th>Address1</th>
											<!--<th>Contact</th>-->
										<!--	<th>Address 2</th>-->
											<!--<th>Fax</th>-->
											<th>State</th>
											<th>City</th>
											<th>Zip</th>
											<th>Country</th>
											<th>Balance</th>
											<!--<th>Date</th>-->
											<!--<th>Time</th>-->
											
											<th>Action</th>
										  </tr>
										</thead>
										<tbody>
										
											
												<?php $i=1; foreach ($customers as $r){?>
											<tr>
												<td><?=$i;?></td>
												<td><?=$r['customer_name'];?></td>
												<td><?=$r['email1'];?></td>
												<td><?=$r['mobile'];?></td>
												<!--<td><?=$r['email2'];?></td>-->
												<!--<td><?=$r['phone'];?></td>-->
												<td><?=$r['address1'];?></td>
												<!--<td><?=$r['Contact'];?></td>-->
												<!--<td><?=$r['address2'];?></td>-->
												<!--<td><?=$r['fax'];?></td>-->
												<td><?=$r['state'];?></td>
												<td><?=$r['city'];?></td>
												<td><?=$r['zip'];?></td>
												<td><?=$r['country'];?></td>
												<td><?=$r['balance'];?></td>
												<!--<td><?=$r['date'];?></td>-->
												<!--<td><?=$r['time'];?></td>-->
												
												<td class="text-right py-0 align-middle">
													
												  <div class="btn-group btn-group-sm">
													<a href="<?php echo base_url()?>index.php/admin_controller/edit_customer_list" class="btn btn-info"><i class="fas fa-edit"></i></a>
													<!-- <a href="" data-toggle="modal" data-target="#modal-danger" class="btn btn-danger"><i class="fas fa-trash"></i></a> -->
													<a class="btn btn-danger delete_data" id="<?=$r['customer_id'];?>"><i class="fas fa-trash"></i></a>
												  </div>
												  
												</td>
											</tr>
											<?php //$newId=$r['customer_id']; ?>
											
											
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
			
			
			<section class="content">
			    <div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<!--	<div class="card-header">-->
									<div class="row">
									
										<div class="col-md-3 card-header">
										
										</div>
										<div class="col-md-3 card-header">
										
										</div>
										<div class="col-md-3 card-header">
										
										</div>
										<div class="col-md-3 card-header">
											<b>Total:</b> &nbsp; &nbsp;  <?php foreach ($total as $total){ echo $total['SUM(balance)']; } ?>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
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
  
  //Delete confirm
  $(".delete_data").click(function(){
    var choice = confirm('Do you really want to delete this record?');
        if(choice === true) {
            var del_id = $(this).attr('id');
			//console.log(del_id);
			
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>index.php/admin_controller/delete_customer_list',
                data: 'delete_id='+del_id,
                success: function(data){
					
                   
					if(!data){
                        window.location.replace("<?php echo base_url()?>index.php/admin_controller/customer_list");
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
</script>
</body>
</html>
