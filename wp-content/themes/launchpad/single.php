<?php

/*
Template Name: Blog
*/
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header('main');
get_header('blog'); ?>

		<div id="primary">
			
			<div class="row">
			
				<div class="one column"></div>
				
				<div class="ten columns">

				<?php if ( have_posts() ) : ?>
	
					<?php while ( have_posts() ) : the_post(); ?>
	
						<div class="title">
							
							<div class="theTitle">
							<?php the_title();?>
							</div>
							
							<div class="theDate">
							<?php the_date(); ?>
							</div>
							
						</div>
						
						<?php the_content(); ?>
						
						<div class="closingDivider"></div>
						
						<?php comments_template(); ?> 

						
	
					<?php endwhile; ?>
	
					
	
				<?php else : ?>
	
				
						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
							
	
				<?php endif; ?>
				
				
				
				</div>
				
				<div class="one column"></div>

			</div><!-- #row -->
		</div><!-- #primary -->


<?php get_footer(); ?>