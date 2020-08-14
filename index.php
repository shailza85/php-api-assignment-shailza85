<?php
include 'includes/vehicles-api.php';
include 'includes/VehiclesFromAPI.Class.php';

global $title; 
$title = 'PHP API';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php  //Display the retrieved data from json file
  //call retrieveVehicleAPI() function from vehicles-api.php file.
  if ( $result = retrieveVehicleAPI() ) : ?>
    <ol>
      <?php foreach ( $result as $result1 ) : ?>
        <?php $currentResult = new VehiclesFromAPI( $result1->Model_ID, $result1->Make_Name, $result1->Model_Name ); ?>
        <li>
          <?php $currentResult->output(); ?>
        </li>
      <?php endforeach; ?>
    </ol>
  <?php endif; 
include 'templates/footer.php';