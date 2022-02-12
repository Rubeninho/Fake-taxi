function initialize() {
   getLocation();
   for (let index = 0; index < 5; index++) {
   generateItem("aosin");
      
    }
   }

function generateItem(name) {
   let parent = document.getElementById("picavelka");
   let rows =[
      {
        name: 'pepa',
        email:'something@gmail.com',
        place:'Kolin',
        phone: 878485121,
        time: '6am',
      },
      {
        name: 'petr',
        email:'petr@gmail.com',
        place:'Praha',
        phone: 895232146,
        time: '0am',
      }
    ]
      let div = document.createElement("div");
      div.setAttribute("class", "card mb-3");
      div.setAttribute("id", "divID");

      let header = document.createElement("h3");
      header.innerHTML = name;
      header.setAttribute("class", "text-uppercase text-center mb-4");
      header.setAttribute("id", "headerID");

      let table = document.createElement("table")
      table.setAttribute("class", "table");
      let thead = document.createElement("thead")
      let tr = document.createElement("tr")
      let tableArray = ["Username", "Email", "Phone", "Place", "Time"]

      tableArray.forEach(item=>{
         let th = document.createElement("th")
         th.setAttribute("scope","col")
         th.innerHTML = item;
         tr.appendChild(th);
      })
      thead.appendChild(tr);
      table.appendChild(thead);

      let tbody = document.createElement("tbody")
      rows.forEach(item=>{
         let tr = document.createElement("tr")
         tr.innerHTML = `<td>${item.name}</td><td>${item.email}</td><td>${item.place}</td><td>${item.phone}</td><td>${item.time}</td>`;
         tbody.appendChild(tr);
      })
      table.appendChild(tbody);
      div.appendChild(header);
      div.appendChild(table);
      parent.appendChild(div);
}


function showLocation(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;

    $.post("send_data.php", latitude, longitude);


    /*posialni dat na server pomoci php */
    $.post("send_location.php", latitude);
    $.post("send_location.php", longitude);
    
   e992910f83d584a77fee968eaea5244c4447c5f4
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
 
 function passVal(){
     var data = {
         latitude, longitude
     };
     $.post("send_data.php", latitude, longitude);
 }
 passVal();