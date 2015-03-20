<?php
	# Portfolio items vergaard in de eerste 12 items die in een bootstrap grid wordt weergegeven
	# standaard col-sm-4
	
	#CSS maakt gebruik van de hover effects van http://tympanus.net/Development/HoverEffectIdeas/index.html
	$effect_class  		= 'effect-zoe';
	$item_class    		= 'col-sm-4 text-center';
	$full_frame_link 	= false;
	
?>

<?php //eerst categorieen ophalen:

$args = array( 'hide_empty=0' );

$terms = get_terms( 'portfolio-categorie', $args );?>

<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>

<div class="clearfix" id="portfolio">
		  
	<div class="container">
		<h2 class='portfolio-title'>Portfolio</h2>			 
		<div class="row">

			<?php foreach ($terms as $term): ?>
				
				<?php query_posts( array( 'post_type' => 'portfolio', 'posts_per_page' => 1,  ) ); ?>
				
				<?php while ( have_posts() ) : the_post(); $count++; ?>
							
						<?php $feature_url = '/portfolio-categorie/'.$term->slug; ?>
						
						<section class="portfolio-item <?= $item_class?>">
							<figure  class="<?= $effect_class ?>">
						
								<?php 
										if( $full_frame_link ) {
												echo "<a href='$feature_url' title='$term->name'><div>"; 
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
												<?= $term->name ?>
											</h2>
											<p class="icon-links">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="<?php echo $feature_url; ?>"><i class="fa fa-link"></i></a>
												<a href="<?php echo $thumb[0]; ?>" rel="group-portfolio" class="fancybox"><i class="fa fa-picture-o"></i></a>
											</p>
											<p class="description">
												<?= $term->description ?>
											</p>
										</div>
									</figcaption>
									<?php 
									
									if( $full_frame_link ) {
									  
									  echo "</div></a>";
									  
									} 
									?>
							
							</figure>
						</section>
				
					<?php endwhile; ?>
			
			<?php endforeach;?>

		</div> <!-- end row -->
	</div> <!-- end container -->
</div> <!-- end portfolio -->
<?php endif; ?>		    		
<?php wp_reset_query(); ?>