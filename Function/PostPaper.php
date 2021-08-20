<?php
  require_once('Link.php');
  require_once('Configuration.php');
  
  function PostVerify()
  {
	if (isset($_SESSION['owner']) && !empty($_POST['content']))
	{
	  $ToDay = GetDay();
	  /*
	  $link = LinkSQL('utf-8');
	  $DB_selected = mysql_select_db('forums_source', $link);
	  $result = mysql_query("SET NAMES UTF8"); //MySQL中文顯示需要加入這一行
	  $result = mysql_query(sprintf("SELECT count(title) FROM article WHERE title=%s",GetSQLValue($_POST['subject'], "text")), $link);
	  $num = mysql_fetch_row($result);
	  if ($num[0] > 0)
	  {
		mysql_close($link);
		return;
	  }
	  else
	  {
		$ThisTime = GetTime();
		$insert = sprintf("INSERT INTO article (publish, author, title) VALUES (%s, %s, %s)", GetSQLValue($ToDay."-".$ThisTime, "text"), GetSQLValue($_SESSION['owner'], "text"), GetSQLValue($_POST['subject'], "text"));
		$result = mysql_query($insert, $link);
		mysql_close($link);
	  }
	  */
	  $filepath = $_SERVER['DOCUMENT_ROOT']."forums/"."Article/".$ToDay.".xml";
	  if (file_exists($filepath))
		BuildPaper($filepath);
	  else
	  {	  
		if($handle = fopen($filepath, "w+"))
		{
		  if(is_writable($filepath))
			fwrite($handle, "<?xml version='1.0' encoding='utf-8' ?><papers></papers>");	    
		  fclose($handle);
		}
		BuildPaper($filepath);
	  }
	  
	  header("Location: ".$_SERVER['PHP_SELF']."?content=content.php");
	}
  }
?>