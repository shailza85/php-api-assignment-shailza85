<?php
include 'includes/dogs-api.php';

global $title; 
$title = 'PHP API';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php //include 'templates/navigation.php'; ?>
<h2>Dogs API Data</h2>
<?php 
if ( $messages = retrieveDogAPI() ) : ?>
    <ol>
      <?php foreach ( $messages as $message ) : ?>
       
        <li>
          <?php $message->output(); ?>
        </li>
      <?php endforeach; ?>
    </ol>
  <?php endif; ?>
include 'templates/footer.php';