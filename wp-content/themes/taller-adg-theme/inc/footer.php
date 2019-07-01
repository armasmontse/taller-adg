<?php
$contacto = new Cltvo_Page_Contacto(specialPage(__('contacto',TRANSDOMAIN)));
$social = $contacto->social_net;
$lang_code = getBlogLanguage();
?>

<footer class="footer">
	<div class="grid__container footer__container">
		<div class="footer__address">
			<h3 class="footer__ttl"><a href="<?php echo BLOGURL .'/'.$lang_code ?>">Taller ADG</a></h3>
			<p class="footer__item"><?php echo isset($social['direccion'][0]) ? $social['direccion'][0]   : ''  ?></p>
			<p class="footer__item"><?php echo  isset($social['direccion'][1]) ?  $social['direccion'][1]  : ''  ?></p>
		</div>
		<div>
			<p class="footer__item"><a href="tel:<?php echo $social['telefono'] ?>"><?php echo $social['telefono'] ?></a></p>
		</div>
		<div>
			<p class="footer__item"><a href="mailto:<?php echo $social['mail'] ?>"><?php echo $social['mail'] ?></a></p>
		</div>
		<div>
			<p class="footer__item">
				<a target="_blank" href="<?php echo $social['facebook']['link'] ?>">FB</a>
				<a target="_blank" href="<?php echo $social['instagram']['link'] ?>">IG</a>
				<a target="_blank" href="<?php echo $social['tumblr']['link'] ?>">TB</a>
			</p>
		</div>
	</div>
</footer>
