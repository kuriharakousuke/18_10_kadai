<?php


//1. GETデータ取得
$id   = $_GET["id"];

//2. DB接続します(エラー処理追加)
include("functions.php");
$pdo = db_con();


//３．データ削除SQL作成
$stmt = $pdo->prepare("DELETE FROM gs_bingo_table WHERE id = :id");
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
