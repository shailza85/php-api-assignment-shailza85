<?php
// Start our session, and declare our history function.

global $title; // Try to avoid globals, as they are harder to troubleshoot and track through your application.
$title = 'PHP API'; // $GLOBALS['title'] = 'PHP Homepage';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php include 'templates/navigation.php'; ?>

 
 

<?php include 'templates/footer.php';