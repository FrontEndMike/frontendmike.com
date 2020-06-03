// weather api 
// api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid=83184effd69d73b717850778bd2dc7c4
const lat = 35;
const lon = 139;
const API_URL = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=83184effd69d73b717850778bd2dc7c4`;
    
fetch(API_URL)
	.then(res => {
		return res.json();
	})
	.then(function(data) {
        let city = data.name;
        let kelvin = data.main.temp;
        let celsius = kelvin - 273;
        let fahrenheit = Math.floor(celsius * (9/5) + 32);
        const p = document.getElementById("weather");
        p.innerHTML = `
        <span> City : ${city} </span>
        <span> Temp : ${fahrenheit}</span>
        `;
        console.log(data);
        console.log(fahrenheit);
    }) 
	.catch(error => {
        console.log("error");
});