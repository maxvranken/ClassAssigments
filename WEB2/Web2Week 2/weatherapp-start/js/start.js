/*global  $, Skycons*/


//http://www.w3schools.com/html/html5_geolocation.asp

//use strict --> self starting anonymous function (tegen conflicten om wille van de namen van de variabelen en de functienamen)
(function () {
    'use strict'; //variabele moeten gedeclareerd worden (niet gewoon "x=3" schrijven, er moet "var" voor staan)
    
    var App = {
        
        //API key via www.developer.forecast.io
        // 43341e06f28a08f06c67ab38bed6ddcb (bijvoobeeld)
        //zelf API bouwen is niet interessant, omdat we dan er voor zorgen dat niet iemand onze API plat legt door deze massaal te gebruiken
        APIKEY: "43341e06f28a08f06c67ab38bed6ddcb",
        lat: "",
        lng: "",
        
        init: function () {
            //kickstart the App!
            App.getLocation();
        },
        getLocation: function () {
            //get the current user position
            navigator.geolocation.getCurrentPosition(App.foundPosition);
        },
        foundPosition: function (pos) {
            //found the current user position
            App.lat = pos.coords.latitude;
            App.lng = pos.coords.longitude;
            App.getWeather();
            App.getPositionName();
            App.getTemp();
            App.getDay();
        },
        getWeather: function () {
            //get the current weather for my location
            var url = "https://api.forecast.io/forecast/" + App.APIKEY + "/" + App.lat + "," + App.lng;
            
            //JSONP
            window.jQuery.ajax({
                url: url,
                dataType: "jsonp",
                success: function (data) {
                    console.log(data);
                    $(".weather-summary").text(data.currently.summary);
                    
                var skycons = new Skycons({"color": "white"});
                   
                    switch(data.currently.summary){
                        case "Fairly cloudy":
                            skycons.set("weather-icon", Skycons.PARTLY_CLOUDY_DAY);
                            break;
                            case "Clear":
                            skycons.set("weather-icon", Skycons.CLEAR_DAY);
                            break;
                            case "Mostly cloudy":
                            skycons.set("weather-icon", Skycons.CLOUDY);
                            break;
							case "Drizzle":
                            skycons.set("weather-icon", Skycons.RAIN);
                            break;
                            case "Default":
                            skycons.set("weather-icon", Skycons.CLEAR_NIGHT);
                            break;
                            
                            
                    }  
                    skycons.play();
                }
            });
            
        },
         getPositionName: function(){   
    var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=" + App.lat + "," + App.lng + "&key=AIzaSyACIRIhe9P11tgaJd9wUS0nRgd-9-FvPVM";
        //JSON
        
        window.jQuery.ajax({
           url: url,
            dataType: "json",
            success: function(data){
                console.log(data);
                $(".location").text(data.results[0].address_components[2].short_name);
            }
        });
  
  
},
        getTemp: function(){
            var url = "https://api.forecast.io/forecast/" + App.APIKEY + "/" + App.lat + "," + App.lng;
            
            //JSONP
            window.jQuery.ajax({
                url: url,
                dataType: "jsonp",
                success: function (data) {
                    console.log(data);
                    $(".temp").text((((data.currently.apparentTemperature)-32)*5/9).toFixed(0)+ " °C") ;
        }
            });
        },
        
        getDay: function(){
            var d = new Date();
var weekday = new Array(7);
weekday[0]=  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

var n = weekday[d.getDay()];
            $(".day").text(n);
        }
    };
    
    App.init();
   
    
    
    
}());