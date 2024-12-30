// window.$ = window.jQuery = require( 'jquery' )
// import { tns } from 'tiny-slider/src/tiny-slider'
// window.tns = tns
import Splide from '@splidejs/splide'
window.Splide = Splide

import 'bootstrap'

import 'magnific-popup'
import 'jquery-lazy'
//import '~aos/dist/aos.js'


import './utils/cookies.js' // Функции для работы с куками
import './utils/lazy.js' // Функционал для ленивой загрузки карт и картинок

import './extend' // Скрипты расширяющие функционал библиотек
import './core' // Основной функционал, который использутеся везде
import './components' // Специфические функции для работы с конкретными компонентами типа "отзывы" и т.д.
import './pages' // Скрипты свойственные только для конкретных страниц



document.addEventListener('DOMContentLoaded', () => {
	const request = $('.request-type')

	if (request && window.location.href.indexOf('garazhi') > -1) {
		request.val('Строительство гаражей')
	} else if (request && window.location.href.indexOf('doma') > -1) {
		request.val('Строительство домов')
	} else if (request && window.location.href.indexOf('modulnye-zdaniya') > -1) {
		request.val('Строительство модульных зданий')
	} else if (request && window.location.href.indexOf('obshhestroitelnye-raboty') > -1) {
		request.val('Общестроительные работы')
	} else if (request && window.location.href.indexOf('geodeziya') > -1) {
		request.val('Геодезия')
	} else {
		request.val('Прочее')
	}
	console.log(request.val())

	//AOS.init();
})

