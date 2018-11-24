<?php
	$page = $this->db->query("SELECT * FROM pages WHERE slug='terms-and-conditions'")->row();

	?>


<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			
		</div>		
    </section>

<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">
			<div>
				<h3><?php echo $page->title; ?></h3>
		</div>
			<?php echo $page->content; ?>
		</div>
	</div>
</section>

