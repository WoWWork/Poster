<?php
  require_once("Function/Link.php");
  function NewVerify()
  {
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cellphone']) && isset($_POST['email']))
	{ 
	  if($_POST['username'] == 'guest') $namecheck = true;
	  if(!preg_match('/[a-zA-Z0-9]{3,10}/', $_POST['username'])) $namecheck = true;
	  else $_SESSION['username'] = $_POST['username'];
	  if(!preg_match('/[a-zA-Z0-9]{6,12}/', $_POST['password'])) $pwdcheck = true;
	  else $_SESSION['password'] = $_POST['password'];
	  if(!preg_match('/[0-9]{10}/', $_POST['cellphone'])) $phonecheck = true;
	  else $_SESSION['cellphone'] = $_POST['cellphone'];
	  if(!preg_match('/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/', $_POST['email'])) $emailcheck = true;
	  else $_SESSION['email'] = $_POST['email'];
	  
	  if(!isset($namecheck) && !isset($pwdcheck) && !isset($phonecheck) && !isset($emailcheck))
	  {
		$link = LinkSQL('utf-8');
	    $DB_selected = mysql_select_db('blogsource', $link);
		  
		$query = sprintf("SELECT username FROM member WHERE username = %s", GetSQLValue($_SESSION['username'], "text"));
		$result = mysql_query($query, $link);
		if(mysql_num_rows($result) == 0)
		{
		  if($_SESSION['username'] == $_POST['username'] && $_SESSION['password'] == $_POST['password'] && 
		  $_SESSION['cellphone'] == $_POST['cellphone'] && $_SESSION['email'] == $_POST['email'])
		  {
			$_SESSION['key'] = rand(1000, 9999);
			if(isset($_SESSION['key'])) $keycheck = true;
			mail($_SESSION['email'], "PASSKEY", $_SESSION['key'], "admin@yourmail.com");
		  }
		}
		else
		{
		  $namecheck = true;
		}
		mysql_close($link);
	  }
	  else return;
	}
	
	if(isset($_POST['verify']))
	{
	  if($_SESSION['key'] == $_POST['verify'])
	  {
		$link = LinkSQL('utf-8');
		$DB_selected = mysql_select_db('blogsource', $link);
		$result = mysql_query("SELECT COUNT(*) FROM member", $link);
		$Number = mysql_result($result, 0);
		
		$query = sprintf("INSERT INTO member (id, username, password, cellphone, email) VALUES 
		(%s, %s, %s, %s, %s)", GetSQLValue($Number, "int"), GetSQLValue($_SESSION['username'], "text"), 
		GetSQLValue($_SESSION['password'], "text"), GetSQLValue($_SESSION['cellphone'], "text"), GetSQLValue($_SESSION['email'], "text"));
		
		$result = mysql_query($query, $link);
		mysql_close($link);
		
		unset($_SESSION['username']);
		unset($_SESSION['password']); 
		unset($_SESSION['cellphone']); 
		unset($_SESSION['email']); 
		unset($_SESSION['key']); 
		
		if($result) header("location:index.php?content=login.php");
		else header("location:index.php?content=apply.php");
	  }
	  else
	  {
		unset($_SESSION['username']);
		unset($_SESSION['password']); 
		unset($_SESSION['cellphone']); 
		unset($_SESSION['email']); 
		unset($_SESSION['key']); 
	  }
	}
  }
?>