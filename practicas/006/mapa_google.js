//Esta llave es unica y se crea dentro de Google Developers
const API_KEY_MAPS= "AIzaSyDJNZL9Uhv7JZ5l-tD6TNuc2LjYhfPDlDI"
let map;

//creacion del script y llamado
var script = document.createElement('script');
script.src =  `https://maps.googleapis.com/maps/api/js?key?${API_KEY_MAPS}&callback=initMap`;
script.async = true;

//adjuntar la llamada al mapa para su uso
window.initMap= function(){
    map = new google.maps.Map(document.getElementById("divMapaGoogle"),{
        center : { lat: 19.4040675 , lng: -98.9865747 },
        zoom: 15

    });
    
};
//agregar el scrip a la cabecera
document.head.appendChild(script);