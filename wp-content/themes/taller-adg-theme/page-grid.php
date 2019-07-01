<?php get_header(); ?>
<div class="debug">
	<h1>.grid__row</h1>
	<div class="grid__row"></div>

	<h1>.grid__container</h1>
	<div class="grid__row">
		<div class="grid__container"></div>
	</div>

	<h1>.grid__container.lg</h1>
	<div class="grid__row">
		<div class="grid__container lg"></div>
	</div>

	<h1>.grid__col-1-1</h1>
	<div class="grid__container">
		<div class="grid__col-1-1">.grid_col-1-1</div>
	</div>

	<h1>.grid__col-1-2</h1>
	<div class="grid__container">
		<div class="grid__col-1-2"><div class="grid__box">.grid_col-1-2</div></div>
		<div class="grid__col-1-2"><div class="grid__box">.grid_col-1-2</div></div>
		<div class="grid__col-1-2"><div class="grid__box">.grid_col-1-2</div></div>
	</div>

	<h1>.grid__col-1-2</h1>
	<div class="grid__container lg">
		<div class="grid__col-1-3"><div class="grid__box">.grid_col-1-3</div></div>
		<div class="grid__col-1-3"><div class="grid__box">.grid_col-1-3</div></div>
		<div class="grid__col-1-3"><div class="grid__box">.grid_col-1-3</div></div>
		<div class="grid__col-1-3"><div class="grid__box">.grid_col-1-3</div></div>
		<div class="grid__col-1-3"><div class="grid__box">.grid_col-1-3</div></div>
		<div class="grid__col-1-3"><div class="grid__box">.grid_col-1-3</div></div>
		<div class="grid__col-1-3"><div class="grid__box">.grid_col-1-3</div></div>
		<div class="grid__col-1-3"><div class="grid__box">.grid_col-1-3</div></div>
		<div class="grid__col-1-3"><div class="grid__box">.grid_col-1-3</div></div>
	</div>



</div>
<?php get_footer(); ?>
