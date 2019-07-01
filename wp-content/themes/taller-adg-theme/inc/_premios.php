<?php $premio = new Cltvo_Premios($post) ?>
<div class="grid__container sm single__img-container premios__container">
    <div class="grid__col-1-2 single__img-col premios__image">
        <img class="single__img slider__img-selector_JS" src="<?php echo $premio->thumbail_img ? $premio->thumbail_img->getImgSrc('talleradg') : echoImg('transparenciaT_ADG.png') ?>" alt="">
    </div>
    <div class="grid__col-1-2 single__img-col premios__text">
        <div class="premios__container-text">
            <div class="text">

                <?php if (!empty($premio->proyectolink) or (trim($premio->proyectolink) == '') ): ?>
                    <h2 class="bold">
                        <a href="<?php echo $premio->proyectolink ?>"><?php echo $premio->proyectotexto ?></a>
                    </h2>
                <?php else: ?>
                    <h2 class="bold">
                        <?php echo $premio->proyectotexto ?>
                    </h2>
                <?php endif; ?>

                <!-- <div class="flex">
                    <span class="bold"><?php // echo $premio->nombre ?></span>/
                    <span><?php // echo $premio->premio ?>/</span>
                    <span><?php // echo $premio->fecha ?></span>
                </div> -->
                
                <?php if (!empty($premio->post->post_content) or !(trim($premio->post->post_content) == '') ): ?>
                    <h2 class="premios__contenido"><?php echo $premio->post->post_content ?></h2>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
