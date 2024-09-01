// datatable list view
$(document).ready(function() {
  var table = $('#dataUsers').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "columnDefs": [
      { "targets": 8, "sortable": false }
    ]
  });

  var columns = table.columns();
  var filterColumns = [4, 5]; 

  filterColumns.forEach(function(columnIndex) {
    var column = columns.column(columnIndex);
    var select = document.createElement('select');
    select.add(new Option(''));

    var data = column.data().unique().sort();

    data.each(function(d, j) {
      select.add(new Option(d));
    });

    $('.filter-data:eq(' + (filterColumns.indexOf(columnIndex)) + ')').append(select);

    select.addEventListener('change', function() {
      column.search(select.value, {exact: true}).draw();
    });
  });
});

$(document).ready(function() {
  var table = $('#dataAdmin').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });

  var column = table.column(5); 
  var select = document.createElement('select');
  select.add(new Option(''));

  var data = column.data().unique().sort();

  data.each(function(d, j) {
    select.add(new Option(d));
  });

  $('.filter-data').append(select);

  select.addEventListener('change', function() {
    column.search(select.value, {exact: true}).draw();
  });
});

$(document).ready(function() {
  var table = $('#dataBikes').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "columnDefs": [
      { "targets": 7, "sortable": false }
    ],
  });

  var columns = table.columns();
  var filterColumns = [2, 3]; 

  filterColumns.forEach(function(columnIndex) {
    var column = columns.column(columnIndex);
    var select = document.createElement('select');
    select.add(new Option(''));

    var data = column.data().unique().sort();

    data.each(function(d, j) {
      select.add(new Option(d));
    });

    $('.filter-data:eq(' + (filterColumns.indexOf(columnIndex)) + ')').append(select);

    select.addEventListener('change', function() {
      column.search(select.value, {exact: true}).draw();
    });
  });
});

$(document).ready(function() {
  $('#dataShelters').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "columnDefs": [
      { "targets": 4, "sortable": false }
    ],
  });
});

$(document).ready(function() {
  var table = $('#dataRents').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "columnDefs": [
      { "targets": 8, "sortable": false }
    ],
  });

  var columns = table.columns();
  var filterColumns = [1, 2]; 

  filterColumns.forEach(function(columnIndex) {
    var column = columns.column(columnIndex);
    var select = document.createElement('select');
    select.add(new Option(''));

    var data = column.data().unique().sort();

    data.each(function(d, j) {
      select.add(new Option(d));
    });

    $('.filter-data:eq(' + (filterColumns.indexOf(columnIndex)) + ')').append(select);

    select.addEventListener('change', function() {
      column.search(select.value, {exact: true}).draw();
    });
  });
});

$(document).ready(function() {
  var table = $('#dataFeedback').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });

  var column = table.column(2);
  var select = document.createElement('select');
  select.add(new Option(''));

  var data = column.data().unique().sort();

  data.each(function(d, j) {
    select.add(new Option(d));
  });

  $('.filter-data').append(select);

  select.addEventListener('change', function() {
    column.search(select.value, {exact: true}).draw();
  });
});

// table click
document.querySelectorAll('.marker-link').forEach(link => {
  link.addEventListener('click', function() {
    // Remove 'active' class from all other links
    document.querySelectorAll('.marker-link').forEach(otherLink => {
      otherLink.classList.remove('active');
    });
    // Add 'active' class to the current link
    this.classList.add('active');
  });
});


// dashboardMap
var mapContainer = document.getElementById('map');
var map = L.map('map', {
  responsive: true
}).setView([-5.364423992333092, 105.24291169677275], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
  subdomains: ['a', 'b', 'c']
}).addTo(map);


// sepedadetail modal
$('#mapModal').on('shown.bs.modal', function (event) {
  map.invalidateSize();

  var button = $(event.relatedTarget); 
  var lat = button.data('lat'); 
  var lng = button.data('lng'); 

  map.panTo([lat, lng]); 
  L.marker([lat, lng], {
  title:'lokasi sepeda',
  icon: L.icon({
    iconUrl: 'https://i.imgur.com/GgVUXtd.png', 
    iconSize: [25, 40],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    tooltipAnchor: [16, -28]
  })
}).addTo(map);

});

// Define an array of marker objects
var markers = [
  {
    lat: -5.368010191154698,
    lng: 105.242013296799,
    title: 'Shelter Shuttle Bis'
  },
  {
    lat: -5.366572270737393, 
    lng: 105.2436473591545,
    title: 'Shelter FMIPA'
  },
  {
    lat: -5.366713187137046, 
    lng: 105.24502831061614,
    title: 'Shelter FKIP'
  },
  {
    lat: -5.367946285089812, 
    lng: 105.24679823960092,
    title: 'Shelter FK'
  },
  {
    lat: -5.365246267932397, 
    lng: 105.24295986338807,
    title: 'Shelter FP'
  },
  {
    lat: -5.364297880169442, 
    lng: 105.24277785482079,
    title: 'Shelter Rektorat'
  },
  {
    lat: -5.364349265522061, 
    lng: 105.24428802505518,
    title: 'Shelter FH'
  },
  {
    lat: -5.362796410154635, 
    lng: 105.24410079285407,
    title: 'Shelter FEB/FISIP'
  },
  {
    lat: -5.362814874424051, 
    lng: 105.24264625369595,
    title: 'Shelter FT/Masjid Teknik'
  },
  {
    lat: -5.364365194688577,
    lng:  105.2416020026597,
    title: 'Shelter Kandang Rusa'
  },
  {
    lat: -5.362570091781362, 
    lng: 105.2412388851442,
    title: 'Shelter Student Corner'
  },
  {
    lat: -5.362751688139071, 
    lng: 105.24079274024857,
    title: 'Shelter GSG'
  },
  {
    lat: -5.361655153424184, 
    lng: 105.23964981235316,
    title: 'Shelter Gerbang Bypass'
  },
  {
    lat: -5.364894427483761, 
    lng: 105.23940248547221,
    title: 'Shelter Embung Rusunawa'
  },
  {
    lat: -5.365381817634176, 
    lng: 105.23771563492444,
    title: 'Shelter Rusunawa'
  }
];


