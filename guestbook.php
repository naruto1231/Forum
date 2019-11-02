<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>簡易ゲストブック</title>
</head>
<body>
<form method="post" action="guestbook.php">
<textarea name="contents" cols="60" rows="5"></textarea>
<input type="submit" value="送信">
</form>
<hr>

<?php
$contents = $_POST['contents'];
if ($contents) {
  $contents = htmlspecialchars($contents);
  $contents = str_replace("\n", "<br>", $contents);
  $contents = $contents . "\n";
  $fp = fopen('guestbook.txt','a');
  fputs($fp, $contents);
  fclose($fp);
}
$lines = file('guestbook.txt');
foreach($lines as $l){
print "$l\n<hr>\n";
}
?>
</body>
</html>
