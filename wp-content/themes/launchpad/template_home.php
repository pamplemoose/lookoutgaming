<?php
/*
Template Name: Home
*/

get_header('main');

?>



	<div id="homeHeader">

		<div class="row">

			<div class="twelve columns">
			
				<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/lookoutgaming_logo.png" alt="LookoutGaming Logo" class="logo hide-for-small"></a>
				<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/lookoutgaming_logo.png" alt="LookoutGaming Logo" class="logoSmall show-for-small"></a>
				
				<div class="hide-for-small">
				
					<div id="homeStrapline">We're a stealth-mode startup making gaming <em>meaningful.</em></div>
					<div id="homeStraplineSub">Here's how to stay updated on our progress:</div>
				
					<div id="homeArrow" class="hide-for-small"></div>
					
					<div id="homeRSS">
					<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $lp_feedburner_address; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
	                    <p><input type="text" name="email" id="inputRSS" placeholder="Enter your email address"/ ></p>
	                <input type="hidden" value="<?php echo $lp_feedburner_address; ?>" name="uri"/>
	                <input type="hidden" name="loc" value="en_US"/>
	                <input type="submit" value="Subscribe via RSS" id="subscribeRSS"/>
	                </form>
			           
			           <div id="formRSSBelow" class="hide-for-small">
	                	(or use your own <a href="<?php if($lp_feedburner_address) { echo $lp_feedburner_url; } else { bloginfo('rss2_url'); }?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('RSS feed', ''); ?>" rel="alternate" type="application/rss+xml">Feed Reader</a>)
		                </div>
			           		            
					</div>
					
				</div>
				
				<div class="show-for-small" id="homeMobile">
					<div class="subHeading">We're a stealth-mode startup making gaming <em>meaningful</em></div>
					<div class="subHeading2">Here's how to stay updated on our progress:</div>
				
					<div id="homeRSS">
				
					<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $lp_feedburner_address; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
	                <p><input type="text" name="email" id="inputRSS" placeholder="Enter your email address"/ ></p>
	                <input type="hidden" value="<?php echo $lp_feedburner_address; ?>" name="uri"/>
	                <input type="hidden" name="loc" value="en_US"/>
	                <input type="submit" value="Subscribe via RSS" id="subscribeRSS"/>
	                </form>
	                
					</div>

				
				</div>
				
				
		 				
			</div>
		
		</div>	
		
	</div>
	
	<?php get_footer(); ?>
	
	  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
</body>
</html>
