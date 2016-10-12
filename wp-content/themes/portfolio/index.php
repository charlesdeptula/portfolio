<?php get_header(); ?>

<h1 class="hidden">Charles Deptula . com | Videographer Web Developer Filmmaker Designer Aspen Boston Denver New York Portland Oregon Massachusetts New England Colorado</h1>

<section class="banner-main">
	<div class="btn-reel-container">
		<button class="btn-reel main" id="btn-reel">DEMO REEL</button>
	</div>
	<video loop poster="<?php bloginfo('stylesheet_directory'); ?>/img/banner-main.jpg" id="banner-video">
		<source src="<?php bloginfo('stylesheet_directory'); ?>/media/starLapse.mp4" type="video/mp4" />
	</video>
	<button id="play-pause-banner" class="play-pause" type="button"></button>
	<video controls poster="<?php bloginfo('stylesheet_directory'); ?>/img/banner-main.jpg" id="reel" class="nodisplay">
		<source src="<?php bloginfo('stylesheet_directory'); ?>/media/2016-demoReelWide.mp4" type="video/mp4" />
	</video>
	<nav class="main">
		<ul>
			<li><a href="#section-1">About</a></li>
			<li><a href="#section-2">Film</a></li>
			<li><a href="#section-3">Web</a></li>
		</ul>
	</nav>
</section>


<section id="section-1">
	<a href="#section-1">
		<div class="arrow arrow-down arrow-down-main block-center"></div>
	</a>
	<div class="container">
		<div class="about-content">
			<h1>Hello</h1>
			<div class="line block-center"></div>
			<p>Welcome to Charles Deptula . com. Here you will find my portfolio work, as well as some fun projects I have done on my spare time. This website is entirely custom built and all content is original. Enjoy!</p>
			<div class="line block-center"></div>
		</div>
	</div>
</section>

<section id="section-2">
	<?php get_template_part( 'section-film' ); ?>
</section>

<section id="section-3">
	<?php get_template_part( 'section-web' ); ?>
</section>

<div class="footer-video">
	<video loop  id="footer-video">
		<source src="<?php bloginfo('stylesheet_directory'); ?>/media/timeLapse.mp4" type="video/mp4" />
	</video>
	<button id="play-pause-footer" class="play-pause" type="button"></button>
</div>

<footer class="main">
	<div class="container">
		<h1 class="uppercase footer-heading">Charles Deptula . com</h1>
		<div class="line"></div>
		<div class="row block-center width-sm footer-content">
			<div class="col-sm-4">
				<h3>Contact</h3>
				<a href="mailto:charles.deptula@gmail.com">charles.deptula@gmail.com</a><br>
				617.833.5623
			</div>
			<div class="col-sm-4">
				<h3>Connect</h3>
				<a href="http://facebook.com/charlie.deptula" target="_blank">/charlie.deptula</a><br>
				<a href="http://instagram.com/charlie_deptula" target="_blank">@charlie_deptula</a>
			</div>
			<div class="col-sm-4">
				<h3>Affiliates</h3>
				<a href="http://redmtnproductions.com" target="_blank">Red Mtn Productions</a><br>
				<a href="http://digitalsauna.com" target="_blank">Digital Sauna</a>
			</div>
			<div class="footer-locations uppercase">NYC | Boston | Portland | Denver | Aspen</div>
		</div>
	</div>
</footer>
<div class="footer-copyright">&copy;2016, <a href="http://charlesdeptula.com">charles deptula . com</a></div>

<?php get_footer(); ?>