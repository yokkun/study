<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>テキスト</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function(){
	$('#result_text').text('<a href="http://www.wings.msn.to/">WINGS</a>');
	$('#result_html') .html('<a href="http://www.web-deli.com/">WebDeli</a>');//安全面からあまり使わない
});
</script>
</head>
<body>
<ul>
  <li id="result_text"></li>
  <li id="result_html"></li>
</ul>
</body>
</html>