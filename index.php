<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
				<div class="post">
					
					<h2><a href="#"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
					<span class="post-meta">Posted by <?php the_author(); ?></a> on <?php the_time('F jS, Y') ?></span>

				</div><!-- .post --> 

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>			