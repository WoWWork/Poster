<?php	
  require_once("Function/assist.php");
  AssistVerify();
?><head>
  <meta charset="utf-8">
  <link href="CSS/menu_forget.css" rel="stylesheet" type="text/css" >
</head>
<center>
  	<table class="log_form_table1">
    <tr>
      <td class='log_form_titleTd'>
	    <span class='log_form_titleSpan'>登入系統</span>
	  </td>
    </tr>
    <tr>
      <td class="log_form_Info">
	    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?content=forget.php" method="post">
          <table class="log_form_table2">
            <tr>
              <td class="log_form_accountTd">
                <span class="log_form_accountSpan">
                  信箱 : 
                  <input name="email" id="email" type="text" size="30" maxlength="30" class="logform_accountBar" />
                </span>
              </td>
            </tr>
            <tr>
              <td class="log_form_pwdTd">
                <span class="log_form_pwdSpan">
                  電話 : 
                  <input name="phone" id="phone" type="password" size="30" maxlength="10" class="log_form_pwdBar" />
                </span>
              </td>
            </tr>
            <tr>
              <td class="log_form_check">
			          <input type="submit" value="確認" class="log_form_submit">
				        <input type="button" value="返回" class="log_form_cancel" onclick="location.href = 'index.php?content=content.php';" />
              </td>
			    </tr>
  	      </table>
        </form>
	  </td>
    </tr>
</center>