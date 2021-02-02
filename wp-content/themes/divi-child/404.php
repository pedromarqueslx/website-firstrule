<?php get_header(); ?>

<div id="main-content">

	<div class="top_blue_bar_for_posts">
		<h1>Página inexistente</h1>
	</div> <!-- .top_blue_bar_for_pages -->
	<div class="container">
		<div id="content-area" class="clearfix">
			<article id="post-0" <?php post_class( 'et_pb_post not_found' ); ?>>
				<?php
					if ( is_active_sidebar( 'divi-plus-404' ) ) { dynamic_sidebar( 'divi-plus-404' ); }
					else { get_template_part( 'includes/no-results', '404' ); }
				?>
			</article> <!-- .et_pb_post -->
		</div> <!-- #content-area -->
	</div> <!-- .container -->
	
</div> <!-- #main-content -->

<?php get_footer(); ?>