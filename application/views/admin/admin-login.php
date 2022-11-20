<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pharmacare</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
			<?php if($this->session->flashdata('error')): ?>
			<div class="col-md-12">
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					  <h4><i class="icon fas fa-times"></i> Failed!</h4>
					  <?php echo $this->session->flashdata('error'); ?>
				</div>
			</div>
					<?php endif;?>
			<div class="login-logo">
				<a href="../../index2.html">Pharmacare</a>
			</div>
	  <!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
			 <!-- <p class="login-box-msg">Sign in to start your session</p>-->
					<div class="login-logo">
						<a href=""><b>Admin</b>Login</a>
					</div>
				<form action="<?php echo base_url();?>index.php/admin_controller/logindo" method="POST">
					<div class="input-group mb-3">
					  <input type="username" class="form-control" placeholder="Username" name="username">
					  <div class="input-group-append">
						<div class="input-group-text">
						  <span class="fas fa-envelope"></span>
						</div>
					  </div>
					</div>
					<div class="input-group mb-3">
					  <input type="password" class="form-control" placeholder="Password" name="password">
					  <div class="input-group-append">
						<div class="input-group-text">
						  <span class="fas fa-lock"></span>
						</div>
					  </div>
					</div>
					<div class="row">
					  <div class="col-8">
						<div class="icheck-primary">
						  <input type="checkbox" id="remember">
						  <label for="remember">
							Remember Me
						  </label>
						</div>
					  </div>
					  <!-- /.col -->
					  <div class="col-4">
						<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					  </div>
					  <!-- /.col -->
					</div>
				</form>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

<!-- jQuery -->
<script href="<?php echo base_url(); ?>tools/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script href="<?php echo base_url(); ?>tools/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script href="<?php echo base_url(); ?>tools/dist/js/adminlte.min.js"></script>
</body>
</html>
