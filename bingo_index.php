<?php
/*
//1.  DB接続します
include("functions.php");
$pdo = db_con();

//２．データ呼出SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_stats_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  errorMsg($stmt);
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .='<p>';
    $view .='<a href="bm_contents_level1.php?No='.$result["id"].'">';
    $view .= $result["name"]."[".$result["parameter1"]."]";
    $view .='</a>';
    $view .='</p>';
  }
}
*/
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>bingo</title>
<link rel="stylesheet" href="css/main.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">

<header>
  <nav class="navbar navbar-default">bingo</nav>
    <div class="container-fluid">
      <div class="navbar-header">
      <form name="form1" action="bingo_select.php" method="post">
          <input type="submit" value="start" />
      </form>
      </div>
    </div>
</header>

<!-- Main[Start] -->
    <!-- <div class="container jumbotron"><?=$view?></div> -->
<!-- Main[End] -->

</body>
</html>


