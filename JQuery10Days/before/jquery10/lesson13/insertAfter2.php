<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>要素の追加</title>
<link type="text/css" rel="stylesheet" href="../main.css" />
<script type="text/javascript" src="../jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function() {
  $('#baby').insertAfter('#car');
});
</script>
</head>
<body>
<p id="baby">ベビーカー</p>
<ul id="car">
  <li>三輪車</li>
  <li>自転車</li>
  <li>オートバイ</li>
</ul>
<p>自動車</p>
</body>
</html>