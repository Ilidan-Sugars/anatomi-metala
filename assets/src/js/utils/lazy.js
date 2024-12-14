function loadLazyImages() {
    $('.thumbnail-lazy').Lazy({
        bind: 'event',
        effect: "fadeIn",
        effectTime: 500,
        
        beforeLoad: (element) => {
            $(element).removeClass("thumbnail-lazy")
        }
    })
}

document.addEventListener('DOMContentLoaded', () => {
    loadLazyImages()
})

export default loadLazyImages;

(function () {
    document.addEventListener('DOMContentLoaded', () => {
        let map_loaded = false
        let options_map = { once: true, passive: true, capture: true }
        document.addEventListener('scroll', lazy_map, options_map)
        document.addEventListener('touchmove', lazy_map, options_map)

        function lazy_map() {
            if (!map_loaded) {
                let map_block = document.getElementById('ymap_lazy')
                if (!map_block) return

                map_loaded = true
                map_block.setAttribute('src', map_block.getAttribute('data-src'))
                map_block.removeAttribute('data_src')
            }
        }

        lazy_map()
    })
})()

$('.background-lazy').Lazy();