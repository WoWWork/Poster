// JavaScript Document
function trim(str) 
{
  	return str.replace(/^\s+|\s+$/g, "");
} 

// 檢查欄位
function CheckFields()
{	
	// 記住使用者填入的資料		
	document.cookie = "subject=" + escape(trim(document.getElementById("subject").value)) + ";";
		
	// 檢查『文章標題』欄位
	var fieldvalue = document.getElementById("subject").value;
	if (fieldvalue == "") 
	{
		alert("『文章標題』欄位不可以是空白!");
		document.getElementById("insert_paper").value = "";
		document.getElementById("subject").focus();
		return false;
	}
	
	return true;
}

function PostSend(url, data)
{
  var xhr = new XMLHttpRequest();
  xhr.open("POST", url, true);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.send(JSON.stringify({
    text: data
  }));
}

function PostRecive()
{
  var xhr = new XMLHttpRequest();
  var data;
  xhr.onreadystatechange = function () {
    if (this.readyState != 4) return;

    if (this.status == 200) {
        data = JSON.parse(this.responseText);
        // we get the returned data
    }
    // end of state change: it can be after some time (async)
  };
  return data;
}