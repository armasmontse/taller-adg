export var ajax_medios =
jQuery(document).ready(function($){
    // console.log(cltvo_js_vars.ajax_url);
	let pageMedios = 1;

	function load_medios() {
		pageMedios++
		var query = [
			{ name: 'page', value: pageMedios },
			{ name: 'posts_per_page', value: 6 },
			{ name: "action", value: 'Cltvo_Medios_Posts' }
		]
		$.ajax({
			type: 'POST',
			dataType: 'html',
			url: cltvo_js_vars.ajax_url,
			data: query,
			success: function(data){
				var $data = $(data)
				$('.medios_JS').append($data)
				$('.loader_JS_medios').fadeOut('fast')
				// console.log($data,$data.find('.empty_medios_JS').length );
				if ($('.medios_JS').find('.empty_medios_JS').length == 0 ) {
					$('.load_medios_JS').fadeIn('fast')
				}

			}
		})
		return false
	}
    $('.loader_JS_medios').fadeOut('fast')
	if ($('.medios_JS').find('.empty_medios_JS').length > 0 ) {
		$('.load_medios_JS').fadeOut('fast')
	}
	$('.load_medios_JS').on('click',function() {

		$('.load_medios_JS').fadeOut(0)
		$('.loader_JS_medios').fadeIn('fast')
		load_medios()
	})


})
