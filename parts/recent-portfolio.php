<div id="recent-portfolio" class="recent-portfolio text-center">
	<h3>Featured Work</h3><br>

	<section class="slickslider">
		<?php $args = array(
			'posts_per_page'     => 5,
			'post_type'          => 'portfolio',
			'portfolio_category' => 'featured',
		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $portfolio_item) { ?>

			<div>
				<a href="<?php echo get_permalink( $portfolio_item->ID ); ?>">
					<?php echo get_the_post_thumbnail( $portfolio_item->ID, 'medium' ); ?>
					<h4 class="subheader"><?php echo $portfolio_item->post_title; ?></h4>
				</a>
			</div>

		<?php } ?>
	</section>

	<br>
	<a class="button" href="<?php echo home_url('/portfolio'); ?>">View All Work</a>

</div>