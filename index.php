<?php
  require_once("Function/Connection.php");
  require_once("Function/CookieHandler.php");
  cookie_open();
?>
<!doctype html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <link href="CSS/index.css" rel="stylesheet" type="text/css" >
  </head>
  <body>
    <div class="header">
      <?php require_once($_SESSION['header']); ?>  
    </div>
    <div class="left">
      <?php require_once($_SESSION['left']); ?>
    </div>
    <div class="content">
      <?php require_once($_SESSION['content']); ?>
    </div>
  </body>
</html>