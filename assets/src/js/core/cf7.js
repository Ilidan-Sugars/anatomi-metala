import $ from 'jquery'

document.addEventListener('DOMContentLoaded', () => {
	// После отправки формы ...
	document.addEventListener('wpcf7submit', function(event) {
		const jsonResponse = event.detail.apiResponse

		if (jsonResponse?.status === 'mail_sent') {
			$.magnificPopup.open({
				items: {
					src: '<div class="white-popup">' + jsonResponse.message + '</div>',
					type: 'inline',
				},
			})
		}
	}, false)
})
