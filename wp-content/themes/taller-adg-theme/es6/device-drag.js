const $ = jQuery
const screen = $('.device__screen_JS')

screen.each(function() {
	const $this = $(this)
	const screen_height = $this.height()
	const img = $this.find('.device__image_JS')
	const img_height = img.height()
	let current_img_position = img.css('top')
	let is_dragging = false
	let dragstartY = 0;

	$(window).on('mouseup', function(e) {
		is_dragging = false;
	})

	$this.on('mousedown', function(e) {
		current_img_position  = parseInt(img.css('top'), 10)
		dragstartY = e.pageY
		is_dragging = true;
	})

	$this.on('mousemove', function(e) {
		if (is_dragging) {
			let position = current_img_position + e.pageY - dragstartY

			//no se puede hacer drag hacia arriba más allá del tamaño de la imágen
			if (img_height < Math.abs(position) + screen_height) {
				position = -1*(img_height - screen_height)//siempre negativo
			}

			//no se puede hacer drag hacia abajo más allá del tamaño de la imágen
			if (position > 0) {
				position = 0
			}

			img.css('top', position)
		}
	})
})
