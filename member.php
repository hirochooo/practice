<?php
	$dsn = 'データベース名';
	$user = 'ユーザー名';
	$password = 'パスワード';
$pdo=new PDO($dsn,$user,$password);
$sql="CREATE TABLE member"
."("
."id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,"
."account VARCHAR(50) NOT NULL,"
."mail VARCHAR(50) NOT NULL,"
."password VARCHAR(128) NOT NULL,"
."flag TINYINT(1) NOT NULL DEFAULT 1"
.");";
$stmt=$pdo->query($sql);
?>