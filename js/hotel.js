(function(){
	window.onload = function() {
		var myLatLng = new google.maps.LatLng(44.971291, -93.154334)
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
			scrollwheel: false,
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
    	var hmap = new google.maps.Map(document.getElementById('hotel-map'),options);
			hmap.setTilt(45);
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: hmap,
				animation: google.maps.Animation.DROP,
			});
		
    	var infowindow = new google.maps.InfoWindow({
    	content:
				'<div class="info-window clearfix">' + 
				'<h1>Best Western Bandana Square</h1>' +
				'<p>1010 Bandana Blvd W, St Paul, MN 55108</p>' +
				'<a href="http://tiny.cc/bwbs" target="_blank" title="Get Directions">Get Directions</a>' +
				'</div>'
			});
			
 			google.maps.event.addListener(marker, 'click', function(){
      	infowindow.open(hmap,marker);
    	});

			google.maps.event.addDomListener(window, "resize", function() {
		    var center = hmap.getCenter();
		    google.maps.event.trigger(hmap, "resize");
		    map.setCenter(center); 
			});
				
			google.maps.event.addDomListener(hmap, 'click', function(){
				infowindow.close(hmap,marker);
			});
			google.maps.event.addListener(hmap, 'zoom_changed', function(){
				var zoomLevel = hmap.getZoom();
				map.setCenter(myLatLng);
			});
    }
	})();