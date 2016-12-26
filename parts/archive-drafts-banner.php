<?php

global $wp_query;
$current_page = $wp_query->get( 'paged' );

if ( $current_page == $wp_query->max_num_pages ) { ?>

<div id="archive-drafts-banner" class="archive-drafts-banner">

	<section class="medium-centered medium-10 large-8 column">
		<ul class="accordion" data-accordion data-allow-all-closed="true">
			<li class="accordion-item" data-accordion-item>
				<a href="#" class="accordion-title"><h3>More Projects</h3></a>

				<div class="accordion-content" data-tab-content>
					<blockquote>Here are a few other projects I was involved in.  Unless the site owner has changed anything, each should represent the final results of either me doing all the custom development work, or leading a small group to do so.</blockquote>

					<ul class="vertical menu text-left row">

						<?php $args = array(
							'posts_per_page' => -1,
							'post_type'      => 'portfolio',
							'post_status'    => 'draft',
						);

						$posts_array = get_posts( $args );

						foreach ($posts_array as $portfolio_item) {
							if (HAS_ACFPRO) {
								if (0 < strlen(get_field('epi_url', $portfolio_item->ID))) { ?>


						<li class="column small-6">
							<a target="_blank" href="<?php echo get_field('epi_url', $portfolio_item->ID); ?>"><strong><?php echo $portfolio_item->post_title; ?></strong></a>
						</li>

								<?php } else { ?>

						<li class="column small-6">
							<a href="#archive-drafts-banner" class="disabled"><strong><?php echo $portfolio_item->post_title; ?></strong></a>
						</li>

								<?php }
							} ?>

						<?php } ?>

					<ul>
				</div>
			</li>
		</ul>
	</section>
</div>

<?php }

/*FIN*/