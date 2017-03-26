function initMap(){
	const ubicacion = new Localizacion(()=>{
		

		const mylatlng={lat: ubicacion.latitude, lng: ubicacion.longitude};
		const mylatlng1={lat: ubicacion.latitude+0.001, lng: ubicacion.longitude+0.001};
		const mylatlng2={lat: ubicacion.latitude-0.001, lng: ubicacion.longitude+0.001};
		const mylatlng3={lat: ubicacion.latitude+0.001, lng: ubicacion.longitude-0.001};
		const mylatlng4={lat: ubicacion.latitude-0.001, lng: ubicacion.longitude-0.001};

		var texto = '<h3>reciclaje </h3>' + '<p>descripcion</p>'+
		'<div class="btn-group">'+
  		'<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones<span class="caret"></span></button>'+
  '<ul class="dropdown-menu">'+
    '<li><a href="#">Action</a></li>'+
  '</ul>'+
'</div>';

		const options = {
			center: mylatlng,
			zoom: 15
		}

		var map = document.getElementById('map');

		const mapa = new google.maps.Map(map,options);
		const marcador1 = new google.maps.Marker({
			position: mylatlng,
			map: mapa,
			title: "marcador"
		});
		const marcador2 = new google.maps.Marker({
			position: mylatlng1,
			map: mapa,
			title: "marcador"
		});
		const marcador3 = new google.maps.Marker({
			position: mylatlng2,
			map: mapa,
			title: "marcador"
		});
		const marcador4 = new google.maps.Marker({
			position: mylatlng3,
			map: mapa,
			title: "marcador"
		});
		const marcador5 = new google.maps.Marker({
			position: mylatlng4,
			map: mapa,
			title: "marcador"
		});


		var informacion = new google.maps.InfoWindow({
			content: texto
		});

		marcador1.addListener('click',function(){
			informacion.open(mapa, marcador1);
		});

	});

}

