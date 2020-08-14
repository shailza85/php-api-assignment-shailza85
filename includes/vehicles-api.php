<?php

  // Retrieve list of Vehicles from json file.
function retrieveVehicleAPI() {
    // Retrieve response string from API.
    $responseString = file_get_contents( "https://vpic.nhtsa.dot.gov/api/vehicles/GetModelsForMakeId/440?format=json" );
    //var_dump( $responseString ); // Getting a result in browser!
    // Convert response JSON string into a PHP array / object.
  
    if ( $responseString !== FALSE ) {
      // Convert the JSON string into a valid PHP object using json_decode().
      if ( ( $responseObj = json_decode( $responseString ) ) !== NULL ) {
       //var_dump( $responseObj );
        // Collect the array of results from the response object's "Results" property.
        $Results = $responseObj->Results;
        //echo '<pre>';
        //var_dump( $Results);
        //echo '</pre>';
        return $Results;
    } else {// Could not convert string to object (json_decode().)
     echo 'Could not interpret API response.';
    }
} else { // Unable to get a response at all from our API endpoint.
  echo 'Unable to connect / retrieve data from API.';
}
return FALSE;
}
  
  
  //Code borrowed: @link https://github.com/TECHCareers-by-Manpower/4.1-php-advanced