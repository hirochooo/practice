<?php
	$dsn = 'データベース名';
	$user = 'ユーザー名';
	$password = 'パスワード';
$pdo=new PDO($dsn,$user,$password);
$sql="CREATE TABLE pre_member"
."("
."id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,"
."urltoken VARCHAR(128) NOT NULL,"
."mail VARCHAR(50) NOT NULL,"
."date DATETIME NOT NULL,"
."flag TINYINT(1) NOT NULL DEFAULT 0"
.");";
$stmt=$pdo->query($sql);
?>