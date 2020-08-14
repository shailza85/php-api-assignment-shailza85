<?php
// Ensure that we aren't pulling Vehicles.Class in multiple times; pull it in if it hasn't run yet.
include_once 'Vehicles.Class.php';

class VehiclesFromAPI extends Vehicles {
  // Output!
  public function output () {
    ?>
      <dl>
      <dt>Model_ID:</dt>
        <dd><?php echo $this->Model_ID; ?></dd>
        <dt>Make_Name:</dt>
        <dd><?php echo $this->Make_Name; ?></dd>
        <dt>Model_Name:</dt>
        <dd><?php echo $this->Model_Name; ?></dd>
      <dl>
    <?php
  }
}


//Code borrowed: @link https://github.com/TECHCareers-by-Manpower/4.1-php-advanced