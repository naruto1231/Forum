<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta http-equiv="Contenet-Type" content="text/html; charset=Shift_JIS">
<title>設定ファイルを読み込む</title>
</head>
<body>

<pre>
<?php
$ini = parse_ini_file('config.ini');
print_r($ini);
 ?>
</pre>
</body>
</html>
