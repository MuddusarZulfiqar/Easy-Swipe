var mapcenter, map, infoWindow, bounds, custommarker;
var markers = [];
var allmarkers = [];
var CustomMarker;
var fscreens = [];
var screens =
[
    {
        "id": "1",
        "screen_title": "Salem Al Mubarak st. & Qatar St. Intersection",
        "screen_address": "some dummy address goes here",
        "address_lat": "29.336607",
        "address_log": "48.071198",
        "address_governate": "Jahra",
        "address_area": "Hawally",
        "screen_dimenssion": "W 13m by H 6m",
        "screen_cars": "85000 cars per day",
        "screen_detail": "lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy textlorem isprum dummy text lorem isprum dummy textlorem isprum dummy text",
        "detail_url": "src/data/screen-detail.html",
    },
    {
        "id": "2",
        "screen_title": "Salem Al Mubarak st",
        "screen_address": "test2",
        "address_lat": "29.330889",
        "address_log": "48.080055",
        "address_governate": "Jahra",
        "address_area": "Hawally",
        "screen_dimenssion": "W 13m by H 6m",
        "screen_cars": "85000 cars per day",
        "screen_detail": "lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy textlorem isprum dummy text lorem isprum dummy textlorem isprum dummy text",
        "detail_url": "src/data/screen-detail.html",
    },
    {
        "id": "3",
        "screen_title": "Salem Al Mubarak st Al Khansa St, Salmiya, Kuwait",
        "screen_address": "test3",
        "address_lat": "29.327720",
        "address_log": "48.067499",
        "address_governate": "Jahra",
        "address_area": "Kuwait City",
        "screen_dimenssion": "W 13m by H 6m",
        "screen_cars": "85000 cars per day",
        "screen_detail": "lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy textlorem isprum dummy text lorem isprum dummy textlorem isprum dummy text",
        "detail_url": "src/data/screen-detail.html",
    },
    {
        "id": "4",
        "screen_title": "Al Jahra Governorate, Kuwait",
        "screen_address": "test4",
        "address_lat": "29.100573",
        "address_log": "46.684954",
        "address_governate": "Ahmadi",
        "address_area": "Dasmān",
        "screen_dimenssion": "W 13m by H 6m",
        "screen_cars": "85000 cars per day",
        "screen_detail": "lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy textlorem isprum dummy text lorem isprum dummy textlorem isprum dummy text",
        "detail_url": "src/data/screen-detail.html",
    },
    {
        "id": "5",
        "screen_title": "Salem",
        "screen_address": "test5",
        "address_lat": "29.319750",
        "address_log": "48.028570",
        "address_governate": "Ahmadi",
        "address_area": "Dasmān",
        "screen_dimenssion": "W 13m by H 6m",
        "screen_cars": "85000 cars per day",
        "screen_detail": "lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy textlorem isprum dummy text lorem isprum dummy textlorem isprum dummy text",
        "detail_url": "src/data/screen-detail.html",
    },
    {
        "id": "6",
        "screen_title": "Salem Al Mubarak st. & Qatar St. Intersection 2",
        "screen_address": "Grand Cinemas",
        "address_lat": "29.312670",
        "address_log": "48.070740",
        "address_governate": "Mubarak Al-Kabeer",
        "address_area": "Dasmān",
        "screen_dimenssion": "W 13m by H 6m",
        "screen_cars": "85000 cars per day",
        "screen_detail": "lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy textlorem isprum dummy text lorem isprum dummy textlorem isprum dummy text",
        "detail_url": "src/data/screen-detail.html",
    },
    {
        "id": "7",
        "screen_title": "Al Jahra Governorate - Screen, Kuwait",
        "screen_address": "Al Jahra Governorate, Kuwait",
        "address_lat": "29.3848269",
        "address_log": "47.9819575",
        "address_governate": "Farwaniya",
        "address_area": "Sharq",
        "screen_dimenssion": "W 13m by H 6m",
        "screen_cars": "85000 cars per day",
        "screen_detail": "lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy textlorem isprum dummy text lorem isprum dummy textlorem isprum dummy text",
        "detail_url": "src/data/screen-detail.html",
    },
    {
        "id": "8",
        "screen_title": "Shuwaikh Educational, Kuwait",
        "screen_address": "Stage theater",
        "address_lat": "29.348261",
        "address_log": "47.909475",
        "address_governate": "Farwaniya",
        "address_area": "Sharq",
        "screen_dimenssion": "W 13m by H 6m",
        "screen_cars": "85000 cars per day",
        "screen_detail": "lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy textlorem isprum dummy text lorem isprum dummy textlorem isprum dummy text",
        "detail_url": "src/data/screen-detail.html",
    },
    {
        "id": "9",
        "screen_title": "5, Kuwait",
        "screen_address": "group theater",
        "address_lat": "29.296162",
        "address_log": "47.863937",
        "address_governate": "Farwaniya",
        "address_area": "Jibla",
        "screen_dimenssion": "W 13m by H 6m",
        "screen_cars": "85000 cars per day",
        "screen_detail": "lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy text lorem isprum dummy textlorem isprum dummy text lorem isprum dummy textlorem isprum dummy text",
        "detail_url": "src/data/screen-detail.html",
    },
];
document.getElementById("flter_map_listing").addEventListener("click", filterListing);

