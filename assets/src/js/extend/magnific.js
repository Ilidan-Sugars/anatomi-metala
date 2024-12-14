(function() {
	// Инициализация магнефика в разных видах
	$('.magnific-image').magnificPopup({type: 'image'})
	$('.open-popup-link').magnificPopup({type: 'inline'})
	$('.magnific-youtube').magnificPopup({type: 'iframe'})
	$('.magnific-image-gallery').magnificPopup({
		type: 'image',
		gallery: {enabled: true},
	})
}())
