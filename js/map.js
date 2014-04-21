(function(){
	window.onload = function() {
		var myLatLng = new google.maps.LatLng(44.97887, -93.15146)
		var options = {
    	center: myLatLng,
    	zoom: 17,
			minZoom: 10,
			maxZoom: 18,
    	mapTypeId: google.maps.MapTypeId.ROADMAP,
    	noclear: false,
    	backgroundColor:'#ffffff',
    	disableDefaultUI: true,
    	draggableCursor: 'pointer',
    	draggingCursor: 'pointer',
			navigationControl: true,
			navigationControlOptions:{
				position: google.maps.ControlPosition.TOP_LEFT,
				style: google.maps.NavigationControlStyle.SMALL
			},
			keyboardShortcuts: true,
			disableDoubleClickZoom: false,
			draggable: true,
			scrollwheel: true,
			streetViewControl: true,
			zoomControl: true,
			mapTypeControl: true,
			mapTypeControlOptions:{
			  style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
				position: google.maps.ControlPosition.TOP_RIGHT,
					MapTypeIds: [
 				 	google.maps.MapTypeId.ROADMAP,
 					google.maps.MapTypeId.SATELLITE,
 					google.maps.MapTypeId.HYBRID,
 					google.maps.MapTypeId.TERRAIN,
					]
				}
    	};
    	var map = new google.maps.Map(document.getElementById('map'),options);
			map.setTilt(45);
		
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				animation: google.maps.Animation.DROP,
			});
		
    	var infowindow = new google.maps.InfoWindow({
    	content:
				'<div class="info-window clearfix">' + 
				'<h1>Como Picnic Shelters</h1>' +
				'<p>1199 Midway Pkwy, St Paul, MN 55103</p>' +
				'<a href="http://tiny.cc/epjrwd14" target="_blank" title="Get Directions">Get Directions</a>' +
				'</div>'
			});
			
 			google.maps.event.addListener(marker, 'click', function(){
      	infowindow.open(map,marker);
    	});

			google.maps.event.addDomListener(window, "resize", function() {
		    var center = map.getCenter();
		    google.maps.event.trigger(map, "resize");
		    map.setCenter(center); 
			});
				
			google.maps.event.addDomListener(map, 'click', function(){
				infowindow.close(map,marker);
			});
			google.maps.event.addListener(map, 'zoom_changed', function(){
				var zoomLevel = map.getZoom();
				//map.setCenter(myLatLng);
			});
    }
	})();