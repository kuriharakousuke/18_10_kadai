<?php
session_start();
//外部ファイル読み込み、ビンゴインスタンス化
include("functions.php");
require_once(__DIR__ . '/bingo.php');

$bingo= new \MyApp\bingo();
$nums=$bingo->create1();

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ビンゴ管理ポータル</title>
<!-- <link rel="stylesheet" href="css/range.css"> -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="bingo.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="bingo_select1.php">変わったビンゴへ</a>
      <a class="navbar-brand" href="bingo_index.php">終了</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main1[Start] -->
<div id="container">
    <table>
     <tr>
       <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
     </tr>

       <?php for($i=0; $i<5; $i++): ?>
     <tr>
         <?php for($j=0; $j<5; $j++): ?>
           <td><?= h($nums[$j][$i]); ?></td>
         <?php endfor; ?>
     </tr>
       <?php endfor; ?>

   </table>

  </div>
<!-- Main1[End] -->

<!-- Main2[Start] -->
<div>
    <!-- <div class="container jumbotron"><?=$view?></div> -->
  </div>
</div>
<!-- Main2[End] -->

</body>
</html>
