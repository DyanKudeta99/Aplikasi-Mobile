<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Bengkel Ahass Motor</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url()?>aceadmin/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>aceadmin/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url()?>aceadmin/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url()?>aceadmin/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url()?>aceadmin/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url()?>aceadmin/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>aceadmin/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url()?>aceadmin/assets/css/ace-ie.min.css" />
		<![endif]-->
		<style>
			#back  {
			content : "";
					width : 100%;
					height : 600px;
					background-image:linear-gradient(rgba(255,255,255, 0.4), rgba(255,255,255, 0.4)), url("<?php echo base_url()?>
					aceadmin/assets/images/ahas.jpg");
					display:block;
					position:relative
					opacity: 0.5;
					background-size : cover
			}
		
		
		</style>

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url()?>aceadmin/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url()?>aceadmin/assets/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url()?>aceadmin/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default  ace-save-state"     background: #e82b2b;>
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar" >
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="example" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Admin Bengkel Ahass
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important"></span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Booking
													</span>
													<span class="pull-right badge badge-info"></span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												New Member
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success"></span>
												</div>
											</a>
										</li>

									</ul>
								</li>

							</ul>
						</li>

						
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="<?=site_url('profil');?>" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url()?>aceadmin/assets/images/yoland.jpg" alt="Vinny's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
										to My Bengkel
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?=site_url('setting');?>">
										<i class="ace-icon fa fa-cog"></i>
										Edit Profil
									</a>
								</li>

								<li>
									<a href="<?=site_url('profil');?>">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?=site_url('Login_Ahass');?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="<?=site_url('service');?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Service </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?=site_url('mekanik');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Mekanik
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?=site_url('user');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Customer
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?=site_url('sparepart');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Sparepart
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?=site_url('jservice');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Jenis Service
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="<?=site_url('booking');?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Booking </span>
						</a>

						<b class="arrow"></b>
					</li>
					
				</ul>
					

					<!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner" id="back">