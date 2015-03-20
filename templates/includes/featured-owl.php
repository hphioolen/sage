<?php
/**
 *  Homepage Slider OWLSLIDER Package
 *  javascript in _main.js 
 */
	global $wp_query, $post, $panel_error_message;
	
	//settings 
	$settings['featured_order']  = 'ASC';
	$featposts                   = 4;
	$orderby                     = 'date';  //rand, none, menu_order
	$full_width                  = false;
	$show_title	                 = false;
	$show_description            = false;
?>


<?php 
	$slides = get_posts(array('post_type' => 'slide', 'numberposts' => $featposts, 'order' => $settings['featured_order'], 'orderby' => $orderby, 'suppress_filters' =>0
	)); ?>


<?php if (( count($slides) > 0 )) { ?>

<div class="slider-container">
	
	<?php if (!$full_width): ?>
	<div class="container">
	<?php endif; ?>
		
		    <div id="owl-slider" class="owl-carousel owl-theme">
		        
	            <?php foreach($slides as $post) : setup_postdata($post); $count++; ?>    
		            
		            <div id="slide-<?php echo $count; ?>" class="item slide-id-<?php the_ID(); ?>" >
		        		
	    	    		<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
															
									the_post_thumbnail();
								}
						?>
						<?php if ($show_title): ?>
							<h2 class="slider-title"><?php the_title(); ?></h2>
						<?php endif; ?>
						<?php if ($show_description): ?>
							<div class="slider-content-holder"
								<p class="slider-content"><?php the_content(); ?></p>
			            	</div>
						<?php endif; ?>
	    	    			            	
		            </div><!--/.slide-->
		            
				<?php endforeach; ?> 
				
		    </div>
	<?php if (!$full_width): ?>
	</div>
	<?php endif; ?>
</div>    
<?php }?>