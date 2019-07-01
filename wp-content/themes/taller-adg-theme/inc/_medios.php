<?php $medio = new Cltvo_Medios($post) ?>

<div class="grid__col-1-2 taller__img-col medios__grid">
    <a  <?php if (filter_var($medio->link, FILTER_VALIDATE_URL)): ?> href="<?php echo $medio->link ?>" <?php endif; ?>  target="_blank">
        <img class="taller__section-img medios__image" src="<?php echo $medio->thumbail_img ? $medio->thumbail_img->getImgSrc('publicaciones') : echoImg('transparenciaT_ADG.png') ?>" alt="">
    </a>
</div>
