// JavaScript Document
function ReadTopic() {
  var xmlfile = new XMLHttpRequest();
  var p = document.getElementById("sel_idx").value;
  xmlfile.open("POST", "/forums/Article/" + p + ".xml", false);
  xmlfile.send();
  var parser = new DOMParser();
  var xmlDoc = parser.parseFromString(xmlfile.responseText, "text/xml");
  var topic = xmlDoc.getElementsByTagName("paper");
  //alert(xmlfile.responseText);
  var title;
  for (var i = 0; i < topic.length; i++) {
	title = topic[i].getElementsByTagName("subject")[0].childNodes[0].nodeValue;
    document.getElementById("content_table").innerHTML = 
    "<p><a href=index.php?content=viewer.php&page=" + p + "&subject=" + title + ">" + title + "</a></p>";
  }
}