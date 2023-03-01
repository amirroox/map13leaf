let DefaultArea = [37.239361, 49.619655];
let map = L.map('map').setView(DefaultArea, 10);
map.doubleClickZoom.disable();

L.tileLayer('https://tile.thunderforest.com/transport-dark/{z}/{x}/{y}.png?apikey=e862672e57d34d5bb0e800bd6198c0b2', {
    maxZoom: 19,
    attribution: '<a href="https://www.ro-ox.com/" target="_blank">ro-ox</a>'
}).addTo(map);

L.marker(DefaultArea).addTo(map).bindPopup('Office Ro-ox').openPopup();

map.on('dblclick' , function(event) {
    L.marker([event.latlng.lat,event.latlng.lng]).addTo(map);
    console.log(event)
})
