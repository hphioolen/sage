<?php use Roots\Sage\Nav; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      
      <?php
		    $logo = get_template_directory_uri() . '/dist/images/logo.png';
		   
	 ?>
		
		    <a id="logo" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'description' ); ?>">
		    	
		    	<img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
		    	
		    </a>

      
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
