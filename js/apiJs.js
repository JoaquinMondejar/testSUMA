$(document).ready(function () {
	loadNewLocation('md',1);
});

let bool = 1;
$(document).on('slid.bs.carousel', function () {
	let citycode = '';
	if (bool == 1) {
		bool = 2;
	}else{
		$('.reloadCity').each(function(){
			if ($(this).attr('name') == 'bcn' ) {
				citycode = 'md';
				$(this).attr('name',citycode);

			}else{
				citycode = 'bcn';
				$(this).attr('name',citycode);
			}

		});
		bool = 1;
		loadNewLocation(citycode,2);
	}


})





function loadNewLocation(codeCity,num){
	//creamos el objeto app
	var app = {};
	var city = '';
	if (codeCity == 'bcn') {
		city = 'Barcelona';
	}else{
		city = 'Madrid';
	}

	app.apikey = "cf935f184456686dacc89e13956e60b6";
	app.url = "https://api.openweathermap.org/data/2.5/weather?q="+city+",ES&APPID=" + app.apikey + "&units=metric";

	app.loadData = function(){
		$.ajax({
			url: app.url,
			success: function( data ) {
				app.datos = data;
				app.processData();
			},
			error: function(){
				console.log("ERROR");
			}
		});

	}

	app.processData = function(){
		app.condicionNombre = app.datos.weather[0].main;
		app.temperatura = app.datos.main.temp, 10;
		var condicionIcono = app.datos.weather[0].icon;
		app.icono = app.takeIcon( condicionIcono );
		app.show();

	}

	app.takeIcon = function( weatherIcon ) {
		var icon;
		switch( weatherIcon ){
			case "01d":
			case "01n":
			icon = "wi-day-sunny";
			break;
			case "02d":
			case "02n":
			icon = "wi-day-cloudy";
			break;
			case "04d":
			case "04n":
			icon = "wi-cloud";
			break;
		}

		return icon;
	}

	app.show = function(){
		$.ajax({
			url: 'https://api.mymemory.translated.net/get?q='+app.condicionNombre+'&langpair=en|es',
			success: function( data ) {
				$('#nameCity').html(city);
				$('#temperatura').html("<p class='weather_temperature'>" + app.temperatura + " ºC</p>");
				$('#iconoApi').html(" <i class='wi " + app.icono + "'</i><p class='weather_name'>" + data.responseData.translatedText.toUpperCase() + "</p>");
				
				if (num != 1) {
					$('#changeTxt').html('<h1 class="typeText">'+city+'</h1><p class="weather_temperature typeText">' + app.temperatura + ' ºC</p><i class="wi ' + app.icono + '"</i><p class="weather_name">' + data.responseData.translatedText.toUpperCase() + '</p>');

				}

				
			}
		});
	}

	app.loadData();
	app.processData();
	app.takeIcon();
	app.show(); 



}