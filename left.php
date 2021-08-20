<link href="CSS/menu_left.css" rel="stylesheet" type="text/css">
<!--<script src="Javascript/connection.js" type="text/javascript"></script>-->
  <table class="left_table">
  <tr>
	<p>visitor : <?php if(isset($_SESSION['owner'])) echo $_SESSION['owner']; else echo 'guest'; ?></p><br/>
    <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?content=content.php">首   頁</a></p>
    <p><a href="<?php if(isset($_SESSION['owner'])) echo $_SERVER['PHP_SELF']."?content=article.php"; ?>">發   文</a></p>
    <!--<p><input type="button" value="申   請" style="border:bottom;background:rgba(0,0,0,0);"></p>-->
    <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?content=login.php">登   入</a></p>
    <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?logout=true">登   出</a></p>
    <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?content=account.php">管   理</a></p>
  </tr>
</table>
