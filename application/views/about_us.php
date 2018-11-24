
	<?php
	$page = $this->db->query("SELECT * FROM pages WHERE slug='about-us'")->row();

	?>

<section>	
	<div class="container">
	</div>
</section>

	<section id="partner" class="home-section paddingbot-60">	
			<div class="container marginbot-50">
				<div class="row">
					<div class="col-md-7">

					<h3><?php echo $page->title; ?></h3>			
					<?php echo $page->content; ?>
				    </div>
			   </div>
			</div>
	</section>

