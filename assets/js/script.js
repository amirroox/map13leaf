/* Show Map Of Leaflet */
let DefaultArea = [35.7447193,51.3749284];
let map = L.map('map').setView(DefaultArea, 10);
map.doubleClickZoom.disable();

// https://tile.openstreetmap.org/{z}/{x}/{y}.png
// https://tile.thunderforest.com/transport-dark/{z}/{x}/{y}.png?apikey=?

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    minZoom:4 ,
    maxZoom: 19,
    attribution: '<a href="https://www.ro-ox.com/" target="_blank">ro-ox</a>' ,
    noWrap:true

}).addTo(map);

L.marker(DefaultArea).addTo(map).bindPopup('Office Ro-ox').openPopup();

/* Script Of Modal  - Open Modal */
let modal = $('.modal-overlay');
let close_modal = $('.close-modal');
let add_location = $('form#addLocation');
let myIcon = L.icon({
    iconUrl: 'assets/img/marker-icon.png' ,
    iconAnchor: [10, 35],
    popupAnchor: [4, -25],
});
map.on('dblclick' , function(event) {
    modal.fadeIn(500);
    $('#lat').val(event.latlng.lat);
    $('#lng').val(event.latlng.lng);
    $('#NameOfPlace').val('');
    $('#type_loc').val(29); //public Category
    $('#ajax-result').html('');
    add_location.on('submit',function (){
        $.ajax({
            method : 'post' ,
            url : '../../process/addLocation.php' ,
            data : add_location.serialize(),
            success : function (e) {
                $('#ajax-result').html(e);
                if(e.includes("been added")) {
                    L.marker([event.latlng.lat,event.latlng.lng] , {icon : myIcon}).addTo(map);
                    modal.delay(300).fadeOut(1200);
                }
                // location.reload();
            }
        });
    });
})
close_modal.on('click' , function (){
   modal.fadeOut(600);
});

/* Script Of Current Location */
$('.img_current').on('click',function () {
    map.locate({setView: true , maxZoom: 13})
})

/* Send Ajax For Search Box (Search Result) */
$('#inp').on('keyup' , function () {
    // console.log(event.originalEvent.key);
    if ($(this).val().length > 1) {
        $.ajax({
            url:'../../process/Search.php' ,
            method : 'post' ,
            data : { keyup : $(this).val() },
            success : function (e) {
                // alert(e);
                $('#result_search').html(e);
            }
        });
    }
    else {
        $('#result_search').html('');
    }
})

/* Function For Search Box Go to Place */
function go_to_place(lat , lng) {
    map.setView([lat,lng] , 11);
}

