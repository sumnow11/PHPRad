
<div class="navbar navbar-expand-md fixed-left flex-column navbar-dark bg-dark">
		
	<a class="navbar-brand" href="<?php print_link(HOME_PAGE) ?>">
		<img class="img-responsive" src="<?php print_link(SITE_LOGO); ?>" /> <?php echo SITE_NAME ?>
	</a>

	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse flex-column collapse navbar-responsive-collapse">
		
		<?php Html :: render_menu(Menu :: $navbarsideleft  , 'nav navbar-nav w-100 flex-column align-self-start'); ?>
	</div>
</div>

