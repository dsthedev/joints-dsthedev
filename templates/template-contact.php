<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="medium-centered large-6 medium-10 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'custom' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>