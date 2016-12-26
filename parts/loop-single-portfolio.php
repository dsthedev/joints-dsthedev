<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header text-center">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php //get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->

	<section class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('medium'); ?>
		<hr>
		<?php the_content(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<h6 class="back-portfolio"><a href="<?php echo home_url( '/portfolio' ); ?>">Back to Portfolio</a></h6>
		<?php if (HAS_ACFPRO) { ?>
		<p class="text-center">
			<a class="button" href="<?php echo get_field('epi_url'); ?>" target="_blank">Visit Site</a>
		</p>
		<?php } ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->

	<?php //comments_template(); ?>

</article> <!-- end article -->