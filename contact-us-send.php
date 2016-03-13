<?php


if(isset($_POST['submit'])) {
  $msg='Name: ' . $_POST['name'] . "/n" 
  .'Email: ' . $_POST['email'] . "/n" 
  .'Comment: ' . $_POST['comment'];
  mail('helene.mazars@isen-lille.fr', 'Sample Contact Us', $msg);
  header('location: index.html')
}
else {
  // do other code block
  header('Location: index.html');
  exit(0);
}


?>