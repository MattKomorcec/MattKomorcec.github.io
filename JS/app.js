$(function() {

/* =================================================
***************** Google Maps **********************
================================================= */
/* 
var map = new GMaps({
            div: '#map',
            lat: 45.8144400,
            lng: 15.9779800,
            zoom: 12,
            zoomControl: true,
            zoomControlOpt: {
            style : 'SMALL',
            position: 'TOP_LEFT'
            },
            scrollwheel: false,
            mapTypeControl: false,
            streetViewControl: false,
            panControl: false,
            styles:
        	[
			    {
			        "stylers": [
			            {
			                "hue": "#ff61a6"
			            },
			            {
			                "visibility": "on"
			            },
			            {
			                "invert_lightness": true
			            },
			            {
			                "saturation": 40
			            },
			            {
			                "lightness": 10
			            }
			        ]
			    }
			]
			        });

        map.addMarker({
            lat: 45.8144400,
            lng: 15.9779800,
            title: 'Address',
            infoWindow: {
            	content: "<h4 style='color: firebrick; text-shadow: none;'>This is where you can reach me in person.</h4>"
            }
        });

*/

/* =================================================
******** Mobile website dropdown menu **************
================================================= */ 

	// Create a menu item and append to #siteHeader
	var $menuHolder = $("<div class='menu'></div>");
	var $menuBtn = $("<li class='menuBtn'><a href='#'>Menu</a></li>");
	$("#siteHeader").append($menuBtn);

	$("#siteHeader").append($menuHolder);
	$menuHolder.hide();

// Cycle through each navigation link
$("#siteHeader #nav #links a").each(function() {
	// store the anchor
	var link = $(this);
	var $anchor = link.clone();
	// create a list item
	var $li = $("<li></li>");
	// append the anchor to the li
	$li.append($anchor);
	//append the list item to the menuHolder
	$menuHolder.append($li);
});

// When menuBtn is clicked, toggle the menu
$menuBtn.click(function() {
	$menuHolder.slideToggle();
})


/* =================================================
***************** Loading My Work ******************
================================================= */ 
var photoArray = ['Mountain.JPG','Sara.JPG','the_flower.JPG','Sara_feather.JPG','Viking_ship.JPG','on_top.JPG'];

var dev = $("#development");
var photo = $("#photo");
var photoHolder = $("#photoHolder");
var devHolder = $("#devHolder");
var devMsg = "<h3>Unfortunately, this section is still empty. Why don't you contact me so we can change that? :-)</h3>";
var photoMsg = "<h3>I'm not a professional photographer, but I enjoy taking pictures. Check them out</h3>";

devHolder.append(devMsg);
photoHolder.append(photoMsg);

devHolder.hide();
photoHolder.hide();

for (var i = 0; i < photoArray.length; i++) {
	var img = '<img src="img/photo/' + photoArray[i] + '" />';
	photoHolder.append(img);
}

dev.on("click", function() {
	if(photoHolder.css("display") != "none") {
		photoHolder.slideUp(1500);
		devHolder.slideDown(1500);
	}
	else {
		devHolder.slideDown(1500);
	}
	$(this).css({
		"background-color": "white",
		"border" : "2px solid #00a0b0",
		"color": "#00a0b0"
	});
	photo.css({
		"background-color": "#00a0b0",
		"border" : "2px solid white",
		"color": "white"
	});
});

photo.on("click", function() {
	if(devHolder.css("display") != "none") {
		devHolder.slideUp(1500);
		photoHolder.slideDown(1500);
	}
	else {
		photoHolder.slideDown(1500);
	}
	$(this).css({
		"background-color": "white",
		"border" : "2px solid #00a0b0",
		"color": "#00a0b0"
	});
	dev.css({
		"background-color": "#00a0b0",
		"border" : "2px solid white",
		"color": "white"
	});
});

// Open Gallery when clicking on an image


});