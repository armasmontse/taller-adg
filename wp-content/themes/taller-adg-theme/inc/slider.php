<div class="">
	<div class="swiper-container slider single__slider single__slider_JS">
	    <!-- Additional required wrapper -->
	    <div class="swiper-wrapper">
	        <!-- Slides -->
	        <?php foreach ($opts['gallery'] as $image): ?>
			      <div class="swiper-slide">
		        		<div class="slider__img" style="background-image: url('<?php echo $image->srcs['full'] ?>')"></div>
			      </div>
	        <?php endforeach ?>
	    </div>
	    <!-- If we need navigation buttons -->
	    <div class="slider__nav_JS swiper-button-prev"><?php themeInc('/images/flecha.php');  ?></div>
	    <div class="slider__nav_JS  swiper-button-next"><?php themeInc('/images/flecha2.php');  ?></div>

	    <div class="slider__close swiper-button-close"><?php themeInc('/images/cerrar.php');  ?></div>

	</div>
</div>