<?php
  require_once("Function/Link.php");
  function logVerify()
  {
	if(isset($_POST['username']) && isset($_POST['pwd']))
	{
	  if(!preg_match('/[a-zA-Z0-9]{3,10}/', $_POST['username'])) $namecheck = true;
	  if(!preg_match('/[a-zA-Z0-9]{6,12}/', $_POST['pwd'])) $pwdcheck = true;
	  
	  if(isset($namecheck) || isset($pwdcheck)) return;
	  
	  $link = LinkSQL('utf-8');
	  $DB_selected = mysql_select_db('blogsource', $link);
	  $query = sprintf("SELECT `username` `passwaord` FROM member WHERE username=%s AND password=%s", GetSQLValue($_POST['username'], "text"), GetSQLValue($_POST['pwd'], "text"));
	  $result = mysql_query($query, $link);

	  if($row = mysql_fetch_row($result)) $_SESSION['owner'] = $row[0];
	  else $noaccount = true;

	  mysql_close($link);
	  header("Refresh:0");
	}
	else return;
  }
?>