<?php
function GetDay()
{
  date_default_timezone_set('Asia/Taipei');
  $ToDay = date("Ymd");
  return $ToDay;
}

function GetTime()
{
  date_default_timezone_set('Asia/Taipei');
  $DayTime = date("H:i:s");
  return $DayTime;
}

function BuildPaper($filepath)
{
  $dom = new DOMDocument();
  $dom->load($filepath);
  $root = $dom->documentElement;
	
  $paper = $dom->createElement("paper");
  $root->insertBefore($paper, $root->firstChild);

  $DateTime = $dom->createElement("time");
  $DateTime->nodeValue = GetDay()."-".GetTime();
  $paper->insertBefore($DateTime, $paper->firstChild);	
		
  $author = $dom->createElement("author");
  $author->nodeValue = $_SESSION['owner'];
  $paper->appendChild($author);
	
  $subject = $dom->createElement("subject");
  $subject->nodeValue = htmlspecialchars(trim($_POST['subject']), ENT_QUOTES);
  $paper->appendChild($subject);
  
  $content = $dom->createElement("content");
  $content->nodeValue = htmlspecialchars(trim($_POST['content']), ENT_QUOTES);
  $paper->appendChild($content);
  
  $dom->save($filepath);
}

?>