// Loop through the array and add each marker to the map
markers.forEach(function(marker) {
  L.marker([marker.lat, marker.lng], {
    title: marker.title,
    icon: L.icon({
      iconUrl: 'https://i.imgur.com/AROpeyt.png',
      iconSize: [35, 51],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      tooltipAnchor: [16, -28]
    })
  }).addTo(map);
});

// Define an array to store the marker objects
var markerObjects = [];

// Loop through the array and add each marker to the map
markers.forEach(function(marker) {
  var markerObject = L.marker([marker.lat, marker.lng], {
    title: marker.title,
    icon: L.icon({
      iconUrl: 'https://i.imgur.com/AROpeyt.png',
      iconSize: [35, 51],
      iconAnchor: [12, 41],
      popupAnchor: [1, -34],
      tooltipAnchor: [16, -28]
    })
  }).addTo(map);
  markerObjects.push(markerObject);
});

// Add an event listener to the link or button
document.querySelectorAll('.marker-link').forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault();
    var lat = link.getAttribute('data-lat');
    var lng = link.getAttribute('data-lng');
    map.setView([lat, lng], 16.3);

    // Get the marker object associated with the link
    var markerObject = markerObjects.find(function(markerObject) {
      return markerObject.getLatLng().lat == lat && markerObject.getLatLng().lng == lng;
    });

    // Update the icon of the marker object
    if (markerObject) {
      var icon = L.icon({
        iconUrl: 'https://i.imgur.com/jWlN2iF.png',
        iconSize: [35, 51],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        tooltipAnchor: [16, -28]
      });
      markerObject.setIcon(icon);

      // Reset the icon of the other marker objects
      markerObjects.forEach(function(otherMarkerObject) {
        if (otherMarkerObject !== markerObject) {
          var originalIcon = L.icon({
            iconUrl: 'https://i.imgur.com/AROpeyt.png',
            iconSize: [35, 51],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            tooltipAnchor: [16, -28]
          });
          otherMarkerObject.setIcon(originalIcon);
        }
      });
    }
  });
});

// heatmap layer
var heat = L.heatLayer([
  [-5.367523452142857, 105.2415234375, 20],
  [-5.368531807857143, 105.2431640625, 40],
  [-5.365924528571429, 105.244140625, 10],
  [-5.366350759285714, 105.2421875, 30],
  [-5.367900214285714, 105.2453125, 60],
  [-5.365402678571429, 105.243359375, 15],
  [-5.368246964285714, 105.241015625, 25],
  [-5.366971428571429, 105.2447265625, 45],
  [-5.365853214285714, 105.2427734375, 35],
  [-5.367488392857143, 105.245703125, 80],
  [-5.367523452142857, 105.2415234375, 5],
  [-5.368531807857143, 105.2431640625, 55],
  [-5.365924528571429, 105.244140625, 8],
  [-5.366350759285714, 105.2421875, 22],
  [-5.367900214285714, 105.2453125, 90],
  [-5.365402678571429, 105.243359375, 12],
  [-5.368246964285714, 105.241015625, 18],
  [-5.366971428571429, 105.2447265625, 50],
  [-5.365853214285714, 105.2427734375, 28],
  [-5.367488392857143, 105.245703125, 110],
  [-5.364123456789012, 105.2423456789012, 3],
  [-5.364234567890123, 105.2434567890123, 38],
  [-5.36390123456789, 105.242123456789, 6],
  [-5.364567890123456, 105.2445678901234, 65],
  [-5.363456789012345, 105.2419012345678, 9],
  [-5.364890123456789, 105.2438901234567, 85],
  [-5.363234567890123, 105.2424567890123, 14],
  [-5.364345678901234, 105.2452345678901, 100],
  [-5.36290123456789, 105.2415678901234, 4],
  [-5.364456789012345, 105.2442345678901, 75],
  [-5.363123456789012, 105.2428901234567, 20],
  [-5.364567890123456, 105.2454567890123, 120],
// Add more data points here...

], {
radius: 22,
blur: 20,
maxZoom: 17,
});

document.getElementById('heatmap-toggle').addEventListener('click', function() {
if (map.hasLayer(heat)) {
  map.removeLayer(heat);
} else {
  map.addLayer(heat);
}
});
