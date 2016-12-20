<div id="stickyTopAnchor" data-sticky-container>
	<div class="top-bar sticky" data-sticky data-margin-top="0" data-margin-bottom="0" data-top-anchor="stickyTopAnchor" data-btm-anchor="stickyBtmAnchor" data-options="stickyOn:small;">
		<div class="row">
			<nav class="top-bar-left float-left">
				<ul class="menu">
					<?php if (has_site_icon()) { ?>
					<li><a href="<?php echo home_url(); ?>"><img src="<?php site_icon_url(); ?>" alt="<?php bloginfo('name'); ?>"></a></li>
					<?php } else { ?>
					<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
					<?php } ?>
				</ul>
			</nav>
			<nav class="top-bar-right show-for-medium">
				<?php joints_top_nav(); ?>
			</nav>
			<nav class="top-bar-right float-right show-for-small-only">
				<ul class="menu float-right">
					<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
					<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp-dsthedev' ); ?></a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>