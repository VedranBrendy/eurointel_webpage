var platform = new H.service.Platform({
  app_id: "mhuj2TspfcB3v3xA45qs",
  app_code: "46DJxsA_GMma5YsY7Lw_7A"
});

// Obtain the default map types from the platform object:
var defaultLayers = platform.createDefaultLayers();

// Instantiate (and display) a map object:
var map = new H.Map(document.getElementById("map"), defaultLayers.normal.map, {
  zoom: 16,
  center: { lat: 45.804428, lng: 15.94259 }
});

/*
 * Creates a new marker and adds it to a group
 * @param {H.map.Group} group       The group holding the new marker
 * @param {H.geo.Point} coordinate  The location of the marker
 * @param {String} html             Data associated with the marker
 */
function addMarkerToGroup(group, coordinate, html) {
  var marker = new H.map.Marker(coordinate);
  // add custom data to the marker
  marker.setData(html);
  group.addObject(marker);
}

/*
 * Add two markers showing the position of Liverpool and Manchester City football clubs.
 * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function addInfoBubble(map) {
  var group = new H.map.Group();

  map.addObject(group);

  // add 'tap' event listener, that opens info bubble, to the group
  group.addEventListener(
    "tap",
    function(evt) {
      // event target is the marker itself, group is a parent event target
      // for all objects that it contains
      var bubble = new H.ui.InfoBubble(evt.target.getPosition(), {
        // read custom data
        content: evt.target.getData()
      });
      // show info bubble
      ui.addBubble(bubble);
    },
    false
  );

  addMarkerToGroup(
    group,
    { lat: 45.804428, lng: 15.94259 },

    "<img src ='img/zgrada.jpg' alt = 'zgrada' >"
  );
}

/**
 * Boilerplate map initialization code starts below:
 */

var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// create default UI with layers provided by the platform
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
addInfoBubble(map);