var g = document.getElementById("governate");
var governate = g.options[g.selectedIndex].value;
var a = document.getElementById("area");
var area = a.options[a.selectedIndex].value;
fscreens = screens;
if(governate!=0 || area!=0){
    fscreens = screens.filter(function (el) {
        return el.address_governate == governate || el.address_area==area;
    });
}

function initMap() {
    mapcenter = { lat: 29.3761015, lng: 47.9643572 };
    map = new google.maps.Map(
    document.getElementById('map'), { zoom: 11, center: mapcenter });
    placeMarkers(fscreens);
}
function placeMarkers(objscreens){
    var geocoder = new google.maps.Geocoder();
    objscreens.forEach(function (element) {
        if (element.address_lat == '' || element.address_log == '') {
            geocoder.geocode({ address: element.screen_address }, (results, status) => {
                if (status === "OK") {
                    var location = results[0].geometry.location;
                    element.address_lat = location.lat();
                    element.address_log = location.lng();
                    addMarker();
                } else {
                    console.log("Geocode was not successful for the following reason: " + status);
                }
            });
        }
        var obj = {
            id: element.id,
            title: element.screen_title,
            lat: element.address_lat,
            long: element.address_log,
            address: element.screen_address
        }
        markers.push(obj)
    })
    markpins();
}
function markpins() {
    var marker;
    for (let i = 0; i < markers.length; i++) {
        var lat, log;
        lat = Number(markers[i].lat)
        log = Number(markers[i].long)

        marker = new google.maps.Marker({
            id: markers[i].id,
            position: {
                lat: lat, lng: log
            }, map: map,
            animation: google.maps.Animation.DROP,
            title: markers[i].title,
            icon: 'src/images/svg/screen-mk.svg'
        });
        var position = new google.maps.LatLng(lat, log);
        map.setCenter(position);
        allmarkers.push(marker);
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
            this.setZoom(11);
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                if (infoWindow)
                var infoContents="";
                var screen = screens.filter(function (el) {
                    return el.id == markers[i].id;
                  });
                  if(screen){
                    var tooltip_data = screen[0].detail_url;	
                    $(".map-screen-popup .popup-body").load(tooltip_data, function(response, status, xhr) {	
                        var $slickElement = $(".map-screen-popup .popup-body .screen_images");
                        $slickElement.slick();
                        $(".map-screen-popup").toggle();
                    });
                  }
            }
        })(marker, i));
    }
}
function listScreens(){
    var htmldata="";
      fscreens.forEach(function (element) {
        var lat = Number(element.address_lat)
        var log = Number(element.address_log)
        htmldata = htmldata + 
        '<div class="card screen" data-id="' + element.id + '">' +
            '<div class="card-image">'+
                '<img src="src/images/screen-image1.png" alt="">'+
            '</div>'+
            '<div class="card-body">'+
                '<div class="card-title">'+
                    '<span>' + element.screen_title + '</span>'+
                '</div>'+
                '<ul class="screen-info">'+
                    '<li class="icon">'+
                        '<img src="src/images/svg/dimenssion.svg" alt="">'+ 
                    '</li>'+
                    '<li>'+
                    element.screen_dimenssion +
                    '</li>'+
                '</ul>'+
                '<ul class="screen-info">'+
                    '<li class="icon">'+
                        '<img src="src/images/svg/car.svg" alt="">'+ 
                    '</li>'+
                    '<li>'+
                    element.screen_cars +
                    '</li>'+
                '</ul>'+
            '</div>'+
        '</div>';
    });
    $(".search__screen .screens-listing").html(htmldata);
    $(".search__screen .screens-listing").slick();
    
    
    //highlightPin();
}
function setMapOnAll(map) {
    for (let i = 0; i < allmarkers.length; i++) {
        allmarkers[i].setMap(map);
    }
}

function clearMarkers() {
    setMapOnAll(null);
    markers.length = 0
}
function filterListing(){
    var g = document.getElementById("governate");
    var governate = g.options[g.selectedIndex].value;
    var a = document.getElementById("area");
    var area = a.options[a.selectedIndex].value;
    if(governate!=0 || area!=0){
        fscreens = screens.filter(function (el) {
            return el.address_governate == governate || el.address_area==area;
        });
        }
    else{
        fscreens = screens;
    }
    $(".search__screen .screens-listing").slick("destroy");
    listScreens();
    clearMarkers();
    placeMarkers(fscreens);
    setTimeout(() => {
        this.classList.remove("show-loading");
    }, 500);
}
// function highlightPin(){
//     document.querySelector(".search__screen .screen").addEventListener("click", function(){
//         console.log("enter");
//     });
// }
$(document).on("click", ".search__screen .card", function(e){
    $('.search__screen .card.screen.current').removeClass('current');
    $(this).addClass('current');    
    var screenid = $(this).attr("data-id");
    
    var sc = fscreens.filter(function (item) {
        return item.id == screenid
    })
    var lat, log;
    lat = Number(sc[0].address_lat)
    log = Number(sc[0].address_log)
    var position = new google.maps.LatLng(lat, log);
    map.setCenter(position);
    map.setZoom(11);
    for (let i = 0; i < allmarkers.length; i++) {
        if (allmarkers[i].id == screenid) {
            allmarkers[i].setIcon("src/images/highlight_pin.png")
        } else {
            allmarkers[i].setIcon("src/images/svg/screen-mk.svg")
        }

    }
    
});