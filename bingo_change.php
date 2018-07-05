<?php
$id = $_GET["id"];

//1.  DB接続します
include("functions.php");
$pdo = db_con();

//２．データ呼出SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_stats_table where id=$id");
$status = $stmt->execute();
  if($status==false){
    queryError($stmt);
  }else{
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $name = $result["name"];
            $num1 = $result["parameter1"];
            $num2 = $result["parameter2"];
    }
  }

$first  = round(normal($num1, $num2));
$second = round(normal($num1, $num2));
$third  = round(normal($num1, $num2));
$fourth = round(normal($num1, $num2));
$fifth  = round(normal($num1, $num2));
// echo $first;

//３．データ更新SQL作成
$stmt = $pdo->prepare("UPDATE gs_bingo_table SET name=:a1, first=:a2, second=:a3, third=:a4, fourth=:a5, fifth=:a6 WHERE id=:id");
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $first);
$stmt->bindValue(':a3', $second);
$stmt->bindValue(':a4', $third);
$stmt->bindValue(':a5', $fourth);
$stmt->bindValue(':a6', $fifth);
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
//５．リダイレクト
  header("Location: bingo_select1.php");
  exit;
}
?>


