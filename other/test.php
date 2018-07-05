<?php

include("functions.php");



$input = array( 88, 32, 48, 95, 67, 45, 90 );
$value = 80;
 
$sumsq = 0;
$n = count($input);
$m = array_sum($input) / $n;    // 平均
 
foreach($input as $a){
    $sumsq += pow(abs($a - $m), 2);
}
 
$v   = ($n >= 2) ? $sumsq / ($n - 1) : 0;    // 不偏分散
$vp  = ($n > 0) ? $sumsq / $n : 0;           // 標本分散
$sd  = sqrt($v);                            // 標本標準偏差
$sdp = sqrt($vp);                           // 母標準偏差
$score = ($value - $m) / $sdp * 10 + 50;    // 偏差値
 
printf('Mean: %f, Variance: %f, SD: %f, Standard Score: %f', $m, $vp, $sdp, $score);
echo "<br>";
/*
 * サンプル
 * 平均値500で最大幅±3.0σの正規乱数を1000個生成する
 */
$av = 500;
$sg = 3.0;
$lp = 100;
$sd = $av / $sg;
for ($i=0;$i<$lp;$i++) {
    echo round(normal($av, $sd)) . "<br>";
}

$pdo = db_con();
$stmt = $pdo->prepare("SELECT name FROM gs_an_table where id = 1");
echo $stmt;
// $status = $stmt->execute();
// $view="";
// if($status==false){
//   queryError($stmt);
// }else{
// $result = $stmt->fetch(PDO::FETCH_ASSOC)
// $result = $stmt->fetch();
// echo $result;
// echo $result["name"]."[".$result["parameter1"]."]"."[".$result["parameter2"]."]";

?>
