import Swiper from 'swiper'
import {isMobile} from './helpers'

/**
 * Slidewakars en este archivo
 * 	Single
 * 	Taller
 *  	Home
 */
const $ = jQuery

const swiperSlider = function(selector) {
	return new Swiper (selector, {
		direction: 'horizontal',
		loop: true,
		pagination: '.slider__pagination',
		paginationClickable: true,
		slidesPerView: 1,
		grabCursor: true,
		prevButton: '.swiper-button-prev',
		nextButton: '.swiper-button-next'
	});
};

//slider del single y de taller
if (jQuery('.single__slider').length > 0) {
	const singleSlider = swiperSlider('.single__slider_JS')
	const container = $('.single__slider_JS')
	const thumbail_img = $('.slider__img-selector_JS')
	const nav = $('.slider__nav_JS')
	container.css({
		display: 'none',
		opacity: 1
	})

	container.on('click', function() {
		container.css('display', 'none')
	})

	nav.on('click', function(e) {//evita que se cierre el contenedor
		e.stopPropagation()
	})

	thumbail_img.on('click', function() {
		let index = parseInt(this.dataset.index, 10) + 1// añadmios 1 porque Swiper usa un index basado en 1
		singleSlider.slideTo(index, 0, false);
		container.css('display', 'block')
	})
}


//slider del home
if (jQuery('.home__slider_JS').length > 0) {
	const homeSlider = swiperSlider('.single__slider_JS')
	const container = $('.single__slider_JS')
	const thumbail_img = $('.slider__img-selector_JS')
	const nav = $('.slider__nav_JS')
	container.css({
		opacity: 1
	})

	let timeout
	const autoplay = () => {
		let current_slide = $('.swiper-slide-active')
		let video =  current_slide.find('video')
		let is_video = video.length !== 0
		let slide_duration = 5000
		if (timeout) { clearTimeout(timeout)}
		if (is_video && !isMobile()) {
			video[0].play().then(_ => {
				slide_duration = video[0].duration * 1000
				video[0].onended = () =>  {
					homeSlider.slideNext()
					video[0].currentTime = 0;
				}
			})
			.catch(e => {
				console.log(e);
				homeSlider.slideNext()
			})
		} else {
			slide_duration = 5000
			timeout = setTimeout(homeSlider.slideNext, slide_duration)
		}
	}
	autoplay()
	homeSlider.on('SlideChangeEnd', autoplay)
}


