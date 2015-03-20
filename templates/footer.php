<footer class="content-info clearfix" role="contentinfo">
	<div class="container">	
		<div class="row">
			  <div class="col-md-4 left"><?php dynamic_sidebar('sidebar-footer-1'); ?></div>
			  <div class="col-md-4 center"> <?php dynamic_sidebar('sidebar-footer-2'); ?></div>
			  <div class="col-md-4 right"><?php dynamic_sidebar('sidebar-footer-3'); ?></div>
		</div>
	</div>  
</footer>

<footer class="footer-bottom">
	<div class="container">	
		<div class="row">
			<div class="col-xs-6 left">&copy; <?= date("Y"); ?> <?= get_bloginfo('name'); ?></div>
			<div class="col-xs-6 text-right">Powered by <a href="http://newfish.nl" target="_blank">Newfish</a></div>
		</div>
	</div>		
</footer>
