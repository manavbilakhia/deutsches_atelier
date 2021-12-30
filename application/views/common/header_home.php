<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>German Tutor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Learn german language with ease">
	<meta name="author" content="">
	<link href="assets/template/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="assets/template/css/style.css" rel="stylesheet">
	<link href="assets/template/color/default.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url();?>assets/images/icons/favicon.ico" type="image/x-icon">

</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>

					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
						<li <?php if($this->uri->segment(1)==""){echo 'class="active"';}?> ><a title="team" href="./">Home</a></li>
							<li <?php if($this->uri->segment(1)=="whystudy"){echo 'class="active"';}?>><a title="team" href="index.php?/whystudy">Why Study German</a></li>
							<li  <?php if($this->uri->segment(1)=="services"){echo 'class="active"';}?>><a title="team" href="index.php?/services">Our Translation Services</a></li>
							<li <?php if($this->uri->segment(1)=="enrol"){echo 'class="active"';}?>><a title="team" href="index.php?/enrol">How to Enroll</a></li>
							<li><a href="index.php?/login"> Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->