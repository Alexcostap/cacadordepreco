function getLocation(){
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
    }
    else{
        console.log("O seu navegador não suporta Geolocalização.");
    }
}
function showPosition(position){
   console.log("Latitude: " + position.coords.latitude +
  "Longitude: " + position.coords.longitude);
 }

 //AIzaSyBMhB53r1zJDghKJHd0k8CtaLfvekCj8dc