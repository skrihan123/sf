	<?php
	if (empty(session_id())) {
		session_start();
	}
	if (empty($_SESSION['a_id'])) {
		header("Location: login");
	}
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="components/metisMenu.min.css" rel="stylesheet">
	<link href="components/dataTables.bootstrap.css" rel="stylesheet">
	<link href="components/dataTables.responsive.css" rel="stylesheet">
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="dashboard"><img src="dist/images/adminlogo.png" class="img-responsive" style="margin-top:-10px; height:40px;" alt="Logo" /></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#myModalpwd"><i class="fa fa-gear fa-fw"></i>&nbsp;&nbsp;Change Password</a></li>
                <li><a href="pages/loginaction?submit=logout"><i class="fa fa-power-off fa-fw"></i> Logout</a> </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a href="dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                        <?php
						$perm = explode(',', $_SESSION['a_pagepermission']);
						?>
						<?php
                        if (in_array('2', $perm)) {
							?>
                            <li> <a href="#"><i class="fa fa-sitemap fa-fw"></i> Registration List<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="team-list">Team List</a></li>
                                    <li><a href="volunteer-list">Volunteer List</a></li>
                                    <li><a href="sponsor-list">Sponsor List</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-list">Contact</a></li>
							<?php
							}
						?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="myModalpwd" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Password</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" action="pages/action-pwd.php" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">New Password</label>
                                <div class="col-sm-8">
                                    <input class="form-control" placeholder="" name="a_pwd" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Confirm Password</label>
                                <div class="col-sm-8">
                                    <input class="form-control" placeholder="" name="confirm_a_pwd" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <input type="hidden" name="submit" value="updatepwd" />
                                    <input type="hidden" name="a_idchk" value="<?php echo $a_idchk; ?>" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>