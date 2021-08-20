<?php
  require_once("Function/QueryData.php");
  $component = new DataComponent();
?><head>
  <meta charset="utf-8">
  <link href="CSS/menu_content.css" rel="stylesheet" type="text/css">
</head>

<center>
<!--<script>
  var num = Cookie_Get("Page");
</script>
<h1><script>document.write(num);</script></h1>
  <span>
  <embed src="flash/女001.swf"  height="400px" width="550px" />
  </span>-->
  <!--<form action="index.php?content=content.php" method="post">-->
  <label class="lb_releday">發布時間 : </label>
    <select id="sel_idx" class="sel_idx" selectedIndex="2" >
      <?php
	  	$dates = $component->ArticleTitleQuery();
	    for($i = 2; $i < count($dates); $i++)
		{
		  echo "<option value=".$dates[$i].">".$dates[$i]."</option>";
		}
	  ?>
    </select>
  <input class="btn_findPage" type="button" value="搜尋" onclick="ReadTopic()"/><br/>
  <!--</form>-->
  <br />
    <table cellpadding="8" id="content_table" class="content_table" ></table>
<script type = "text/javascript" src="Javascript/ContentControl.js"></script>

</center>