<?php get_header(); ?>

	<div id="pageContents">
	
		<div class="row">
			<div class="twelve columns">
				
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>
	
				<?php endwhile; // end of the loop. ?>
				
			</div>
		</div>
		
	</div>
	
	<?php get_footer(); ?>
	
</div>
	
	  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
</body>
</html>
