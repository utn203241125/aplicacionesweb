//Esta llave es unica y se crea dentro de Google Developers
const API_KEY_MAPAS= "AIzaSyDJNZL9Uhv7JZ5l-tD6TNuc2LjYhfPDlDI"
let map;
let mercado;
let marcador;

//creacion del script y llamado
var script = document.createElement('script');
script.src = 'https://maps.googleapis.com/maps/api/js?key?${API_KEY_MAPAS}&callback=initMap';
script.async = true;

//adjuntar la llamada al mapa para su uso
window.initMap= function(){
    mercado = { lat: 19.3955634832997, lng: -99.03303486974013 };
    map = new google.maps.Map(document.getElementById("divMapaGoogle"),{
        center : mercado,
        zoom: 19.54,

    });
    marcador = new google.maps.Marker({
        position : mercado,
        map:map,
    });
    
};
document.head.appendChild(script);
