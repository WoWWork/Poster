<?php
  require_once("Function/PostPaper.php");
  PostVerify();
?><head>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="ckfinder/ckfinder.js"></script>
  <script type="text/javascript" src="Javascript/PostArticle.js"></script>
</head>

<center>
  <form action="index.php?content=article.php" method="post">
    <table>
    <tr>
      <td>文章標題</td>
      <td><input name="subject" id="subject" type="text" size="86" value="" /></td>
    </tr>
    <tr>
    <td>內容</td>
    <td><textarea name="content" id="content" rows="10" cols="86"></textarea>
    <script>
	var editor = CKEDITOR.replace( 'content', {
        filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor, '/ckfinder/' );
	</script></td>
    </tr>
    <tr>
      <td><input type="submit" value="送出" onclick="return CheckFields();"></td>
      <td><input type="button" value="取消" onclick="document.location='<?php echo $_SERVER['PHP_SELF']."?content=content.php"; ?>'"></td>
    </tr>
    </table>
  </form>
</center>