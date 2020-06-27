// SELECT ELEMENTS

const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".description");
const dateElement = document.querySelector(".date");
const timeElement = document.querySelector(".time");
const locationElement = document.querySelector(".location");
const feelsLikeElement = document.querySelector(".info-1 p");
const humidityElement = document.querySelector(".info-2 p");
const maxElement = document.querySelector(".max");
const minElement = document.querySelector(".min");
const notificationElement = document.querySelector(".notification");

// App data
const weather = {};
const time = {};

weather.temperature = {
    unit : "farenheit"
}
weather.feelsLike = {
    unit : "farenheit"
}

// APP CONST AND VARS
const KELVIN = 273;
// API KEY
const key = "83184effd69d73b717850778bd2dc7c4";
const dateKey = "d228c193e6774244a40547d8a5d87e77";

// CHECK IF BROWSER SUPPORTS GEOLOCATION
if('geolocation' in navigator){
    navigator.geolocation.getCurrentPosition(setPosition, showError);
}else{
    notificationElement.style.display = "block";
    notificationElement.innerHTML = "<p>Refresh browser and share location information.</p>";
}


//SET USER'S POSITION
function setPosition(position){
    let latitude = position.coords.latitude;
    let longitude = position.coords.longitude;

    getWeather(latitude, longitude);
    getDate(latitude, longitude);
}

// SHOW ERROR WHEN THERE IS AN ISSUE WITH GEOLOCATION SERVICE
function showError(error){
    notificationElement.style.display = "block";
    notificationElement.innerHTML = `<p>${error.message}</p>`
}

// GET DATE
function getDate(latitude, longitude){
    let dateAPI = `https://api.ipgeolocation.io/timezone?apiKey=${dateKey}&lat=${latitude}&long=${longitude}`;
    fetch(dateAPI)
        .then(function(response){
            let data = response.json();
            return data;
        })
        .then(function(data){
            time.currentTime = data.time_12;
        })
        .then(function(){
            displayTime();
        });

}
// DISPLAY TIME FROM API
function displayTime(){
    var today = new Date().toLocaleDateString('en-US', {  
        day : 'numeric',
        month : 'short',
        year : 'numeric'
    })
    dateElement.innerHTML = `${today} |`;
    // timeElement.innerHTML = time.currentTime;
}


// GET WEATHER FROM API PROVIDER
function getWeather(latitude, longitude){
    let api = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${key}`;

    fetch(api)
        .then(function(response){
            let data = response.json();
            return data;
        })
        .then(function(data){
            weather.temperature.value = Math.floor(data.main.temp - KELVIN);
            weather.feelsLike.value = Math.floor(data.main.feels_like - KELVIN);
            weather.tempMax = Math.floor(data.main.temp_max - KELVIN);
            weather.tempMin = Math.floor(data.main.temp_min - KELVIN);
            weather.description = data.weather[0].description;
            weather.iconId = data.weather[0].icon;
            weather.city = data.name;
            weather.country = data.sys.country;
            weather.humidity = data.main.humidity;
            console.log(data);
        })
        .then(function(){
            displayWeather();
        });
}

// DISPLAY WEATHER TO UI
function displayWeather(){
    let farenheit = celsiusToFarenheit(weather.temperature.value);
    farenheit = Math.floor(farenheit);

    let feel = celsiusToFarenheit(weather.feelsLike.value);
    feel = Math.floor(feel);

    let max = celsiusToFarenheit(weather.tempMax);
    max = Math.floor(max);

    let min = celsiusToFarenheit(weather.tempMin);
    min = Math.floor(min);

    iconElement.innerHTML = `<img src="icons/${weather.iconId}.png"/>`;
    tempElement.innerHTML = farenheit;
    descElement.innerHTML = weather.description;
    locationElement.innerHTML = weather.city;
    feelsLikeElement.innerHTML = feel;
    humidityElement.innerHTML = weather.humidity;
    maxElement.innerHTML = max;
    minElement.innerHTML = min;
}

// C to F conversion
function celsiusToFarenheit(temperature){
    return (temperature * 9/5) + 32;
}


// TOGGLE THEMES
function lightToggle() {
    element = document.querySelector('.theme')
    element.classList.remove("dark-theme");
    element.classList.add('light-theme');
}
document.querySelector('.btn-light').addEventListener('click', lightToggle);

function darkToggle() {
    element = document.querySelector('.theme')
    element.classList.remove("light-theme");
    element.classList.add('dark-theme');
}
document.querySelector('.btn-dark').addEventListener('click', darkToggle);