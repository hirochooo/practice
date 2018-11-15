<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>カレンダー</title>
</head>
<body>
<table border="1">
 <tr>
 <th>日</th> 
 <th>月</th>
 <th>火</th>
 <th>水</th>
 <th>木</th>
 <th>金</th>
 <th>土</th>
 </tr>
 <tr>
<?php
 if(!empty($_GET['month'])){
 $m=$_GET['month'];
 }else{
 $m=date('m');
  }
 $y=date('Y');
 
 
 $wd1=date("w",mktime(0,0,0,$m,1,$y));

 for($i=1;$i<=$wd1;$i++){
    echo"<td> </td>";
 } 


 $d=1;
//38行目きもいけど<aとかはphpじゃいけないらしい。<?phpはifとかの中でも辞められるらしい。
 while(checkdate($m,$d,$y)) {
     echo "<td>";?><a href="mission6_select.php?day=<?php echo $y."-".$m."-".$d;?>"><?php echo $d;
     
  if(date("w",mktime(0,0,0,$m,$d,$y))==6) {
        echo"</tr>";
     
     if(checkdate($m,$d+1,$y)) {
          echo"<tr>";
      }
     }
     $d++;
   }
 
 $wdx=date("w",mktime(0,0,0,$m+1,0,$y));
 for($i=1;$i<7-$wdx;$i++){
    echo"<td> </td>";
 }


 ?>
 </tr>
 </table> 
  <p> <?php echo $y;?>年<?php echo $m;?>月のカレンダーです。</p>
  <p>　カレンダーの日にちをクリックするとその日の消費カロリーを見返せます。</p>
  <p>
    <?php if($m<date('m')+1) :?>
      <a href="?month=<?php echo date('m',mktime(0,0,0,$m+1,1,date('Y')))?>">次月へ</a>
    <?php endif; ?>   
    <?php if($m>date('m')-1) :?>
      <a href="?month=<?php echo date('m',mktime(0,0,0,$m-1,1,date('Y')))?>">先月へ</a>
    <?php endif; ?>

  </p>

 </body>
 </html>
