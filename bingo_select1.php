<?php
session_start();
include("functions.php");
ini_set('display_errors',1);

//1.  DB接続します
$pdo = db_con();

//２．分布呼出SQL作成
$stmt1 = $pdo->prepare("SELECT * FROM gs_stats_table");
$status = $stmt1->execute();

//３．分布表示
$view="";
if($status==false){
  queryError($stmt1);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt1->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p id="ab">';
    $view .= '<a href="bingo_change.php?id='.$result["id"].'">';
    // $view .= h($result["name"])."[".h($result["first"])."]"."[".h($result["second"])."]"."[".h($result["third"])."]"."[".h($result["fourth"])."]"."[".h($result["fifth"])."]";
    $view .= h($result["name"])."[".h($result["parameter1"])."]"."[".h($result["parameter2"])."]";
    $view .= '</a>　';
    $view .= '<a href="bingo_update_view1.php?id='.$result["id"].'">';
    $view .= '[パラメータ更新]';
    $view .= '</a>  　';
    $view .= '<a href="bingo_update_view.php?id='.$result["id"].'">';
    $view .= '[直接設定]';
    $view .= '</a>  ';
    // $view .= '<a href="bingo_delete.php?id='.$result["id"].'">';
    // $view .= '[削除]';
    // $view .= '</a>';
    $view .= '</p>';
  }
}

$stmt2 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 1");
        $status = $stmt2->execute();
    
        if($status==false){
          queryError($stmt2);
        }else{
          while( $result1 = $stmt2->fetch(PDO::FETCH_ASSOC)){
            $num1 = $result1["first"];
            $num2 = $result1["second"];
            $num3 = $result1["third"];
            $num4 = $result1["fourth"];
            $num5 = $result1["fifth"];
         }
        }
        $stmt3 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 2");
        $status = $stmt3->execute();
    
        if($status==false){
          queryError($stmt3);
        }else{
          while( $result2 = $stmt3->fetch(PDO::FETCH_ASSOC)){
            $num6 = $result2["first"];
            $num7 = $result2["second"];
            $num8 = $result2["third"];
            $num9 = $result2["fourth"];
            $num10 = $result2["fifth"];
         }
        }
        $stmt4 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 3");
        $status = $stmt4->execute();
    
        if($status==false){
          queryError($stmt4);
        }else{
          while( $result3 = $stmt4->fetch(PDO::FETCH_ASSOC)){
            $num11 = $result3["first"];
            $num12 = $result3["second"];
            $num13 = $result3["third"];
            $num14 = $result3["fourth"];
            $num15 = $result3["fifth"];
         }
        }
        $stmt5 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 4");
        $status = $stmt5->execute();
    
        if($status==false){
          queryError($stmt5);
        }else{
          while( $result4 = $stmt5->fetch(PDO::FETCH_ASSOC)){
            $num16 = $result4["first"];
            $num17 = $result4["second"];
            $num18 = $result4["third"];
            $num19 = $result4["fourth"];
            $num20 = $result4["fifth"];
         }
        }
        $stmt6 = $pdo->prepare("SELECT * FROM gs_bingo_table Where id = 5");
        $status = $stmt6->execute();
    
        if($status==false){
          queryError($stmt6);
        }else{
          while( $result5 = $stmt6->fetch(PDO::FETCH_ASSOC)){
            $num21 = $result5["first"];
            $num22 = $result5["second"];
            $num23 = $result5["third"];
            $num24 = $result5["fourth"];
            $num25 = $result5["fifth"];
         }
        }

        $nums=[];
                  $col1=[$num1,$num2,$num3,$num4,$num5];
                  $col2=[$num6,$num7,$num8,$num9,$num10];
                  $col3=[$num11,$num12,$num13,$num14,$num15];
                  $col4=[$num16,$num17,$num18,$num19,$num20];
                  $col5=[$num21,$num22,$num23,$num24,$num25];
                  shuffle($col1);
                  shuffle($col2);
                  shuffle($col3);
                  shuffle($col4);
                  shuffle($col5);
                  $nums[0]=$col1;
                  $nums[1]=$col2;
                  $nums[2]=$col3;
                  $nums[3]=$col4;
                  $nums[4]=$col5;
            $nums[2][2]="FREE";
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
      <a class="navbar-brand" href="bingo_select.php">普通のビンゴへ</a>
      <!-- <a class="navbar-brand" href="bingo_insert_view.php">データ登録</a> -->
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
    <div>「normal」は上から順番に１列目～５列目に対応。隣の数値は平均、標準偏差</div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
</div>
<!-- Main2[End] -->

</body>
</html>
