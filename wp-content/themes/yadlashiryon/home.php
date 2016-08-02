<?php
/*
 * Template Name: Home
 */
get_header();?>
	<div id="main">
		<div class="<?php the_container(); ?>">
			<div id="page-<?php the_ID();?>" role="document">
				<?php while( have_posts() ) : the_post();?>
					<?php the_content();?>
				<?php endwhile;?>
			</div>
		</div>
	</div>
<?php get_footer();