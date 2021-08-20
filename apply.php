<?php 
  require_once("../Function/NewMember.php");
  NewVerify();
?><head>
  <meta charset="utf-8">
  <link href="../CSS/menu_apply.css" rel="stylesheet" type="text/css" >
</head>


<center>
  <table class="message_table">
    <tr>
      <td class="message_info"><span>
      <?php 
      if(isset($namecheck)) echo '無法使用該名稱<br>';
      if(isset($pwdcheck)) echo '無法使用該密碼<br>';
      if(isset($phonecheck)) echo '手機號碼有誤<br>';
      if(isset($emailcheck)) echo '電子信箱有誤<br>';
      ?>
      </span></td>
      </tr>
    </table>
<form action="index.php?content=apply.php" method="post" onkeydown="if(event.keyCode==13) return false;"> 
  <?php
  if(!isset($keycheck))
  {
  ?>
  <table class="apply_table">
    <tr>
	  <td class="apply_tip_name"><span>名　　稱</span></td>	
	  <td><input name="username" type="text" class="apply_form_name" size="20" maxlength="10" value="請輸入名稱" />
      <span class="apply_form_note1">＊（3~10個字元，請使用英文或數字）</span></td>              	
	</tr>
	<tr>
	  <td class="apply_tip_password"><span>密　　碼</span></td>
	  <td><input name="password" type="password" class="apply_form_password" size="20" maxlength="12" value="請輸入密碼" />
	  <span class="apply_form_note2">＊（6~12個字元，請使用英文或數字）</span></td>
	</tr>
	<tr>
	  <td class="apply_tip_phone"><span>手　　機</span></td>
	  <td><input name="cellphone" type="text" class="apply_form_phone" size="20" maxlength="15" value="請輸入電話號碼" />
	  <span class="apply_form_note3">＊</span></td>
	</tr>
	<tr>
	  <td class="apply_tip_email"><span>信　　箱</span></td>
	  <td><input name="email" type="text" class="apply_form_email" size="40" maxlength="30" value="請輸入信箱" />
	  <span class="apply_form_note4">＊</span></td>
	</tr>
  <?php
  }
  else
  {
  ?>
  <tr>
    <td class="apply_tip_verify"><span>驗 證 碼</span></td>
    <td><input name="verify" type="text" class="apply_form_name" size="12" maxlength="10" value="請輸入驗證碼" />
    <span class="apply_form_note4">＊</span></td>  
  </tr>
  <?php
  }
  ?>
	<tr>
	  <td class="apply_form_submit"><input type="submit" value="確定送出" ></td>
	  <td class="apply_form_cancel"><input type="button" value="消　　取" onclick="location.href = 'index.php?content=content.php';"></td>
	</tr>
  </table>
</form>
</center>