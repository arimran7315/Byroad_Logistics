
const myAPIKey = "755f63f99faa40bc900a55a0e1542d51";
const toinput = new autocomplete.GeocoderAutocomplete(
    document.getElementById("to"),
    myAPIKey, {
        allowNonVerifiedHouseNumber: true,
        allowNonVerifiedStreet: true,
        skipDetails: true,
        skipIcons: true,
        placeholder: " ",
    }
);
const frominput = new autocomplete.GeocoderAutocomplete(
    document.getElementById("from"),
    myAPIKey, {
        allowNonVerifiedHouseNumber: true,
        allowNonVerifiedStreet: true,
        skipDetails: true,
        skipIcons: true,
        placeholder: " ",
    }
);

toinput.on("select", (to) => {
    if (to && to.properties.lon) {
        // console.log(to.properties.lon);
        $("#lon1").val(to.properties.lon);
    }
    if (to && to.properties.city) {
        $("#tocity").val(to.properties.city);
    }
    if (to && to.properties.lat) {
        // console.log(to.properties.lon);
        $("#lat1").val(to.properties.lat);
    }
    $('#miles').val(checkmiles());
});
frominput.on("select", (from) => {
    if (from && from.properties.lon) {
        // console.log(to.properties.lon);
        $("#lon2").val(from.properties.lon);
    }
    if (from && from.properties.city) {
        $("#fromcity").val(from.properties.city);
    }
    if (from && from.properties.lat) {
        // console.log(to.properties.lon);
        $("#lat2").val(from.properties.lat);
    }
});
function calcCrow(lat1, lon1, lat2, lon2) {
    var R = 6371; // km
    var dLat = toRad(lat2 - lat1);
    var dLon = toRad(lon2 - lon1);
    var lat1 = toRad(lat1);
    var lat2 = toRad(lat2);
  
    var a =
      Math.sin(dLat / 2) * Math.sin(dLat / 2) +
      Math.sin(dLon / 2) * Math.sin(dLon / 2) * Math.cos(lat1) * Math.cos(lat2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    var d = R * c;
    return d;
  }
  
  // Converts numeric degrees to radians
  function toRad(Value) {
    return (Value * Math.PI) / 180;
  }
  
  function checkmiles() {
    var lat1 = $("#lat1").val();
    var lon1 = $("#lon1").val();
    var lat2 = $("#lat2").val();
    var lon2 = $("#lon2").val();
    const km = calcCrow(lat1, lon1, lat2, lon2);
    const miles = km / 1.609; // Converting km to miles
    return miles;
  }
  