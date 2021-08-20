<?php	
  require_once("Function/ManagerAccount.php");
  Login();
?><head>
  <meta charset="utf-8">
  <link href="CSS/menu_account.css" rel="stylesheet" type="text/css" >
</head>

<center>
  	<table class="log_form_table1">
    <tr>
      <td class='log_form_titleTd'>
	    <span class='log_form_titleSpan'>管理系統</span>
	  </td>
    </tr>
    <tr>
      <td class="log_form_Info">
	    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?content=forget.php" method="post">
        
          <table class="log_form_table2">
            <tr>
                <td class="log_form_accountSpan">
                  舊帳號 : 
                  <input name="username" id="username" type="text" size="30" maxlength="10" class="logform_accountBar" />
                </td>
            </tr>
             <tr>
                <td class="log_form_accountSpan">
                  新帳號 : 
                  <input name="newuser" id="newuser" type="text" size="30" maxlength="10" class="logform_accountBar" />
                <span class="apply_form_note1">＊（3~10個字元，請使用英文或數字）</span></td>
            </tr>
            <tr>                
            <td class="log_form_pwdSpan">
                  舊密碼 : 
                  <input name="pwd" id="pwd" type="password" size="30" maxlength="12" class="log_form_pwdBar" />
                </td>
            </tr>
            <td class="log_form_pwdSpan">
                  新密碼 : 
                  <input name="newpwd" id="newpwd" type="password" size="30" maxlength="12" class="log_form_pwdBar" />
                <span class="apply_form_note2">＊（6~12個字元，請使用英文或數字）</span></td>
            </tr>
            <tr>
                <td class="log_form_pwdSpan">
                  電話 : 
                  <input name="phone" id="phone" type="text" size="30" maxlength="10" class="log_form_pwdBar" />
                <span class="apply_form_note3">＊</span></td>
            </tr>
             <tr>
                <td class="log_form_pwdSpan">
                  信箱 : 
                  <input name="email" id="email" type="text" size="30" maxlength="30" class="log_form_pwdBar" />
                <span class="apply_form_note4">＊</span></td>
            </tr>
            <tr>
              <td class="log_form_check">
			          <input type="submit" value="傳送" class="log_form_submit">
				        <input type="button" value="返回" class="log_form_cancel" onclick="location.href = 'index.php?content=content.php';" />
              </td>
			    </tr>
  	      </table>
        </form>
	  </td>
    </tr>
</center>