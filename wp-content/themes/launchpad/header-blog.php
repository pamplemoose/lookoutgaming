<div id="wrapper">

	<div id="blogHeader">

		<div class="row">

			<div class="twelve columns">
							
				<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/lookoutgaming_logo.png" alt="LookoutGaming Logo" class="logo"></a>
				
				<div id="blogStrapline" class="hide-for-small">We're a stealth-mode startup making gaming <em>meaningful.</em></div>
				
				<div class="blogDividerBottom hide-for-small"></div>
				<div class="blogDividerTop hide-for-small"></div>
				
				<div class="row hide-for-small">
				<div class="one column"></div>
					<div class="three columns blogHeader">
						<h2>Categories</h2>
						<?php wp_list_categories('title_li='); ?>
						
					
					</div>

					<div class="three columns blogHeader">
						<h2>Archives</h2>
						<?php wp_get_archives('type=monthly&limit=6'); ?>
					
					</div>

					<div class="two columns blogHeader">
						<h2>Tags</h2>
						<?php wp_tag_cloud('smallest=9&largest=12&number=10'); ?>
					
					</div>

					<div class="three columns blogHeader">
						<h2>Social</h2>
						<a href="http://www.facebook.com/LookoutGaming" class="facebook" target="_blank"></a>
						<a href="https://twitter.com/Lookout_Gaming" class="twitter" target="_blank"></a>
						<a href="http://www.linkedin.com/company/2702735?trk=tyah" class="linkedin" target="_blank"></a>												
					
					</div>
					

				
				</div>
						            		            
		        </div>
		  
			</div>
		
		</div>	
		
	</div>
