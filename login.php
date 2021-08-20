<?php	
  require_once("Function/LoginCheck.php");
  logVerify();
?><head>
  <meta charset="utf-8">
  <link href="CSS/menu_login.css" rel="stylesheet" type="text/css" >
</head>



<center>
	<table class="log_form_table1">
    <tr>
      <td class='log_form_titleTd'>
	    <span class='log_form_titleSpan'>登入系統</span>
	  </td>
    </tr>
    <tr><td class="message_info">
      <span>
        <?php 
          if(isset($namecheck)) echo '帳號錯誤<br>';
          if(isset($pwdcheck)) echo '密碼錯誤<br>';
          if(isset($noaccount)) echo '無此帳號<br>';
        ?>
      </span>
    </td></tr>
    <tr>
      <td class="log_form_Info">
	    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?content=login.php" method="post">
          <table class="log_form_table2">
            <tr>
              <td class="log_form_accountTd">
                <span class="log_form_accountSpan">
                  帳號 : 
                  <input name="username" id="username" type="text" size="20" maxlength="10" class="logform_accountBar" />
                </span>
              </td>
            </tr>
            <tr>
              <td class="log_form_pwdTd">
                <span class="log_form_pwdSpan">
                  密碼 : 
                  <input name="pwd" id="pwd" type="password" size="20" maxlength="12" class="log_form_pwdBar" />
                </span>
              </td>
            </tr>
            <tr>
              <td class="log_form_check">
			          <input type="submit" value="登入" class="log_form_submit">
				        <input type="button" value="返回" class="log_form_cancel" onclick="location.href = 'index.php?content=content.php';" />
              </td>
			    </tr>
  	      </table>
        </form>
	  </td>
    </tr>
    <tr>
      <td class="log_apply"><a href="index.php?content=apply.php">申請</a></td>
      <td class="log_forget"><a href="index.php?content=forget.php">忘記密碼</a></td>
    </tr>
  </table>
</center>