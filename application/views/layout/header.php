     <?php

      $this->analytics->write();
      $settings = $this->db->query("SELECT * FROM settings")->row();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $headers['title'] ?> - SiteName</title>
	
    <!-- css -->
    <link href="<?php echo base_url()?>assets/front/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets/front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/front/plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="<?php echo base_url()?>assets/front/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets/front/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/front/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url()?>assets/front/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="<?php echo base_url()?>assets/front/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/front/css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="<?php echo base_url()?>assets/front/bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="<?php echo base_url()?>assets/front/color/default.css" rel="stylesheet">

    <script type="text/javascript" src="/analytics/ua-parser.min.js"></script>


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">
                    <img src="<?php echo base_url()?>assets/front/img/" alt="Logo" width="60" height="43" />
                    <span><?php echo $settings->site_title?></span>            
                </a>
            </div>
           <p></p>
           
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url()?>">Home</a></li>
				<li><a href="<?php echo base_url()?>about-us">About Us</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>