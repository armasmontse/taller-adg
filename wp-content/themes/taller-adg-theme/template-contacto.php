<?php
/*
Template Name: Contacto
*/

get_header();
$contacto = new Cltvo_Page_Contacto(specialPage(__('contacto',TRANSDOMAIN)));
$social = $contacto->social_net;
?>

	<div id="map" class="contacto__map page__image"></div>
	<!-- <div class="contacto__map map_JS">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7528.088181696206!2d-99.26735530626554!3d19.367243464393507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d200c4b74cfa79%3A0xbf6a3a466e76b3a!2sTALLER+ADG!5e0!3m2!1sen!2smx!4v1500485830746" scrolling="no" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div> -->

	<div class="contacto__data-container">
		<p class="contacto__data contacto__data-address address_1"><?php echo isset($social['direccion'][0]) ? $social['direccion'][0]: '' ?></p>
		<p class="contacto__data contacto__data-address address_2"><?php echo isset($social['direccion'][1]) ? $social['direccion'][1] : '' ?></p>
		<a href="tel:<?php echo $social['telefono'] ?>" class="contacto__data contacto__data-tel"><?php echo $social['telefono'] ?></a >
		<a href="mailto:<?php echo $social['mail'] ?>" class="contacto__data contacto__data-email"><?php echo $social['mail'] ?></a >
		<a href="<?php echo BLOGURL ?>" class="contacto__data contacto__data-web">www.talleradg.com</a >

		<div class="contacto__social-container">
			<?php if ($social['facebook']['link']) : ?>
				<a target="_blank" href="<?php echo $social['facebook']['link'] ?>" class="">FB</a>
			<?php endif ?>
			<?php if ($social['instagram']['link']) : ?>
				<a target="_blank" href="<?php echo $social['instagram']['link'] ?>" class="">IG</a>
			<?php endif ?>
			<?php if ($social['tumblr']['link']) : ?>
				<a target="_blank" href="<?php echo $social['tumblr']['link'] ?>" class="">TB</a>
			<?php endif ?>
		</div>
	</div>

<?php get_footer('contacto') ?>
