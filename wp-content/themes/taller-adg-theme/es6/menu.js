import debounce from 'lodash.debounce'
const $ = jQuery
//menu mobil
const openMobileMenu = (header_selector, menu_selector, icon_selector)  => {
	let w = $(window)
	let body = $('body')
	let header  = $(header_selector)
	let menu  = $(menu_selector)
	let icon = $(icon_selector)

	const openMenu = function() {
		header.addClass('open')
		menu.show()
		menu.is_open = true
	}

	const closeMenu = function() {
		header.removeClass('open')
		menu.hide()	
		menu.is_open = false
	}

	const toggleMenu = function() {
		if (!menu.is_open) {
			body.addClass('no-scroll')
			openMenu()
		} else {
			body.removeClass('no-scroll')
			closeMenu()
		}
	}

	//events
	icon.on('click', toggleMenu)
	
	w.on('resize', function() {
		if (w.width() > 800 && menu.is_open) {
			closeMenu()
		}
	})
}

//llama a las funciónes
$(document).ready(function() {
		openMobileMenu(
			'#menu', 
			'#menu-mobile' ,
			'.menu-icon_JS'
		)
	}
)