<?php
echo "hello world";
?>
<html>
	<head>
		<title>
		</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
<div id="form-content">
		<form  id="kl">
		lat:<input type = "text" id="lat">
		lon:<input type ="text" id="lng">
		city<input type="text" name ="city" id="autocomplete" onFocus="geolocate()">
		<input type="submit"  name="submit" >
		</form>
</div>

<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#kl').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'curl.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});
	
});
</script>
	<script>
		    var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

       
        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        
	document.getElementById('lat').value =  place.geometry.location.lat();
	document.getElementById('lng').value =  place.geometry.location.lng();
      }
	

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }

	</script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_tVR1Lfkd_FXAdo2-YKWh-JaQG-aHt0E&libraries=places&callback=initAutocomplete"
        async defer></script>
	</body>
</html>
