<section class="main wrapper container">

</section>

<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="/">Home</a></li>
				<li>Blog</li>			
			</div>		
		</div>	
	</div>


<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-md-8">

			<?php 
			 foreach ($blog as $blog) {
			 	?>
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo $blog->post_date?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?php echo $blog->author?></a></span>
                                    
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="uploads/images/blog/" width="100%" alt="" /></a>
                                <h4><?php echo $blog->title?></h4>
                                <p>
                                <?php echo substr($blog->post, 0, 250)?></p>
              
                                <a href="/blog/<?php echo $blog->slug?>" class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->


			        <?php
						 }
			           ?>

                        
                    
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
    				
                     

                    <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Computers <span class="badge">04</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
    				
    				<div class="widget archieve">
                        <h3>Archieve</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2015 <span class="pull-right">(97)</span></a></li>
                                    
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2015 <span class="pull-right">(08)</a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
    				
                    
    				
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->