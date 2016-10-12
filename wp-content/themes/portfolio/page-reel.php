<?php // Template Name: Reel

get_header(); ?>

<div class="reel-container">
	<video class="reel" controls autoplay>
	  <source src="<?php bloginfo('stylesheet_directory'); ?>/media/2016-demoReelWide.mp4" type="video/mp4" />
	</video>
</div>

<?php get_footer(); ?>