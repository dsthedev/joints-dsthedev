<?php $grid_columns = 2; // Adjust the amount of rows in the grid ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ) { ?>

	<div class="row archive-grid" data-equalizer="portfolio-grid"> <!--Begin Row:-->

<?php } ?>

		<!--Item: -->
		<div class="medium-6 columns text-center" data-equalizer-watch="portfolio-grid">

			<article id="post-<?php the_ID(); ?>" <?php post_class('callout'); ?> role="article">

				<header class="article-header">
					<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				</header> <!-- end article header -->
				<hr>
				<section class="featured-image" itemprop="articleBody">
					<?php the_post_thumbnail('medium'); ?>
				</section> <!-- end article section -->
				<hr>
				<footer class="entry-footer">
					<span class="column medium-6">
						<a class="button success expanded" href="<?php echo the_permalink(); ?>">View Details</a>
					</span>
					<?php if (HAS_ACFPRO) { ?>
					<span class="column medium-6">
						<a class="button secondary expanded" href="<?php echo get_field('epi_url'); ?>" target="_blank">Visit Site</a>
					</span>
					<?php } ?>
				</footer> <!-- end article footer -->

			</article> <!-- end article -->

		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ) { ?>

	</div>  <!--End Row: -->

<?php } ?>