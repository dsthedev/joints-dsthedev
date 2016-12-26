<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="medium-centered medium-10 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'custom' ); ?>

				<?php endwhile; endif; ?>

				<hr>
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->

		<?php get_template_part( 'parts/recent', 'portfolio' ); ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>