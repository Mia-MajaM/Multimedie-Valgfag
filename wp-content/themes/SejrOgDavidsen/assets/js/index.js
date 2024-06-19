// ----------------------- Google maps ---------------------------------
// Tredje parts kode, fået fra Google selv

function initMap() {
  const myLatLng = {
    lat: 57.04660415649414,
    lng: 9.932164192199707,
  };
  const map = new google.maps.Map(document.getElementById("googleMap"), {
    zoom: 14,
    center: myLatLng,
    fullscreenControl: false,
    zoomControl: true,
    streetViewControl: false,
  });
  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "My location",
  });
}

// -------------------------- Google maps end --------------------------

// -------------------------- Karrusel ---------------------------------------
// Karrusel er lavet ved hjælp af videoen: https://www.youtube.com/watch?v=0wvrlOyGlq0&embeds_referring_euri=https%3A%2F%2Fwww.codingsnow.com%2F&source_ve_path=MjM4NTE&feature=emb_title
let counter = 2;

// Laver et interval, 4000 = 4000 ms. Styrer hvor lang tid der går i mellem billederne bliver vist.
setInterval(function () {

  // radio buttons kan være checked og unchecked, her sættes den til checked.
  document.getElementById("position" + counter).checked = true;

  // Der plusses 1 til variablen "counter".
  counter++;

  // Så længe variablen "counter" er mindre end 5, så skal variablen være lig med 1 igen.
  if (counter > 5) {
    counter = 1;
  }

  // Så kører intervallet igen og så vil det fangede ID vokse fra position1 til position2 etc. indtil det bliver højere end 5 og derfor bliver nulstillet til 1 og starter forfra.
}, 4000);
