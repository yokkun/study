<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="mystorage.js"></script>
<script type="text/javascript">
	var storage = new MyStorage('JSSample');
	storage.setItem('hahaha','ははは');
	console.log(storage.getItem('hohoho'));
	storage.save();
</script>
<title>ストレージにデータを保存</title>
</head>
<body>
	<div id="main">
		<p>Wingsプロジェクト</p>
		<img src="http://wings.msn.to/image/wings.jpg">
	</div>
</body>
</html>