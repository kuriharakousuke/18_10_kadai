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
$id     = $_POST["id"];
$name   = $_POST["name"];
$first = $_POST["first"];
$second = $_POST["second"];
$third = $_POST["third"];
$fourth = $_POST["fourth"];
$fifth = $_POST["fifth"];

//2. DB接続します(エラー処理追加)
include("functions.php");
$pdo = db_con();


//３．データ登録SQL作成
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
  //５．ポータルへリダイレクト
  header("Location: bingo_select1.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
  
  <script>
   var hensuJS = '<?php echo $name ;?>';
   alert(hensuJS);
  </script>
</body>
</html>



