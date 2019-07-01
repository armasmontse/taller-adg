<?php
$contacto = new Cltvo_Page_Contacto();
$social = $contacto->social_net;
$lang_code = getBlogLanguage();
?>

<footer class="footer">
	<div class="grid__container footer__container">
		<div>
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

<script>
	<?php if ($social['latitude'] !== "" && $social['longitude'] !== ""):?>
		var taller_adg_coordinates = {
			lat: parseFloat(<?php echo $social['latitude'] ?>),
			lng: parseFloat(<?php echo $social['longitude'] ?>),
		}
	<?php endif ?>
	//var taller_adg_address = '<?php echo $social['direccion'][0] .' '. $social['direccion'][1] ?>'
	var taller_adg_address = 'Taller ADG'
	var icon_url = '<?php echoImg('map-icon.png'); ?>'
</script>
