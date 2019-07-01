export var ajax_premios =
jQuery(document).ready(function($){
    // console.log(cltvo_js_vars.ajax_url);
	let pagePremios = 1

	function load_premios() {
		pagePremios++
		var query = [
			{ name: 'page', value: pagePremios },
			{ name: 'posts_per_page', value: 3 },
			{ name: "action", value: 'Cltvo_Premios_Posts' }
		]
		$.ajax({
			type: 'POST',
			dataType: 'html',
			url: cltvo_js_vars.ajax_url,
			data: query,
			success: function(data){
				var $data = $(data)
				$('.premios_JS').append($data)
				$('.loader_JS_premios').fadeOut('fast')
				if($('.premios_JS').find('.empty_premios_JS').length == 0){
					$('.load_premios_JS').fadeIn('fast')
				}
			}
		})
		return false
	}

	$('.loader_JS_premios').fadeOut('fast')
	if ($('.premios_JS').find('.empty_premios_JS').length > 0){
		$('.load_premios_JS').fadeOut('fast')
	}

	$('.load_premios_JS').on('click',function() {
		$('.load_premios_JS').fadeOut(0)
		$('.loader_JS_premios').fadeIn('fast')
		load_premios()
	})


})
