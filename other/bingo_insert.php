<?php

if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["first"]) || $_POST["first"]=="" ||
  !isset($_POST["second"]) || $_POST["second"]=="" ||
  !isset($_POST["third"]) || $_POST["third"]=="" ||
  !isset($_POST["fourth"]) || $_POST["fourth"]=="" ||
  !isset($_POST["fifth"]) || $_POST["fifth"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ

$name = $_POST["name"];
$first = $_POST["first"];
$second = $_POST["second"];
$third = $_POST["third"];
$fourth = $_POST["fourth"];
$fifth = $_POST["fifth"];


//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('dbError:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql="INSERT INTO gs_bingo_table(id,name,first,second,third,fourth,fifth) values(null, :a1, :a2, :a3, :a4, :a5, :a6)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR); 
$stmt->bindValue(':a2', $first, PDO::PARAM_INT); 
$stmt->bindValue(':a3', $second, PDO::PARAM_INT); 
$stmt->bindValue(':a4', $third, PDO::PARAM_INT);
$stmt->bindValue(':a5', $fourth, PDO::PARAM_INT);
$stmt->bindValue(':a6', $fifth, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);
}else{
  //５．ポータルへリダイレクト
 header("location: bingo_select1.php");

}
?>
