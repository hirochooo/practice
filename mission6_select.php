<?php
	$dsn = 'データベース名';
	$user = 'ユーザー名';
	$password = 'パスワード';
$pdo=new PDO($dsn,$user,$password);

//データ表示
session_start();
 
header("Content-type: text/html; charset=utf-8");
 
$results=$pdo->prepare("SELECT kcal from calcheck where date=(:date) and account=(:account)");
$results->bindValue(':date',$_GET["day"],PDO::PARAM_STR);
$results->bindValue(':account',$_SESSION["account"],PDO::PARAM_STR);
$results->execute();
//foreachの$resultsの前に(array)を置くとsが出力された。

?>

<html>
<meta charset="utf-8">
<head>

<style>

h1 {

 color:red

}

</style>
</head>
<body>
<h1><?php
foreach($results as $row){
echo "$_GET[day]"."の消費カロリーは".$row[kcal]."です。";}
?>
</h1>

 </body>
 </html>
