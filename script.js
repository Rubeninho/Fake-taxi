var document = main.html;
let tableCreate = document.getElementById("picavelka");
let tables = [];

for (let i = 0; i < 10; i++)    {
    tables.push(i);
}
let tableHelp = ["username", "email", "phone", "place", "time"]
tables = tables.concat(tableHelp);

for(let tableID in tables)  {
    let tableText = tables[tableID];
let createRide = document.createElement("table");
table.innerHTML = tableText;
table.setAttribute("id", "abc" + tableID);
table.setAttribute("class", "tableStyle");
tableCreate.appendChild(createRide);
}

function showLocation(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    alert("Latitude : " + latitude + " Longitude: " + longitude);
 }

 function errorHandler(err) {
    if(err.code == 1) {
       alert("Error: Access is denied!");
    } else if( err.code == 2) {
       alert("Error: Position is unavailable!");
    }
 }
    
 function getLocation() {

    if(navigator.geolocation) {
       var options = {timeout:60000};
       navigator.geolocation.getCurrentPosition(showLocation, errorHandler, options);
    } else {
       alert("Sorry, browser does not support geolocation!");
    }
 }