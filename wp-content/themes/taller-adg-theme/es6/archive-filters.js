const $ = jQuery

const filter = (filter_selector, filtered_selector) => {
	let filter = $(filter_selector)
	let filtered = $(filtered_selector)

	filter.on('click', function() {
		let selected_filter = this.dataset.filter
		filter.removeClass('selected')
		$(this).addClass('selected')
		filtered.each((index, elem) => {
			let $elem = $(elem)
			let terms = elem.dataset.terms.split('-')
			if (terms.includes(selected_filter)) {
				$elem.show()
			} else {
				$elem.hide()
			}
		})

	})
}

$(document).ready(function() {
	filter('.taxonomy__filter_JS', '.item_taxonomies_JS')
})