<div class="container-fluid width-xxl">
	<div class="row no-gutter">
		<?php
		$imgArray = array('img-odonall.jpg','img-rollsRoyce.jpg','img-yendo.jpg','img-reel.jpg','img-sadaWedding.jpg','img-ajaxCup.jpg');
		$vidArray = array('odonnalWedding.mp4','rollsRoyce.mp4','yendoKickstarter.mp4','2016reel.mp4','sadaWedding.mp4','flyingBoatTrailer.mp4');
		$titleArray = array('Anne & Ryan', 'Rolls Royce Aspen', 'Yendo Kickstarter','Red Mtn Productions 2015 Reel','Rutsofia & Mauricio','Audi Ajax Cup 2015');
		$idArray = array(178418791,175901234,175895207,161328472,174861992,150752509);
		$i = -1;
		while ($i < 5) {
			$i++;
			$imgid = $idArray[$i];
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php")); ?>
			<div class="col-sm-4 col-xs-6">
				<div class="post-film">
					<div class="overlay-dark">
						<a class="fancybox-media" rel="videos" href="//player.vimeo.com/video/<?php echo $imgid; ?>?color=ffffff">
							<div class="overlay-content">
								<h2><?php echo $titleArray[$i]; ?></h2>
								<div class="play-btn block-center"></div>
							</div>
						</a>
					</div>
					<img src='<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo $imgArray[$i]; ?>'>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
