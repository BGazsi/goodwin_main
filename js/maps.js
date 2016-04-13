function initialize()
{
    var myLatlng = new google.maps.LatLng(35.650279, 139.709274)
    var map = new google.maps.Map(document.getElementById("map"),
        {
            zoom: 17,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        draggable:true
    });

    map.set('styles', [
        {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [
                { color: '#FFFFFF' }
            ]
        }, {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [
                { color: '#FFB9B9' }
            ]
        }, {
            featureType: 'road',
            elementType: 'labels',
            stylers: [
                { saturation: -100 },
                { invert_lightness: true }
            ]
        }, {
            featureType: "all",
            elementType: "labels",
            stylers: [
                { visibility: "off" }
            ]
        }, {
            featureType: 'landscape',
            elementType: 'geometry',
            stylers: [
                { color: '#FFD5D5' }
            ]
        }
    ]);
}