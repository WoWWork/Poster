// JavaScript Document
function aheadPage(url)
{
	switch(url)
	{
		case 'content':
    	  window.location.href = 'index.php?content=content.php';
		break;
		case 'login':
		  window.location.href = 'index.php?content=login.php';
		break;
	}
}

window.onbeforeunload = confirmExit; 
function confirmExit() 
{ 
  return;
} 