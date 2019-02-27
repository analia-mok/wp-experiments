<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			<?php wp_reset_postdata(); ?>
		</section>
		<!-- /section -->
		<section class="test-section">
			<?php
				$query_args = array(
					'post_type'	=> '_foo_call_to_action',
					'post_status' => 'publish',
				);
				$new_query = new WP_Query($query_args);
			?>
			<?php if( $new_query->have_posts() ): ?>
				<p>Found Call To Actions</p>
			<?php endif; ?>
		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
