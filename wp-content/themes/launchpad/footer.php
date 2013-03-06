<?php if(is_page('2')){

} else {
	echo '<div id="footerShadow" class="hide-for-small"></div>';
	echo '<div id="footerLine" class="hide-for-small"></div>';
}
?>

<div id="footer" class="hide-for-small">
	<ul><?php wp_list_pages('title_li='); ?></ul>
</div>

<div id="mobileShadow" class="show-for-small"></div>
<div id="mobileMenu" class="show-for-small">
	<div class="row display">
		<div class="three mobile-one columns"><a href="<?php echo site_url(); ?>" class="menuItem">Home</a></div>
		<div class="three mobile-one columns"><a href="<?php echo site_url(); ?>/about" class="menuItem">About</a></div>
		<div class="three mobile-one columns"><a href="<?php echo site_url(); ?>/jobs" class="menuItem">Jobs</a></div>
		<div class="three mobile-one columns"><a href="<?php echo site_url(); ?>/blog" class="menuItem">Blog</a></div>	
	</div>	
</div>


<?php wp_footer(); ?>