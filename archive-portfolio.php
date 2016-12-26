<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="columns" role="main">

				<?php if (have_posts()) :

					joints_page_navi();

					while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'portfolio-grid' ); ?>

					<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

		<?php get_template_part( 'parts/archive', 'drafts-banner' ); ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>