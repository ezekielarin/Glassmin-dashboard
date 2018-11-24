	<footer>
	<?php
      $settings = $this->db->query("SELECT * FROM settings")->row();

	?>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About Your site</h5>
						<p>
						A little about us and so on and so forth
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>News Letter</h5>
						<span>Get our latest updates</span>
						<ul>
							<form action="<?php echo base_url()?>news-letter/subscribe" method="post">
								<input class="form-control" type="text" name="email" placeholder="Enter your E-mail">
								<input class="btn btn-success" type="submit" name="sub" value="subscribe">
							</form>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Work Hours</h5>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Friday, 8am to 5pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> <?php echo $settings->phone?>
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> <?php echo $settings->email?>
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our Address</h5>
						<p><?php echo $settings->address?></p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow Us</h5>
						<ul class="company-social">

								<li class="social-facebook"><a href="https://facebook.com/sfprojects01"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="https://twitter.com/ProjectsSolid"><i class="fa fa-twitter"></i></a></li>
								<li class="social-twitter"><a href="https://www.instagram.com/sfprojects01/"><i class="fa fa-instagram"></i></a></li>
								
								
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2015 - SF Projects All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<p><a href="http://glasscup.com.ng/">Developed</a> Glass Cup Enterprise</p>
					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="<?php echo base_url()?>assets/front/js/jquery.min.js"></script>	 
    <script src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/jquery.easing.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery.scrollTo.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery.appear.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/stellar.js"></script>
	<script src="<?php echo base_url()?>assets/front/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/nivo-lightbox.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/custom.js"></script>
    

    <script type="text/javascript" src="<?php echo base_url()?>analytics/package.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>analytics/src/ua-parser.js"></script>

    <script type="text/javascript">

	var parser = new UAParser();

    // by default it takes ua string from current browser's window.navigator.userAgent
    console.log(parser.getResult());

</script>

</body>

</html>
