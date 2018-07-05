<?php

include("functions.php");


//1.  DB接続します
$pdo = db_con();

//２．分布呼出SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 2");
$status = $stmt->execute();

//３．分布表示
$view="";
if($status==false){
  queryError($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= h($result["name"])."[".h($result["first"])."]"."[".h($result["second"])."]";
    $view .= h($result["first"]) + h($result["first"]);
    $view .= '</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div><?=$view?></div>
</body>
</html>
