<?php
session_start();
 
header("Content-type: text/html; charset=utf-8");
 
// ログイン状態のチェック
if (!isset($_SESSION["account"])) {
	header("Location: login_form.php");
	exit();
}
 
$account = $_SESSION['account'];
echo "<p>".htmlspecialchars($account,ENT_QUOTES)."さん、こんにちは！</p>";
 
echo "<a href='logout.php'>ログアウトする</a>";

	$dsn = 'データベース名';
	$user = 'ユーザー名';
	$password = 'パスワード';
$pdo=new PDO($dsn,$user,$password);

$results=$pdo->prepare("SELECT kcal from calcheck where date=(:date) and account=(:account)");
$results->bindValue(':date',date('Y-m-j'),PDO::PARAM_STR);
$results->bindValue(':account',$_SESSION["account"],PDO::PARAM_STR);
$results->execute();
//foreachの$resultsの前に(array)を置くとsが出力された。

?>

<!DOCTYPE html>
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
echo "\n". "今日の消費カロリーは".$row[kcal]."です。";
}?>
</h1>
<p>
      <a href='calendar1.php'>カレンダー</a>
      <a href='mission6.php'>行動を入力</a>

  </p>

 </body>
 </html>ody>
 </html>