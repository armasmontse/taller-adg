<?php
$object  = new MslsOutput();
$display = 1;
$exists  = false;
$links = $object->get( $display, $exists );
$joined_links = join('<span> / </span>', $links);
$joined_links = str_replace('es_ES', 'ES', $joined_links);
$joined_links = str_replace('en_EN', 'EN', $joined_links);

 ?>

<?php
$menuParameters = array(
	'menu'			=>'menu',
	'container'		=> false,
	'echo'			=> false,
	'items_wrap'	=> '%3$s',
	'depth'			=> 0
);
?>

<div id="menu">
	<div class="grid__row menu__row">
		<div class="grid__container s-between nowrap">
			<div class="menu__col--logo">
				<div class="menu__logo">
					<a href="<?php bloginfo('url') ?>">
						<?php themeInc('/images/logo-main.php');  ?>
					</a>
				</div>
			</div>
			<div class="menu__col--links">

				<!--
				<a class="<?php echo selectMenuItem('taller') ?> menu__item" href="
				<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('about', TRANSDOMAIN) ?>"><?php echo __('About', TRANSDOMAIN) ?></a>
				<a class="<?php echo selectMenuItem('cltvo_architecture', 'custom') ?> menu__item" href="
				<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('architecture', TRANSDOMAIN) ?>"><?php echo __('Architecture', TRANSDOMAIN) ?></a>
				<a class="<?php echo selectMenuItem('cltvo_interior', 'custom') ?> menu__item" href="
				<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('interior-design', TRANSDOMAIN) ?>"><?php echo __('Interior Design', TRANSDOMAIN) ?></a>
				<a class="<?php echo selectMenuItem('cltvo_graphic', 'custom') ?> menu__item" href="
					<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('graphic-design', TRANSDOMAIN) ?>"><?php echo __('Graphic Design', TRANSDOMAIN) ?></a>
                <a class="<?php echo selectMenuItem('cltvo_medios', 'custom') ?> menu__item" href="
					<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('media', TRANSDOMAIN) ?>"><?php echo __('Media', TRANSDOMAIN) ?></a>
                <a class="<?php echo selectMenuItem('cltvo_premios', 'custom') ?> menu__item" href="
					<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('awards', TRANSDOMAIN) ?>"><?php echo __('Awards', TRANSDOMAIN) ?></a>
				<a class="<?php echo selectMenuItem('contacto') ?> menu__item" href="
				<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('contact', TRANSDOMAIN) ?>"><?php echo __('Contact', TRANSDOMAIN) ?></a>
				 -->

				<?= wp_nav_menu( $menuParameters ); ?>

				<span class="menu__lang-container">
					<?php echo $joined_links ?>
				</span>
				<span class="menu__open menu-icon_JS"><?php themeInc('/images/menu-open.php');  ?></span>
				<span class="menu__close menu-icon_JS"><?php themeInc('/images/menu-close.php');  ?></span>
			</div>
		</div>
	</div>
	<div class="grid__row">
		<div class="grid__container">
			<div id="menu-mobile" class="menu__mobile">
				<div class="menu__mobile-links">

					<!--
						<a class="<?php echo selectMenuItem('taller') ?> menu__item--mobile" href="
					<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('about', TRANSDOMAIN) ?>"><?php echo __('About', TRANSDOMAIN) ?></a>
					<a class="<?php echo selectMenuItem('cltvo_architecture', 'custom') ?> menu__item--mobile" href="
					<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('architecture', TRANSDOMAIN) ?>"><?php echo __('Architecture', TRANSDOMAIN) ?></a>
					<a class="<?php echo selectMenuItem('cltvo_interior', 'custom') ?> menu__item--mobile" href="
					<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('interior-design', TRANSDOMAIN) ?>"><?php echo __('Interior Design', TRANSDOMAIN) ?></a>
					<a class="<?php echo selectMenuItem('cltvo_graphic', 'custom') ?> menu__item--mobile" href="
						<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('graphic-design', TRANSDOMAIN) ?>"><?php echo __('Graphic Design', TRANSDOMAIN) ?></a>
					<a class="<?php echo selectMenuItem('contacto') ?> menu__item--mobile" href="
					<?php echo BLOGURL .'/'. $opts['lang_code'] .'/'. __('contact', TRANSDOMAIN) ?>"><?php echo __('Contact', TRANSDOMAIN) ?></a>
					 -->

					<?= wp_nav_menu( $menuParameters ); ?>

					<span class="menu__lang-container menu__lang-container--mobile">
						<?php echo $joined_links ?>
					</span>

				</div>
			</div>
		</div>
	</div>
</div>
