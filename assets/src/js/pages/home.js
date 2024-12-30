import { left } from '@popperjs/core'
import $ from 'jquery'

document.addEventListener('DOMContentLoaded', () => {
	const container = $('.main-banner')

	window.addEventListener('scroll', function () {
		const getheader = document.getElementById('header')
		if(window.scrollY != 0){
			getheader.classList.add('notTransparent')
		}
		else{
			getheader.classList.remove('notTransparent')
		}
	});


	$(container).on('mousemove', function (e) {
		if ($(window).width() < 991) {
			return
		}

		const image = container.find('.main-banner__home')
		// const xp = (e.pageX + 150) / $(container).width(),
		const yp = Math.min((e.pageY / $(container).height()) + 0.3, 1.2)
		image.css('transform', 'scale(' + yp + ')')
	})
})

