<?php
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["parameter1"]) || $_POST["parameter1"]=="" ||
  !isset($_POST["parameter2"]) || $_POST["parameter2"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$id     = $_POST["id"];
$name   = $_POST["name"];
$parameter1 = $_POST["parameter1"];
$parameter2 = $_POST["parameter2"];

//2. DB接続します(エラー処理追加)
include("functions.php");
$pdo = db_con();


//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_stats_table SET name=:a1, parameter1=:a2, parameter2=:a3 WHERE id=:id");
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $parameter1);
$stmt->bindValue(':a3', $parameter2);
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  //５．ポータルへリダイレクト
  header("Location: bingo_select1.php");
  exit;
}
?>

