	<?php
      $settings = $this->db->query("SELECT * FROM settings")->row();
    ?>
		


	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our Team</h2>
					<p>Those who make it work</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
            <div id="filters-container" class="cbp-l-filters-alignLeft">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
         
            </div>
		
            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                	<?php 
                	$teams = $this->db->query("SELECT * FROM team")->result();
                	foreach ($teams as $tm) {
                	?>
                    <li class="cbp-item">
                        <a href="" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="/uploads/images/<?php echo $tm->photo?>" alt="" width="100%">
                            </div>
                           
                        </a>
                        <a href="" class=""><?php echo $tm->name?></a>
                        <div class="cbp-l-grid-team-position"><?php echo $tm->position?></div>
                    </li>                  
                    
                   <?php
                     }
                   ?>
                </ul>
            </div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->

	
		
	
	
	
	<section id="partner" class="home-section paddingbot-60">	
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our partner and Sponsors</h2>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
           <div class="container">
				<div class="row">
					<?php
					$query = $this->db->query("SELECT * FROM sponsors")->result();
					foreach($query as $sponsors)
					{
					?>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="uploads/images/<?php echo $sponsors->logo?>" alt="" width="100" height="50%" ></a>
						</div>
					</div>
					<?php
				      }
					?>
					</div>
				</div>
            </div>
	</section>	
