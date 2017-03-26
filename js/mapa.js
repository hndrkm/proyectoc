class Localizacion{
	constructor(callback){
		if (navigator.geolocation) {
			//obtener localicacion
			navigator.geolocation.getCurrentPosition((position)=>{
				this.latitude = position.coords.latitude;
				this.longitude = position.coords.longitude;

				callback();
			});
		}else{
			alert("tunav no soparta geolocacilzacion");
		} 

	}
}