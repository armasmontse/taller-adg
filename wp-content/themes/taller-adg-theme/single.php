<?php 
$cool_post  = new Cltvo_Post($post);
// dd($cool_post)
 ?>
<?php get_header(); ?>
<div id="single" class="single">
	<div class="grid__row">
		<div class="page__image" style="background-image: url('<?php echoImg('arch.jpg')?>');"></div>
	</div>
</div>
<div class="grid__container sm">
		<div class="single__arrow-container">
			<div class="single__arrow single_arrow--left"><?php themeInc('/images/arrow-left.php')?></div>
			<div class="single__arrow single_arrow--right"><?php themeInc('/images/arrow-right.php')?></div>
		</div>
	</div>
</div>

<div class="grid__container sm single__data-container">
	<div class="single__data-subcontainer">
		<div class="single__data single__data--name pl0">
			<p>Nombre del Proyecto</p>
			<h1>BeatBox</h1>
		</div>
		<div class="single__data single__data--type">
			<p>Tipo</p>
			<h2>Interiores</h2>
			<div class="single__vertical-divisor"></div>
		</div>
	</div>
	<div class="single__data-subcontainer">
		<div class="single__data single__data--date">
			<p>Fecha</p>
			<h2>Mayo 2015</h2>
			<div class="single__vertical-divisor"></div>
		</div>
		<div class="single__data single__data--location">
			<p>Locación</p>
			<h2>Santa Fe, Pedregal, Torre Virreyes, Roma Norte</h2>
			<div class="single__vertical-divisor"></div>
		</div>
	</div>
</div>

<div class="grid__container sm"><div class="page__divisor"></div></div>

<div class="grid__container sm">
	<div class="single__ttl">Concepto</div>
	<div class="single__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi repellendus, ex neque minima obcaecati culpa unde dolores quasi. Reiciendis quasi consectetur numquam sequi earum mollitia fugit illo, provident pariatur maxime nostrum, in ea nesciunt dolorum temporibus eaque similique nulla deserunt enim ex eveniet itaque, labore possimus. Excepturi laborum nam itaque mollitia reprehenderit facere ratione rem, earum quisquam dignissimos, quaerat veniam magni, optio quod laudantium qui quos fugiat velit, consequuntur a illum? Fugit quaerat tempore vel, incidunt quidem quo libero. Tenetur illo aut eum amet sequi. Beatae accusamus expedita, aliquam quod assumenda repudiandae maxime eum facilis doloremque, ut, perferendis repellendus perspiciatis ipsa? Saepe, placeat, iure error deserunt laborum perspiciatis maxime consectetur amet, est quis, ratione obcaecati id minus. Alias, aliquam eveniet. Cupiditate fugiat eaque, ratione et beatae voluptate error sit, doloremque, modi nostrum libero voluptatem quia soluta incidunt at. Odit rem praesentium voluptatibus iusto eos voluptatem consequatur quo aliquid delectus, obcaecati temporibus, dolores possimus reprehenderit aliquam totam ipsam animi adipisci neque iste ratione itaque quam ad explicabo est accusantium. Sint consequuntur, quasi. Libero accusamus, ea! Incidunt placeat dolore dicta, ipsa ea, nostrum aspernatur? Voluptas ipsa ullam vero pariatur blanditiis libero excepturi impedit assumenda, facere eum nam iure, consequuntur esse? Aut, amet!</div>
</div>

<div class="grid__container sm single__img-container">
	<div class="grid__col-1-2 single__img-col"><img src="<?php echoImg('arch.jpg')?>" alt="">	</div>
	<div class="grid__col-1-2"><img src="<?php echoImg('arch.jpg')?>" alt="">	</div>
	<div class="grid__col-1-2"><img src="<?php echoImg('arch.jpg')?>" alt="">	</div>
	<div class="grid__col-1-2"><img src="<?php echoImg('arch.jpg')?>" alt="">	</div>
</div>
<?php get_footer(); ?>
