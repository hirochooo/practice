﻿<?php
session_start();
 
header("Content-type: text/html; charset=utf-8");
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>メール登録画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>メール登録画面</h1>
 
<form action="registration_mail_check.php" method="post">
 
<p>メールアドレス：<input type="text" name="mail" size="50"></p>
 
<input type="hidden" name="token" value="<?=$token?>">
<input type="submit" value="登録する">
 
</form>
 
</body>
</html>