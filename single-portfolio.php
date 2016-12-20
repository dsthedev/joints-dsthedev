<?php /* Template Name: Portfolio Item */ ?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="medium-centered medium-8 columns" role="main">

			<?php if (have_posts()) {

				while (have_posts()) {

					the_post();

					get_template_part( 'parts/loop', 'single-portfolio' );

				}

				joints_page_navi();

			} else {

				get_template_part( 'parts/content', 'missing' );

			} // endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>