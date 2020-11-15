$(document).ready(function () {

//creamos el objeto app

var app = {};
app.apikey = "cf935f184456686dacc89e13956e60b6";
app.url = "http://api.openweathermap.org/data/2.5/weather?q=Barcelona,ES&APPID=" + app.apikey + "&units=metric";

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
	}

	return icon;
}

app.show = function(){
	$.ajax({
		url: 'https://api.mymemory.translated.net/get?q='+app.condicionNombre+'&langpair=en|es',
		success: function( data ) {
			$('#temperatura').append("<p class='weather_temperature'>" + app.temperatura + " ºC</p>");
			$('#iconoApi').append(" <i class='wi " + app.icono + "'</i>");
			$('#iconoApi').append("<p class='weather_name'>" + data.responseData.translatedText.toUpperCase() + "</p>");
			console.log(data);
		}
	});
}

app.loadData();
app.processData();
app.takeIcon();
app.show(); 

});








