<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>要素の追加</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
  $('#car') //メソッドチェーンの書き方
		.before('<p>ベビーカー</p>')
		.prepend('<li>三輪車</li>')
		.append('<li>オートバイ</li>')
		.after('<p>自動車</p>');
});
</script>
</head>
<body>
<ul id="car">
  <li>自転車</li>
</ul></body>
</html>