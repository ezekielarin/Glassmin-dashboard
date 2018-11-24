

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
                                <?php echo $blog->post?></p>
              
                              
                            </div>
                        </div>    
                    </div><!--/.blog-item--> 
                 
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
    				
    				<div class="widget categories">
                        <h3>Recent Comments</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt=""  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span>
                                    </div>
                                </div>
                             
                                <div class="single_comments">
                                    <img src="upload/images/blog/" alt=""  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     
 
    				
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->