<?php
  if(!isset($_SESSION)){
    session_start();
    $_SESSION['header'] = 'header.php';
	$_SESSION['left'] = 'left.php';
    $_SESSION['content'] = 'content.php';
  }
  
  if(isset($_GET['content'])){
    $_SESSION['content'] = $_GET['content'];
  }
  
  if(isset($_GET['logout'])){
    unset($_SESSION['owner']);
  }
  
  function identify_set($person)
  {
	$_SESSION['owner'] = $person;
  }
?>  
