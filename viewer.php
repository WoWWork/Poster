<head>
  <meta charset="utf-8">
  <script type = "text/javascript" src="Javascript/Redirect.js"></script>
  <script type = "text/javascript" src="Spry/xpath.js"></script>
  <script type = "text/javascript" src="Spry/SpryData.js"></script>
  <script type = "text/javascript">
  var ds = new Spry.Data.XMLDataSet("../Article/<?php echo $_GET['page'];?>.xml", "papers/paper");
  </script>
  <link href="CSS/menu_content.css" rel="stylesheet" type="text/css">
  <link href="CSS/menu_viewer.css" rel="stylesheet" type="text/css" >
</head>
<?php
  
  require_once("../Function/QueryData.php");
  $component = new DataComponent();
  $info = array();
  $info = $component->ShowContent(sprintf('%s', trim($_GET['page'])), sprintf('%s',trim($_GET['subject'])));
  //print_r($_COOKIE['content']);
?>

<center>
  <button class="accordion">Section 1</button>
  <div spry:region = "ds" class="panel" id="time">
    <p>{time}</p>
  </div>

  <button class="accordion">Section 2</button>
  <div spry:region = "ds" class="panel" id="author">
  <p>{author}</p>
  </div>

  <button class="accordion">Section 3</button>
  <div spry:region = "ds" class="panel" id="subject">
  <p>{subject}</p>
  </div>
  
  <button class="accordion">Section 4</button>
  <div spry:region = "ds" class="panel" id="content">
  <?php $component->ShowData($info);?>
  </div>
  
  <button class="accordion">Section 5</button>
  <div spry:region = "ds" class="panel" id="discuss">
  <p>{discusses}</p>
  </div>

</center>
<script type = "text/javascript" src="Javascript/ViewerControl.js"></script>