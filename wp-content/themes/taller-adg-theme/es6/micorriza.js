import './menu'
import './map-iframe'
import './slider'
import './archive-filters'
import './arrow-up'
import {ajax_medios} from './ajax_medios'
import {ajax_premios} from './ajax_premios'
import {configMap, geocodeLocation, grey_styles} from 'cltvo-maps'

//map
const map_container = document.getElementById('map')

//console.log("map_container", map_container);

if (map_container !== null) {
	window.initMap = configMap({ //callback con el que el script de google maps inicializa el mapa
		map_container,
		icon_url: window.icon_url,
		geocoder: geocodeLocation, //el tipo de geocoder
		geocoder_obj:  {address: window.taller_adg_address}, //el objeto que recibe el geocoder
		styles: grey_styles //colores, etc.
	})
}

const $ = jQuery;

$( window ).on( "load", function() {
    $('.masonry').masonry({
		itemSelector: '.masonry-item',
		columnWidth: '.masonry-sizer',
		percentPosition: true,

	})
});

ajax_medios;
ajax_premios;
