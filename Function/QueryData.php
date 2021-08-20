<?php
require_once("Function/Link.php");

class DataComponent
{
  public function __construct()
  {
  }
  
  public function __destruct()
  {
  }
  
  public function ArticleTitleQuery()
  {
	$dir = $_SERVER['DOCUMENT_ROOT']."/forums/Article";
	$dates = array();
	if(is_dir($dir))
	{
	  //$date = scandir($dir);
	  
	  if ($handle = opendir($dir)) 
	  {
		while (($file = readdir($handle)) !== false) 
		{
		  $idx = strripos($file, '.');
		  array_push($dates, substr($file, 0, $idx));
		}
	  }
	  closedir($handle);
  
	  return $dates;
	}
	else
	{
	  mkdir("Article", 0777);
	}
	
  }
  
  public function ShowContent($page, $sub)
  {
	$filename = $_SERVER['DOCUMENT_ROOT'].'forums/Article/'.$page.'.xml';
	$subjects = array();
	$flag = false;
	if(file_exists($filename))
	{
	  $dom = new DOMDocument();
	  $dom->load($filename);
	  $root = $dom->documentElement;
	  if($root->hasChildNodes())
	  {
		foreach($root->childNodes as $article)
		{
		  if($article->nodeName == 'paper')
		  {
			foreach($article->childNodes as $node)
			{
			  if($node->nodeValue == $sub)
			  {
				$flag = true;
			  }
			  if($node->nodeName == 'content' && $flag == true)
			  {
				$flag = false;
				$phrases = $this->DataHandle($node->nodeValue);
				$info = $this->LoadData($phrases);
				//print_r($phrases);
				return $info;
			  }
			}
		  }
		}
	  }
	}
  }
  
  public function DataHandle($data)
  {
	$data = str_replace('"', '&q;', $data);
	$phrases = preg_split("/\/>|<img| |\=/", $data);
	$phrases = array_filter($phrases);
	return $phrases;
  }
  
  public function ShowData($info)
  {
	//print_r($info);
	if(!isset($info)) return;
	for($i = 0; $i < count($info); $i++)
	{
	  if(isset($info[$i]))  
	  {
		if($info[$i] == "alt")
		{
		  $i+=2;
		  if($info[$i] == "src")
		  {
			$i++;
			$path = str_replace('&q;', '', $info[$i]);
			if(preg_match("/^\/(\w+\/?)+/", $path))
			{
			  $i++;
			  if($info[$i] == "style")
			  {
				$i++;
				$heigh = (int) filter_var($info[$i], FILTER_SANITIZE_NUMBER_INT);
				$i++;
				$width = (int) filter_var($info[$i], FILTER_SANITIZE_NUMBER_INT);
				echo str_replace('&q;','"',"<img alt=&q;&q; src=&q;".$path."&q; style=&q;height:".$heigh."px; width:".$width."px&q; />");
			  }
			}
			else $i-=3;
		  }
		  else $i-=2;
		}
		else echo "<p>".$info[$i]."</p>";
	  }
	}
  }
  
  private function LoadData($_content)
  {
	$num = 0;
	$content = array();
    foreach($_content as $element)	
    {
	  if(isset($element))
	  {
	    $content[$num] = $element;
	    $num++;
	  }
    }
	//print_r($content);
	return $content;
  }
}
?>