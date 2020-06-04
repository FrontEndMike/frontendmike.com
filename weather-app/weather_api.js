const lat = 35;
const lon = 139;
const API_URL = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=83184effd69d73b717850778bd2dc7c4`;

// Show todays date & time
const timeElement = document.getElementById("time");
const dateElement = document.getElementById("date");
const options = {weekday :"long", month:"short", day:"numeric"};
const today = new Date();
const date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
function time(today){
    const hours = today.getHours();
    const minutes = "0" + today.getMinutes();
    const formattedTime = hours + ':' + minutes.substr(-2);
    const hours24 = parseInt(formattedTime.substring(0,2));
    const hoursStandard = ((hours24 + 11) % 12) + 1;
    const amPm = hours24 > 11 ? 'pm' : 'am';
    const minutesStandard = formattedTime.substring(2);
    
    return 'Current time : ' + hoursStandard + minutesStandard + amPm;
}

fetch(API_URL)
	.then(res => {
		return res.json();
	})
	.then(function(data) {
        let city = data.name;
        let description = data.weather[0].description;
        let kelvin = data.main.temp;
        let celsius = kelvin - 273;
        let fahrenheit = Math.floor(celsius * (9/5) + 32);
        let sunrise = data.sys.sunrise;
        let sunset = data.sys.sunset;
        // Convert sunrise/sunset data into standard time format
        function sunRiseSunSet(time){
            const RiseSet = new Date(time * 1000);
            const hours = RiseSet.getHours();
            const minutes = "0" + RiseSet.getMinutes();
            const formattedTime = hours + ':' + minutes.substr(-2);
            const hours24 = parseInt(formattedTime.substring(0,2));
            const hoursStandard = ((hours24 + 11) % 12) + 1;
            const amPm = hours24 > 11 ? 'pm' : 'am';
            const minutesStandard = formattedTime.substring(2);
            if(hours24 > 11){
                return hoursStandard + minutesStandard + amPm;
            }
            else{
                return hoursStandard + ':' + minutesStandard + amPm;
            }
            
        }
        let sunriseTime = sunRiseSunSet(sunrise);
        let sunsetTime = sunRiseSunSet(sunset);

        const p = document.getElementById("weather");
        p.innerHTML = `
        <p> City : ${city} </p>
        <p> Temp : ${fahrenheit}</p>
        <p> Description : ${description}</p>
        <p> Sunrise : ${sunriseTime} </p>
        <p> Sunset : ${sunsetTime} </p>
        `;
        console.log(data);
    }) 
	.catch(error => {
        console.log("error");
});


timeElement.innerHTML = time(today);
dateElement.innerHTML = today.toLocaleDateString("en-US", options);