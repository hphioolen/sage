<?php
	# Portfolio items vergaard in de eerste 12 items die in een bootstrap grid wordt weergegeven
	# standaard col-sm-4
	#CSS maakt gebruik van de hover effects van http://tympanus.net/Development/HoverEffectIdeas/index.html
	
	# Verschillen: Direct linken 
?>
<?php 


query_posts( array( 'post_type' => 'portfolio', 'posts_per_page' => 12, ) );
		
	if ( have_posts() ) : $count = 0; ?>    
	
	  
	  <div class="clearfix" id="portfolio">
		  
		  <div class="container">
			 <h2 class='portfolio-title'>Portfolio</h2>			 
		  	<div class="row">
	    	
				<?php while ( have_posts() ) : the_post(); $count++; ?>
					
					<?php $title = get_the_title(); 
					$feature_url = get_permalink(); ?>
					
					<section class="portfolio-item col-sm-4 text-center">
						<figure  class="effect-zoe">
					
							<?php 
									if( ! empty( $feature_url ) ) {
											echo "<a href='$feature_url' title='$title'><div>"; 
										}
							?>
							
							<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.									
							
										the_post_thumbnail();
										
										
										$thumbnail_id = get_post_thumbnail_id();
										
										$thumb = wp_get_attachment_image_src($thumbnail_id, 'full');
										
										
										
										//print_r($thumb[0]);																			
									
							} ?>
							
								<figcaption>
									<div>
										<h2>								
											<?php 	the_title();	?>
										</h2>
										<p class="icon-links">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="<?php echo $feature_url; ?>"><i class="fa fa-link"></i></a>
											<a href="<?php echo $thumb[0]; ?>" rel="group-portfolio" class="fancybox"><i class="fa fa-picture-o"></i></a>
										</p>
										<p class="description">
											<?php echo get_the_content(); ?>
										</p>
									</div>
								</figcaption>
								<?php 
								
								if( ! empty( $feature_url ) ) {
								  
								  echo "</div></a>";
								  
								} 
								?>
						
						</figure>
					</section>
	
				<?php endwhile; ?>
		  	</div>	
		  </div>
	  </div>

<?php endif; ?>			    		
<?php wp_reset_query(); ?>