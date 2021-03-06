<?php
$id = $_GET["id"];

//1.  DB接続します
include("functions.php");
$pdo = db_con();

//２．データ呼出SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_stats_table where id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  errorMsg($stmt);
}else{
    $rs = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="bingo_select1.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="bingo_update1.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新するデータ</legend>
     <label>分布名：<input type="text" name="name" value="<?=$rs["name"]?>"></label><br>
     <label>平均：<input type="number" name="parameter1" value="<?=$rs["parameter1"]?>"></label><br>
     <label>標準偏差：<input type="number" name="parameter2" value="<?=$rs["parameter2"]?>"></label><br>
     <input id="sub" type="submit" value="送信">
     <input type="hidden" name="id" value="<?=$rs["id"]?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<script>
  let btn = document.querySelector("#sub");
      btn.onclick = function(e){
       alert("データが更新されました。");
       }
</script>

</body>
</html>
