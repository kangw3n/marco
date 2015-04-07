<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page." - maRco FACADE STUDIO" ?></title>
    <base href="<?php echo base_url();?>"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

	<!-- Optional theme -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/slider.css" />
    <link rel="stylesheet" href="assets/css/sss.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/mediaq.css" />


    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,900' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src=" assets/js/modernizr.custom.86080.js"></script>
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    
    <!-- Customs JavaScript Framework-->
    <script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/sss.min.js"></script>


</head>
<body>
    <div id="wrap">
		<nav class="navbar navbar-default">
		  	<div class="container-fluid">
		    	<!-- Brand and toggle get grouped for better mobile display -->
		    	<div class="navbar-header">
		      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      		</button>
		      		<a class="navbar-brand" href="home/">maRco</a><p class="navbar-text">facade studio</p>
		    	</div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav">
                    	<li <?php if ($page == 'about') echo 'class="active"'; ?>><a href="about/">About</a></li>
				        <li <?php if ($page == 'service') echo 'class="active"'; ?>><a href="service/">Service</a></li>
				        <li <?php if ($page == 'projects') echo 'class="active"'; ?>><a href="projects/">Projects</a></li>
				        <li <?php if ($page == 'contact') echo 'class="active"'; ?>><a href="contact/">Contact</a></li>
			      	</ul>
			    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
