    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="geolocation">
    <meta name="keywords" content="Geo Location">
      <style>
#convert {
  padding: .3em 1em;
  border-radius: .3em;
}

    </style>
<body>

<center>
<h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Geo Location</h3>
<input type="button" id='convert' value="Show Location" onclick="javascript:showlocation()" /></center>   <br/>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

  
 
&nbsp &nbsp &nbsp &nbsp &nbsp Latitude: <span id="latitude"></span><br/>
 
&nbsp &nbsp &nbsp &nbsp &nbsp Longitude: <span id="longitude"></span>
    <script>
    	function showlocation() {
  if(Modernizr.geolocation) { navigator.geolocation.getCurrentPosition(callback);
} 
  else {
    console.log('nope');
  }
}

function callback(position) {
  document.getElementById('latitude').innerHTML = position.coords.latitude;
  document.getElementById('longitude').innerHTML = position.coords.longitude;
}
    </script>




</body>