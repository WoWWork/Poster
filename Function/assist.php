<?php
  require_once("Function/Link.php");
  
  function AssistVerify()
  {
	if(isset($_POST['email']) && isset($_POST['phone']))
	{
	  $link = LinkSQL('utf-8');
	  $DB_selected = mysql_select_db('blogsource', $link);
		  
  	  $query = sprintf("SELECT password, email, phone FROM member WHERE email = %s AND phone = %s", GetSQLValue($_POST['email'], "text"), GetSQLValue($_POST['phone'], "text"));
	  $result = mysql_query($query, $link);
	  
	  if(mysql_num_rows($result) == 1)
	  {
		$row = mysql_fetch_assoc($result);
		mail($row['email'], "PASSWORD", $row['password'], "admin@yourmail.com");
	  }
	  mysql_close($link);
	  return;
	}
  }
?>