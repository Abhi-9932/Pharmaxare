  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" data-widget="fullscreen" href="#" role="button">
			  <i class="fas fa-expand-arrows-alt"></i>
			</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
			  <i class="nav-icon far fa-user"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			  <div class="dropdown-divider"></div>
			  <a href="#" class="dropdown-item">
				<i class="nav-icon  fas fa-user-circle"></i> My Profile
			 </a>
			  <div class="dropdown-divider"></div>
			  <a href="#" class="dropdown-item">
				<i class="nav-icon fas fa-edit"></i> Edit Profile
			  </a>
			  <div class="dropdown-divider"></div>
			  <a href="<?php echo base_url();?>index.php/admin_controller/logout" class="dropdown-item">
				<i class="fas fa-file mr-2"></i> Signout
			  </a>
			</div>
		</li>
    </ul>
  </nav>
  <!-- /.navbar -->