const $ = jQuery

const arrowUp = (selector) => {
	let arrow = $(selector)
	let footer_height = 36+38.5//footer height and bottom padding
	let w = $(window)
	let w_height = w.height()
	let body_height = $('body').height()
	let break_lg = 1200 + 73 + 68
	

	//autoscroll
	arrow.on('click', function() {
		$('html, body').animate({
			scrollTop: 0
		})
	})

	//posicionamiento
	let position = () => {
		let at_bottom = body_height - (w_height + w.scrollTop()) <= 0
		if (at_bottom && w.width() < break_lg) {
			arrow.css({
				bottom: footer_height
			})
		} else {
			arrow.css({
				bottom: 0
			})
		}
	}
	position()//en load
	$(w).on('scroll', position)



}

$(document).ready(() => {
	arrowUp('.arrow-up_JS')
})