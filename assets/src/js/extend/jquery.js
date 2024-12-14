(function() {
	jQuery.event.special.touchstart = {
		setup: (_, ns, handle) => {
			// Фикс для pagespeed
			this.addEventListener('touchstart', handle, {passive: true})
		},
	}
}())
