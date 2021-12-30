<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-inverse navbar-flat navbar-top" >
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#">Deutsches Atelier</a>
				</div>
				<div class="navpull-right">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User <b class="caret"></b></a>
                        <ul class="dropdown-menu">
							<li class="user-header" >

                                    <img src="assets/extra/Content/icon_images/user_image.png" width="50%" class="img-circle center" alt="User Image">

                                    <p class="text-center">
										<?php echo $this->session->userdata('fullname'); ?>
										</br><small><?php echo $this->session->userdata('username'); ?></small>
                                    </p>
                                </li>
                            <li class="divider"></li>
                            <li><a href="index.php?/login/logout"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
			  </div>
			  
			</nav>
			<nav class="navbar navbar-inverse navbar-flat nav  navbar-center" >
			  <div class="container-fluid">
				<ul class="nav navbar-nav">
				  <li <?php if($this->uri->segment(1)=="home"){echo 'class="active"';}?> ><a href="index.php?/home">Dashboard</a></li>
				  <li <?php if($this->uri->segment(1)=="courses"){echo 'class="active"';}?> ><a href="index.php?/courses">Course Details</a></li>
				  <li   <?php if($this->uri->segment(1)=="assignment"){echo 'class="active"';}?> ><a href="index.php?/assignment">Assignment</a></li>
				  <li   <?php if($this->uri->segment(1)=="chat"){echo 'class="active"';}?> ><a href="index.php?/chat">Chat</a></li>
				  
				  <li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Files
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li <?php if($this->uri->segment(1)=="photos"){echo 'class="active"';}?>><a  href="index.php?/media/photos">Photos</a></li>
					  <li <?php if($this->uri->segment(1)=="videos"){echo 'class="active"';}?> ><a href="index.php?/media/videos">Videos</a></li>
					  <li <?php if($this->uri->segment(1)=="audios"){echo 'class="active"';}?>><a href="index.php?/media/audios">Audios</a></li>
					  <li <?php if($this->uri->segment(1)=="documents"){echo 'class="active"';}?> ><a href="index.php?/media/documents">Documents</a></li>
					</ul>
				  </li>
				  <?php if($this->session->userdata('user_group_id')==1):?>
				  <li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Options
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="index.php?/assignment/submitted_assignments">View Assignments</a></li>
					  <li><a href="index.php?/configuration/add_user">Add User</a></li>
					  <li><a href="index.php?/configuration/classes">Add Class</a></li>
					  

					</ul>
				  </li>
				  <?php endif;?>
				</ul>
			  </div>
			</nav>
        </header>