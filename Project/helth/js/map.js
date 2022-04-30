// Initialize and add the map
function initMap() {
    // The location of Uluru
    const jaipur = { lat: 26.89371536380232, lng:75.7823075559505 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: jaipur,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: jaipur,
      map: map,
    });
  }